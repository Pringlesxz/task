<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title>Athletes Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="icon" href="../img/evsulogo.png">
    <style>
    body {
        color: #fff;
        background: #800000;
        font-family: 'Roboto', sans-serif;
    }

    .form-control {
        /*kadak.on sa form*/
        height: 50px;
        box-shadow: none;
        color: #969fa4;
    }

    .form-control:focus {
        border-color: #5cb85c;
    }

    .form-control,
    .btn {
        border-radius: 3px;
    }

    .form-select {
        height: 50px;
        box-shadow: none;
        color: #969fa4;
    }

    .form-select:focus {
        border-color: #5cb85c;
    }

    .form-select,
    .btn {
        border-radius: 3px;
    }

    .signup-form {
        width: 700px;
        /*kadak.on sa form*/
        margin: 0 auto;
        padding: 15px 0;
        font-size: 15px;
    }

    .signup-form h2 {
        /* signup*/
        color: #636363;
        margin: 0 0 10px;
        position: relative;
        text-align: center;
    }

    .signup-form h2:before,
    .signup-form h2:after {
        /* signup line*/
        content: "";
        height: 5px;
        width: 20%;
        background: #d4d4d4;
        position: absolute;
        top: 50%;
        z-index: 2;
    }

    .signup-form h2:before {
        /*line*/
        left: 0;
    }

    .signup-form h2:after {
        right: 0;
    }

    .signup-form .hint-text {
        /*text*/
        color: #999;
        margin-bottom: 20px;
        text-align: center;
    }

    .signup-form form {
        /*form outer*/
        color: #999;
        border-radius: 3px;
        margin-bottom: 15px;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }

    .signup-form .form-group .form-select {
        /*email and bellow*/
        margin-bottom: 10px;
    }

    .signup-form input[type="checkbox"] {
        margin-top: 3px;
    }

    .signup-form .btn {
        /*button*/
        font-size: 16px;
        font-weight: bold;
        min-width: 140px;
        outline: none !important;
    }

    /* .signup-form .row {
	padding-right: 10px;
}   
.signup-form .row div:last-child {
	padding-left: 15px;
}    	  */
    .signup-form a {
        color: #fff;
        text-decoration: underline;
    }

    .signup-form a:hover {
        text-decoration: none;
    }

    .signup-form form a {
        color: #5cb85c;
        text-decoration: none;
    }

    .signup-form form a:hover {
        text-decoration: underline;
    }
    </style>
</head>

