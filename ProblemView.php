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
var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>

</head>

<body>
<!-- TESTING ZONE-->


<canvas id="myChart" width="400" height="400"></canvas>
<!--
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Line Chart Example
                                <small>With custom colors.</small>
                            </h5>
                            <div ibox-tools></div>
                        </div>
                        <div class="ibox-content">
                            <div>
                                <canvas id="lineChart" height="140"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Bar Chart Example</h5>
                            <div ibox-tools></div>
                        </div>
                        <div class="ibox-content">
                            <div>
                                <canvas id="barChart" height="140"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Pie </h5>

                            <div ibox-tools></div>
                        </div>
                        <div class="ibox-content">
                            <div>
                                <canvas id="doughnutChart" height="140"></canvas>
                            </div>
                        </div>
                    </div>
                </div>-->
                                   <!--     <div class="ibox-content">
                        <div class="col-lg-3">
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

                            <div class="col-lg-3">
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
            </div>-->
<!--            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Radar Chart Example</h5>
                            <div ibox-tools></div>
                        </div>
                        <div class="ibox-content">
                            <div>
                                <canvas id="radarChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
<!-- END TEST!!!!!!!!!-->


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



<canvas id="myChart" width="400" height="400"></canvas>
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
                        <div class="col-lg-3">
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

                            <div class="col-lg-3">
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

                <div class="col-lg-6">
                    <div class="wrapper wrapper-content animated fadeInRight">
                    <!--<div class="ibox float-e-margins">-->
                        <div class="ibox-title">
                            <h5>Pie </h5>

                        </div>
                     <!--   <div class="ibox-content">-->
                            <div>
<!--                                <canvas id="doughnutChart" height="140"></canvas>-->




<canvas id="myChart" width="400" height="400"></canvas>




                            </div>
                        </div>
                    </div>
             <!--   </div>-->



</div>
                    </div>
                    </div>
                    </div>
                </div>


  <!--      <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Line Chart Example
                                <small>With custom colors.</small>
                            </h5>
                            <div ibox-tools></div>
                        </div>
                        <div class="ibox-content">
                            <div>
                                <canvas id="lineChart" height="140"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Bar Chart Example</h5>
                            <div ibox-tools></div>
                        </div>
                        <div class="ibox-content">
                            <div>
                                <canvas id="barChart" height="140"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->


                <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Root Cause Analysis</h1>
                            <h4>Why does this problem really exist?</h4>
                            <img src="http://www.mindtools.com/media/Diagrams/Cause-Effect-Diagram-Example-3.jpg">
                        

                      
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


    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Jquery Validate -->
    <script src="js/plugins/validate/jquery.validate.min.js"></script>

    <!-- JSKnob-->
    <script src="js/plugins/jsKnob/jquery.knob.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>

    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>


    <!-- ChartJS-->
    <script src="js/plugins/chartJs/Chart.min.js"></script>
 <!--   <script src="js/demo/chartjs-demo.js"></script>-->


<script src="Chart.js"></script>
<script>
    var myChart = new Chart({...})
</script>


</body>

</html>