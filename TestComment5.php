<!DOCTYPE html>
  <html>

  <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Comment Testing</title>

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


      <script src="side-comments/release/side-comments.js"></script>
      <link href="side-comments/release/side-comments.css" rel="stylesheet">
      <link href="side-comments/release/themes/default-theme.css" rel="stylesheet">

      <script src="js/moment.min.js"></script>
      <script>
      //how are we reading in problem id, username, and timestamp?
     function add_comment() {
        var comment_txt = $('#comment_txt').val();
        var comment_idea_id = $('#comment_idea_id').val();
        var comment_prob_id = $('#comment_prob_id').val();
        var comment_tags = $('#comment_tags').val();
        var comment_flag = $('#comment_flag').val();
        var comment_sentiment = $('#comment_sentiment').val();
  //      var vote_up_count = 0;
  //      var vote_down_count = 0;
        //comment id?
       //var comment_ts = $(time());
  //      var comment_user = $('#comment_user').val();
        var serialData = $('#comment_form').serialize();
        $.ajax({
          url: './submit_problem_comment.php',
          type: 'POST',
          data: serialData,
          success: function(data) {
            alert(data);
          }
        });
      };
      function vote(comment_id, type) {
         var item_id = comment_id;
         var item_type = type;
         var vote_type = type;
         var vote_user = $('#vote_user').val();
         var serialData = $('#vote_button').serialize();
         comment_data = { item_id: comment_id, vote_type: type }
         $.ajax({
           url: './submit_vote.php',
           type: 'POST',
           data: comment_data,
           success: function(comment_data) {
             alert(comment_data);
           }
         });
       };
      function delete_comment(comment_id) {
         var delete_id = comment_id;
         delete_data = { delete_id: comment_id }
         $.ajax({
           url: './delete_comment.php',
           type: 'POST',
           data: delete_data,
           success: function(delete_data) {
             alert(delete_data);
           }
         });
       };
      </script>


    <script src="side-comments/support/js/jquery.js"></script>
    <script src="side-comments/release/side-comments.js"></script>
    <script src="side-comments/support/test_data.js"></script>
   <!-- <script src="side-comments/support/test_data.js"></script>  -->
    <script>
      $(document).ready(function(){
        var SideComments = require('side-comments');
        window.sideComments = new SideComments('#commentable-container', currentUser, existingComments);
        window.sideComments.on('commentPosted', function( comment ) {
          comment.id = parseInt(Math.random() * (100000 - 1) + 1);
          sideComments.insertComment(comment);
        });
        window.sideComments.on('commentDeleted', function( comment ) {
          sideComments.removeComment(comment.sectionId, comment.id);
        });
      });
    </script>


    </head>

    <body>

    <!--<div>
  <div id="wrapper" class="col-sm-12 col-md-12 col-lg-12">
  <div class="ibox-content">
    <div class="row"> -->

                                        <div class="col-sm-12 col-md-12 col-lg-12">

                              <!--  <form method="get" class="form-horizontal"> -->

                                          <!--<div class="row"> -->
                                       <!--   <div class="col-sm-12 col-md-9 col-lg-9">
                                              <div class="ibox-content">-->

    <div id="page-wrapper" class="gray-bg col-lg-9 ">
      <!--  <div class="row border-bottom">
      
        </div> -->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-7">
                    <h2>Panels</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a>UI Elements</a>
                        </li>
                        <li class="active">
                            <strong>Panels</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-9">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">

<h1>Problem Description</h1>
<div class="ibox-content">
<?php
  // load rethinkdb php library
  require_once __DIR__.'/vendor/autoload.php';
  $conn = r\connect('52.20.101.105');
  $retrieve_id = $_POST['problem_identifier'];
//  $result = r\db("web")->table('ideas')->run($conn);
$result = r\db("web")->table('problems')->getAll($retrieve_id, array("index" => "id"))->run($conn);
    //$result = r\db("web")->table('ideas')->map(function($x) {
    //        return $x('id');
    //    })->run($conn);
                                
//    foreach ($result as $doc) {
    //   echo $arr_keys[
    //   echo $doc[''];
    //   echo $doc[''];
    //   echo $doc[''];
//if ($retrieve_id == $doc['id']){ // forgot single quote 11:42 BL 
      //print_r($doc);
    //}
  //   print_r($result[0]);
