<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Log in</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

<script>
   function describe_form() {
      var username = $('#username').val();
      var password_hash = $('#password').val();
      var email = $('#email').val();
      var serialData = $('#describe_form').serialize();
      $.ajax({
        url: './login_log.php',
        type: 'POST',
        data: serialData,
        success: function(data) {
          alert(data);
        }
  
      });
   

       
    </script>

</head>

<body class="gray-bg">

<!--    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">IN+</h1>

            </div>
            <h3>Welcome to IN+</h3>
            <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
               
            </p>
            <p>Login in. To see it in action.</p>
            <form class="m-t" role="form" action="index.html">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>



        <div class="wrapper wrapper-content animated fadeInRight"> -->

           

            <div class="row">
            <div class="col-lg-6 col-lg-offset-3"> 
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><small></small></h5>
                        
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Sign in</h3>
                                <p>Sign in to participate!</p>
                                    <form role="form"class="form-horizontal" method="post" id="describe_form" action="login_log.php">
                                    <!-- DO WE USE EMAIL OR USERNAME?  
                                    <div class="form-group"><label>Email</label> <input type="email" id="email" name="email" placeholder="Enter email" class="form-control"></div>
                                    <div class="form-group"><label>Password</label> <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                                    <a href="#">Forgot password?</a> 
                                        </div>

                                    <div>
                                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Log in</strong></button>
                                         -->

<?php


$valid_passwords = array ("mario@com.com" => "carbonell");
$valid_users = array_keys($valid_passwords);

                                    echo "<form role='form'class='form-horizontal' method='post' id='describe_form' action='submit_to_profiles.php'>";
                                   // <!-- DO WE USE EMAIL OR USERNAME?  -->
                                    echo "<div class='form-group'><label>Email</label> <input type='email' id='email' name='email' placeholder='Enter email' class='form-control'></div>";
                                    echo "<div class='form-group'><label>Password</label> <input type='password' id='password' name='password' placeholder='Password' class='form-control'>";
                                    echo "<a href='#'>Forgot password?</a> </div>";
                                   // <!-- PASSWORD HASH FUNCTION? -->
                                    echo "<div> <button class='btn btn-sm btn-primary pull-right m-t-n-xs' type='submit'><strong>Log in</strong></button>";
                                        



$username = $_SERVER['PHP_AUTH_USER'];
$password = $_SERVER['PHP_AUTH_PW'];

$validated = (in_array($username, $valid_users)) && ($password == $valid_passwords[$username]);

if (!$validated) {
  header('WWW-Authenticate: Basic realm="My Realm"');
  header('HTTP/1.0 401 Unauthorized');
  die ("Not authorized");
}

// If arrives here, is a valid user.
echo "<p>Welcome $user.</p>";
echo "<p>Thank you for logging in!</p>";

?>

                            <label> <input type="checkbox" class="i-checks"> Remember me </label>
                                    </div>                                </form>
                            </div>
                            <div class="col-sm-6"><h4>Not a member?</h4>
                                <p>You can create an account:</p>
                                <p class="text-center">
                                    <a href="/CreateProfile.html"><i class="fa fa-sign-in big-icon"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
               <!-- </div> -->
            </div></div></div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
