<?php
?>
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

    <div class="container mainWrapper jumbotron">
        <form method="POST" action="/submit.php">
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
                <input type="text" placeholder="Grade Obtained" name="gradeObtained" required>
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
                <button class="btn btn-primary"name="submit" type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>