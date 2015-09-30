<?php
/*** begin our session ***/
session_start();

$message = "empty";

/*** first check that both the username, password and form token have been sent ***/
if(!isset( $_POST['username'], $_POST['password'], $_POST['form_token']))
{
//    $message = 'Please enter a valid username and password';
$message = $_POST['username']." ".$_POST['password']." ".$_POST['form_token']; 

}
/*** check the form token is valid ***/
elseif( $_POST['form_token'] != $_SESSION['form_token'])
{
    $message = 'Invalid form submission';
}
/*** check the username is the correct length ***/
elseif (strlen( $_POST['username']) > 20 || strlen($_POST['username']) < 4)
{
    $message = 'Incorrect Length for Username';
}
/*** check the password is the correct length ***/
elseif (strlen( $_POST['password']) > 20 || strlen($_POST['password']) < 4)
{
    $message = 'Incorrect Length for Password';
}
/*** check the username has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['username']) != true)
{
    /*** if there is no match ***/
    $message = "Username must be alpha numeric";
}
/*** check the password has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['password']) != true)
{
        /*** if there is no match ***/
        $message = "Password must be alpha numeric";
}
else
{

  // load rethinkdb php library
  require_once __DIR__.'/vendor/autoload.php';
  $conn = r\connect('52.20.101.105');
  

    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

  $message = $password;
  $password_hash = sha1( $password ); 
  $email = $_POST['email'];  
  $friendly_name = "";
  $priviledge = $_POST['priviledge'];
 
 $document = Array( 'Priviledge' => $priviledge,
                    'FriendlyName' => $friendly_name,
                    'Email' => $email,
	            'PasswordHash' => $password_hash,
		    'UserName' => $username);  

try
{

  $result = r\db("web")->table('profiles')->insert($document)->run($conn);

unset( $_SESSION['form_token'] );


  echo "Thank you for creating a profile!";


    }
    catch(Exception $e)
    {
        /*** check if the username already exists; SQL error code ****/
        if( $e->getCode() == 23000)
        {
            $message = 'Username already exists';
        }
        else
        {
            /*** if we are here, something has gone wrong with the database ***/
            $message = 'We are unable to process your request. Please try again later"';
        }
    }
}
?>

<html>
<head>
<title>PHPRO Login</title>
</head>
<body>
<p><?php echo $message; ?>
</body>
</html>
