<?php
session_start();
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
        #reset, button {
            background-color: yellow;
            font-size: 18px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <center><a href="viewuser.php"><button>View Existing User</button></a></center><br>
    <div class="add">
        <center>
            <h1>Add User</h1>
        </center><br>
        <form name="signup" id="signup" method="POST" action="confirm.php">
            <label for="uname">Name*</label>
            <input maxlength="30" name="uname" type="text" id="name" required><br>
            <label for="email">Email*</label>
            <input name="email" type="email" id="email" required><br>
            <label for="mobile">Mobile*</label>
            <input minlength="10" maxlength="10" placeholder="9999999999" type="text" name="mobile" id="mobile" required><br>
            <!-- Buttons -->
            <center>
                <input type="submit" name="submit" id="submit" value="Add User" />
                <input type="reset" style="margin-left: 20px;" name="reset" id="reset" />
            </center>
        </form>
    </div>
</body>
<html>