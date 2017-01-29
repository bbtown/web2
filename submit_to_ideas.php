<?php

  // load rethinkdb php library
  require_once __DIR__.'/vendor/autoload.php';

  $conn = r\connect('52.20.101.105');
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
  $idea_ts = time(); 
//  $ideaID = $_['id'];
 
 $document = Array('IdeaDescription' => $idea_desc,
                    'MoreDescription' => $idea_more,
                    'Perspective' => $perspective,
                    'Tags' => $tags,
		    'IdeaCategory' => $idea_cat,
		    'URL' => $url, 
		    'IdeaTS' -> $idea_ts);

  $result = r\db("web")->table('ideas')->insert($document)->run($conn);
  echo "Thank you for submitting your idea!";
?>
