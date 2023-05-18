<?php
session_start();
date_default_timezone_set("Asia/Kolkata");
$id = substr(time(), -5);
$sid = time();
$otp = substr(time(), -3);
$otp = $otp . rand(100, 999);
if (count($_POST)) {
    try {
        require_once 'connect.php';
        $sql = "INSERT INTO adduser (id,uname, email, mobile,otp)   VALUES ('$id', '$_POST[uname]', '$_POST[email]', '$_POST[mobile]', md5($otp))";
        $conn->exec($sql);
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    $conn = null;
    require_once 'sendmail.php';
} else {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Management</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="add user" />
    <meta name="author" content="saurabh" />
    <meta name="keyboard" content="User Registration,Create Account, Sign up, add user, new user" />
    <style>
        body {
            background-color: pink;
            font-family: century;
            color: darkblue;
        }

        .add {
            background-image: linear-gradient(to bottom right, #b8e1fb, #aef694, #fbed5a);
            padding: 1% 3%;
            margin: 0% 37%;
            border-radius: 25px;
        }

        input {
            margin-bottom: 15px;
        }

        #submit,
        #reset,
        button {
            background-color: cyan;
            font-size: 18px;
            margin-top: 10px;
        }

        h3 {
            color: purple;
        }
    </style>
</head>
<center><a href="index.php"><button>Back to Homepage</button></a></center><br>
<div class="add">
    <center>
        <h1>Verify Email</h1>
        <h3>An OTP and verification Link has been sent to your email address. Please check your inbox to verify your identity:</h3>
    </center>
</div>
</body>
<html>