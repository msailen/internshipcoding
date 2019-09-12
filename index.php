<?php
$name_error='';
$email_error='';
$address_error='';
$phone_error='';
$nationality_error='';
$gender_error='';
$dob_error='';
$degreeLevel_error='';
$degreeName_error='';
$collegeName_error='';
$grade_error='';
$contactMode_error='';


if(isset($_POST['submit'])){
    if(empty($_POST['fullName'])){
        $name_error="Please enter your name";
    }
   else{
        if(!preg_match("/^[a-zA-Z ]*$/",$_POST['fullName'])){
            $name_error="<p>Name must contain only letters and white space</p>";
        }
   }
   if(empty($_POST['email'])){
       $email_error="Please enter your valid email";
   }
   else{
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $email_error = "Invalid email format";
      }
      
   }
   if(empty($_POST['address'])){
       $address_error="Please enter your address";
   }
   if(empty($_POST['dob'])){
       $dob_error="Select your date of birth";
   }
   if(empty($_POST['phoneNumber'])){
       $phone_error="Enter your contact number";
    }else{
        if(!preg_match('/^[0-9]{10}+$/', $_POST['phoneNumber'])){
            $phone_error="Phone number must contain 10 numbers";
        }    
    }
    if(empty($_POST['nationality'])){
        $nationality_error="Enter your nationality";
    }else{
        if(!preg_match("/^[a-zA-Z ]*$/",$_POST['nationality'])){
            $nationality_error="<p>Nationality must contain only letters and white space</p>";
        }
    }
    if(empty($_POST['gender'])){
        $gender_error="Select your gender";
    }
    if(empty($_POST['degreeLevel'])){
        $degreeLevel_error="Select your recently completed degree";
    
    }
    if(empty($_POST['degreeName'])){
        $degreeName_error="Enter your recently completed degree name";

    }
    if(empty($_POST['collegeName'])){
        $collegeName_error="Enter where you studied";

    }
    if(empty($_POST['gradeObtained'])){
        $grade_error="Enter the grade obtained";
    }
    if(empty($_POST['modeOfContact'])){
        $contactMode_error="Select preferred mode for contact";
    }
    if($name_error=="" && $email_error=="" && $address_error=="" && $gender_error=="" && $phone_error=="" && $nationality_error=="" && $dob_error=="" && $degreeLevel_error=="" && $degreeName_error=="" && $collegeName_error=="" && $grade_error=="" && $contactMode_error==""){
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
    }
}
?>

<html lang="en">
<head>
    <title>Internship Coding Challenge </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="index.css" type="text/css">
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
        <div class="text-danger" style="text-align: center;"> <?php echo $name_error; ?></div>
        <div class="text-danger" style="text-align: center;"> <?php echo $email_error; ?></div>
        <div class="text-danger" style="text-align: center;"> <?php echo $address_error; ?></div>
        <div class="text-danger" style="text-align: center;"> <?php echo $dob_error; ?></div>
        <div class="text-danger" style="text-align: center;"> <?php echo $phone_error; ?></div>
        <div class="text-danger" style="text-align: center;"> <?php echo $nationality_error; ?></div>
        <div class="text-danger" style="text-align: center;"> <?php echo $gender_error; ?></div>
        <div class="text-danger" style="text-align: center;"> <?php echo $degreeLevel_error; ?></div>
        <div class="text-danger" style="text-align: center;"> <?php echo $degreeName_error; ?></div>
        <div class="text-danger" style="text-align: center;"> <?php echo $collegeName_error; ?></div>
        <div class="text-danger" style="text-align: center;"> <?php echo $grade_error; ?></div>
        <div class="text-danger" style="text-align: center;"> <?php echo $contactMode_error; ?></div>

    </div>

    <div class="container mainWrapper jumbotron">


        <form method="POST" action="">
            <div class="wrapper">
                <div>
                    <label>Full Name:</label>
                    <input type="text" name="fullName" required placeholder="Type your full name">
                </div>
                <div>
                    <label>Email:</label>
                    <input type="email" name="email" required placeholder="Type your email">

                </div>
            </div>
            <div class="wrapper">
                <div>
                    <label>Address:</label>
                    <input type="text" name="address" required placeholder="Street Address/City">

                </div>
                <div>
                    <label>Date of birth:</label>
                    <input type="date" name="dob" required>
                </div>

            </div>
            <div class="wrapper">
                <div>
                    <label>Phone Number:</label>
                    <input type="number" name="phoneNumber" required placeholder="Type your phone number" maxlength="10"
                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                </div>
                <div>
                    <label>Nationality:</label>

                    <input type="text" name="nationality" required placeholder="Type your nationality">
                </div>
            </div>
            <div class="wrapper">
                <div>
                    <label>Gender:</label>
                </div>

                <div class="radioGroup">
                    <input type="radio" value="Male" name="gender" required>
                    <label>Male</label>
                    <input type="radio" value="Female" name="gender" required>
                    <label>Female</label>
                </div>




            </div>
            <div class="wrapperText">
                <label>Education Level (Choose recently completed degree)</label>
            </div>
            <div>
                <select name="degreeLevel" required>
                    <option value="highSchool">High School Level</option>
                    <option value="bachelorDegree">Bachelor's Degree</option>
                    <option value="masterDegree">Master's Degree</option>
                </select>
                <input type="text" placeholder="Degree Name" name="degreeName" required>
                <input type="text" placeholder="College/University" name="collegeName" required>
                <input type="text" placeholder="Grade Obtained" name="gradeObtained" required >
            </div>
            <div class="wrapperText">
                <label>Preferred mode of contact:</label>
            </div>
            <div class="wrapper">
                <div class="radioGroup radioContact">
                    <input type="radio" value="Email" name="modeOfContact" required>
                    <label>Email</label>
                    <input type="radio" value="Phone" name="modeOfContact" required>
                    <label>Phone</label>
                    <input type="radio" value="None" name="modeOfContact" required>
                    <label>None</label>
                </div>
            </div>
            <div class="submitButton">
                <button class="btn btn-primary" name="submit" type="submit" >Submit</button>
            </div>
        </form>
    </div>
</body>

</html>