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
    <link href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css" rel="stylesheet">
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
    url:'./retrieve_problem.php',
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

        <!--     <div class="row">
                <div class="col-lg-8">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h1>Problem Description</h1>
                        </div> -->
<div class="ibox-content">

<!-- BEGIN -->
<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
 
        <tbody>
            <tr>
                <td data-search="Tiger Nixon">T. Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td data-order="1303686000">Mon 25th Apr 11</td>
                <td data-order="320800">$320,800/y</td>
            </tr>
            <tr>
                <td data-search="Garrett Winters">G. Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td data-order="1311548400">Mon 25th Jul 11</td>
                <td data-order="170750">$170,750/y</td>
            </tr>
            <tr>
                <td data-search="Ashton Cox">A. Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td data-order="1231718400">Mon 12th Jan 09</td>
                <td data-order="86000">$86,000/y</td>
            </tr>
            <tr>
                <td data-search="Cedric Kelly">C. Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td data-order="1332975600">Thu 29th Mar 12</td>
                <td data-order="433060">$433,060/y</td>
            </tr>
            <tr>
                <td data-search="Airi Satou">A. Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td data-order="1227830400">Fri 28th Nov 08</td>
                <td data-order="162700">$162,700/y</td>
            </tr>
            <tr>
                <td data-search="Brielle Williamson">B. Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td data-order="1354406400">Sun 2nd Dec 12</td>
                <td data-order="372000">$372,000/y</td>
            </tr>
            <tr>
                <td data-search="Herrod Chandler">H. Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td data-order="1344207600">Mon 6th Aug 12</td>
                <td data-order="137500">$137,500/y</td>
            </tr>
            <tr>
                <td data-search="Rhona Davidson">R. Davidson</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td data-order="1287010800">Thu 14th Oct 10</td>
                <td data-order="327900">$327,900/y</td>
            </tr>
            <tr>
                <td data-search="Colleen Hurst">C. Hurst</td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
                <td data-order="1252969200">Tue 15th Sep 09</td>
                <td data-order="205500">$205,500/y</td>
            </tr>
            <tr>
                <td data-search="Sonya Frost">S. Frost</td>
                <td>Software Engineer</td>
                <td>Edinburgh</td>
                <td>23</td>
                <td data-order="1229126400">Sat 13th Dec 08</td>
                <td data-order="103600">$103,600/y</td>
            </tr>
            <tr>
                <td data-search="Jena Gaines">J. Gaines</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>30</td>
                <td data-order="1229644800">Fri 19th Dec 08</td>
                <td data-order="90560">$90,560/y</td>
            </tr>
            <tr>
                <td data-search="Quinn Flynn">Q. Flynn</td>
                <td>Support Lead</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td data-order="1362268800">Sun 3rd Mar 13</td>
                <td data-order="342000">$342,000/y</td>
            </tr>
            <tr>
                <td data-search="Charde Marshall">C. Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
                <td>36</td>
                <td data-order="1224111600">Thu 16th Oct 08</td>
                <td data-order="470600">$470,600/y</td>
            </tr>
            <tr>
                <td data-search="Haley Kennedy">H. Kennedy</td>
                <td>Senior Marketing Designer</td>
                <td>London</td>
                <td>43</td>
                <td data-order="1355788800">Tue 18th Dec 12</td>
                <td data-order="313500">$313,500/y</td>
            </tr>
            <tr>
                <td data-search="Tatyana Fitzpatrick">T. Fitzpatrick</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>19</td>
                <td data-order="1268784000">Wed 17th Mar 10</td>
                <td data-order="385750">$385,750/y</td>
            </tr>
            <tr>
                <td data-search="Michael Silva">M. Silva</td>
                <td>Marketing Designer</td>
                <td>London</td>
                <td>66</td>
                <td data-order="1353974400">Tue 27th Nov 12</td>
                <td data-order="198500">$198,500/y</td>
            </tr>
            <tr>
                <td data-search="Paul Byrd">P. Byrd</td>
                <td>Chief Financial Officer (CFO)</td>
                <td>New York</td>
                <td>64</td>
                <td data-order="1276038000">Wed 9th Jun 10</td>
                <td data-order="725000">$725,000/y</td>
            </tr>
            <tr>
                <td data-search="Gloria Little">G. Little</td>
                <td>Systems Administrator</td>
                <td>New York</td>
                <td>59</td>
                <td data-order="1239318000">Fri 10th Apr 09</td>
                <td data-order="237500">$237,500/y</td>
            </tr>
            <tr>
                <td data-search="Bradley Greer">B. Greer</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>41</td>
                <td data-order="1350082800">Sat 13th Oct 12</td>
                <td data-order="132000">$132,000/y</td>
            </tr>
            <tr>
                <td data-search="Dai Rios">D. Rios</td>
                <td>Personnel Lead</td>
                <td>Edinburgh</td>
                <td>35</td>
                <td data-order="1348614000">Wed 26th Sep 12</td>
                <td data-order="217500">$217,500/y</td>
            </tr>
            <tr>
                <td data-search="Jenette Caldwell">J. Caldwell</td>
                <td>Development Lead</td>
                <td>New York</td>
                <td>30</td>
                <td data-order="1315004400">Sat 3rd Sep 11</td>
                <td data-order="345000">$345,000/y</td>
            </tr>
            <tr>
                <td data-search="Yuri Berry">Y. Berry</td>
                <td>Chief Marketing Officer (CMO)</td>
                <td>New York</td>
                <td>40</td>
                <td data-order="1245884400">Thu 25th Jun 09</td>
                <td data-order="675000">$675,000/y</td>
            </tr>
            <tr>
                <td data-search="Caesar Vance">C. Vance</td>
                <td>Pre-Sales Support</td>
                <td>New York</td>
                <td>21</td>
                <td data-order="1323648000">Mon 12th Dec 11</td>
                <td data-order="106450">$106,450/y</td>
            </tr>
            <tr>
                <td data-search="Doris Wilder">D. Wilder</td>
                <td>Sales Assistant</td>
                <td>Sidney</td>
                <td>23</td>
                <td data-order="1284937200">Mon 20th Sep 10</td>
                <td data-order="85600">$85,600/y</td>
            </tr>
            <tr>
                <td data-search="Angelica Ramos">A. Ramos</td>
                <td>Chief Executive Officer (CEO)</td>
                <td>London</td>
                <td>47</td>
                <td data-order="1255042800">Fri 9th Oct 09</td>
                <td data-order="1200000">$1,200,000/y</td>
            </tr>
            <tr>
                <td data-search="Gavin Joyce">G. Joyce</td>
                <td>Developer</td>
                <td>Edinburgh</td>
                <td>42</td>
                <td data-order="1292976000">Wed 22nd Dec 10</td>
                <td data-order="92575">$92,575/y</td>
            </tr>
            <tr>
                <td data-search="Jennifer Chang">J. Chang</td>
                <td>Regional Director</td>
                <td>Singapore</td>
                <td>28</td>
                <td data-order="1289692800">Sun 14th Nov 10</td>
                <td data-order="357650">$357,650/y</td>
            </tr>
            <tr>
                <td data-search="Brenden Wagner">B. Wagner</td>
                <td>Software Engineer</td>
                <td>San Francisco</td>
                <td>28</td>
                <td data-order="1307401200">Tue 7th Jun 11</td>
                <td data-order="206850">$206,850/y</td>
            </tr>
            <tr>
                <td data-search="Fiona Green">F. Green</td>
                <td>Chief Operating Officer (COO)</td>
                <td>San Francisco</td>
                <td>48</td>
                <td data-order="1268265600">Thu 11th Mar 10</td>
                <td data-order="850000">$850,000/y</td>
            </tr>
            <tr>
                <td data-search="Shou Itou">S. Itou</td>
                <td>Regional Marketing</td>
                <td>Tokyo</td>
                <td>20</td>
                <td data-order="1313276400">Sun 14th Aug 11</td>
                <td data-order="163000">$163,000/y</td>
            </tr>
            <tr>
                <td data-search="Michelle House">M. House</td>
                <td>Integration Specialist</td>
                <td>Sidney</td>
                <td>37</td>
                <td data-order="1306969200">Thu 2nd Jun 11</td>
                <td data-order="95400">$95,400/y</td>
            </tr>
            <tr>
                <td data-search="Suki Burks">S. Burks</td>
                <td>Developer</td>
                <td>London</td>
                <td>53</td>
                <td data-order="1256166000">Thu 22nd Oct 09</td>
                <td data-order="114500">$114,500/y</td>
            </tr>
            <tr>
                <td data-search="Prescott Bartlett">P. Bartlett</td>
                <td>Technical Author</td>
                <td>London</td>
                <td>27</td>
                <td data-order="1304722800">Sat 7th May 11</td>
                <td data-order="145000">$145,000/y</td>
            </tr>
            <tr>
                <td data-search="Gavin Cortez">G. Cortez</td>
                <td>Team Leader</td>
                <td>San Francisco</td>
                <td>22</td>
                <td data-order="1224975600">Sun 26th Oct 08</td>
                <td data-order="235500">$235,500/y</td>
            </tr>
            <tr>
                <td data-search="Martena Mccray">M. Mccray</td>
                <td>Post-Sales support</td>
                <td>Edinburgh</td>
                <td>46</td>
                <td data-order="1299628800">Wed 9th Mar 11</td>
                <td data-order="324050">$324,050/y</td>
            </tr>
            <tr>
                <td data-search="Unity Butler">U. Butler</td>
                <td>Marketing Designer</td>
                <td>San Francisco</td>
                <td>47</td>
                <td data-order="1260316800">Wed 9th Dec 09</td>
                <td data-order="85675">$85,675/y</td>
            </tr>
            <tr>
                <td data-search="Howard Hatfield">H. Hatfield</td>
                <td>Office Manager</td>
                <td>San Francisco</td>
                <td>51</td>
                <td data-order="1229385600">Tue 16th Dec 08</td>
                <td data-order="164500">$164,500/y</td>
            </tr>
            <tr>
                <td data-search="Hope Fuentes">H. Fuentes</td>
                <td>Secretary</td>
                <td>San Francisco</td>
                <td>41</td>
                <td data-order="1265932800">Fri 12th Feb 10</td>
                <td data-order="109850">$109,850/y</td>
            </tr>
            <tr>
                <td data-search="Vivian Harrell">V. Harrell</td>
                <td>Financial Controller</td>
                <td>San Francisco</td>
                <td>62</td>
                <td data-order="1234569600">Sat 14th Feb 09</td>
                <td data-order="452500">$452,500/y</td>
            </tr>
            <tr>
                <td data-search="Timothy Mooney">T. Mooney</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>37</td>
                <td data-order="1228953600">Thu 11th Dec 08</td>
                <td data-order="136200">$136,200/y</td>
            </tr>
            <tr>
                <td data-search="Jackson Bradshaw">J. Bradshaw</td>
                <td>Director</td>
                <td>New York</td>
                <td>65</td>
                <td data-order="1222383600">Fri 26th Sep 08</td>
                <td data-order="645750">$645,750/y</td>
            </tr>
            <tr>
                <td data-search="Olivia Liang">O. Liang</td>
                <td>Support Engineer</td>
                <td>Singapore</td>
                <td>64</td>
                <td data-order="1296691200">Thu 3rd Feb 11</td>
                <td data-order="234500">$234,500/y</td>
            </tr>
            <tr>
                <td data-search="Bruno Nash">B. Nash</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>38</td>
                <td data-order="1304377200">Tue 3rd May 11</td>
                <td data-order="163500">$163,500/y</td>
            </tr>
            <tr>
                <td data-search="Sakura Yamamoto">S. Yamamoto</td>
                <td>Support Engineer</td>
                <td>Tokyo</td>
                <td>37</td>
                <td data-order="1250636400">Wed 19th Aug 09</td>
                <td data-order="139575">$139,575/y</td>
            </tr>
            <tr>
                <td data-search="Thor Walton">T. Walton</td>
                <td>Developer</td>
                <td>New York</td>
                <td>61</td>
                <td data-order="1376175600">Sun 11th Aug 13</td>
                <td data-order="98540">$98,540/y</td>
            </tr>
            <tr>
                <td data-search="Finn Camacho">F. Camacho</td>
                <td>Support Engineer</td>
                <td>San Francisco</td>
                <td>47</td>
                <td data-order="1246921200">Tue 7th Jul 09</td>
                <td data-order="87500">$87,500/y</td>
            </tr>
            <tr>
                <td data-search="Serge Baldwin">S. Baldwin</td>
                <td>Data Coordinator</td>
                <td>Singapore</td>
                <td>64</td>
                <td data-order="1333926000">Mon 9th Apr 12</td>
                <td data-order="138575">$138,575/y</td>
            </tr>
            <tr>
                <td data-search="Zenaida Frank">Z. Frank</td>
                <td>Software Engineer</td>
                <td>New York</td>
                <td>63</td>
                <td data-order="1262563200">Mon 4th Jan 10</td>
                <td data-order="125250">$125,250/y</td>
            </tr>
            <tr>
                <td data-search="Zorita Serrano">Z. Serrano</td>
                <td>Software Engineer</td>
                <td>San Francisco</td>
                <td>56</td>
                <td data-order="1338505200">Fri 1st Jun 12</td>
                <td data-order="115000">$115,000/y</td>
            </tr>
            <tr>
                <td data-search="Jennifer Acosta">J. Acosta</td>
                <td>Junior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>43</td>
                <td data-order="1359676800">Fri 1st Feb 13</td>
                <td data-order="75650">$75,650/y</td>
            </tr>
            <tr>
                <td data-search="Cara Stevens">C. Stevens</td>
                <td>Sales Assistant</td>
                <td>New York</td>
                <td>46</td>
                <td data-order="1323129600">Tue 6th Dec 11</td>
                <td data-order="145600">$145,600/y</td>
            </tr>
            <tr>
                <td data-search="Hermione Butler">H. Butler</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>47</td>
                <td data-order="1300665600">Mon 21st Mar 11</td>
                <td data-order="356250">$356,250/y</td>
            </tr>
            <tr>
                <td data-search="Lael Greer">L. Greer</td>
                <td>Systems Administrator</td>
                <td>London</td>
                <td>21</td>
                <td data-order="1235692800">Fri 27th Feb 09</td>
                <td data-order="103500">$103,500/y</td>
            </tr>
            <tr>
                <td data-search="Jonas Alexander">J. Alexander</td>
                <td>Developer</td>
                <td>San Francisco</td>
                <td>30</td>
                <td data-order="1279062000">Wed 14th Jul 10</td>
                <td data-order="86500">$86,500/y</td>
            </tr>
            <tr>
                <td data-search="Shad Decker">S. Decker</td>
                <td>Regional Director</td>
                <td>Edinburgh</td>
                <td>51</td>
                <td data-order="1226534400">Thu 13th Nov 08</td>
                <td data-order="183000">$183,000/y</td>
            </tr>
            <tr>
                <td data-search="Michael Bruce">M. Bruce</td>
                <td>Javascript Developer</td>
                <td>Singapore</td>
                <td>29</td>
                <td data-order="1309129200">Mon 27th Jun 11</td>
                <td data-order="183000">$183,000/y</td>
            </tr>
            <tr>
                <td data-search="Donna Snider">D. Snider</td>
                <td>Customer Support</td>
                <td>New York</td>
                <td>27</td>
                <td data-order="1295913600">Tue 25th Jan 11</td>
                <td data-order="112000">$112,000/y</td>
            </tr>
        </tbody>
    </table>
