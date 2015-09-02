<?php

  // load rethinkdb php library
  require_once __DIR__.'/vendor/autoload.php';

  $conn = r\connect('52.20.101.105');
  //$result = r\db("web")->table('problems')->run($conn);
  //foreach ($result as $doc) {
  //  print_r($doc);
  //}

  $prob_desc = $_POST['prob_desc']; 
  $prob_more = $_POST['prob_more']; 
  $perspective = $_POST['perspective'];  
  $url = $_POST['url'];
  $tags = $_POST['tags'];
  $prob_cat = $_POST['prob_cat'];
//  $prob_cat2 = $_POST['prob_cat2'];
  $problemID = $_['id'];

  $document = Array('ProblemDescription' => $prob_desc,
                    'MoreDescription' => $prob_more,
                    'Perspective' => $perspective,
                    'URL' => $url,
		    'Tags' => $tags,
		    'ProblemCategory' => $prob_cat);
//		    'ProblemCategory2' => $prob_cat2);
   //		    'id' => $problemID);  

  $result = r\db("web")->table('problems')->insert($document)->run($conn);
  echo "inserted data.";
?>
