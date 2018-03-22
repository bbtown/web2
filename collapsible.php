<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Panels</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

 <script>
   function describe_form() {
var retrieve_id = $('#retrieve').val();
      var prob_desc = $('#prob_desc').val();
      var prob_more = $('#prob_more').val();
      var perspective = $('#perspective').val();
      var url = $('#url').val();
      var tags = $('#tags').val(); 
      var prob_cat = $('#prob_cat').val();
      var affect_desc = $('#affect_desc').val();
      var affect_num = $('#affect_num').val();
      var geo_loc = $('#geo_loc').val();
      var spec_loc = $('#spec_loc').val();
      var factors = $('#factors').val();
//      var prob_cat2 = $('#prob_cat2').serialize();
// var value = $(this).attr('id');
      var serialData = $('#describe_form').serialize();
      $.ajax({
        url: './update_problem.php',
        type: 'POST',
        data: serialData,
        success: function(data) {
          alert(data);
        }
  
      });
    
    }

</head>

<body>

<div class="ibox-content">
                          <!--  <form method="get" class="form-horizontal"> -->

                              <div class="row"> 
                                    <div class="col-sm-9">
<h1>Problem Description</h1>

<?php
  // load rethinkdb php library
  require_once __DIR__.'/vendor/autoload.php';
  $conn = r\connect('34.239.185.58');
//  $retrieve_id = $_POST['problem_identifier'];
  $result = r\db("web")->table('probelems)->run($conn);
//$result = r\db("web")->table('problems')->getAll($retrieve_id, array("index" => "id"))->run($conn);




foreach ($result as $doc) {
echo "<p>".$doc['ProblemDescription']."</p>";
echo "<h4>Category: ".$doc['ProblemCategory']."</h4>";                       
echo "<h4>Severity Level: Catastrophic</h4>";                                    
if(isset($doc['AffectedNumber'])) {
echo "<h4>Impact Type: ".$doc['AffectedNumber']." affected</h4>";}
else {echo "<h4>Impact Type: </h4>";};
                                    
echo "<h4>Problem Development: Persistent Build-up</h4>";
echo "<h4>Tags: ".$doc['Tags']."</h4></div>";



    }
?>


                                <form class="form-horizontal" method="post" id="describe_form" action="update_problem.php">

            <div class="col-lg-12">
                <div class="ibox collapsed">
                    <div class="ibox-title">

<?php
echo "<p>".$doc['ProblemDescription']."</p>";
?>

<!--                        <h5>Example of <small>initial</small> collapsed panel</h5> -->
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">



<div class='form-group'>
                                     <label class='col-sm-2 control-label'>Problem Summary<h6>This is the only required field.</h6>

<!--                                    <a onmouseover='nhpup.popup('Hint: Try to write as clearly as possible in order to maximize understanding across the widest possible audience.');'><img src='img2/help.png'></a> -->
</label>

 <div class='col-sm-10'>
                                        <textarea class='form-control input-sm' rows='5' minlength='10' maxlength='500' id='prob_desc' name='prob_desc' required> </textarea>
                                        <span class='help-block m-b-none'>Limit 500 characters.</span> 
                                        




                                </div>


                                <div class='form-group'>
                                     <label class='col-sm-2 control-label'>Additional Problem Information</label>
                                        <div class='col-sm-10'>
                                        <textarea class='form-control input-sm' rows='5' maxlength='1500' name='prob_more' id='prob_more'> </textarea>
                                        </div>
                                        </div>



                    </div>
                </div>
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


</body>

</html>
