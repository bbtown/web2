<?php

  // load rethinkdb php library
  require_once __DIR__.'/vendor/autoload.php';

  $conn = r\connect('52.20.101.105');
//$result = r\db("web")->table('problems')->run($conn);
  //foreach ($result as $doc) {
  //  print_r($doc);
  //}

$delete_id = $_POST['delete_id'];
//$comment_status = comment_status;
//$deleted_ts = gmdate("l jS \of F Y h:i:s A");
//$deleted_by = deleted_by;

//$document = Array('CommentStatus' => "Deleted");
//		  'DeletedTS' => $deleted_ts,
//		  'DeletedbBy' => $deleted_by);

r\db("web")->table('comments')->get($doc[id])->update('CommentStatus' => "deleted")->run($conn);
  echo "You have deleted your comment!";
?>
