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
            margin: 0% 10%;
            border-radius: 25px;
        }

        #submit,
        #reset,
        button {
            background-color: yellow;
            font-size: 18px;
            margin-top: 10px;
        }
        td,th{
            text-align: center;
            padding:5px;
            color: black;
            font-size: 18px;;
        }
    </style>
</head>

<body>
    <center><a href="index.php"><button>Back To Homepage</button></a></center><br>
    <div class="add">
        <center>
            <h1>Existing Users</h1>
            <table border="2">
              <thead>
                <tr style="background-color:#f9e2b8">
                  <th>S.No.</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>Status</th>
                  <th>Created</th>
                </tr>
              </thead>
              <tbody>
                <?php
                require_once('connect.php');
                $sql = $conn->prepare("SELECT * FROM adduser");
                $sql->execute();
                $count = 1;
                while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {?>
                  <tr>
                    <th style="background-color:bisque; vertical-align: middle;">
                      <?php echo $count; ?>
                    </th>
                    <td style="background-color:rgb(200, 250, 50); vertical-align: middle;">
                      <?php echo $row['uname']; ?>
                    </td>
                    <td style="background-color:lightpink; vertical-align: middle;">
                      <?php echo $row['email']; ?>
                    </td>
                    <td style="background-color:lightsalmon; vertical-align: middle;">
                      <?php echo $row['mobile']; ?>
                    </td>
                    <td style="background-color:thistle; vertical-align: middle;">
                      <?php echo $row['verified']; ?>
                    </td>
                    <td style="background-color:khaki; vertical-align: middle;">
                      <?php echo date("d/m/Y h:i:s A", strtotime($row['created']));?>
                    </td>
                  </tr>
                <?php $count = $count + 1;
                } ?>
              </tbody>
            </table>
        </center>
        </form>
    </div>
</body>
<html>