foreach ($result as $doc) {
echo "<p>".$doc['ProblemDescription']."</p>";
echo "<h4>Category: ".$doc['ProblemCategory']."</h4>";                       
echo "<h4>Severity Level: Catastrophic</h4>";                                    
if(isset($doc['AffectedNumber'])) {
echo "<h4>Impact Type: ".$doc['AffectedNumber']." affected</h4>";}
else {echo "<h4>Impact Type: </h4>";};
                                    
echo "<h4>Problem Development: Persistent Build-up</h4>";
echo "<h4>Tags: ".$doc['Tags']."</h4>";
//AffectedDescription:
//AffectedNumber:
//Factors:
//GeographicLocation: United States
//MoreDescription:
//Perspective:
//ProblemCategory: Society
//ProblemDescription:
//    foreach ($result[0] as $key => $value) {
//        echo "<span><strong>$key</strong>: $value</span><br>";
    }
?>



<!--
                                     <div class="col-sm-3  gray-bg">    
                                <div class="row">
                           <h1>Other Problems</h1>
                                <h4>Sub-problems: </h4>
                                <p><ul><li>Polar Ice Caps Melting</li> 
                                    <li>Erratic Weather Patterns</li> 
                                    <li>Collapse of Ecosystems</li></ul></p>
                                    
                                    <h4>Related Problems: </h4>
                                    <p><ul><li>Lack of Recycling Programs</li>
                                        <li>Lack of Viable Alternate Fuel Sources</li></ul></p>
                                           </div> -->
<!--        BEGIN COMMENT BOX -->

<!--    <div class="row m-t-lg">
            <div class="col-lg-6">
                <div class="ibox float-e-margins">
-->

</div></div></div></div></div>
        <div class="row">
<!--            <div class="col-lg-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <div> -->
               <!-- <div class="chat-activity-list">
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
                </div> -->
<!--                        <div class="chat-form">
                            <form role="form" class="form-horizontal" method="post" name="comment_form" id="comment_form" action="submit_problem_comment.php">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Comment" maxlength="500" name="comment_txt" id="comment_txt"></textarea>
                                
                                <div class="text-right">
                                    <button onclick="add_comment();" class="btn btn-sm btn-primary m-t-n-xs" style="width:40%" type="button"><strong>Post Comment</strong></button>
                                </div></div>
                            </form>
                        </div>
                </div>
                </div>
             </div>  
-->
<!--   BEGiN FORM STUFF -->

 <div class="ibox-content">


<!-- IS THIS NECESSARY?
$retrieve_id = $doc[id];
-->
                          <!--  <form method="get" class="form-horizontal"> -->
                                <form class="form-horizontal" method="post" id="describe_form" action="update_problem.php">
                               <!-- <div class="form-group"><label class="col-sm-2 control-label">Problem Summary<h6>This is the only required field.</h6></label>
                                    <div class="col-sm-10"><input type="text" class="form-control input-sm" rows="5" name="prob_desc" required> <span class="help-block m-b-none">Limit 500 characters.</span>
                                    </div>
                                </div>-->



<!-- <div class="col-sm-9"> -->
<div class="row">
                <div class="ibox collapsed">
                    <div class="ibox-title">
<?php
echo "<p>".$doc['ProblemDescription']. "</p>";
?>


<!--                        <h5>Example of <small>initial</small> collapsed panel</h5> -->
        <div class="ibox-tools">
          <a class="collapse-link">
            Edit <i class="fa fa-pencil"></i>
          </a>
        </div>
      </div>
      
      <div class="ibox-content">
        <div class='form-group'>
          <label class='col-sm-2 control-label'>Problem Summary<h6>This is the only required field.</h6>
<!--    <a onmouseover='nhpup.popup('Hint: Try to write as clearly as possible in order to maximize understanding across the widest possible audience.');'><img src='img2/help.png'></a> -->
          </label>

 <div class='col-sm-10'>
  <textarea class='form-control input-sm' rows='5' minlength='10' maxlength='500' id='prob_desc' name='prob_desc' required> </textarea>
  <!-- <span class='help-block m-b-none'>Limit 500 characters.</span> -->                                        
</div>



<!-- END TEST -->

  <div class='form-group'>
    <label class='col-sm-2 control-label'>Additional Problem Information</label>
      <div class='col-sm-10'>
        <textarea class='form-control input-sm' rows='5' maxlength='1500' name='prob_more' id='prob_more'> </textarea>
      </div>
  </div>
                                        
</div></div></div></div></div>              





 <div class="ibox-content">
 <div class="row">
  <div class="ibox collapsed">
  <div class="ibox-title">
