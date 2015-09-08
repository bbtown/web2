<?php

  // load rethinkdb php library
  require_once __DIR__.'/vendor/autoload.php';

  $conn = r\connect('52.20.101.105');

  $retrieve_id = $_POST['retrieve_id'];

//  $result = r\db("web")->table('ideas')->run($conn);



$result = r\db("web")->table('ideas')->get(id)->run($conn);




//echo "Retrieving information...".$retrieve_id;
//echo "you submitted stuff.";

//    echo "$result\n";
//echo $doc.[id];
                                
    //print_r($doc[$retrieve_id]);

//    foreach ($result as $doc) {
//        if ($doc.['id'] == $retrieve_id) {
//	   echo $doc.['IdeaDescription'];
//};
//    }

//echo "<h4>Factors that affect the problem: </h4>".$doc['Factors'];
  
 $document = Array('IdeaDescription' => $idea_desc,
                    'MoreDescription' => $idea_more,
                    'Perspective' => $perspective,
                    'Tags' => $tags,
		    'IdeaCategory' => $idea_cat,
		    'URL' => $url);  


    foreach ($result as $doc) {
        print_r($doc);
    }


?>
