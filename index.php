<?php
?>
<html lang="en">
    
<head>
    <title>Internship Coding Challenge </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        td {
            display: inline-block;
            text-align: center;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Create and Read Database</h1>
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark justify-content-center">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/index.php">Enter Client Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/view.php">View Client Details</a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <div class="jumbotron">
            <form method="POST" action="/submit.php">
                <table class="table table-borderless">
                    <tr>
                        <div>
                            <td>
                                <label>Full Name:</label>
                                <input type="text" name="fullName" required placeholder="Type your full name">
                            </td>
                            <td>
                                <label>Email:</label>
                                <input type="email" name="email" required placeholder="Type your email">
                            </td>
                        </div>
                    </tr>
                    <tr>
                        <div>
                            <td>
                                <label>Address:</label>
                                <input type="text" name="address" required placeholder="Street Address/City">
                            </td>
                            <td>
                                <label>Gender:</label>
                                <input type="radio" value="Male" name="gender" required>
                                <label>Male</label>
                                <input type="radio" value="Female" name="gender" required>
                                <label>Female</label>
                            </td>
                        </div>
                    </tr>
                    <tr>
                        <div>
                            <td>
                                <label>Phone Number:</label>
                                <input type="number"  name="phoneNumber" required placeholder="Type your phone number" maxlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                            </td>
                            <td>
                                <label>Nationality:</label>
                                <input type="text" name="nationality" required placeholder="Type your nationality">
                            </td>
                        </div>
                    </tr>
                    <tr>
                        <div>
                            <td>
                                <label>Date of birth:</label>
                                <input type="date" name="dob" required>
                            </td>
                        </div>
                    </tr>
                    <tr>
                        <div>
                            <td>
                                <label>Education Level<span>(Choose recently completed
                                        degree)</span></label>
                            </td>
                        </div>
                    </tr>
                    <tr>
                        <div>
                            <td>
                                <select name="degreeLevel" required>
                                    <option value="highSchool">High School Level</option>
                                    <option value="bachelorDegree">Bachelor's Degree</option>
                                    <option value="masterDegree">Master's Degree</option>
                                </select>
                                <input type="text" placeholder="Degree Name" name="degreeName" required>
                                <input type="text" placeholder="College/University" name="collegeName" required>
                                <input type="text" placeholder="Grade Obtained" name="gradeObtained" required>
                            </td>
                        </div>
                    </tr>
                    <tr>
                        <div>
                            <td>
                                <label>Preferred mode of contact:</label>
                            </td>
                        </div>
                    </tr>
                    <tr>
                        <div>
                            <td>
                                <input type="radio" value="Email" name="modeOfContact" required>
                                <label>Email</label>
                                <input type="radio" value="Phone" name="modeOfContact" required>
                                <label>Phone</label>
                                <input type="radio" value="None" name="modeOfContact" required>
                                <label>None</label>
                            </td>
                        </div>
                    </tr>
                    <tr>
                        <div>
                            <td>
                                <button name="submit" type="submit">Submit</button>
                            </td>
                        </div>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>