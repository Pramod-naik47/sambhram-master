<?php
session_start();
unset($_SESSION['login']);
require_once '../dbconnect.php';

if (isset($_POST['login'])){
    $uname = $_POST['uname'];
    $upass = $_POST['upass'];

    $admin = "SELECT * FROM loginn WHERE username='$uname' AND password='$upass' ";

    $result = mysqli_query($con,$admin);

    if ($row = mysqli_fetch_row($result)){
        $_SESSION['login'] = 'admin';
        echo "<script>window.location='eventreport.php'</script>";
    }
    else{
        echo "<script> alert('Check your username and password');</script>";
    }

}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin login</title>
    <link href="../materialize/css/materialize.min.css" rel="stylesheet">
    <script src="../materialize/js/materialize.min.js"></script>
    <style>
        .card-panel{
            width: 40%;
            margin-top: 13%;
            margin-left: 30%;
            background-color: aliceblue;
        }
        button{
            margin-left: 45%;
        }
    </style>
</head>
<body style="background-image: url('../images/back.jpg');background-repeat: no-repeat;background-size: cover">
    <div class="card-panel">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <h4>AdminLogin</h4>
            <div class="input-field ">
                <input id="uname" name="uname" type="text" class="validate">
                <label for="uname">username</label>
            </div>
            <div class="input-field ">
                <input id="upass" name="upass" type="password" class="validate">
                <label for="upass">password</label>
            </div>
            <button id="login" name="login" type="submit" class="btn waves-effect waves-green">login</button>
        </form>
    </div>
</body>
</html>