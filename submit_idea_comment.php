<?php

  // load rethinkdb php library
  require_once __DIR__.'/vendor/autoload.php';

  $conn = r\connect('34.239.185.58');
  //$result = r\db("web")->table('ideas')->run($conn);
  //foreach ($result as $doc) {
  //  print_r($doc);
  //}

  $idea_desc = $_POST['idea_desc']; 
  $idea_more = $_POST['idea_more']; 
  $perspective = $_POST['perspective'];  
  $url = $_POST['url'];
  $tags = $_POST['tags'];
  $idea_cat = $_POST['idea_cat'];
//  $ideaID = $_['id'];
 
 $document = Array('IdeaDescription' => $idea_desc,
                    'MoreDescription' => $idea_more,
                    'Perspective' => $perspective,
                    'Tags' => $tags,
		    'IdeaCategory' => $idea_cat,
		    'URL' => $url);  

  $result = r\db("web")->table('ideas')->insert($document)->run($conn);
  echo "Thank you for submitting your idea!";
?>
