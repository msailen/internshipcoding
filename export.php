<?php

$serverName= "sql311.epizy.com";
$userName="epiz_24452320";
$password="uIY4e7myIpd1";
$dbName="epiz_24452320_create_and_read";

if(isset($_POST["export"])){
    $conn= new mysqli($serverName,$userName,$password,$dbName);
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename= client-data.csv');
    $output=fopen("php://output", "w");
    fputcsv($output,array('ID','Client Name','Email Address','Address','Gender','Phone Number','Nationality','Date of birth','Degree Level','Degree Name', 'College/University','Grade Obtained','Mode of Contact'));
    $sql="SELECT * FROM client_details ORDER BY id DESC";
    $result=$conn->query($sql);
    while($row= $result->fetch_assoc()){
        fputcsv($output, $row);   
    }
    fclose($output);
}


?>