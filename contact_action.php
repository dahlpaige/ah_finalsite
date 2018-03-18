<?php 

$missing_count = 0;

$form_fields=array();

$form_fields["contactFirst"]="text";
$form_fields["contactLast"]="text";
$form_fields["contactEmail"]="email";
$form_fields["contactPhone"]="tel";
$form_fields["contactComment"]="textarea";



include_once "includes/html_top.php";
include_once "includes/functions.php"; 
include_once "includes/header.php";

foreach ($form_fields as $key => $value) { // Loop through form fields. Key is the name of the field, value is type of field

     check_submitted($key, $value, $missing_count);

     sanitize($key, $value, $_POST[$key]); // ESPECIALLY IMPORTANT NOW THAT WE ARE INSERTING INTO A DATABASE
     
}

if($missing_count > 0) {

     echo "<br />Please <a href='contact.php'>Go Back</a> and fill in the missing data.<br /><br /></body></html>";
     exit;

}

else {
	display_data();
}



// ASSIGN DATA TO VARIABLES FOR EASIER HANDLING


$contactFirst=$_POST["contactFirst"];
$contactLast=$_POST["contactLast"];
$contactEmail=$_POST["contactEmail"];
$contactPhone=$_POST["contactPhone"];
$contactComment=$_POST["contactComment"];


//Connect to Database
include_once "includes/connection.php";

//SQL

$sql="INSERT INTO contact(contactFirst, contactLast, contactEmail, contactPhone, contactComment)"
. " VALUES('$contactFirst', '$contactLast', '$contactEmail', '$contactPhone', '$contactComment');"; 

// Display SQL for learning and trouble-shooting
     
// echo "<br>2. SQL: " . $sql . "<br>";

// RUN QUERY
     
// Run a query
try {
     $result = $connection->query($sql);
     // echo "3. Query succeeded! The new record was added.<br>";
} 
catch (PDOException $e) {
     die(" Query failed! " . $e->getMessage());
}


?>

<?php include_once "includes/footer.php"; ?>