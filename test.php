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

</head>

<body>

    <div id="wrapper">
<!--
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/profile_small.jpg" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
                             </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="mailbox.html">Mailbox</a></li>
                            <li class="divider"></li>
                            <li><a href="login.html">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li>
                    <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="index.html">Dashboard v.1</a></li>
                        <li><a href="dashboard_2.html">Dashboard v.2</a></li>
                        <li><a href="dashboard_3.html">Dashboard v.3</a></li>
                        <li><a href="dashboard_4_1.html">Dashboard v.4</a></li>
                    </ul>
                </li>
                <li>
                    <a href="layouts.html"><i class="fa fa-diamond"></i> <span class="nav-label">Layouts</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Graphs</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="graph_flot.html">Flot Charts</a></li>
                        <li><a href="graph_morris.html">Morris.js Charts</a></li>
                        <li><a href="graph_rickshaw.html">Rickshaw Charts</a></li>
                        <li><a href="graph_chartjs.html">Chart.js</a></li>
                        <li><a href="graph_chartist.html">Chartist</a></li>
                        <li><a href="graph_peity.html">Peity Charts</a></li>
                        <li><a href="graph_sparkline.html">Sparkline Charts</a></li>
                    </ul>
                </li>
                <li>
                    <a href="mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">Mailbox </span><span class="label label-warning pull-right">16/24</span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="mailbox.html">Inbox</a></li>
                        <li><a href="mail_detail.html">Email view</a></li>
                        <li><a href="mail_compose.html">Compose email</a></li>
                        <li><a href="email_template.html">Email templates</a></li>
                    </ul>
                </li>
                <li>
                    <a href="metrics.html"><i class="fa fa-pie-chart"></i> <span class="nav-label">Metrics</span> <span class="label label-primary pull-right">NEW</span> </a>
                </li>
                <li>
                    <a href="widgets.html"><i class="fa fa-flask"></i> <span class="nav-label">Widgets</span></a>
                </li>
                <li class="active">
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Forms</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li class="active"><a href="form_basic.html">Basic form</a></li>
                        <li><a href="form_advanced.html">Advanced Plugins</a></li>
                        <li><a href="form_wizard.html">Wizard</a></li>
                        <li><a href="form_file_upload.html">File Upload</a></li>
                        <li><a href="form_editors.html">Text Editor</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">App Views</span>  <span class="pull-right label label-primary">SPECIAL</span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="projects.html">Projects</a></li>
                        <li><a href="project_detail.html">Project detail</a></li>
                        <li><a href="teams_board.html">Teams board</a></li>
                        <li><a href="social_feed.html">Social feed</a></li>
                        <li><a href="clients.html">Clients</a></li>
                        <li><a href="full_height.html">Outlook view</a></li>
                        <li><a href="file_manager.html">File manager</a></li>
                        <li><a href="calendar.html">Calendar</a></li>
                        <li><a href="issue_tracker.html">Issue tracker</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="article.html">Article</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="timeline.html">Timeline</a></li>
                        <li><a href="pin_board.html">Pin board</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="search_results.html">Search results</a></li>
                        <li><a href="lockscreen.html">Lockscreen</a></li>
                        <li><a href="invoice.html">Invoice</a></li>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="login_two_columns.html">Login v.2</a></li>
                        <li><a href="forgot_password.html">Forget password</a></li>
                        <li><a href="register.html">Register</a></li>
                        <li><a href="404.html">404 Page</a></li>
                        <li><a href="500.html">500 Page</a></li>
                        <li><a href="empty_page.html">Empty page</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-globe"></i> <span class="nav-label">Miscellaneous</span><span class="label label-info pull-right">NEW</span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="toastr_notifications.html">Notification</a></li>
                        <li><a href="nestable_list.html">Nestable list</a></li>
                        <li><a href="agile_board.html">Agile board</a></li>
                        <li><a href="timeline_2.html">Timeline v.2</a></li>
                        <li><a href="diff.html">Diff</a></li>
                        <li><a href="sweetalert.html">Sweet alert</a></li>
                        <li><a href="idle_timer.html">Idle timer</a></li>
                        <li><a href="spinners.html">Spinners</a></li>
                        <li><a href="tinycon.html">Live favicon</a></li>
                        <li><a href="google_maps.html">Google maps</a></li>
                        <li><a href="code_editor.html">Code editor</a></li>
                        <li><a href="modal_window.html">Modal window</a></li>
                        <li><a href="forum_main.html">Forum view</a></li>
                        <li><a href="validation.html">Validation</a></li>
                        <li><a href="tree_view.html">Tree view</a></li>
                        <li><a href="chat_view.html">Chat view</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-flask"></i> <span class="nav-label">UI Elements</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="icons.html">Icons</a></li>
                        <li><a href="draggable_panels.html">Draggable Panels</a></li>
                        <li><a href="buttons.html">Buttons</a></li>
                        <li><a href="video.html">Video</a></li>
                        <li><a href="tabs_panels.html">Panels</a></li>
                        <li><a href="tabs.html">Tabs</a></li>
                        <li><a href="notifications.html">Notifications & Tooltips</a></li>
                        <li><a href="badges_labels.html">Badges, Labels, Progress</a></li>
                    </ul>
                </li>

                <li>
                    <a href="grid_options.html"><i class="fa fa-laptop"></i> <span class="nav-label">Grid options</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-table"></i> <span class="nav-label">Tables</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="table_basic.html">Static Tables</a></li>
                        <li><a href="table_data_tables.html">Data Tables</a></li>
                        <li><a href="table_foo_table.html">Foo Tables</a></li>
                        <li><a href="jq_grid.html">jqGrid</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-shopping-cart"></i> <span class="nav-label">E-commerce</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="ecommerce_products_grid.html">Products grid</a></li>
                        <li><a href="ecommerce_product_list.html">Products list</a></li>
                        <li><a href="ecommerce_product.html">Product edit</a></li>
                        <li><a href="ecommerce-orders.html">Orders</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-picture-o"></i> <span class="nav-label">Gallery</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="basic_gallery.html">Lightbox Gallery</a></li>
                        <li><a href="carousel.html">Bootstrap Carusela</a></li>

                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Menu Levels </span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li>
                            <a href="#">Third Level <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>

                            </ul>
                        </li>
                        <li><a href="#">Second Level Item</a></li>
                        <li>
                            <a href="#">Second Level Item</a></li>
                        <li>
                            <a href="#">Second Level Item</a></li>
                    </ul>
                </li>
                <li>
                    <a href="css_animation.html"><i class="fa fa-magic"></i> <span class="nav-label">CSS Animations </span><span class="label label-info pull-right">62</span></a>
                </li>
                <li class="landing_link">
                    <a target="_blank" href="landing.html"><i class="fa fa-star"></i> <span class="nav-label">Landing Page</span> <span class="label label-warning pull-right">NEW</span></a>
                </li>
                <li class="special_link">
                    <a href="package.html"><i class="fa fa-database"></i> <span class="nav-label">Package</span></a>
                </li>
            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">-->
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
                             <?php

                             require_once __DIR__.'/vendor/autoload.php';
                             $conn = r\connect('52.20.101.105');
                             $result = r\db("web")->table('problems')->run($conn);
                             foreach ($result as $doc) {
                               if(isset($doc['ProblemCategory'])) {
                                 echo "<h1>Problem Description</h1>";
                                 echo "<h4>Category:</h4> ".$doc['ProblemCategory'];
                                 echo "<h4>Description:</h4> ".$doc['ProblemDescription'];
                                 // echo "<h4>Description:</h4> ".$doc['ProblemDescription']."</h4>";
                               }
                             }

                             ?>
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
                            <h4>What does the perfect solution include?</h4>
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

                                <!--                     <div class="hr-line-dashed"></div>
                    
                                
                            
   <div class="form-group"><p>Check the box below if over 1 billion people are directly affected by this problem.</p>
                                        <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i>Over 1 billion people</label></div>
                                </div>
                                </div>
                    <div class="row ibox-content">
                        <div class="col-sm-9">
                        
                            <p>
                            If fewer than 1 billion people are affected, use the slidebar and dropdown menu to enter an estimate of the number of people directly impacted by this problem.  
                            </p>
                            <div id="ionrange_1"></div>
                </div>
            
                            <div class="col-sm-3">
                            
                            <div class="form-group"><h4>Select the magnitude</h4>
                            <label class="font-noraml"></label>
                            <div class="input-group">
                            <select data-placeholder="Select the magnitude" class="chosen-select" style="width:150px;" tabindex="2">
                            <option value="people">people</option>
                            <option value="thousand people">thousand people</option>
                            <option value="=million people">million people</option>
                             </select>
                            </div>
                            </div>
                            </div>-->
                            
                               
          <!-- THE REST              
                        <div class="row">
                            
                                    <div class="col-sm-8">
                                        <h4>Add Note</h4>
                                        <div class="input-group">
                                        <input type="text" class="form-control" placeholder="" name="people_num">
                                        <span class="input-group-btn"> <button type="submit" class="btn btn-primary">Add
                                        </button></span> 
                                    </div>

                                    </div>
                                </div>
                            </div>
                    </div>
                   
            
            <div class="row">
            <div class="col-lg-12">


                <div class="ibox float-e-margins">
                 
                    
                </div>
                <div class="ibox-content">
               <form method="get" class="form-horizontal">
                                <div class="form-group">
                 <h1>Where</h1>                   
                <label class="font-normal">Are certain geographic areas affected?</label>

                </div>

            </div>
                        
   

                <div class="ibox-content">
                    <div class="row">
            <div class="col-lg-12">
               <form method="get" class="form-horizontal">
                                <div class="form-group">
                 <h1>When</h1>                   
                <label class="font-normal">When did the problem arise?  How has the problem changed throughout time?  What do you anticipate the probelm will be like in the future?</label>
                <div class="input-group">
            <p>
                <ul>
                    <li></li>

                </ul></p>
                </div>
                </div>

               <form method="get" class="form-horizontal">
                                <div class="form-group">
              
                    <form method="get" class="form-horizontal">
                                <div class="col-sm-8">
                                <div class="form-group"><h4>Enter a specific area.</h4>
                                    <input type="text" class="form-control input-sm" placeholder="e.g., Los Angeles, California"> <span class="help-block m-b-none"></span>
                                    </div>
                                </div>
                  </div>
                </div>
                </div>
              
                 <h1>Why</h1>                   
                
                <div class="input-group">
            
                                <div class="form-group">
                                    <label class="font-normal">Enter a list of factors that influence the problem.</label>
                                    <input type="text" placeholder="e.g., public awareness, funding, level of expertise" class="form-control"> <span class="help-block m-b-none">Separate by commas.</span>
                                    </div>
                                </div>
                                </div>
                                </div>
                  

            </div>
            <div class="row">
                            

                                    </div>
                                </div>

                                <div class="row">
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white" type="submit">Cancel</button>
                                        <button class="btn btn-primary" type="submit">Save changes</button>
                                    </div>
                                </div>
                                </div>