<?php
echo "<h4>Category: ".$doc['ProblemCategory']."</h4>"; 
?>
    <div class="ibox-tools">
      <a class="collapse-link">
        Edit<i class="fa fa-pencil"></i>
      </a>                      
    </div>
  </div>
  <div class="ibox-content">
    <div class='form-group'><label class='col-sm-2 control-label'>Select a Primary Category: </label> 
      <div class='col-sm-10'>
        <div class='i-checks col-sm-6'><label> <input type='radio' value='Environment' name='prob_cat'> <i></i> Environment</label></div>
        <div class='i-checks col-sm-6'><label> <input type='radio' value='Society' name='prob_cat'> <i></i> Society</label></div>
        <div class='i-checks col-sm-6'><label> <input type='radio' value='Technology' name='prob_cat'> <i></i> Technology</label></div>
        <div class='i-checks col-sm-6'><label> <input type='radio' value='Government' name='prob_cat'> <i></i> Government</label></div>
        <div class='i-checks col-sm-6'><label> <input type='radio' value='Health' name='prob_cat'> <i></i> Health</label></div>
        <div class='i-checks col-sm-6'><label> <input type='radio' value='Education' name='prob_cat'> <i></i> Education</label></div>
        <div class='i-checks col-sm-6'><label> <input type='radio' value='Infrastructure' name='prob_cat'> <i></i> Infrastructure </label></div>
      </div>
    </div>
  </div>
  </div>
</div>
</div> 

  <div class="ibox-content">
    <div class="row">
  <div class="ibox collapsed">
  <div class="ibox-title">
<?php
echo "<h4>Tags: ".$doc['Tags']."</h4>";
?>

    <div class="ibox-tools">
      <a class="collapse-link">
        Edit<i class="fa fa-pencil"></i>
      </a>
    </div>
  </div>
  
  <div class="ibox-content">
    <div class="row">
      <div class='form-group'>
      <label class='col-sm-3 control-label'>Tags</label>
      <div class='col-sm-6'>
        <input type='text' id='tags' name='tags' placeholder='e.g., schools, mathematics, algebra' maxlength='500' class='form-control'> 
          <!--<span class='help-block m-b-none'>Separate by commas.</span>-->
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div> 

<div class="ibox-content">
<div class="row">                    
  <div class="form-group">
    <label class="col-sm-3 control-label">Perspective</label>
    <div class="col-sm-6">
      <textarea class="form-control input-sm" rows="1" maxlength="1500" name="perspective" id="perspective"> </textarea>
      <span class="help-block m-b-none">Provide a little background about yourself, how you came to know about this problem, and what your standpoint is.</span>
    </div>
  </div>
</div>
<div class="row">
  <div class="form-group">
    <label class="col-sm-3 control-label">Upload Link</label>
    <div class="col-sm-6"><input type="url" placeholder="http://" class="form-control" name="url" id="url"> <span class="help-block m-b-none">Have an image, video, or article that helps describe the problem?</span>
    </div>
  </div>
</div>
</div>

  <div class="ibox-content gray-bg">
      <h1>Who</h1>
      <div class="row"> 
        <div class="ibox collapsed">
          <div class="ibox-title">
<?php
if(isset($doc['AffectedNumber'])) {
echo "<div class=\"row\"><h4>Impact Type: ".$doc['AffectedNumber']." affected</h4></div>";}
else {echo "<h4>Impact Type: </h4>";};
?>

      <div class="ibox-tools">
          <a class="collapse-link">
            Edit<i class="fa fa-pencil"></i>
          </a>
      </div>
      </div>
      <div class="ibox-content">
         <div class='form-group'>
          <div class="row">
            <div class="col-sm-3"><label class='control-label'>Describe the group of people affected by the problem.</label></div>
              <div class="col-sm-6">
                <input type='text' id='affect_desc' name='affect_desc' class='form-control input-lg' placeholder='e.g., children attending public school in Pennsylvania'> 
              </div>
            </div>
        </div>

        <div class='form-group'>
          <div class="row">
          <label class='col-sm-3 control-label'>Estimate the number of people directly affected by this problem.</label>
            <div class='col-sm-6'>
              <div class='input-group'>
                  <input type='text' id='affect_num' class='form-control' placeholder='e.g., 7,290,000,000' name='affect_num' maxlength='14'>
                  <span class='help-block m-b-none'>Number must be between 1 and 7.5 billion</span> 
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>       
</div>                    

