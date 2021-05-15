
<?php
//header("Content-Type:application/json");
include("conn.php");


if(isset($_POST['ids']) && !empty($_POST['ids'])){
    $id = $_POST['ids'];
 }
 if(isset($_POST['zipcodes']) && !empty($_POST['zipcodes'])){
    $zipcodes = $_POST['zipcodes'];
 }
  if(isset($_POST['accessedpermissions']) && !empty($_POST['accessedpermissions'])){
    $accessedpermissions = $_POST['accessedpermissions'];
 }

 
$query = "UPDATE vtiger_franchise_detail SET zipcode='$zipcodes', accessedpermission='$accessedpermissions' WHERE id = '$id'";

$result = mysqli_query($conn, $query); 
 
if (!$result) {
    die('Invalid query: ' . mysqli_error().'-red-');
}

 die(  'Data updated successfully -green-');


?>