<body>
    <div class="signup-form">
        <form action="/examples/actions/confirmation.php" method="post">
            <h2>Athletes Registration</h2>
            <p class="hint-text">Register now and be part of us!</p>
             <div class="text-center">
                <img src="../img/img_avatar2.png" width="200px" class="img-thumbnail" alt="avatar" class="avatar">
                <div class="profile-pic-div">
                <!-- <img src="../../asset/icon/user.svg" id="photo"> -->
                <input type="file" name="file" id="file" required>
                <!-- <label for="file" id="uploadBtn">Choose Photo</label> -->
            </div>
            </div>
            <div class="form-group">
                <div class="row align-items-center">
                    <div class="col-md-3"><label for="fname" class="form-label">First Name</label>
                        <input type="text" class="form-control" name="fname" placeholder="First Name">
                    </div>
                    <div class="col-md-3"><label for="mname" class="form-label">Middle Name</label>
                        <input type="text" class="form-control" name="mname" placeholder="Middle Name">
                    </div>
                    <div class="col-md-3"><label for="mname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="lname" placeholder="Last Name">
                    </div>
                    <div class="col-md-3">
                        <label for="suffix" class="form-label">Suffix</label>
                        <select name="suffix" class="form-select">
                            <option selected>Suffix...</option>
                            <option>Jr.</option>
                            <option>Sr.</option>
                            <option>III</option>
                            <option>IV</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="gender" class="form-label ">Gender</label>
                        <select name="gender" class="form-select">
                            <option selected>Gender... </i></option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Prefer not to say</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="bday" class="form-label">Birth Date</label>
                        <input type="date" name="bday" class="form-control" required pattern="\d{4}-\d{2}-\d{2}">
                    </div>
                    <div class="col-md-4">
                        <label for="StudType" class="form-label">Student Type</label>
                        <select name="Student Type" class="form-select">
                            <option selected>Student Type... </i></option>
                            <option>Continuing</option>
                            <option>Returnee</option>
                            <option>Shiftee</option>
                            <option>Transferee</option>
                        </select>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-sm-2 ">
                            <label for="age" class="form-label">Age</label>
                            <input type="text" name="age" class="form-control" placeholder="Age">
                        </div>
                        <div class="col-md-4">
                            <label for="cell" class="form-label">Cellphone Number</label>
                            <input type="number" class="form-control" name="cell" placeholder="+639">
                        </div>
                        <div class="col-md-6">
                            <label for="address" class="form-label">Address </label>
                            <input type="text" class="form-control" name="address" placeholder="Address">
                        </div>
                        <div class="col-md-4">
                            <label for="stdntnum" class="form-label">Student Number</label>
                            <input type="text" name="stdntnum" class="form-control" placeholder="Student Number">
                        </div>
                        <div class="col-md-8">
                            <label for="dep" class="col-12 form-label ">Department</label>
                            <select name="dep" class="form-select">
                                <option selected>Department... </i></option>
                                <option>Bachelor of Science in Mechanical Engineering</option>
                                <option>Bachelor of Science in Information Technology</option>
                                <option>Bachelor of Science in Civil Engineering</option>
                                <option>Bachelor of Science in Electrical Engineering</option>
                                <option>Bachelor of Elementary Education</option>
                                <option>Bachelor of Physical Education</option>
                                <option>Bachelor of Technical-Vocational Teacher Education</option>
                                <option>Bachelor of Secondary Education major Mathematics</option>
                                <option>Bachelor of Secondary Education major in Science</option>
                                <option>Bachelor of Science in Industrial Technology major in Electronics
                                </option>
                                <option>Bachelor of Science in Industrial Technology major in Culinary Arts
                                </option>
                                <option>Bachelor of Science in Hospitality Management</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="Sport" class="form-label">Sport</label>
                            <input type="text" name="sport" class="form-control" placeholder="Sport">
                        </div>
                        <div class="col-md-4">
                            <label for="lrn" class="form-label">Learners Reference Number</label>
                            <input type="text" name="lrn" class="form-control" placeholder="LRN">
                        </div>
                        <div class="col-md-4">
                            <label for="y&s" class="form-label">Year and Section</label>
                            <input type="text" name="y&s" class="form-control" placeholder="ex. 1st-A">
                        </div>
                        <div class="col-md-4">
                            <label for="ctznshp" class="form-label">Citizenship</label>
                            <input type="text" name="ctznshp" class="form-control" placeholder="Citizenship">
                        </div>
                        <div class="col-md-4">
                            <label for="bp" class="form-label">Birth Place</label>
                            <input type="text" name="bp" class="form-control" placeholder="Birth Place">
                        </div>
                        <div class="col-md-4">
                            <label for="cv" class="form-label">Civil Status</label>
                            <select name="Civil Status" class="form-select">
                                <option selected>Civil Status...</i></option>
                                <option>Single</option>
                                <option>Married</option>
                                <option>Widow</option>
                                <option>Separated</option>
                                <option>Divorced</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Provide EVSU Email Only*</label>
                            <input type="email" class="form-control" name="email" placeholder="@evsu.edu.ph"
                                required="required">
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Provide Strong Password*</label>
                            <input type="password" class="form-control" name="password" placeholder="Password"
                                required="required">
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Provide Strong Password*</label>
                            <input type="password" class="form-control" name="confirm_password"
                                placeholder="Confirm Password" required="required">
                        </div>
                        <div class="form-group">
                            <label class="form-check-label"><input type="checkbox" required="required"> I accept the <a
                                    href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-lg btn-block">Register</button>
                        </div>
                    </div>
                </div>
        </form>
        <div class="text-center">Already have an account? <a href="../pages/asignin.php">Sign in</a></div>
    </div>
</body>

</html>