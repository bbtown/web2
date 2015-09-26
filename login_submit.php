<?php

/*** begin our session ***/
session_start();

/*** check if the users is already logged in ***/
if(isset( $_SESSION['id'] ))
{
    $message = 'Users is already logged in';
}
/*** check that both the username, password have been submitted ***/
if(!isset( $_POST['username'], $_POST['password']))
{
    $message = 'Please enter a valid username and password';
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
    /*** if we are here the data is valid and we can insert it into database ***/


// load rethinkdb php library
  require_once __DIR__.'/vendor/autoload.php';
  $conn = r\connect('52.20.101.105');
  
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
  $password_hash = sha1( $password ); 
  $email = $_POST['email'];  
  $friendly_name = $_POST['friendly_name'];
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


/*** set the error mode to excptions ***/
  //      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        /*** prepare the select statement ***/
    //    $stmt = $dbh->prepare("SELECT phpro_user_id, phpro_username, phpro_password FROM phpro_users 
    //                WHERE phpro_username = :phpro_username AND phpro_password = :phpro_password");

        /*** bind the parameters ***/
//        $stmt->bindParam(':phpro_username', $phpro_username, PDO::PARAM_STR);
  //      $stmt->bindParam(':phpro_password', $phpro_password, PDO::PARAM_STR, 40);

        /*** execute the prepared statement ***/
    //    $stmt->execute();

        /*** check for a result ***/
     //   $user_id = $stmt->fetchColumn();

        /*** if we have no result then fail boat ***/
       


        if($id == false)
        {
                $message = 'Login Failed';
        }
        /*** if we do have a result, all is well ***/
       


	 else
        {
                /*** set the session user_id variable ***/
                $_SESSION['user_id'] = $user_id;

                /*** tell the user we are logged in ***/
                $message = 'You are now logged in';
     

        }


    }
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
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