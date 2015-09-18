<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Idea Feed</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Data Tables -->
    <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- FooTable -->
    <link href="css/plugins/footable/footable.core.css" rel="stylesheet">

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

</script>

</head>

<body>

    <div id="wrapper">

        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title"> 
                     <h1>Idea Feed</h1>
                        <!-- <div class="ibox-tools">
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
                    </div> -->
                    <div class="ibox-content">

<input type="text" class="form-control input-sm m-b-xs" id="filter"
                                   placeholder="Search in table">
                    <table class="footable table table-stripped" data-page-size="10" data-filter=#filter> 
                    <thead>
                    <tr>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Tags</th>
                        <th data-hide="phone,tablet">URL</th>
                        <th>Location</th>
                        <th>Awareness</th>
                    </tr>
                    </thead>
                    <tbody>

                         <?php
                             require_once __DIR__.'/vendor/autoload.php';
                             $conn = r\connect('52.20.101.105');
                             $result = r\db("web")->table('ideas')->run($conn);
                             foreach ($result as $doc) {
                               if(isset($doc['IdeaDescription'])) {
			  $retrieve_id = $doc[id];
                    echo "<tr class=\"gradeX\">";
                    echo "<td>".$doc['IdeaDescription']."<br>";
			  echo 
			  "<form class=\"form-horizontal\" method=\"post\" id=\"retrieve\" action=\"retrieve_idea.php\">
			      <br/><br/><br/>
			        <button input type=\"submit\" class=\"btn btn-sm btn-primary m-t-n-xs\" name='idea_identifier' value=\"$retrieve_id\" style=\"width:40%\" type=\"button\"><strong>View/Edit Details</strong></button>
				  </form>
			  ";
                    echo "<td>".$doc['IdeaCategory']."</td>";
                    echo "<td>".$doc['Tags']."</td>";
                    echo "<td>".$doc['URL']."</td>";
                    echo "<td>".$doc['GeographicLocation']." ".$doc['SpecificLocation']."</td>";
                    echo "<td>Coming soon</td>";
			echo "</td></tr>";
       }            
}
?>
                    </tbody>
                    <tfoot>
<!--                    <tr>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Tags</th>
                        <th data-hide="phone,tablet">URL</th>
                        <th>Awareness</th>

                    </tr> --> 
		    <tr>
                                    <td colspan="5">
                                        <ul class="pagination pull-right"></ul>
                                    </td>
                                </tr>
                    </tfoot>
                    </table>
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
    <script src="js/plugins/jeditable/jquery.jeditable.js"></script>

    <!-- Data Tables -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="js/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="js/plugins/dataTables/dataTables.tableTools.min.js"></script>

    <!-- FooTable -->
    <script src="js/plugins/footable/footable.all.min.js"></script>


    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {

            $('.footable').footable();
            $('.footable2').footable();

        });

    </script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {
            $('.dataTables-example').dataTable({
                responsive: true,
                "dom": 'T<"clear">lfrtip',
                "tableTools": {
                    "sSwfPath": "js/plugins/dataTables/swf/copy_csv_xls_pdf.swf"
                }
            });

            /* Init DataTables */
            var oTable = $('#editable').dataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable( '../example_ajax.php', {
                "callback": function( sValue, y ) {
                    var aPos = oTable.fnGetPosition( this );
                    oTable.fnUpdate( sValue, aPos[0], aPos[1] );
                },
                "submitdata": function ( value, settings ) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition( this )[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            } );


        });

        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData( [
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row" ] );

        }
    </script>
<style>
    body.DTTT_Print {
        background: #fff;

    }
    .DTTT_Print #page-wrapper {
        margin: 0;
        background:#fff;
    }

    button.DTTT_button, div.DTTT_button, a.DTTT_button {
        border: 1px solid #e7eaec;
        background: #fff;
        color: #676a6c;
        box-shadow: none;
        padding: 6px 8px;
    }
    button.DTTT_button:hover, div.DTTT_button:hover, a.DTTT_button:hover {
        border: 1px solid #d2d2d2;
        background: #fff;
        color: #676a6c;
        box-shadow: none;
        padding: 6px 8px;
    }

    .dataTables_filter label {
        margin-right: 5px;

    }
</style>
</body>

</html>
