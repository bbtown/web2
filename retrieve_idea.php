<?php

  // load rethinkdb php library
  require_once __DIR__.'/vendor/autoload.php';

  $conn = r\connect('52.20.101.105');

  $retrieve_id = $_POST['retrieve_id'];

//  $result = r\db("web")->table('ideas')->run($conn);



$result = r\db("web")->table('ideas')->get($retrieve_id)->run($conn);
echo "Retrieving information...";

                                 
    //print_r($doc[$retrieve_id]);


echo "<h4>Factors that affect the problem: </h4>".$doc['Factors'];
  
// $document = Array('IdeaDescription' => $idea_desc,
//                    'MoreDescription' => $idea_more,
//                    'Perspective' => $perspective,
//                    'Tags' => $tags,
//		    'IdeaCategory' => $idea_cat,
//		    'URL' => $url);  

  $result = r\db("web")->table('ideas')->insert($document)->run($conn);
  echo "Retrieving information...";
?>
