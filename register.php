<?php
require_once './dbconnect.php';


if (isset($_POST['reg'])){
    $event = $_POST['event'];
    $department = $_POST['department'];
    $pname = $_POST['pname'];
    $phone = $_POST['num'];
    $college = $_POST['college'];
    $team_members = $_POST['team'];

    $cmd = "INSERT INTO reg(event,department,pname,phone,college,team_members) VALUES ('$event','$department','$pname','$phone','$college','$team_members')";
    $res = mysqli_query($con,$cmd);
    echo "<script>alert('Registred Succesfully');</script>";
    echo "<script>window.location='index.php';</script>";
}
?>
<!DOCTYPE>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register page</title>
    <link href="materialize/css/materialize.min.css" rel="stylesheet">
    <link href="newfonts/newfonts.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="materialize/js/materialize.min.js"></script>
    <script>
        function setSession() {
            document.getElementById('event').value=sessionStorage.getItem('event');
            document.getElementById('department').value=sessionStorage.getItem('dept');
        }
        $(document).ready(function(){
            $('.sidenav').sidenav();
        });
    </script>
    <style>
        body{
            background-image: url("images/clgimg.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
        .container{
            padding-top: 8% ;
        }
        .card-panel{
            background-color:black;
            opacity: 0.9;
        }
        #reg{
            margin-left: 43%;
        }
        h2{
            font-family: "Great Vibes";
            text-align: center;
            font-size: 60px;
            color: whitesmoke;
        }

       input{
           color: white;
       }
        @media (max-width: 480px){
            #reg{
                margin-left: 35%;
            }
        }
    </style>
</head>
<body onload="setSession()">
<nav style="font-family: Pacifico;box-shadow:  0 1px 2px rgba(0,0,0,0.24);">
    <div class="nav-wrapper" style="background-color: crimson;padding-left: 5%;">
        <a href="#!" class="brand-logo"><img src="images/Sambhram'1logo.png" width="200" height="180" style="margin-top: -25%"></a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul id="nav" class="right hide-on-med-and-down close">
            <li>
                <a href="index.php" style="color: black">
                    <i class="fas fa-home" style="color: black;font-size: 15px;"></i>Home
                </a>
            </li>
            <li>
                <a href="index.php#deptPanel" style="color: black">
                    <i class="fab fa-elementor" style="color: black;font-size: 15px;"></i> Events
                </a>
            </li>
            <li>
                <a href="index.php#panelGallery" style="color: black">
                    <i class="fas fa-images" style="color: black;font-size: 15px;"></i> Gallery
                </a>
            </li>
            <li>
                <a href="index.php#about" style="color: black">
                    <i class="fas fa-users" style="color: black;font-size: 15px;"></i> About Us
                </a>
            </li>
            <li>
                <a href="contact.html" style="color: black">
                    <i class="fa fa-phone" style="color: black;font-size: 15px;"></i> Contact Us
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/sambhram2k19/" style="color: black">
                    <i class="fab fa-instagram" style="color: black;font-size: 20px;"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>
<ul style="font-family: Pacifico" class="sidenav" id="mobile-demo">
    <li><a href="index.php" style="color: black" class="sidenav-close"><i class="fas fa-home" style="color: black;font-size: 15px;"></i>Home</a></li>
    <li><a href="index.php#deptPanel" style="color: black" class="sidenav-close"><i class="fab fa-elementor" style="color: black;font-size: 15px;"></i> Events</a></li>
    <li><a href="index.php#panelGallery" style="color: black" class="sidenav-close" ><i class="fas fa-images" style="color: black;font-size: 15px;"></i> Gallery</a></li>
    <li><a href="index.php#about" style="color: black" class="sidenav-close"><i class="fas fa-users" style="color: black;font-size: 15px;"></i> About Us</a></li>
    <li><a href="contact.html" style="color: black" class="sidenav-close"><i class="fa fa-phone" style="color: black;font-size: 15px;"></i> Contact Us</a></li>
    <li><a href="https://www.instagram.com/sambhram2k19/" class="sidenav-close"><i class="fab fa-instagram" style="color: black;font-size: 20px;"></i></a></li>
</ul>

    <div class="container">
        <div class="card-panel">
            <h2 class="colorchange" >Registration</h2>
            <form action="" method="post">
                <div style="display: none">
                    <div class="input-field col s4">
                        <input  id="event" name="event" type="text" class="validate" >
                    </div>
                    <div class="input-field col s4">
                        <input  id="department" name="department" type="text" class="validate">
                    </div>
                </div>
                <div>
                    <div class="input-field col s4">
                        <input  id="pname" name="pname" type="text" class="validate" required>
                        <label for="pname">Name</label>
                    </div>
                    <div class="input-field col s4">
                        <input  id="num" name="num" type="number" class="validate" required >
                        <label for="num">Phone Number</label>
                    </div>
                    <div class="input-field col s4">
                        <input  id="clg" name="college" type="text" class="validate" required>
                        <label for="clg">College Name</label>
                    </div>
<!--                    <div class="input-field col s4">-->
<!--                        <input list="coll" name="college" placeholder="Choose College" required>-->
<!--                        <datalist id="coll">-->
<!--                            <option value="Shree devi institute of technology">-->
<!--                            <option value="Canara institute of technology">-->
<!--                            <option value="Shreenivas institute of technology">-->
<!--                            <option value="Shreenivas school of engineering">-->
<!--                            <option value="St.Joseph institute of technology">-->
<!--                            <option value="Karavali institute of technology">-->
<!--                        </datalist>-->
<!--                    </div>-->
                    <div class="input-field col s4">
                        <input  id="team" name="team" type="text" class="validate">
                        <label for="team">Team Members</label>
                    </div>
                </div>

                <button id="reg" name="reg" type="submit" class="btn waves-effect waves-green">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
