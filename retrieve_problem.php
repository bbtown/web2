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

<div class="ibox-content">
                          <!--  <form method="get" class="form-horizontal"> -->

                              <div class="row"> 
                                    <div class="col-sm-9">
<h1>Problem Description</h1>

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
    

echo "<h4>Category: ".$doc['ProblemCategory']."</h4>";                       
echo "<h4>Severity Level: Catastrophic</h4>";                                    
echo "<h4>Impact Type: ".$doc['AffectedNumber']." affected</h4>";                                    
echo "<h4>Problem Development: Persistent Build-up</h4>";
echo "<p>".$doc['ProblemDescription']."</p>";
echo "<h4>Tags: ".$doc['Tags']."</h4></div>";




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
