<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Aeronautical Events</title>
    <link rel="stylesheet" href="css/eventstyle.css">
    <link href="newfonts/newfonts.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <style>
        #vp {
            height: 250px;
            background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/virtual_pilot.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }
        #rc{
            height: 250px;
            background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/glider.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }
        #gl{
            height: 250px;
            background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/air_crash_investigation.jpeg);
            background-size: cover;
            background-repeat: no-repeat;
        }
        #pPlane {
            height: 250px;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(images/water_rocket.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }
        #pPresentation {
            height: 250px;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(images/paper_presentation.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        .event-title{
              position: absolute;
              top: 45%;
              left: 30%;
              transition: (-50%,-50%);
              font-family: "Philosopher";
              font-size: 25px;
              color: white;
              font-weight: bold;
          }
        .title{
            padding-top: 7%;
            font-family: "Great Vibes";
            color: white;
        }
        .event-body{
            padding-bottom: 5%;
        }
       @media (max-width: 480px) {
           .title{
               font-size: 18px;
           }
           .event-title{
               font-size: 20px;
           }
       }
    </style>
    <script>
        function eventSession(event) {
            sessionStorage.setItem('event',event);
            window.location.href='register.php';
        }
        $(document).ready(function(){
            $("#vp").click(function(){
                $("#virtualModal").modal();
            });

            $("#rc").click(function(){
                $("#rcModal").modal();
            });

            $("#gl").click(function(){
                $("#paperModal").modal();
            });


            $("#pPlane").click(function(){
                $("#gliderModal").modal();
            });


            $("#pPresentation").click(function(){
                $("#ppModal").modal();
            });
        });
    </script>
</head>
<body style="background-color: black">
<nav id="nav" class="navbar navbar-fixed-top navbar-default" >
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#" style="font-family: Courgette;font-size: 25px;color: wheat;"><img src="images/Sambhram'1logo.png" width="180" height="160" style="margin-top: -28%"></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul  class="nav navbar-nav navbar-right">
            <li>
                <a href="index.php" style="color: black;font-size: 15px;">
                    <i class="fas fa-home" ></i>Home
                </a>
            </li>
            <li>
                <a href="index.php#deptPanel" style="color: black;font-size: 15px;">
                    <i class="fab fa-elementor" ></i> Events
                </a>
            </li>
            <li>
                <a href="index.php#panelGallery"style="color: black;font-size: 15px;" >
                    <i class="fas fa-images"></i> Gallery
                </a>
            </li>
            <li>
                <a href="index.php#about" style="color: black;font-size: 15px;">
                    <i class="fas fa-users"></i> About Us
                </a>
            </li>
            <li>
                <a href="contact.html" style="color: black;font-size: 15px;">
                    <i class="fa fa-phone"></i> Contact Us
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/sambhram2k19/" style="color: black;font-size: 20px;">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
    <div class="col-xs-12 col-sm-12">
        <div class="title" id="title">
            <h2>Events</h2>
            <h2>Aeronautical Engineering</h2>
        </div>
    </div>
    <div class="event-body">
        <div class="row">
            <div  class="col-lg-4 col-sm-4">
                <div class="cursor" id="vp" >
                        <div  class="event-title ">Wing Commander </div>
                </div>
            </div>
            <div  class="col-lg-4 col-sm-4">
                <div class="cursor" id="rc" >
                        <div class="event-title">Wing Sailer</div>
                </div>
            </div>
            <div  class="col-lg-4 col-sm-4">
                <div id="gl" class="cursor">
                    <div class="event-title">Air Crash <br>Investigation </div>
                </div>
            </div>
    </div>
        <div class="row">
            <div  class="col-lg-4 col-sm-4">
                <div id="pPlane" class="cursor">
                        <div class="event-title">Water Rocketry </div>
                </div>
            </div>
            <div  class="col-lg-4 col-sm-4">
                <div id="pPresentation" class="cursor">
                        <div class="event-title">Platz  Faming<br> (Paper Presentation)</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div id="virtualModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Wing Commander </h3>
                    <h4>Day 1</h4>
                </div>
                <div class="modal-body">
                    <h4>Rules</h4>
                    <ul>
                        <li>A team of four members. </li>
                        <li>Participants should have their own built RC Aircraft. </li>
                        <li>Size of the aircraft should be max of 1m2. </li>
                        <li>Decision will be made on stable and efficient performance of the manoeuvres. </li>
                        <li>Decision made by judges will be final.  </li>
                        <li>Round 1: Basic manoeuvres - Runway Take off, simple circular lap, Runway landing.   </li>
                        <li>Round 2: Advanced Manoeuvres - Inside loop, Outside loop, Roll, Cuban 8…etc.     </li>
                        <li>Round 3: Target shooting  </li>
                    </ul>
                    <hr>
                    <button type="button" class="btn btn-danger" onclick="eventSession('Wing Commander')">Register</button>
                    <h4>Staff Coordinator</h4>
                    <ul>
                        <li> Mr. K Prathik (9972818118)</li>
                    </ul>
                    <hr>
                    <h4>Student Coordinator</h4>
                    <ul>
                        <li>Anup Patil (7348853368)</li>
                        <li>Vineeth (9483656840)</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="rcModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Wing Sailer</h3>
                    <h4>Day 1</h4>
                </div>
                <div class="modal-body">
                    <h4>Rules</h4>
                    <ul>
                        <li>Maximum of two members make a team .</li>
                        <li>Get your Gliders with the proper specifications .</li>
                        <li>Only Hand launching of Gliders is allowed .</li>
                        <li>College identity cards are mandatory .</li>
                        <li>Decision of the judges will be final .</li>
                        <li>Round 1 - Gliders with the Maximum Range will be considered .</li>
                        <li>Round 2 - Endurance -Gliders with the Maximum Endurance (Flying time) will be considered .</li>
                        <li>Round 3 - Target Hitting -Gliders should hit the given target .</li>
                    </ul>
                    <hr>
                    <button type="button" class="btn btn-danger" onclick="eventSession('Wing Sailer')" >Register</button>
                    <h4>Staff Coordinator</h4>
                    <ul>
                        <li> Ms Sreelakshmi(8123946231 ) </li>
                    </ul>
                    <hr>
                    <h4>Student Coordinator</h4>
                    <ul>
                        <li>Samarth S K (7760775790)</li>
                        <li>Pawan R S (9620942409)</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="gliderModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Water Rocketry </h3>
                    <h4>Day 1</h4>
                </div>
                <div class="modal-body">
                    <h4>Rules</h4>
                    <ul>
                        <li>All energy given to the rocket must only come from the water/air pressure combination. No other source of energy is allowed. You can only compress air manually, with a foot or bicycle pump. .</li>
                        <li>No external metal parts are allowed on the rocket.</li>
                        <li>Participants are only allowed to use plastic bottles specifically designed for holding pressure.</li>
                        <li>You will need a launcher capable of launching a rocket at a variable vertical angle of up to 60 to the horizontal. The maximum launch angle will be decided on the day. You can launch at angles less than the maximum if you wish.</li>
                        <li>Participant’s launch apparatus and all rockets will be safety checked, and judges can disqualify any equipment considered unsafe.</li>
                        <li>There will be three rounds. Scores from each will be added together to give a total score. </li>
                        <li>As always - the judges’ decision is final.</li>
                    </ul>
                    <hr>
                    <button type="button" class="btn btn-danger" onclick="eventSession('Water Rocketry')">Register</button>
                    <h4>Staff Coordinator</h4>
                    <ul>
                        <li>Mr. Rajashekara Reddy (9482608570)</li>
                    </ul>
                    <hr>
                    <h4>Student Coordinator</h4>
                    <ul>
                        <li>Sukesh G (8310053001))</li>
                        <li>Divakar S G  (8147583507)</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="paperModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Air Crash Investigation </h3>
                    <h4>Day 1</h4>
                </div>
                <div class="modal-body">
                    <h4>Rules</h4>
                    <ul>
                        <li>Maximum two members in a team .</li>
                        <li>College identity cards are mandatory .</li>
                        <li>Decision made by judges will be final. </li>
                        <li>Round 1 - Quiz (AERO quiz) .</li>
                        <li>Round 2 - Crash investigation (explanation) .</li>
                    </ul>
                    <hr>
                    <button type="button" class="btn btn-danger" onclick="eventSession('Air Crash')">Register</button>
                    <h4>Staff Coordinator</h4>
                    <ul>
                        <li>Ms. Suganthi P (8098267889)</li>
                    </ul>
                    <hr>
                    <h4>Student Coordinator</h4>
                    <ul>
                        <li>Laxman  (7406382699)</li>
                        <li>Yashwanth (9448817271)</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="ppModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Platz  Faming(Paper Presentation)</h3>
                    <h4>Day 1</h4>
                </div>
                <div class="modal-body">
                    <h4>Rules</h4>
                    <ul>
                        <li>Maximum two members in a team .</li>
                        <li>Report in IEEE format .</li>
                        <li>Time limit (8+2)min .</li>
                        <li>College ID Compulsory .</li>
                        <li>Decision of judges will be final and no arguments will be entertained.</li>
                        <li>Interested students can send their papers to sditplatzfaming@gmail.com .</li>
                        <li>Last date to submit the soft copy before 22 April.</li>
                    </ul>
                    <hr>
                    <button type="button" class="btn btn-danger" onclick="eventSession('Platz Faming')">Register</button>
                    <h4>Staff Coordinator</h4>
                    <ul>
                        <li>Ms. Sreelakshmi (8123946231)</li>
                    </ul>
                    <hr>
                    <h4>Student Coordinator</h4>
                    <ul>
                        <li>Nagini (9483685362)</li>
                        <li>Sarvesh  (7353027256)</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="footer">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <h6>
                <i class="fas fa-map-marker-alt"></i>
                Shree Devi Institute Of Technology Kenjar Mangalore-574142.
            </h6>
            <h6 >
                <i class="fas fa-envelope"></i>
                sambhram2019@gmail.com
            </h6>
            <h6>
                <i class="fas fa-phone-volume"></i>
                +91-9035158647
            </h6>
            <h6><a href="https://www.instagram.com/mr_pramod_naik47/?hl=en" style="color:white">Designed And Developed by : Pramod Naik</a></h6>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>
