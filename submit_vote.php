<?php

  // load rethinkdb php library
  require_once __DIR__.'/vendor/autoload.php';

  $conn = r\connect('52.20.101.105');
//$result = r\db("web")->table('problems')->run($conn);
  //foreach ($result as $doc) {
  //  print_r($doc);
  //}

$item_id = $_POST['item_id'];
$item_type = $_POST['item_type'];
$vote_down = $_POST['vote_down'];
$vote_type = $_POST['vote_type'];
$vote_up = $_POST['vote_up'];
$vote_user = $_POST['vote_user']; 






  $document = Array('ItemID' => $item_id,
  	      	     'ItemType' => $item_type,
		     'VoteDown' => $vote_down,
		     'VoteType' => $vote_type,
		     'VoteUp' => $vote_up,
		     'VoteUser' => $vote_user);

  $result = r\db("web")->table('votes')->insert($document)->run($conn);
  echo "Thank you for voting!";
?>
