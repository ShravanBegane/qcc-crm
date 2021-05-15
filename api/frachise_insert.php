<?php
//header("Content-Type:application/json");
include("conn.php");


     
  if(isset($_POST['accessedpermission']) && !empty($_POST['accessedpermission'])){
    $accessedpermission= $_POST['accessedpermission'];  
 
 }
  if(isset($_POST['zipcode']) && !empty($_POST['zipcode'])){
    $zipcode = $_POST['zipcode'];  
 }

     

            $query = "INSERT INTO vtiger_franchise_detail (zipcode,accessedpermission) VALUES ('$zipcode','$accessedpermission')";

$result = mysqli_query($conn, $query);


if (!$result) {
    die('Invalid query: ' . mysqli_error()."-red-");
   
}
else{
 die( 'Data insert sucessfully-green-');

}
?>

        
        
   