<div class="hr-line-dashed"></div>                                
                        <div class="row">
                          <div class="col-sm-8" style="padding:0px 0px 20px 200px"> 
                    
                            <h5>There are over 7 billion people in the world.  For information on the world's population check out the following:</h5>
                            
                                <ul>
                                    <li><a href="http://www.census.gov/popclock/">World Population Clock</a></li>
                                    <li><a href="https://www.cia.gov/library/publications/the-world-factbook/">CIA World Factbook</a></li>

                                </ul>  
                          </div>
                        </div>
                  </div>
                </div>

            <div class="ibox-content">
                <div class="row">

                 <h1>Where</h1>    
                 <label class="col-sm-3 control-label">Are specific countries affected?</label>
                <div class="form-group input-group col-sm-6">
                <select data-placeholder="Choose a country..." id="geo_loc" name="geo_loc" class="chosen-select" multiple style="width:350px;" tabindex="4">
                <option value="">Select</option>
                <option value="United States">United States</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Aland Islands">Aland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
                <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote D'ivoire">Cote D'ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Curacao">Curacao</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-bissau">Guinea-bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libya">Libya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value="Moldova, Republic of">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Barthelemy">Saint Barthelemy</option>
                <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Martin (French part)">Saint Martin (French part)</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                <option value="South Sudan">South Sudan</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-leste">Timor-leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
                </select>
                </div>
                </div>
        
  <div class="form-group">
    <div class="row">
      <label class="col-sm-3 control-label">Enter a specific area</label>
      <div class="col-sm-6">
        <input type="text" id="spec_loc" name="spec_loc" class="form-control input-sm" placeholder="e.g., Los Angeles, California" maxlength="250"> <span class="help-block m-b-none"></span>
      </div>
    </div>
  </div>
  </div>

  <div class="hr-line-dashed"></div>
    <h1>Why</h1>                   
                
      <div class="col-sm-9 form-group">
        <div class="row">
          <label class="col-sm-3 control-label">Enter a list of factors that influence the problem.</label>
            <div class="input-group col-sm-6">
              <input type="text" id="factors" name="factors" placeholder="e.g., public awareness, funding, level of expertise" class="form-control" maxlength="1200"> <span class="help-block m-b-none">Separate by commas.</span>
            </div>

