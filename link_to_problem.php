<?php

  // load rethinkdb php library
  require_once __DIR__.'/vendor/autoload.php';

  $conn = r\connect('52.20.101.105');
  //$result = r\db("web")->table('problems')->run($conn);
  //foreach ($result as $doc) {
  //  print_r($doc);
  //}

//so we want to add fields for idea id's to link..  how do we keep adding new idea id's?  for now i guess we will start with one to link...

// can we update two separate databases in one php file?  perhaps create two different document arrays and insert them via the $result string?
//loop that checks to see if the field is populated.  when it is not populated, it creates it and fills it.  use counter to name the field and check the different field names



  $retrieve_prob_id = $_POST['problem_identifier'];
  $retrieve_idea_id = $_POST['idea_idenifier'];

//$result = r\db("web")->table('problems')->getAll($retrieve_id, array("index" => "id"))->run($conn);


//  $document_problem = Array('ProblemDescription' => $prob_desc,
//		    'SpecificLocation' => $spec_loc,
//		    'Factors' => $factors);

  //$result = r\db("web")->table('problems')->insert($document_problem)->run($conn);


//////////////////////////////////////////////////////////////////


//foreach ($result as $doc) {

while (count < 100) {                                   
if(isset($doc['ProblemLink'.$count])) {

$count++;

};

else {};

};

//echo "<h4>Impact Type: ".$doc['AffectedNumber']." affected</h4>";}
//else {echo "<h4>Impact Type: </h4>";};


$result_prob = r\db("web")->table('problems')->get("$retrieve_prob_id")->update({IdeaLink1: 'Beth'})->run($conn);

echo "Error: cannot link more than 100 ideas to one problem.";



$result_idea = r\db("web")->table('ideas')->get("$retrieve_idea_id")->update({ProblemLink1: 'Beth'})->run($conn);

echo "Error: cannot link more than 100 problems to one idea.";

  echo "Thank you for linking this idea to this problem!  Unlink?";

?>
