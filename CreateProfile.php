<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Create a Profile</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
<script>
   
    function describe_form() {
      var username = $('#username').val();
      var password = $('#password').val();
      var password_hash = $('#password').val();
      var email = $('#email').val();
      var serialData = $('#describe_form').serialize();
      $.ajax({
        url: './submit_to_profiles.php',
        type: 'POST',
        data: serialData,
        success: function(data) {
          alert(data);
        }
  
      });
    
    }
       
    </script>

</head>

<body>

            <div class="row">
                <div class="col-
                sm-8">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h1>Create a Profile</h1>
<!-- <p>I wish to create an anonymous account.  --hash email address?  how do we prevent too many accounts being created?  limit per email, IP, captcha, reason? -- review   anonymous posts may be removed if we suspect any nefarious behavior-- patterns, hatespeak, trolling...etc.  multiple usernames under one account?  that way we can keep track of voting while still maintaining privacy</p> -->
                        </div>
                        <div class="ibox-content">
                          <!--  <form method="get" class="form-horizontal"> -->
                                <form class="form-horizontal" method="post" id="describe_form" action="submit_to_profiles.php">
                               <!-- <div class="form-group"><label class="col-sm-2 control-label">Problem Summary<h6>This is the only required field.</h6></label>
                                    <div class="col-sm-10"><input type="text" class="form-control input-sm" rows="5" name="prob_desc" required> <span class="help-block m-b-none">Limit 500 characters.</span>
                                    </div>
                                </div>-->


 <div class="form-group">
                                     <label class="col-sm-2 control-label">Enter a username<h6></h6>

<!--                                    <a onmouseover="nhpup.popup('Hint: Try to write as clearly as possible in order to maximize understanding across the widest possible audience.');"><img src="img2/help.png"></a> -->
</label>                                    <!--     <div class="col-sm-10">
                                         <textarea class="form-control input-sm" rows="5" minlength="10" maxlength="500" id="idea_desc" name="idea_desc" required> </textarea> -->
                                       <!--<label class="col-sm-2 control-label">Normal</label> -->

                                    <div class="col-sm-3"><input type="text" id="username" name="username" placeholder="Username" maxlength="20" class="form-control"></div>
                                <!--</div>
                                        <span class="help-block m-b-none">characters.</span> -->
                                        </div>
                                       
<!--    
                                <div class="form-group"><label class="col-sm-2 control-label">Additional Problem Information</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="prob_more"> <span class="help-block m-b-none"></span>
                                    </div>
                                </div>-->
                                <div class="form-group">
                                     <label class="col-sm-2 control-label">Set a password</label>
                                       <!-- <div class="col-sm-10">
                                        <textarea class="form-control input-sm" rows="5" maxlength="1500" name="idea_more" id="idea_more"> </textarea> -->
                                        <div class="col-sm-3"><!--<label>Password</label> --> <input type="password" id="passworda" name="passworda" placeholder="Password" maxlength="20" class="form-control"></div>
                                                        <div>
                                        <span class="help-block m-b-none"></span>
                                        </div>
                                        </div>
                                        

                               <div class="form-group"><label class="col-sm-2 control-label">Confirm password</label>
                                  <!--  <div class="col-sm-10"><input type="text" class="form-control" name="prob_more"> <span class="help-block m-b-none">Provide a little background about yourself, how you came to know about this problem, and what your standpoint is.</span>
                                    </div> -->  
                                    <div class="col-sm-3"> <!--<label>Password</label> --> <input type="password" id="passwordb" name="passwordb" placeholder="Password" maxlength="20" class="form-control"></div>
                                </div>

<!--<form class="form-horizontal" method="post" id="add_idea" action="submit_to_ideas.php"> -->
                                <div class="form-group">
                  <label class="col-sm-2 control-label">Enter E-mail Address</label>
                  <!--<div class="col-sm-10">
                    <textarea class="form-control input-sm" rows="1" maxlength="500" name="idea_desc" id="idea_desc"></textarea> -->

                    <div class="col-sm-3"> <!--<label>Email</label> --><input type="email" id="email" name="email" placeholder="Enter email" maxlength="40" class="form-control">
                    </div></div>

<button onclick="describe_form();" class="btn btn-sm btn-primary m-t-n-xs" type="button" style="width:40%"><strong>Submit</strong></button>
                         
                                </form>


                                  </div>
                                </div>
        </div>
        </div>


    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
</body>

</html>
