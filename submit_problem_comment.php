<?php

  // load rethinkdb php library
  require_once __DIR__.'/vendor/autoload.php';

  $conn = r\connect('52.20.101.105');
//$result = r\db("web")->table('problems')->run($conn);
  //foreach ($result as $doc) {
  //  print_r($doc);
  //}

$comment_txt = $_POST['comment_txt'];
$comment_idea_id = $_POST['comment_idea_id'];
$comment_prob_id = $_POST['comment_prob_id'];
$comment_tags = $_POST['comment_tags'];
$comment_flag = $_POST['comment_flag'];
$comment_sentiment = $_POST['comment_sentiment'];
//$comment_ts = (gmdate("m-d-Y h-m-s", getdate()));
$comment_ts = getdate();

$comment_user = $_POST['comment_user'];

  $document = Array('CommentText' => $comment_txt,
  	   	  'CommentIdeaID' => $comment_idea_id,
		  'CommentProblemID' => $comment_prob_id,
		  'CommentTags' => $comment_tags,
		  'CommentFlag' => $comment_flag,
		  'CommentSentiment' => $comment_sentiment,
		  'CommentTS' => $comment_ts,
		  'CommentUser' => $comment_user);

  $result = r\db("web")->table('comments')->insert($document)->run($conn);
  echo "Thank you for posting your comment!";
?>
