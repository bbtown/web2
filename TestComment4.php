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
                                          <div class="col-sm-12 col-md-9 col-lg-9">
                                              <div class="ibox-content">
                                        <!-- <div class="col-lg-12"> -->
                                <h1>Problem Description</h1>
                                        <h4>Category:  Environment</h4>
                                        <h4>Severity Level: Catastrophic</h4>
                                        <h4>Impact Type: 7.5 billion affected</h4>
                                        <h4>Problem Development: Persistent Build-up</h4>

                                        <p>
                                            Climate change or global warming has been set into motion since the Industrial Revolution.  Right now we are on a path to disaster, despite current meager attempts to reduce our carbon footprints.  Although the US, Europe, and Japan may be more environmentally conscious, developing nations such as China and India are not changing their ways.  Climate change not only brings extreme erratic behavior, but leads to the certain collpase of ecosystems all over the planet.  It will be impossible to sustain the current and growing population.  Starvation and water shortages will be prevalent.
                                        </p>
                                        <h4>Tags: </h4><p>environment, sustainability, climate change, global warming, carbon, emissions, pollution</p>
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
             $conn = r\connect('34.239.185.58');
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
