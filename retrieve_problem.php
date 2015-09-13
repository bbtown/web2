<?php
  // load rethinkdb php library
  require_once __DIR__.'/vendor/autoload.php';
  $conn = r\connect('52.20.101.105');
  $retrieve_id = $_POST['idea_identifier'];
//  $result = r\db("web")->table('ideas')->run($conn);
$result = r\db("web")->table('ideas')->getAll($retrieve_id, array("index" => "id"))->run($conn);
//$result = r\db("web")->table('ideas')->count()->run($conn);
//    echo "Count: $result\n";
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
    
    foreach ($result[0] as $key => $value) {
        echo "<span><h2>$key</h2>: $value</span><br>";
    }
?>