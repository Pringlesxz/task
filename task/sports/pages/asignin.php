<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title>Log In</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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
        width: 30%;
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
        <form action="../pages/asignin.php" method="post">
            <h2>Log In</h2>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Evsu Email" required="required">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password" required="required">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg btn-block">Log In</button>
            </div>
            <div class="text-center">Don't have account yet? <a href="../pages/asignup.php">Register</a></div>
    </div>
</body>

</html>