</div>
<input name="code" id="code" type="text" value="" >
<script type="text/javascript">
    function makeid()
    {
    var randomnumber=Math.floor(Math.random() * 20)
}
</script>
<input type="button" style="font-size:9pt" value="Generate Code" onclick="document.getElementById('code').value = makeid()">
</input>


                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!--
        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2015
            </div>
        </div> -->

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
        $(document).ready(function(){

            var $image = $(".image-crop > img")
            $($image).cropper({
                aspectRatio: 1.618,
                preview: ".img-preview",
                done: function(data) {
                    // Output the result data for cropping image.
                }
            });

            var $inputImage = $("#inputImage");
            if (window.FileReader) {
                $inputImage.change(function() {
                    var fileReader = new FileReader(),
                            files = this.files,
                            file;

                    if (!files.length) {
                        return;
                    }

                    file = files[0];

                    if (/^image\/\w+$/.test(file.type)) {
                        fileReader.readAsDataURL(file);
                        fileReader.onload = function () {
                            $inputImage.val("");
                            $image.cropper("reset", true).cropper("replace", this.result);
                        };
                    } else {
                        showMessage("Please choose an image file.");
                    }
                });
            } else {
                $inputImage.addClass("hide");
            }

            $("#download").click(function() {
                window.open($image.cropper("getDataURL"));
            });

            $("#zoomIn").click(function() {
                $image.cropper("zoom", 0.1);
            });

            $("#zoomOut").click(function() {
                $image.cropper("zoom", -0.1);
            });

            $("#rotateLeft").click(function() {
                $image.cropper("rotate", 45);
            });

            $("#rotateRight").click(function() {
                $image.cropper("rotate", -45);
            });

            $("#setDrag").click(function() {
                $image.cropper("setDragMode", "crop");
            });

            $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });

            $('#data_2 .input-group.date').datepicker({
                startView: 1,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                format: "dd/mm/yyyy"
            });

            $('#data_3 .input-group.date').datepicker({
                startView: 2,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });

            $('#data_4 .input-group.date').datepicker({
                minViewMode: 1,
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                todayHighlight: true
            });

            $('#data_5 .input-daterange').datepicker({
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });

            var elem = document.querySelector('.js-switch');
            var switchery = new Switchery(elem, { color: '#1AB394' });

            var elem_2 = document.querySelector('.js-switch_2');
            var switchery_2 = new Switchery(elem_2, { color: '#ED5565' });

            var elem_3 = document.querySelector('.js-switch_3');
            var switchery_3 = new Switchery(elem_3, { color: '#1AB394' });

            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green'
            });

            $('.demo1').colorpicker();

            var divStyle = $('.back-change')[0].style;
            $('#demo_apidemo').colorpicker({
                color: divStyle.backgroundColor
            }).on('changeColor', function(ev) {
                        divStyle.backgroundColor = ev.color.toHex();
                    });

            $('.clockpicker').clockpicker();

            $('input[name="daterange"]').daterangepicker();

            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

            $('#reportrange').daterangepicker({
                format: 'MM/DD/YYYY',
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2015',
                dateLimit: { days: 60 },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'right',
                drops: 'down',
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-primary',
                cancelClass: 'btn-default',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Cancel',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            }, function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            });


        });
        var config = {
                '.chosen-select'           : {},
                '.chosen-select-deselect'  : {allow_single_deselect:true},
                '.chosen-select-no-single' : {disable_search_threshold:10},
                '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
                '.chosen-select-width'     : {width:"95%"}
                }
            for (var selector in config) {
                $(selector).chosen(config[selector]);
            }

        $("#ionrange_1").ionRangeSlider({
//            values: [
//                "1", "100", "500", "1,000", "5,000", "10,000", "50,000", "100,000", "250,000", "500,000", "1 million","10 million", "50 million","100 million", "500 million", "Over 1 billion"
//            ],
            min: 1,
            max: 999,
            step: 10,
            type: 'single',
            hasGrid: true,
//            maxPostfix: " people",
            hideMinMax: false,
            hideFromTo: false
        });

        $("#ionrange_5").ionRangeSlider({
            min: 10000,
            max: 100000,
            step: 100,
            postfix: " km",
            from: 55000,
            hideMinMax: true,
            hideFromTo: false
        });

        $(".dial").knob();

        $("#basic_slider").noUiSlider({
            start: 40,
            behaviour: 'tap',
            connect: 'upper',
            range: {
                'min':  20,
                'max':  80
            }
        });

        $("#range_slider").noUiSlider({
            start: [ 40, 60 ],
            behaviour: 'drag',
            connect: true,
            range: {
                'min':  20,
                'max':  80
            }
        });

        $("#drag-fixed").noUiSlider({
            start: [ 40, 60 ],
            behaviour: 'drag-fixed',
            connect: true,
            range: {
                'min':  20,
                'max':  80
            }
        });


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
