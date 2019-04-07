<?php
require_once './dbconnect.php';

    if (isset($_POST['send'])){
        $name = $_POST['firstname'];
        $email = $_POST['email'];
        $suggation = $_POST['suggation'];
        $rate = $_POST['test5'];

        $qry = "INSERT INTO feedback (uname,email,suggation,rate) VALUES ('$name','$email','$suggation','$rate')";
         $result = mysqli_query($con,$qry);
         echo " <script>alert('Feedback sent successfully');</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Welcome</title>
    <link rel="stylesheet" href="css/homestyle.css">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link rel="stylesheet" href="animate.css">
    <link href="newfonts/newfonts.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="materialize/js/materialize.js"></script>
    <script>
        function deptSession(dept) {
            sessionStorage.setItem('dept',dept);
        }
        $(document).ready(function(){
            $('.sidenav').sidenav();
        });

        function anifun(id)
        {
            $('.'+id).addClass("animated bounce");
        }
        function anifun1(id)
        {
            $('.'+id).removeClass("animated bounce");
        }
    </script>
    <script>
        function goto() {
            window.location.href='aeevent.php';
        }
        function goto1() {
            window.location.href='cvevent.php';
        } function goto2() {
            window.location.href='ecevent.php';
        }
        function goto3() {
            window.location.href='csevent.php';
        }
        function goto4() {
            window.location.href='mechevent.php';
        }
        function goto5() {
            window.location.href='culevent.php';
        }
    </script>

</head>
<body style="background-color:black" >

        <nav class="animated bounceInDown" style="font-family: Pacifico;animation-delay: 1s;box-shadow:  0 1px 2px rgba(0,0,0,0.24);">
            <div class="nav-wrapper" style="background-color: crimson;padding-left: 5%;">
                <a href="#!" class="brand-logo"><img src="images/Sambhram'1logo.png" width="200" height="180" style="margin-top: -25%"></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul id="nav" class="right hide-on-med-and-down close">
                    <li>
                        <a href="index.php" style="color: black;">
                            <i class="fas fa-home" style="color: black;font-size: 15px;"></i>Home
                        </a>
                    </li>
                    <li>
                        <a href="#deptPanel" style="color: black">
                            <i class="fab fa-elementor" style="color: black;font-size: 15px;"></i> Events
                        </a>
                    </li>
                    <li>
                        <a href="#panelGallery" style="color: black" >
                            <i class="fas fa-images" style="color: black;font-size: 15px;"></i> Gallery
                        </a>
                    </li>
                    <li>
                        <a href="#about" style="color: black">
                            <i class="fas fa-users" style="color: black;font-size: 15px;"></i> About Us
                        </a>
                    </li>
                    <li>
                        <a href="contact.html" style="color: black">
                            <i class="fa fa-phone" style="color: black;font-size: 15px;"></i> Contact Us
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/sambhram2k19/">
                            <i class="fab fa-instagram" style="color: black;font-size: 20px;"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <ul style="font-family: Pacifico" class="sidenav" id="mobile-demo">
            <li><a href="index.php" style="color: black" class="sidenav-close"><i class="fas fa-home" style="color: black;font-size: 15px;"></i>Home</a></li>
            <li><a href="#deptPanel" style="color: black" class="sidenav-close"><i class="fab fa-elementor" style="color: black;font-size: 15px;"></i> Events</a></li>
            <li><a href="#panelGallery" style="color: black" class="sidenav-close" ><i class="fas fa-images" style="color: black;font-size: 15px;"></i> Gallery</a></li>
            <li><a href="#about" style="color: black" class="sidenav-close"><i class="fas fa-users" style="color: black;font-size: 15px;"></i> About Us</a></li>
            <li><a href="contact.html" style="color: black" class="sidenav-close"><i class="fa fa-phone" style="color: black;font-size: 15px;"></i> Contact Us</a></li>
            <li><a href="https://www.instagram.com/sambhram2k19/" style="color: black" class="sidenav-close"><i class="fab fa-instagram" style="color: black;font-size: 20px;"></i>sambhram insta</a></li>
        </ul>


<!--    <header class="v-header">-->
<!---->
<!--        <div class="fullscreen-video-wrap">-->
<!--            <video src="images/video.mp4" autoplay loop muted></video>-->
<!--        </div>-->
<!--        <div class="header-overlay"></div>-->
<!---->
<!--    </header>-->
<!--        <img src="images/antakshari.jpg" class="animated flash infinite" width="150" height="150" style="border-radius: 50%;position: absolute;top: 80px;left: 70px;">-->
<!--        <img src="images/antakshari.jpg" class="animated flash infinite" width="150" height="150" style="animation-duration: 5s;border-radius: 50%;position: absolute;top: 150px;right: 50px;">-->
    <div >
<!--        style="border: solid thick red;width: 50%;border-radius: 15px;"-->
        <video width="100%"  src="images/video.mp4" autoplay loop muted></video>
    </div>

    <div class="container" id="about">
        <!--    <div id="panelMainpage" class="col m12">-->
        <!--        <img src="images/Sambhram'1logo.png" height="100%" width="50%" style="margin-left: 23%" class="animated slideInDown" style="animation-duration: 5s;">-->
        <!--    </div>-->
        <h4>About Sambhram</h4>
        <hr>
        <div class="row">
            <div class="col m6">
                <img src="images/building.jpg" height="100%">
                <div class="card" id="card1">
                    <div class="card-content">
                        <span class="card-title">Our Institute</span>
                        <p><strong>Shree Devi Institute of Technology</strong>, Kenjar, Mangaluru affiliated to Vishvesvaraya Technological University, Belgaum recognized by All India Council for Technical Education (AICTE), New Delhi was established by Shree Devi Education Trust Mangaluru in the year 2006. Our Institution's aim to provide students with a rich and prosperous learning environment so that they acquire knowledge and skills needed for succeeding in their professional as well as personal lives. This Institute offers students the opportunities to pursue Engineering Management and Computer Studies in the ambience of natural beauty. A team of dedicated faculty, a brilliant student community, excellent technical and supporting staff and an effective administration have all contributed to the pre-eminent status of Shree Devi Institute of Technology.</p>
                    </div>
                </div>
            </div>
            <div class="col m6">
                <img src="images/gal.JPG">
                <div class="card" id="card2">
                    <div class="card-content">
                        <span class="card-title">Shree Devi Sambhram 2019</span>
                        <p><strong> Shree Devi Sambhram'19</strong>, A National Level Technical & Cultural Fest organized by Shree Devi Institute of Technology is scheduled to be on 25 and 26 of April 2019 at Shree Devi Campus, Airport road, Kenjar, Mangaluru. This Technical and Cultural extravaganza gives an opportunity to collect and rekindle the strength, creativity, skills and all that will lead you to the zenith. The two days fest is meant to usher fresh ideas and redefine the dimensions of knowledge. Shree Devi Sambhram'19 hosts a galaxy of events aimed at boosting the technical skill inherited in youth. With a plethora of technical and cultural events waiting to be explored and unravelled, this is the ultimate place to rediscover oneself. This forms the heart and soul of the festival and seeks to provide a common platform for the best brains to interact and nurture their ideas and transforming them into reality. Our aim is simple, explore and exhibit talents. We aim to help students to come out as a pioneer with the social and professional values which are vital for technical excellence. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="panelGallery">
        <h4>Image Gallery</h4>
        <hr>
        <div class="row" style="margin-top: 4%">
            <div class="col  m3 ">
                <img src="images/0101.jpg">
            </div>
            <div class="col  m3">
                <img src="images/img3.jpg">
            </div>
            <div class="col  m3">
                <img src="images/0303.jpg">
            </div>
            <div class="col  m3">
                <img src="images/img5.jpg">
            </div>
        </div>
        <div class="row">
            <div class="col m3">
                <img src="images/gal10.JPG">
            </div>
            <div class="col m3">
                <img src="images/0202.jpg">
            </div>
            <div class="col m3">
                <img src="images/0404.jpg" >
            </div>
            <div class="col m3">
                <img src="images/gal4.JPG">
            </div>
        </div>
    </div>

    <div class="container" id="deptPanel">
        <h4>Department</h4>
        <hr>
        <div class="row ">
            <div class="col  m4"  style="text-align: center">
                <a href="aeevent.php" onclick="goto();deptSession('Aeronautical')">
                    <img src="images/ae.svg" class="circle " height="160" width="200" ><br/>
                    <strong>Aeronautical</strong>
                </a>
            </div>
            <div class="col  m4" style="text-align: center">
                <a href="cvevent.php"  onclick="goto1();deptSession('Civil')" >
                    <img src="images/cv.svg" class="circle" height="160" width="200" ><br/>
                    <strong class="dpttittle">Civil</strong>
                </a>
            </div>
            <div class="col m4" style="text-align: center">
                <a href="ecevent.php"  onclick="goto2();deptSession('Electronics')">
                    <img src="images/ece.svg" class="circle " height="160" width="200"><br/>
                    <strong class="dpttittle">E&C</strong>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col m4" style="text-align: center">
                <a href="csevent.php"  onclick="goto3();deptSession('Computer Science')">
                    <img src="images/cse.svg" class="circle" height="160" width="200"><br/>
                    <strong class="dpttittle">Cse/Ise</strong>
                </a>
            </div>
            <div class="col m4" style="text-align: center">
                <a href="mechevent.php" onclick="goto4();deptSession('Mechanical')">
                    <img src="images/me.svg" class="circle" height="160" width="200" ><br/>
                    <strong>Mechanical</strong>
                </a>
            </div>
            <div class="col m4" style="text-align: center">
                <a href="culevent.php" onclick="goto5();deptSession('Cultural')">
                    <img src="images/cul.svg" class="circle" height="160" width="200" ><br/>
                    <strong class="dpttittle">Cultural</strong>
                </a>
            </div>
        </div>
    </div>

    <div id="specialAttraction" class="container">
        <h4>Special Attraction</h4>
        <hr>

        <div class="row">
            <div class="col m3">
                <img src="images/shilparao.jpg" class="circle">
            </div>
            <div class="col m9">
                <p>
                    We have a mega event which is for the first time ever in the history of Shree Devi Institute Of Technology we have a bollywood singer SHILPA RAO performing live at the Shree Devi Institute Of Technology<br>
                    <br/>Time : 7 PM<br>
                    Date : 26 Apr 2019<br>
                    Venue : Shree Devi Campur, Kenjar.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col m3">
                <img src="images/kabaddi.jpg" class="circle">
            </div>
            <div class="col m9">
                <p>
                    KHEL KABADDI that is a mega sporting event in association with Shree Devi SAMBHRAM'19.<br><br/>
                    Time : 9:30 AM onwards<br>
                    Date : 25 Apr 2019<br>
                    Venue : Shree Devi Ground, Kenjar.<br/>
                    For more info Contact :
                <ul style="color: white;font-family: Pacifico; margin-left: 20%">
                    <li>Rakshith C - 9901204294</li>
                    <li>Harshith - 7026017271</li>
                    <li>Meghanath Shetty - 9483853978</li>
                    <li>Prashanth - 9902023077</li>
                </ul>
                </p>
            </div>
        </div>
    </div>
    <div id="footer">
        <div class="row">
            <div class="col m3"></div>
            <div class="col m6">
                <h6 style="">
                    <i class="fas fa-map-marker-alt"></i>
                    Shree Devi Institute Of Technology
                    Kenjar
                    Mangalore-574142.
                </h6>
                <h6>
                    <i class="fas fa-envelope"></i>
                    sambhram2019@gmail.com
                </h6>
                <h6>
                    <i class="fas fa-phone-volume"></i>
                    +91-9035158647
                </h6>
                <h6><a href="https://www.instagram.com/mr_pramod_naik47/?hl=en" style="color:white">Designed And Developed by : Pramod Naik</a></h6>
            </div>
            <div class="col m3"></div>
        </div>
    </div>
</body>
</html>
