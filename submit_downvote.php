<?php

  // load rethinkdb php library
  require_once __DIR__.'/vendor/autoload.php';

  $conn = r\connect('34.239.185.58');
//$result = r\db("web")->table('problems')->run($conn);
  //foreach ($result as $doc) {
  //  print_r($doc);
  //}

$item_id = $_POST['item_id'];
$item_type = $_POST['item_type'];
$vote_down = true;
// $vote_type = "down";
$vote_type = $_POST['vote_type'];
$vote_up = false;
$vote_user = $_POST['vote_user']; 
$vote_ts = gmdate("l jS \of F Y h:i:s A");





  $document = Array('ItemID' => $item_id,
  	      	     'ItemType' => $item_type,
		     'VoteDown' => $vote_down,
		     'VoteType' => $vote_type,
		     'VoteUp' => $vote_up,
		     'VoteUser' => $vote_user,
		     'VoteTS' => $vote_ts);

  $result = r\db("web")->table('votes')->insert($document)->run($conn);
  echo "Thank you for voting!";
?>
