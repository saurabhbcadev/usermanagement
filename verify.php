<?php
if (count($_GET)) {
    $sid = $_GET['id'];
    $id = substr($sid, -5);
}
if (count($_POST)) {
    try {
        $id = $_POST['id'];
        require_once 'connect.php';
        $sql = $conn->prepare("SELECT otp FROM adduser WHERE id='$id'");
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        $otp = $result['otp'];
        if (md5($_POST['otp']) == $otp) {
            $updateSql = "UPDATE adduser SET verified='verified', otp=' ' WHERE id='$id'";
            $updateStmt = $conn->prepare($updateSql);
            $updateStmt->execute();
            echo '<center><h2>Account Verified Sucessfully <br> Close This Tab</h2></center>';
        } else {
            echo '<center><h2>Incorrect OTP, Please Enter Correct OTP</h2></center>';
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;
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

        p {
            text-align: center;
            font-size: 15px;
            color: orangered;
        }
    </style>
</head>

<body>
    <div class="add">
        <center>
            <h1>Verify Email</h1>
        </center>
        <form name="signup" id="signup" method="POST" action="verify.php?id=<?= $sid ?>">
            <p>Please enter the OTP below to verify your identity:</p>
            <center><input minlength="6" maxlength="6" type="text" name="otp" id="otp" required></center>
            <input type="hidden" name='id' value="<?= $id ?>">
            <!-- Buttons -->
            <center>
                <input type="submit" name="submit" id="submit" />
                <input type="reset" style="margin-left: 20px;" name="reset" id="reset" />
            </center>
        </form>
    </div>
</body>
<html>