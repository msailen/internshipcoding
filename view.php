<html lang="en">
<head>
    <title>Internship Coding Challenge </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <h1>Create and Read Database</h1>
    <nav class="navbar navbar-expand-sm bg navbar-dark justify-content-center">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="btn btn-success" href="/index.php">Enter Client Details</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-success" href="/view.php">View Client Details</a>
            </li> 
        </ul>
    </nav>
<div class="container">    
    <form method="POST" action="/export.php">
        <button style="float: right; margin-bottom: 3px;" type="submit" name="export" class="btn btn-primary">Export in CSV</button>
    </form>
</div>
<div class="container">
<?php

$serverName= "sql311.epizy.com";
$userName="epiz_24452320";
$password="uIY4e7myIpd1";
$dbName="epiz_24452320_create_and_read";

$conn= new mysqli($serverName,$userName,$password,$dbName);

if($conn===false){
    die("Connection to database unsuccessful".$conn->connect_error);
}

$sql="SELECT * FROM `client_details` ORDER BY id DESC";
$result=$conn->query($sql);

echo "<table border='1'>
<tr>
<th>Client Name</th>
<th>Email Address</th>
<th>Address</th>
<th>Gender</th>
<th>Phone Number</th>
<th>Nationality</th>
<th>Date of birth</th>
<th>Degree Level</th>
<th>Degree Name</th>
<th>College/University</th>
<th>Grade</th>
<th>Mode of Contact</th>

</tr>";

if($result){
    while($row=$result->fetch_assoc()){
        $name=$row["clientName"];
        $email=$row["email"];
        $address=$row["address"];
        $gender=$row["gender"];
        $phone=$row["phone"];
        $nationality=$row["nationality"];
        $dob=$row["dob"];
        $degreeLevel=$row["degreeLevel"];
        $degreeName=$row["degreeName"];
        $collegeName=$row["collegeName"];
        $grade=$row["grade"];
        $modeOfContact=$row["modeOfContact"];

        echo '<tr>
                     <td>'.$name.'</td> 
                     <td>'.$email.'</td> 
                     <td>'.$address.'</td> 
                     <td>'.$gender.'</td> 
                     <td>'.$phone.'</td>
                     <td>'.$nationality.'</td> 
                     <td>'.$dob.'</td> 
                     <td>'.$degreeLevel.'</td> 
                     <td>'.$degreeName.'</td> 
                     <td>'.$collegeName.'</td> 
                     <td>'.$grade.'</td> 
                     <td>'.$modeOfContact.'</td> 
                </tr>';
    }
    echo "</table>";
$conn->close();
}
?>
</div>
    </body>

</html>
