<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Add Your favicon here -->
        <!--<link rel="icon" href="img/favicon.ico">-->


        <title>SolveSpark - Let's crowd-solve it together!</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Animation CSS -->
        <link href="css/animate.min.css" rel="stylesheet">

        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">


    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-69947100-1', 'auto');
      ga('send', 'pageview');

    function retrieve_id() {
var retrieve_id = $('#retrieve').val();
var serialData = $('#retrieve').serialize();
$.ajax({
    url:'./retrieve_problem.php',
    type: 'POST',
    data: serialData,
    success: function(data) {
      alert(data);
}
});
</script>

    </head>
    <body id="page-top">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="navbar navbar-default navbar-fixed-top">
          <div class="container-fluid">
           <div class="navbar-header">
            <div class="navbar-collapse collapse" id="navbar-main">
              <ul class="nav navbar-nav">
                <li><a class="page-scroll" href="http://www.solvespark.com" style="color:#0d96c9;font:arial;font-weight:bold;font-size:30px;">SOLVESPARK</a></li>
                <li><a class="page-scroll" href="about.html">Vision</a></li>
                <li><a class="page-scroll" href="demo.html">Demo</a></li>
                <li><a class="page-scroll" href="#timeline">3 Month Timeline</a></li>
                <li><a class="page-scroll" href="#contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
    </div>
        </nav>


    <div id="inSlider" class="carousel carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="container">
                    <div class="carousel-caption blank">
                        <h2>Together, we will <b>crowd-solve</b> the world's <i>toughest</i> problems</h2>

                        <p><a class="btn btn-lg btn-primary" href="#about" role="button">Learn more</a></p>
                    </div>
                </div>
                <!-- Set background for slide in css -->
                <div class="header-back two"></div>
            </div>
        </div>
    </div>

<section id="blurb" class="container services">
    <div class="container">
                        
                <div class="col-lg-12 text-center">
                    <div class="row">
                  <div class="navy-line"></div> 
                    <h1>SolveSpark is the world's first centralized "crowd-solving" platform</h1>
                    <p>Join in and share your ideas, insights, struggles, and dreams.  Your input will help create traction and build positive change in your community and around the world. </p>
                    <div class="navy-line"></div>
                </div>
                   </div></div>
               </section>
<section id="icons" class="container services">
    <div class="container">
                        
                <div class="col-lg-12 text-center">
                    <div class="row">
                <div class="col-md-1">
                    <div class="row">
                    <i class="fa fa-users big-icon"></i>
                    </div> 
                    <div class="row">
                    <h4>Inclusion</h4>
                    </div> 
                </div>
                
                <div class="col-md-2">
                    <div class="row">
                    <i class="fa fa-bolt big-icon"></i>
                    </div> 
                    <div class="row">
                    <h4>Empowerment</h4>
                    </div> 
                </div>
                
                <div class="col-md-1">
                    <div class="row">
                    <i class="fa fa-eye big-icon"></i>
                    </div> 
                    <div class="row">
                    <h4>Clarity</h4>
                    </div> 
                </div>                
                <div class="col-md-2">
                    <div class="row">
                    <i class="fa fa-sun-o big-icon"></i>
                    </div> 
                    <div class="row">
                    <h4>Transparency</h4>
                    </div> 
                </div>
               
                <div class="col-md-2">
                    <div class="row">
                    <i class="fa fa-cogs big-icon"></i>
                    </div> 
                    <div class="row">
                    <h4>Critical Thinking</h4>
                    </div> 
                </div>
                
                <div class="col-md-2">
                    <div class="row">
                    <i class="fa fa-puzzle-piece big-icon"></i>
                    </div> 
                    <div class="row">
                    <h4>Best solutions</h4>
                    </div> 
                </div>
                
                <div class="col-md-1">
                    <div class="row">
                    <i class="fa fa-heart big-icon"></i>
                    </div> 
                    <div class="row">
                    <h4>Positivity</h4>
                    </div> 
                </div>
            </div>
        </div>
</div>
</section>

<section id="submit" class="container services">
    <div class="container">

    <div class="wrapper wrapper-content">
          <div class="col-md-12" align="center">
    <div class="row" align="center"> 
        <h1>Submit a Problem</h1>
<div class="input-group" style="width:60%"><input type="text" class="form-control"> <span class="input-group-btn"> <button type="button" class="btn btn-primary" style=
    "background-color: #4CAF50">Submit
                                        </button> </span>
                                        </div>
                                        </div>
                                        </div></div>
                                        </div>
</section>


<section id="trending">
    <div class="wrapper wrapper-content">
          <div class="col-lg-12">
    <div class="row">
        <h1>Trending issues</h1>
</div>
<div class="ibox-content">
                        
<div class="row">
<?php
			     require_once __DIR__.'/vendor/autoload.php';
			     $counter=0;	
			     $conn = r\connect('52.20.101.105');
                             $result = r\db("web")->table('problems')->run($conn);
                             $count=0;
			     foreach ($result as $doc) {
                               if(isset($doc['ProblemDescription'])) {
                          $retrieve_id = $doc[id];
			  $count++;
			  $counter++;
                    if($counter <13){
		    echo "<div class=\"col-md-3\" style=\"height:540px\">";
                    echo "<div class=\"ibox-content product-box\" style=\"height:210px\">";
if ($doc['ProblemCategory'] == 'Environment') {
echo "<div class=\"product-imitation\"><i class=\"fa fa-tree big-icon\" style=\"color: #bebec3;\"></i></div>";
} elseif ($doc['ProblemCategory'] == 'Technology') {
echo "<div class=\"product-imitation\"><i class=\"fa fa-rocket big-icon\" style=\"color: #bebec3;\"></i></div>";
} elseif ($doc['ProblemCategory'] == 'Health') {
echo "<div class=\"product-imitation\"><i class=\"fa fa-heart big-icon\" style=\"color: #bebec3;\"></i></div>";
} elseif ($doc['ProblemCategory'] == 'Economy') {
echo "<div class=\"product-imitation\"><i class=\"fa fa-money big-icon\" style=\"color: #bebec3;\"></i></div>";
} elseif ($doc['ProblemCategory'] =='Infrastructure') {
echo "<div class=\"product-imitation\"><i class=\"fa fa-train big-icon\" style=\"color: #bebec3;\"></i></div>";
} elseif ($doc['ProblemCategory'] == 'Society') {
echo "<div class=\"product-imitation\"><i class=\"fa fa-users big-icon\" style=\"color: #bebec3;\"></i></div>";
} elseif ($doc['ProblemCategory'] == 'Government') {
echo "<div class=\"product-imitation\"><i class=\"fa fa-institution big-icon\" style=\"color: #bebec3;\"></i></div>";
} elseif ($doc['ProblemCategory'] == 'Education') {
echo "<div class=\"product-imitation\"><i class=\"fa fa-graduation-cap big-icon\" style=\"color: #bebec3;\"></i></div>";
} elseif ($doc['ProblemCategory'] =='Science') {
echo "<div class=\"product-imitation\"><i class=\"fa fa-flask big-icon\" style=\"color: #bebec3;\"></i></div>";
} else {
echo "<div class=\"product-imitation\"><i class=\"fa fa-globe big-icon\" style=\"color: #bebec3;\"></i></div>";
};

                    echo "<div class=\"product-desc\" style=\"height:230px;\">";
                          
                    if(isset($doc['ProblemCategory'])){echo "<span class=\"product-price\">".$doc['ProblemCategory']."</span>";};
			    echo "<div style=\"height:120px;\"><strong>".$doc['ProblemDescription']."</strong></div>";
			    echo "<div style=\"height:80px;\"><small class=\"text-muted\">Tags: ".$doc['Tags']."</small><br/>";
			    echo "390 Likes<br/></div>";
			    echo "<div style=\"height:30px;\"> <form class=\"form-horizontal\" method=\"post\" id=\"retrieve\" action=\"retrieve_problem.php\">
					<button input type=\"submit\" class=\"btn btn-primary\" name='problem_identifier' value=\"$retrieve_id\" style=\"width:40%; vertical-align:bottom;\" type=\"button\"><strong>View</strong></button> </form></div>";
				echo "</div></div></div>";
			    if($count==4){
				echo"</div><div class=\"row\">";
				$count=0;
				};
	};
	};
	}
	?>
        </div>
    </div>
</section>

<!--<section id="about" class="container services">
            <div class="row">
                
                <div class="col-lg-12 features-text">
                    <i class="fa fa-users big-icon"></i>
                    <h2>Inclusion</h2>
                    <p>SolveSpark encourages everyone to participate.  This means all ages, genders, races, classes...everyone around the world!  Everyone has perspectives and ideas that are important!</p>
                </div>
                
                <div class="col-lg-12 features-text">
                    <i class="fa fa-bolt big-icon"></i>
                    <h2>Empowerment</h2>
                    <p>SolveSpark seeks the voices of the entire world, so that together, we can confront world's toughest challenges.  We are challenging the status quo by giving everyone, not only the privileged, a platform to carve out a better future.  Every human has an unbelievable amount of potential.  Let's not let it go to waste.</p>
                </div>
                
                <div class="col-lg-12 features-text">
                    <i class="fa fa-eye big-icon"></i>
                    <h2>Clarity</h2>
                    <p>How do we make sense of all of the world's wonderful insights and turn it into something as powerful as the cure for cancer, the best solutions for climate change, and the end to hunger?  With the world's absolute best data analytics.  SolveSpark will constantly push to be a game-changer in natural language processing and data analytics.</p>
                </div>
            </div>
            <div class="row">
                
                <div class="col-lg-12 features-text">
                    <i class="fa fa-sun-o big-icon"></i>
                    <h2>Transparency</h2>
                    <p>Making facts, figures, and collaboration available to the world will bring legitimacy to the problem-solving process.  Showing the world how things should be versus how they really are has the power to fight corruption.</p>
                </div>
               
                <div class="col-lg-12 features-text">
                    <i class="fa fa-cogs big-icon"></i>
                    <h2>Critical Thinking</h2>
                    <p>SolveSpark will help users think hard to come up with the best solutions.  Tools paired with data analytics will encourage users to think outside the box and will even alert users of biases and other logic flaws.</p>
                </div>
                
                <div class="col-lg-12 features-text">
                    <i class="fa fa-puzzle-piece big-icon"></i>
                    <h2>Best solutions</h2>
                    <p>SolveSpark will help us craft the best solutions by comparing all of the alternatives and judging them based on criteria.  This will make for more effective crowdfunding campaigns.</p>
                </div>
                
                <div class="col-lg-12 features-text">
                    <i class="fa fa-heart big-icon"></i>
                    <h2>Positivity</h2>
                    <p>SolveSpark is focused on creating a positive future for all.  While constructive criticism is encouraged, outright hatred or harassment will not be tolerated.  Solutions that result in the short term or long term harm of any people are not legitimate solutions.  SolveSpark will do its best to enforce these rules.</p>
                </div>
            </div>
        </div>
</section>-->

<!--<section id="timeline" class="timeline gray-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>3 Month Timeline</h1>
                <p></p>
            </div>
        </div>
        <div class="row features-block">
        <div class="col-lg-12">
            <div id="vertical timeline" class="vertical-container light-timeline center-orientation">
                   <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <i class="fa fa-star"></i>
                        </div>

                        <div class="vertical-timeline-content">
                          <h2>Outreach</h2>
                            <p>Reach out to potential interested parties and establish key relationships</p>
                          
                            <span class="vertical-date">Weeks 1 - 12 <br/> <small>Saturday, December 31st</small> </span>
                        </div>
                    </div>


                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <i class="fa fa-star"></i>
                        </div>

                        <div class="vertical-timeline-content">
                            <h2>Prototype</h2>
                            <p>Complete the prototype that would allow users to log in, submit information, receive alerts, and view basic analytics.
                            </p>
                            
                            <span class="vertical-date"> Weeks 1 - 7<br/> <small>Monday, November 28th</small> </span>
                        </div>
                    </div>
                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="vertical-timeline-content">
                            <h2>Solicit Feedback</h2>
                            <p>Deploy website to a small group of users to begin populating database and gathering feedback to drive requirements and continuous development.
                            </p>
                            
                            <span class="vertical-date">Weeks 7 - 12<br/> <small>Saturday, December 31st</small> </span>
                        </div>
                        </div>
                    
                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <i class="fa fa-users"></i>
                        </div>

                    </div>

</div>
                </div>
            </div>

        </div>
    </div>

</section>-->
<section id="contact" class="gray-section contact">
        <div class="container">
            <div class="row m-b-lg">
                <div class="col-lg-12 text-center">
                    <div class="navy-line text-center"></div>
                    <h1>Contact Us</h1>
               
    <!--         <div class="row m-b-lg">
               <div class="col-lg-3 col-lg-offset-3"> -->

                    <address>
                        <strong><span class="navy">Beth Lee</span></strong><br/>
                        <a href="mailto:beth-lee@solvespark.com">beth-lee@solvespark.com</a>
                    </address>

                </div> </div>
             <!-- <div class="col-lg-4">
            
            </div> -->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="m-t-sm">
                        Follow us on social media:  
                    </p>
                    <ul class="list-inline social-icon">
                        <li><a href="http://facebook.com/solvespark"><i class="fa fa-facebook"></i></a>
                        </li>
                       <!-- <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>-->
                    </ul>
                </div>
            </div> 
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                    <p>&copy; 2016 Beth Lee <br/></p>
                </div>
            </div></div>

    </section>

    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/pace.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/inspinia.js"></script>
    </body>
</html>
