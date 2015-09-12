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
    function retrieve_id() {
var retrieve_id = $('#retrieve').val();
var serialData = $('#retrieve').serialize();
$.ajax({
    url:'./retrieve_idea.php',
    type: 'POST',
    data: serialData,
    success: function(data) {
      alert(data);
}
});
function myFunction() {
    document.getElementById("retrieve_id").value = "$retrieve_id";
};
} 
    </script>

</head>

 <body>

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
            <!--         //   <?php
                     //        require_once __DIR__.'/vendor/autoload.php';
                     //        $conn = r\connect('52.20.101.105');
                     //        $result = r\db("web")->table('ideas')->run($conn);
                     //        foreach ($result as $doc) {
                     //          if(isset($doc['IdeaDescription'])) {
                      //    $retrieve_id = $doc[id];
                      //           echo "<h1>Idea Description</h1>";
                      //           echo "<h4>Category:</h4> ".$doc['IdeaCategory'];
//                     echo "<h4>Secondary Problem Categories: </h4> ".$doc['ProblemCategory2'];
                    //             echo "<h4>Description:</h4> ".$doc['IdeaDescription'];
                     //            echo "<h4>Tags: </h4> ".$doc['Tags'];
//                     echo "<h4>Description of the Affected Population: </h4>".$doc['AffectedDescription'];
//                     echo "<h4>Estimated Number of Affected: </h4>".$doc['AffectedNumber'];
//                     echo "<h4>General Affected Geographic Location: </h4> ".$doc['GeographicLocation'];
//                     echo "<h4>Affected Location (specific): </h4>".$doc['SpecificLocation'];
//                     echo "<h4>Factors that affect the problem: </h4>".$doc['Factors'];
                   //  echo "<h4>Idea ID: </h4> ".$retrieve_id;
//echo 
//"<form class=\"form-horizontal\" method=\"post\" id=\"retrieve\" action=\"retrieve_idea.php\">
//<br/><br/><br/>
//<button onclick=\"retrieve_id();\" input type=\"submit\" class=\"btn btn-sm btn-primary m-t-n-xs\" value=\"$retrieve_id\" style=\"width:40%\" type=\"button\"><strong>View Details</strong></button>
//                                </form>
//";
//}
//}
//?> 

        </div>
        </div>
        </div>-->

<!-- EXPERIMENTING WITH SORTABLE TALBES -->
<div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Tags</th>
                        <th>URL</th>
                        <th>Affected group</th>
                        <th># Affected</th>
                        <th>Location</th>
                        <th>Factors</th>
                        <th>Awareness</th>
                        <th>View</th>
                    </tr>
                    </thead>
                    <tbody>
                         <?php
                             require_once __DIR__.'/vendor/autoload.php';
                             $conn = r\connect('52.20.101.105');
                             $result = r\db("web")->table('problems')->run($conn);
                             foreach ($result as $doc) {
                               if(isset($doc['ProblemDescription'])) {

                                 echo "<h1>Idea Description</h1>";
                                 echo "<h4>Category:</h4> ".$doc['IdeaCategory'];
//                     echo "<h4>Secondary Problem Categories: </h4> ".$doc['ProblemCategory2'];
                                 echo "<h4>Description:</h4> ".$doc['IdeaDescription'];
                                 echo "<h4>Tags: </h4> ".$doc['Tags'];

                    echo "<tr class=\"gradeX\">";
                    echo "<td>".$doc['ProblemDescription']."</td>";
                    echo "<td>".$doc['ProblemCategory']."</td>";
                    echo "<td>".$doc['Tags']."</td>";
                    echo "<td>".$doc['URL']."</td>";
                    echo "<td>".$doc['AffectedDescription']."</td>";
                    echo "<td>".$doc['AffectedNumber']."</td>";
                    echo "<td>".$doc['GeographicLocation'].", ".$doc['SpecificLocation']."</td>";
                    echo "<td>".$doc['Factors']."</td>";
                    echo "<td>Coming soon</td>";
                    echo "<td>".$doc['id']."</td>";
                      //  <td class="center">4</td>
                      //  <td class="center">X</td>
                   echo "</tr>";


       }            
}
?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Tags</th>
                        <th>URL</th>
                        <th>Affected group</th>
                        <th># Affected</th>
                        <th>Location</th>
                        <th>Factors</th>
                        <th>Awareness</th>
                        <th>View</th>
                    </tr>
                    </tfoot>
                    </table>
                        </div>

                    </div>
                </div>
            </div>
            </div>

<!-- END TABLE EXPERIMENT -->



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
