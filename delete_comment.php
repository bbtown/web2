<?php

  // load rethinkdb php library
  require_once __DIR__.'/vendor/autoload.php';

  $conn = r\connect('34.239.185.58');
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

$result = r\db("web")->table('comments')->filter(array('id' => $delete_id))->update(array('CommentStatus' => "deleted"))->run($conn);
  echo "You have deleted your comment!";
?>
