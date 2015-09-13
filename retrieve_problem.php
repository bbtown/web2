<?php
  // load rethinkdb php library
  require_once __DIR__.'/vendor/autoload.php';
  $conn = r\connect('52.20.101.105');
  $retrieve_id = $_POST['retrieve_id'];
//  $result = r\db("web")->table('ideas')->run($conn);
//$result = r\db("web")->table('ideas')->getAll("$retrieve_id", array("index" => "id"))->run($conn);
//$result = r\db("web")->table('ideas')->count()->run($conn);
//    echo "Count: $result\n";
    $result = r\db("web")->table('problems')->map(function($x) {
            return $x('id');
        })->run($conn);
    
$document = Array ('id' => $retrieve_id);
    foreach ($result as $doc) {
if ($retrieve_id == $doc['id']){ // forgot single quote 11:42 BL 
      print_r($doc);
    }}
?>