<?php



  // load rethinkdb php library
  require_once __DIR__.'/vendor/autoload.php';

  $conn = r\connect('52.20.101.105');

  $retrieve_id = $_POST['idea_identifier'];

//  $result = r\db("web")->table('ideas')->run($conn);



$result = r\db("web")->table('ideas')->getAll($retrieve_id, array("index" => "id"))->run($conn);





    //$result = r\db("web")->table('ideas')->map(function($x) {
    //        return $x('id');
    //    })->run($conn);


    //$arr_values = array_values($result[0]);
    //$arr_keys = array_keys($result[0]);

    //echo count($result);
    //echo count($result[0]);

    //for ($i=1; $i < count($result[0]); $i++) {

    //  echo $arr_keys[$i].": ".$arr_values[$i];

    //}

//    foreach ($result as $doc) {
    //   echo $arr_keys[
    //   echo $doc[''];
    //   echo $doc[''];
    //   echo $doc[''];

//if ($retrieve_id == $doc['id']){ // forgot single quote 11:42 BL 
      //print_r($doc);
    //}
  //   print_r($result[0]);


    

    foreach ($result[0] as $key => $value) {
        echo "<span><h2>$key</h2>: $value</span><br>";
    }




?>
