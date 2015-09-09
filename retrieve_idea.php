<?php

  // load rethinkdb php library
  require_once __DIR__.'/vendor/autoload.php';

  $conn = r\connect('52.20.101.105');

  $retrieve_id = $_POST['retrieve_id'];

//  $result = r\db("web")->table('ideas')->run($conn);



$result = r\db("web")->table('ideas')->getAll('$retrieve_id', array("index" => "id"))->run($conn);


//$result = r\db("web")->table('ideas')->count()->run($conn);
//    echo "Count: $result\n";



//    $result = r\db("web")->table('ideas')->map(function($x) {
//            return $x('id');
//        })->run($conn);

//    foreach ($result as $doc) {
//        print_r($doc);
//    }


//echo '$doc.[id]'.$doc.['id'];




//echo "Retrieving information...".$retrieve_id;
//echo "you submitted stuff.";

    echo "$result\n";
//echo $doc.[id];
                                
    //print_r($doc[$retrieve_id]);

//    foreach ($result as $doc) {
//        if ($retrieve_id == $doc.[id]) {
//	    echo "this test worked :D  ".'$retrieve_id: '.$retrieve_id.'$doc.[id]: '.$doc.[id];



//};
//    } else {echo "this test failed: ".$retrieve_id." | ".$doc.[id];};

//}

echo "<h4>Factors that affect the problem: </h4>".$doc['IdeaDescription'];
  
// $document = Array('IdeaDescription' => $idea_desc,
//                    'MoreDescription' => $idea_more,
//                    'Perspective' => $perspective,
//                    'Tags' => $tags,
//		    'IdeaCategory' => $idea_cat,
//		    'URL' => $url);  


//$document = Array ('id' => $retrieve_id);

  //  foreach ($result as $doc) {
//        print_r($doc);
    //}


?>
