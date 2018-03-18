<?php 

$missing_count = 0;

$form_fields=array();

$form_fields["position"]="select";
$form_fields["firstname"]="text";
$form_fields["lastname"]="text";
$form_fields["email"]="email";
$form_fields["phone"]="tel";
$form_fields["eventSat"]="select";
$form_fields["eventSun"]="select";


include_once "includes/html_top.php";
include_once "includes/functions.php"; 
include_once "includes/header.php";

foreach ($form_fields as $key => $value) { // Loop through form fields. Key is the name of the field, value is type of field

     check_submitted($key, $value, $missing_count);

     sanitize($key, $value, $_POST[$key]); // ESPECIALLY IMPORTANT NOW THAT WE ARE INSERTING INTO A DATABASE
     
}

if($missing_count > 0) {

     echo "<br />Please <a href='registration.php'>Go Back</a> and fill in the missing data.<br /><br /></body></html>";
     exit;

}

else {
	display_data();
}



// ASSIGN DATA TO VARIABLES FOR EASIER HANDLING



$position=$_POST["position"];
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$eventSat=$_POST["eventSat"];
$eventSun=$_POST["eventSun"];

//Connect to Database
include_once "includes/connection.php";

//SQL

$sql="INSERT INTO registration(position, firstname, lastname, email, phone, eventSat, eventSun)"
. " VALUES('$position', '$firstname', '$lastname', '$email', '$phone', '$eventSat', '$eventSun');"; 

// Display SQL for learning and trouble-shooting
     
//echo "<br>2. SQL: " . $sql . "<br>";

// RUN QUERY
     
// Run a query
try {
     $result = $connection->query($sql);
     //echo "3. Query succeeded! The new record was added.<br>";
} 
catch (PDOException $e) {
     die("3. Query failed! " . $e->getMessage());
}


?>

<?php include_once "includes/footer.php"; ?>