<br/><br/><br/>
                                <!---
        
                Look, it's AJAX!
                                -->
            <button onclick="describe_form();" class="btn btn-sm btn-primary m-t-n-xs" style="width:40%" type="button"><strong>Submit</strong></button>
          </div>                                    
    </form>

        </div>
    </div>
                                    </div>
                                  </div>















                                <!--BEGIN COMMENTS -->

    <div class="col-sm-12 col-md-3 col-lg-3">
    <div class="ibox collapsed">
      <!--  <div class="ibox collapsed"> -->
        <div class="ibox-title">
          <h4>View Comments </h4>
        <div class="ibox-tools">
            <a class="collapse-link">
                <i class="fa fa-chevron-up"></i>
            </a>
        </div>
  </div>
    <div class="ibox-content">
  <!--  <div class="row m-t-lg"> -->

    <!--<div class="chat-activity-list"> -->

            <?php
             require_once __DIR__.'/vendor/autoload.php';
             $conn = r\connect('52.20.101.105');
             $result = r\db("web")->table('comments')->orderBy(array('index' => r\desc('CommentTS')))->run($conn);
            // $filename = 'rethinkdb.js';
    //$data = "test1";
    //file_put_contents($filename, $data);
    //$fp = fopen('rethinkdb.js', 'w');
    //fwrite($fp, '1');
    //fwrite($fp, '23');
    //fclose($fp);
             foreach ($result as $doc) {
               if(isset($doc['CommentText'])) {
    //all comments for this section; order by timestamp
                //replies?
                //add to part of problem definition
                 echo "<div class=\"chat-element\">";
                 echo "<a href=\"#\" class=\"pull-left\">";
                 echo "<img alt=\"image\" class=\"img-circle\" src=\"img/a2.jpg\">";
                 echo "</a>";
                 if ($doc['CommentStatus'] == "deleted") {
                     echo "<div style='opacity:0.3' class=\"media-body\">";
                 } else {
                     echo "<div class=\"media-body\">";
                 }
                // echo "<small class=\"pull-right text-navy\">1m ago</small>";
     echo "<strong>".$doc['CommentUser']."</strong>";
     echo "<p class=\"m-b-xs\">".$doc['CommentText'];
     echo "</p>";
     $time = new \Moment\Moment('@'.$doc['CommentTS'], 'UTC');
     $time = $time->format('l, dS F Y h:i');
     echo "<small class=\"text-muted\">".$time."</small>";
     //echo "<small class=\"text-muted\">".$time.format()."</small>";
     echo "<div class=\"actions\">";
     //echo "<a class=\"btn btn-xs btn-white\"><i class=\"fa fa-thumbs-up\"></i> Like </a>";
     //echo "<a class=\"btn btn-xs btn-white\"><i class=\"fa fa-thumbs-down\"></i> Dislike </a>";
  $VoteUpCount = r\db("web")->table('votes')->filter(array('ItemID' => $doc[id], 'VoteType' => "up"))->count()->run($conn);
  echo $VoteUpCount." Upvotes ";
  $VoteDownCount = r\db("web")->table('votes')->filter(array('ItemID' => $doc[id], 'VoteType' => "down"))->count()->run($conn);
  echo $VoteDownCount." Downvotes";
  echo "
      <form role=\"form\" class=\"form-horizontal\" method=\"post\" name=\"vote_button\" id=\"vote_button\" action=\"submit_vote.php\">";
  //      $doc['ItemID'] = '80085';
  //      $doc['ItemType'] = 'Comments';
  //      $doc['VoteDown'] = false;
  //      $doc['VoteType'] = 'Up';
  //      $doc['VoteUp'] = true;
            // echo "<textarea class=\"form-control\" placeholder=\"80085\" maxlength=\"500\" name=\"text_id\" id=\"text_id\"></textarea>";
     echo "<a class=\"btn btn-xs btn-white\" name=\"".$doc['id']."\" onclick=\"vote(this.name, 'up')\"><i class=\"fa fa-heart\"></i> Upvote</a>";
     echo "<a class=\"btn btn-xs btn-white\" name=\"".$doc['id']."\" onclick=\"vote(this.name, 'down')\"><i class=\"fa fa-thumbs-down\"></i> Downvote</a>";
  echo "</form>";
  $authenticateduser = "<-WhoIsThisGuy";
               if($authenticateduser==$doc['CommentUser']) {
  echo "
      <form role=\"form\" class=\"form-horizontal\" method=\"post\" name=\"".$doc['id']."\" id=\"delete_button\" action=\"delete_comment.php\">";
      //<form role=\"form\" class=\"form-horizontal\" method=\"post\" name=\"delete_button\" id=\"delete_button\" action=\"delete_comment.php\">";
    // echo "<a class=\"btn btn-xs btn-white\" name=\"".$doc['id']."\" onclick=\"getElementById('demo').innerHTML=Date()\"><i class=\"fa fa-trash\"></i> Delete</a>";
      //echo "<p id=\"demo\"></p>";
     echo "<a class=\"btn btn-xs btn-white\" name=\"".$doc['id']."\" onclick=\"delete_comment(this.name)\"><i class=\"fa fa-trash\"></i> Delete</a>";
     //echo "<a class=\"btn btn-xs btn-white\"><i class=\"fa fa-pencil\"></i> Edit</a>";
  echo "</form>";
  }
     
     //echo "<a class=\"btn btn-xs btn-white\"><i class=\"fa fa-pencil\"></i> Edit</a>";
     //echo "<a class=\"btn btn-xs btn-white\"><i class=\"fa fa-trash\"></i> Delete</a>";
     //echo "<a class=\"btn btn-xs btn-white\"><i class=\"fa fa-plus\"></i> Plus</a>";
     //echo "<a class=\"btn btn-xs btn-white\"><i class=\"fa fa-minus\"></i> Minus</a>";
     echo "</div></div></div>";
    // $data = "test2";
    // file_put_contents($filename, $data, FILE_APPEND | LOCK_EX);
    }
    }
             ?>


                  <!--   <div class="row m-t-lg">
                         <div class="col-sm-12 col-md-3 col-lg-3">
                             <div class="ibox float-e-margins">
                                 <div class="ibox-content">
                                     <div>
                             <div class="chat-activity-list"> -->


                                     <div class="chat-form">
                                         <form role="form" class="form-horizontal" method="post" name="comment_form" id="comment_form" action="submit_problem_comment.php">
                                             <div class="form-group">
                                                 <textarea class="form-control" placeholder="Comment" maxlength="500" name="comment_txt" id="comment_txt"></textarea>

                                             <div class="text-right">
                                                 <button onclick="add_comment();" class="btn btn-sm btn-primary m-t-n-xs" style="width:40%" type="button"><strong>Post Comment</strong></button>
                                             </div></div>
                                         </form>
                                     </div>
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

      <!-- Date range picker -->
      <script src="js/plugins/daterangepicker/daterangepicker.js"></script>
      <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

      <!-- Jquery Validate -->
      <script src="js/plugins/validate/jquery.validate.min.js"></script>

      <script>
           $(document).ready(function() {
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

