<?php

  // load rethinkdb php library
  require_once __DIR__.'/vendor/autoload.php';

  $conn = r\connect('52.20.101.105');
  //$result = r\db("web")->table('profiles')->run($conn);
  //foreach ($result as $doc) {
  //  print_r($doc);
  //}

  $username = $_POST['idea_desc']; 
  $passwordhash = $_POST['idea_more']; 
  $email = $_POST['perspective'];  
//  $url = $_POST['url'];
//  $tags = $_POST['tags'];
//  $idea_cat = $_POST['idea_cat'];
//  $ideaID = $_['id'];
 
 $document = Array('IdeaDescription' => $idea_desc,
                    'MoreDescription' => $idea_more,
                    'Perspective' => $perspective,
                    'Tags' => $tags,
		    'IdeaCategory' => $idea_cat,
		    'URL' => $url);  

  $result = r\db("web")->table('profiles')->insert($document)->run($conn);
  echo "Thank you for creating a profile!";
?>
