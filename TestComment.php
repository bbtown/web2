<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Example Problem Page</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/chosen/chosen.css" rel="stylesheet">
    <link href="css/plugins/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="css/plugins/cropper/cropper.min.css" rel="stylesheet">
    <link href="css/plugins/switchery/switchery.css" rel="stylesheet">
    <link href="css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">
    <link href="css/plugins/nouslider/jquery.nouislider.css" rel="stylesheet">
    <link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">
    <link href="css/plugins/ionRangeSlider/ion.rangeSlider.css" rel="stylesheet">
    <link href="css/plugins/ionRangeSlider/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <link href="css/plugins/clockpicker/clockpicker.css" rel="stylesheet">
    <link href="css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <script>
    //how are we reading in problem id, username, and timestamp?
   function add_comment() {
      var comment_txt = $('#comment_txt').val();
      var comment_idea_id = $('#comment_idea_id').val();
      var comment_prob_id = $('#comment_prob_id').val();
      var comment_tags = $('#comment_tags').val();
      var comment_flag = $('#comment_flag').val(); 
      var comment_sentiment = $('#comment_sentiment').val();
      var comment_ts = $('#comment_ts').val();
      var comment_user = $('#comment_user').val();


//      var prob_cat2 = $('#prob_cat2').serialize();
// var value = $(this).attr('id');
      var serialData = $('#comment_form').serialize();
      $.ajax({
        url: './submit_problem_comment.php',
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

    <div id="wrapper">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome.</span>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a7.jpg">
                                </a>
                                <div class="media-body">
                                    <small class="pull-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a4.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">5h ago</small>
                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/profile.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">23h ago</small>
                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="mailbox.html">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="profile.html">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="grid_options.html">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="login.html">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>
       <!--     <div class="row">
                <div class="col-lg-8">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h1>Problem Description</h1>
                        </div> -->
                        <div class="ibox-content">
                          <!--  <form method="get" class="form-horizontal"> -->

                              <div class="row"> 
                                    <div class="col-sm-9">
                                    <!-- <div class="col-lg-12"> -->
                            <h1>Problem Description</h1>
                                    <h4>Category:  Environment</h4>
                                    <h4>Severity Level: Catastrophic</h4>
                                    <h4>Impact Type: 7.5 billion affected</h4>
                                    <h4>Problem Development: Persistent Build-up</h4>

                               <!-- </div>
            
                            </div>
                                <div 
                                class="row">
                                     <div class="col-sm-8 col-sm-4"> -->
                                    <p>
                                        Climate change or global warming has been set into motion since the Industrial Revolution.  Right now we are on a path to disaster, despite current meager attempts to reduce our carbon footprints.  Although the US, Europe, and Japan may be more environmentally conscious, developing nations such as China and India are not changing their ways.  Climate change not only brings extreme erratic behavior, but leads to the certain collpase of ecosystems all over the planet.  It will be impossible to sustain the current and growing population.  Starvation and water shortages will be prevalent.
                                    </p>
                                    <h4>Tags: </h4><p>environment, sustainability, climate change, global warming, carbon, emissions, pollution</p>
                                </div>



                                   <!--
                                <div class="hr-line-dashed"></div>
                                        <div class="form-group"><label class="col-sm-2 control-label">Types of problems<br></label>
                                            <div class="col-sm-10">
                                        <div class="i-checks"><label> <input type="radio" disabled="" checked="" value="option1"> <i></i>There is too little of...</label></div>
                                        <div class="i-checks"><label> <input type="radio" disabled="" checked="" value="option2"> <i></i>There is too much of...</label></div>
                                        <div class="i-checks"><label> <input type="radio" disabled="" checked="" value="option3"> <i></i>There is a waste of...</label></div>
                                        <div class="i-checks"><label> <input type="radio" disabled="" checked="" value="option4"> <i></i>We should improve upon...</label></div>-->
                                        <!-- problem relationships?-->
<!-- ___.  This leads to _____.  -->

                                     <div class="col-sm-3  gray-bg">    
                                <h1>Other Problems</h1>
                                <h4>Sub-problems: </h4>
                                <p><ul><li>Polar Ice Caps Melting</li> 
                                    <li>Erratic Weather Patterns</li> 
                                    <li>Collapse of Ecosystems</li></ul></p>
                                    
                                    <h4>Related Problems: </h4>
                                    <p><ul><li>Lack of Recycling Programs</li>
                                        <li>Lack of Viable Alternate Fuel Sources</li></ul></p>
                                </div>
                        
                                </div>
                                    </div>
                                </div>
                                    </div>
                                <!-- WHO WHAT WHEN WHERE WHY HOW PAST FUTURE PRESENT-->


<!--
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-12">
                                <div class="row">
                                     <div class="col-lg-8">    
                                <h4>Sub-problems: </h4>
                                <p><ul><li>Polar Ice Caps Melting</li> 
                                    <li>Erratic Weather Patterns</li> 
                                    <li>Collapse of Ecosystems</li></ul></p>
                                </div>
                            </div>
                                <div class="row">
                                     <div class="col-lg-8">
                                    
                                    <h4>Related Problems: </h4>
                                    <p><ul><li>Lack of Recycling Programs</li>
                                        <li>Lack of Viable Alternate Fuel Sources</li></ul></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
-->

                <div class="ibox-content">
                            <h1>Stakeholders</h1>
                            <h4>Who is affected by this problem?</h4>

                            
                        <p>Summary: All groups are likely to be impacted at varying degrees, even if isolated from extreme weather, shortages, and society.  Scarcity in daily staples will still impact availability, costs, and technology.</p>

                            <div class="row">
                        <div class="col-sm-6">
                        <h5>Stakeholders Identified</h5>
                        <ul>
                                    <li>Geographic Locations:  All</li>
                                    <li>Age Groups:  All</li>
                                    <li>Genders:  All</li>
                                    <li>Socio-economic Brackets:  All</li>
                                    <li>Ethnicities:  All</li>
                                    <li>Nationalites:  All</li>
                                    <li>Occupation:  All</li>
                                    <li>Other Specified Groups:  All</li>
                                </ul>
                                </div>

                            <div class="col-sm-6">
                            <p>
                            <h5>Stakeholders Reached - Demographics</h5>
                            
                                <ul>
                                    <li>Geographic Locations: <ol><li>USA, Virginia, Chantilly (1)</li></ol></li>
                                    <li>Age Groups: <ol><li>30 - 35 years (1)</li></ol></li>
                                    <li>Genders: <ol><li>Female (1)</li></ol></li>
                                    <li>Social-economic Brackets: <ol><li>Upper-middle class (1)</li></ol></li>
                                    <li>Ethnicities: <ol><li>Asian American (1)</li></ol></li>
                                    <li>Occupations: <ol><li>Technology (1)</li><li>Federal Government (1)</li></ol></li>
                                    <li>World Views: <ol><li>N/A</li></ol></li>
                                    <li>Other Specified Groups: <ol><li>N/A</li></ol></li>

                                </ul>  
                            </p> 
                      
                    </div>
                    </div>
                    </div>
                    </div>
                </div>

                <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Factors</h1>
                            <h4>Which factors contribute to this problem?</h4>
                         
                        <p>Summary: All groups are likely to be impacted at varying degrees, even if isolated from extreme weather, shortages, and society.  Scarcity in daily staples will still impact availability, costs, and technology.</p>


                                <p><ul><li>Amount of Carbon Emissions</li> 
                                    <li>Energy Usage</li> 
                                    <li>Population Size</li>
                                    <li>Advancement of Technology</li>
                                    <li>Application of Technology</li>
                                    <li>Resource Availability</li></ul></p>

                                    <!--
                                    <h6>Geographic Locations:  All</h6>
                                    <h6>Age Groups:  All</h6>
                                    <h6>Genders:  All</h6>
                                    <h6>Socio-economic Brackets:  All</h6>
                                    <h6>Ethnicities:  All</h6>
                                    <h6>Nationalites:  All</h6>
                                    <h6>Occupation:  All</h6>
                                    <h6>Other Specified Groups:  All</h6>
                                -->
                            <h4>Assumptions</h4>
                            <h4>Constraints</h4>
                            <p><ul><li>Amount of Carbon Emissions</li> 
                                    <li>Energy Usage</li> 
                                    <li>Population Size</li>
                                <li>Advancement of Technology</li>

                            <li>Resource Availability</li></ul></p>

                            <h4>Measuring and Tracking the Problem</h4>
                      
                    </div>
                    </div>


                <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Root Cause Analysis</h1>
                            <h4>Why does this problem really exist?</h4>
                            <img src="http://www.mindtools.com/media/Diagrams/Cause-Effect-Diagram-Example-3.jpg">
                        

                      
                    </div>
                    </div>
                </div><div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Requirements</h1>
                            <h4>What does the perfect solution include?</h4>
                        <ol>
<li>The e-Wash system shall communicate to the user any problems within the e-Wash system that occur during the operational usage of the e-Wash system. </li>
<li>The e-Wash system shall communicate to the user every process that the e-Wash system performs has occurred incorrectly.  </li>
<li>The e-Wash system shall not cause damage to its surrounding environment due to e-Wash failure system. </li>
</ol>

                      
                    </div>
                    </div>
                </div>

                 <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Top Ranking Solutions</h1>
                            <h4></h4>
                         <h4></h4>
                        
                        <ol>
                            <li>Mandate the use of ethanol gasoline derived from corn.</li>
                            <li>Mandate the use of electric vehicles.</li>
                            <li>Mandate the use of fuels derived from biological waste.</li>
                        </ol>

                      
                    </div>
                    </div>
                </div>

               <!-- <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Risk Identification & Mitigation</h1>
                            <h4>Risk Identification</h4>
                            <h4>Risk Mitigation</h4>
                      
                    </div>
                    </div>
                </div> -->

                <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Other stuff</h1>
                            <h4>...</h4>
                            <h4>How should comments be addressed?</h4>
                        
                        <!-- <p>Summary: All groups are likely to be impacted at varying degrees, even if isolated from extreme weather, shortages, and society.  Scarcity in daily staples will still impact availability, costs, and technology.</p>
                                    <h6>Geographic Locations:  All</h6>
                                    <h6>Age Groups:  All</h6>
                                    <h6>Genders:  All</h6>
                                    <h6>Socio-economic Brackets:  All</h6>
                                    <h6>Ethnicities:  All</h6>
                                    <h6>Nationalites:  All</h6>
                                    <h6>Occupation:  All</h6>
                                    <h6>Other Specified Groups:  All</h6> -->

                      
                    </div>
                    </div>
                </div>

                                <!--        BEGIN COMMENT BOX -->

    <div class="row m-t-lg">
            <div class="col-lg-6">
                <div class="ibox float-e-margins">

                    <div class="ibox-content">

                        <div>
                <div class="chat-activity-list">

                            <?php
                             require_once __DIR__.'/vendor/autoload.php';
                             $conn = r\connect('52.20.101.105');
                             $result = r\db("web")->table('comments')->run($conn);
                             foreach ($result as $doc) {
                               if(isset($doc['CommentText'])) {


                                 echo "<div class=\"chat-element\">";
                                 echo "<a href=\"#\" class=\"pull-left\">";
                                echo "<img alt=\"image\" class=\"img-circle\" src=\"img/a2.jpg\">";
                                 echo "</a>";
                                 echo "<div class=\"media-body \">";
                                 echo "<small class=\"pull-right text-navy\">1m ago</small>";
                     echo "<strong>".$doc['CommentUser']."</strong>";
                     echo "<p class=\"m-b-xs\">".$doc['CommentText'];
                     echo "</p>";
                     echo "<small class=\"text-muted\">".$doc['CommentTS']."</small>";
                     echo "</div></div>";


                             }
                             }
                             ?>

        <div class="row m-t-lg">
            <div class="col-lg-6">
                <div class="ibox float-e-margins">

                    <div class="ibox-content">

                        <div>
                <div class="chat-activity-list">

                    <div class="chat-element">
                        <a href="#" class="pull-left">
                            <img alt="image" class="img-circle" src="img/a2.jpg">
                        </a>
                        <div class="media-body ">
                            <small class="pull-right text-navy">1m ago</small>
                            <strong>Mike Smith</strong>
                            <p class="m-b-xs">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            </p>
                            <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                        </div>
                    </div>

                  <!--  <div class="chat-element right">
                        <a href="#" class="pull-right">
                            <img alt="image" class="img-circle" src="img/a4.jpg">
                        </a>
                        <div class="media-body text-right ">
                            <small class="pull-left">5m ago</small>
                            <strong>John Smith</strong>
                            <p class="m-b-xs">
                                Lorem Ipsum is simply dummy text of the printing.
                            </p>
                            <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                        </div>
                    </div>

                    <div class="chat-element ">
                        <a href="#" class="pull-left">
                            <img alt="image" class="img-circle" src="img/a2.jpg">
                        </a>
                        <div class="media-body ">
                            <small class="pull-right">2h ago</small>
                            <strong>Mike Smith</strong>
                            <p class="m-b-xs">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            </p>
                            <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                        </div>
                    </div>
                </div> -->
                </div>
                        <div class="chat-form">
                            <form role="form">
                                <div class="form-group" class="form-horizontal" method="post" id="comment_form" name="comment_form" action="submit_problem_comment.php"> 
                                    <textarea class="form-control" placeholder="Comment" maxlength="500" name="comment_txt" id="comment_txt"></textarea>
                                </div>
                                <div class="text-right">
                                    <button onclick="add_comment();" class="btn btn-sm btn-primary m-t-n-xs" style="width:40%" type="button"><strong>Post Comment</strong></button>
                                </div>
                            </form>
                        </div>
                </div>
                </div>
            </div>  

                                <!--        END COMMENT BOX EXPERIMENT -->       

<!-- just an example

                                <div class="ibox-title">
                            <h1>Ideas?</h1>
                        </div>
                        <div class="ibox-content">

<form class="form-horizontal" method="post" id="add_idea" action="submit_to_ideas.php"> 
                                <div class="form-group"> 
                    <label class="col-sm-2 control-label">Do you have any ideas on how to fix this problem?</label>
                      <div class="col-sm-10">
                        <textarea class="form-control input-sm" rows="1" maxlength="500" name="idea_desc" id="idea_desc"></textarea>
<br/><br/><br/>
<button onclick="add_idea();" class="btn btn-sm btn-primary m-t-n-xs" style="width:40%" type="button"><strong>Submit</strong></button>
                                    </div>
                                </form>
                            </div>     
                            -->                
                               
        </div>
        </div>
        </div>
        </div>


    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>

        <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Chosen -->
    <script src="js/plugins/chosen/chosen.jquery.js"></script>

   <!-- Input Mask-->
    <script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>

   <!-- Data picker -->
   <script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>

   <!-- NouSlider -->
   <script src="js/plugins/nouslider/jquery.nouislider.min.js"></script>

   <!-- Switchery -->
   <script src="js/plugins/switchery/switchery.js"></script>

    <!-- IonRangeSlider -->
    <script src="js/plugins/ionRangeSlider/ion.rangeSlider.min.js"></script>

    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>

    <!-- MENU -->
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Color picker -->
    <script src="js/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>

    <!-- Clock picker -->
    <script src="js/plugins/clockpicker/clockpicker.js"></script>

    <!-- Image cropper -->
    <script src="js/plugins/cropper/cropper.min.js"></script>

    <!-- Date range use moment.js same as full calendar plugin -->
    <script src="js/plugins/fullcalendar/moment.min.js"></script>

    <!-- Date range picker -->
    <script src="js/plugins/daterangepicker/daterangepicker.js"></script>


    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Jquery Validate -->
    <script src="js/plugins/validate/jquery.validate.min.js"></script>

    <script>
         $(document).ready(function(){
             $("#form").validate({
                 rules: {
                     prob_desc: {
                         required: true,
                         minlength: 10,
                         maxlength: 500
                     },
                     prob_more: {
                         required: false,
                         maxlength: 1500
                     },url: {
                         required: false,
                         url: true
                     },
                     people_num: {
                         required: false,
                         number: true,
                         digits: true,
                         range: 0-75000000000
                     }
                     }
                 }
             });
        });
    </script>
   <!-- JSKnob -->
   <script src="js/plugins/jsKnob/jquery.knob.js"></script>

    <script>
    </script>

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
