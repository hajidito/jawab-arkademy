<?php

$biodata = array( 
  "name" => "Haji Dito Murya Alfarohmi",
  "address" => "Perumahan Tegal Besar Permai 1 AQ|19 Jember",
  "hobbies" => array( 
    "Kebudayaan",
    "Olahraga",
	"Seni"
	),
  "is_married" => false,
  "school" => array(
    "highSchool"  => "SMAN 1 Jember",
    "university"  => "Telkom"
  ),
  "skills" => array(
    array(
      "name" => "PHP",
      "score" => "70"
    ),
	array(
      "name" => "Oracle",
      "score" => "70"
    ),
	array(
      "name" => "MySQL",
      "score" => "70"
    ),
	array(
      "name" => "Python",
      "score" => "70"
    ),
	array(
      "name" => "Java",
      "score" => "60"
    ),
	array(
      "name" => "Badminton",
      "score" => "90"
    )
  )
);

// encode array to json
function buatbiodata($biodata)
{
	$json = json_encode($biodata);
// write json to file
	if (file_put_contents("biodata.json", $json))
		return "File JSON sukses dibuat...";
	else 
		return "Oops! Terjadi error saat membuat file JSON...";
}
echo buatbiodata($biodata);
// data.json
// {"data"=>array({"id"=>"USR1","name"=>"Steve Jobs","company"=>"Apple"},{"id"=>"USR2","name"=>"Bill Gates","company"=>"Microsoft"},{"id"=>"USR3","name"=>"Mark Zuckerberg","company"=>"Facebook"})}
?>