<?php 

$serverName= "sql311.epizy.com";
$userName="epiz_24452320";
$password="uIY4e7myIpd1";
$dbName="epiz_24452320_create_and_read";

$conn= new mysqli($serverName,$userName,$password,$dbName);

if($conn===false){
    die("Connection to database unsuccessful".$conn->connect_error);
}
$fullName = $conn->real_escape_string($_REQUEST['fullName']);
$email = $conn->real_escape_string($_REQUEST['email']);
$address = $conn->real_escape_string($_REQUEST['address']);
$gender = $conn->real_escape_string($_REQUEST['gender']);
$phoneNumber = $conn->real_escape_string($_REQUEST['phoneNumber']);
$nationality = $conn->real_escape_string($_REQUEST['nationality']);
$dob = $conn->real_escape_string($_REQUEST['dob']);
$degreeLevel = $conn->real_escape_string($_REQUEST['degreeLevel']);
$degreeName = $conn->real_escape_string($_REQUEST['degreeName']);
$collegeName = $conn->real_escape_string($_REQUEST['collegeName']);
$grade = $conn->real_escape_string($_REQUEST['gradeObtained']);
$modeOfContact = $conn->real_escape_string($_REQUEST['modeOfContact']);

$sql="INSERT INTO `client_details`(`clientName`,`email`,`address`,`gender`,`phone`,`nationality`,`dob`,`degreeLevel`,`degreeName`,`collegeName`,`grade`,`modeOfContact`) VALUES ('$fullName','$email','$address','$gender','$phoneNumber','$nationality','$dob','$degreeLevel','$degreeName','$collegeName','$grade','$modeOfContact');";

if($conn->query($sql)=== true){
    header('Location: /view.php');


}else{
    echo("Could not able to add new record" .$conn->error);
}

$conn->close();


?>   