<!-- END  -->

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
                    </tr>
                    </thead>
                    <tbody>
                         <?php
                             require_once __DIR__.'/vendor/autoload.php';
                             $conn = r\connect('52.20.101.105');
                             $result = r\db("web")->table('problems')->run($conn);
                             foreach ($result as $doc) {
                               if(isset($doc['ProblemDescription'])) {
			 $retrieve_id = $doc[id];


                    echo "<tr class=\"gradeX\">";
                    echo "<td>".$doc['ProblemDescription']."<br>";
			echo 
			"<form class=\"form-horizontal\" method=\"post\" id=\"retrieve\" action=\"retrieve_problem.php\">
			  <br/><br/><br/>
			  <button input type=\"submit\" class=\"btn btn-sm btn-primary m-t-n-xs\" name='problem_identifier' value=\"$retrieve_id\" style=\"width:40%\" type=\"button\"><strong>View Details</strong></button>
			  </form>
			";

                    echo "<td>".$doc['ProblemCategory']."</td>";
                    echo "<td>".$doc['Tags']."</td>";
                    echo "<td>".$doc['URL']."</td>";
                    echo "<td>".$doc['AffectedDescription']."</td>";
                    echo "<td>".$doc['AffectedNumber']."</td>";
                    echo "<td>".$doc['GeographicLocation']." ".$doc['SpecificLocation']."</td>";
                    echo "<td>".$doc['Factors']."</td>";
                    echo "<td>Coming soon</td>";


            		echo "</td></tr>";


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
    <script>https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js</script>
    <script>https://code.jquery.com/jquery-1.11.3.min.js</script>
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
	<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
	  </script>
</body>

</html>
