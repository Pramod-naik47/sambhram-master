<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>E & C Events</title>
    <link rel="stylesheet" href="css/eventstyle.css">
    <link href="newfonts/newfonts.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        function eventSession(event) {
            sessionStorage.setItem('event',event);
            window.location.href='register.php';
        }

        $(document).ready(function(){
            $("#CircuitBuilding").click(function(){
                $("#cbModal").modal();
            });

            $("#Tech-Excellence").click(function(){
                $("#tsModal").modal();
            });

            $("#RCRacing").click(function(){
                $("#rrModal").modal();
            });


            $("#Electro-Charades").click(function(){
                $("#ecModal").modal();
            });


            $("#pPresentation").click(function(){
                $("#tnModal").modal();
            });
        });
    </script>
    <style>
        #CircuitBuilding {
            height: 250px;
            background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/circuit_building.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        #Tech-Excellence{
            height: 250px;
            background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/tech_excellence.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        #RCRacing{
            height: 250px;
            background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/rc_racing.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        #Electro-Charades {
            height: 250px;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(images/quiz.jpg);
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
            <div class="title">
                <h1>Events</h1>
                <h2>Electronics and Communication Engineering</h2>
            </div>
        </div>

        <div class="event-body">
            <div class="row">
                <div  class="col-lg-4 col-sm-4">
                    <div id="CircuitBuilding" class="cursor">
                        <div class="event-title" style="">Restotricks<br>(Circuit Building)</div>
                    </div>
                </div>
                <div  class="col-lg-4 col-sm-4">
                    <div id="Tech-Excellence" class="cursor">
                        <div class="event-title">Ex-Tech Parodies</div>
                    </div>
                </div>
                <div  class="col-lg-4 col-sm-4">
                    <div id="RCRacing" class="cursor">
                        <div class="event-title">RC Ultimate</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div  class="col-lg-4 col-sm-4">
                    <div id="Electro-Charades" class="cursor">
                        <div class="event-title">Quizophile</div>
                    </div>
                </div>
                <div  class="col-lg-4 col-sm-4">
                    <div id="pPresentation" class="cursor">
                        <div class="event-title">Tech-Novanza </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="row">
    <div id="cbModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">RestoTricks (Circuit Building)</h3>
                    <h4>Day 1</h4>
                </div>
                <div class="modal-body">
                    <h4>Rules</h4>
                    <ul>
                        <li>Maximum of 2 members per team is allowed.</li>
                        <li>1st round –prelims 30 questions duration is 30 minutes. </li>
                        <li>2nd round –Electrovate, duration is 1 hour.</li>
                    </ul>
                    <hr>
                    <button type="button" class="btn btn-danger" onclick="eventSession('RestoTricks')">Register</button>
                    <h4>Student Coordinator</h4>
                    <ul>
                        <li>Mrs. Pramila N.S (9901946066)</li>
                    </ul>
                    <hr>
                    <h4>Student Coordinator</h4>
                    <ul>
                        <li>Zafrina (9164668448)</li>
                        <li>Sana Kavser  (7022614387)</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="tsModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Ex-Tech Parodies</h3>
                    <h4>Day 1</h4>
                </div>
                <div class="modal-body">
                    <h4>Rules</h4>
                    <ul>
                        <li>Maximum  of 3 members per team is allowed. </li>
                        <li>1st round - Prelims 30 questions duration is 30 minutes. </li>
                        <li>2nd round - Technical Dum charades. </li>
                    </ul>
                    <hr>
                    <button type="button" class="btn btn-danger" onclick="eventSession('Ex-Tech Parodies')" >Register</button>
                    <h4>Staff Coordinator</h4>
                    <ul>
                        <li>Mrs. Jane Maria  (9916955520)</li>
                    </ul>
                    <hr>
                    <h4>Student Coordinator</h4>
                    <ul>
                        <li>Afra Sheik  (9900670641)</li>
                        <li>Shreyas (9900240471)</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="rrModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">RC-Ultimate (RC Racing)</h3>
                    <h4>Day 1</h4>
                </div>
                <div class="modal-body">
                    <h4>Rules</h4>
                    <ul>
                        <li>Two make a team. </li>
                        <li>Only 3 members allowed per team.</li>
                        <li>The maximum voltage input to the car should not exceed more than 12 volts.</li>
                        <li>The maximum dimensions of the car can be Length-30cm, Breadth-25cm, Height - 15cm.</li>
                        <li>Only Electronic (Battery Powered) cars are allowed.</li>
                    </ul>
                    <hr>
                    <button type="button" class="btn btn-danger" onclick="eventSession('RC-Ultimate')">Register</button>
                    <h4>Staff Coordinator</h4>
                    <ul>
                        <li>Mr. Manujanath Badiger  (9900573829)</li>
                    </ul>
                    <hr>
                    <h4>Student Coordinator</h4>
                    <ul>
                        <li>Shreerag K.K (7019965812)</li>
                        <li>Nishan R(81050422811)</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="ecModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Quizophile</h3>
                    <h4>Day 1</h4>
                </div>
                <div class="modal-body">
                    <h4>Rules</h4>
                    <ul>
                        <li>Maximum of 3 members per team is allowed.</li>
                        <li>Prilims will be conducted if necessary.</li>
                        <li>Event is of three round.</li>
                        <li>Decision made by judges are final</li>
                    </ul>
                    <hr>
                    <button type="button" class="btn btn-danger" onclick="eventSession('Quizophile')">Register</button>
                    <h4>Staff Coordinator</h4>
                    <ul>
                        <li>Mrs. Srividya G  (8618639037)</li>
                    </ul>
                    <hr>
                    <h4>Student Coordinator</h4>
                    <ul>
                        <li>Nikshep Jain (9880411242)</li>
                        <li>Archana Shetty (9900272911)</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="tnModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Tech-Novanza (Paper Presentation)</h3>
                    <h4>Day 1</h4>
                </div>
                <div class="modal-body">
                    <h4>Rules</h4>
                    <ul>
                        <li>Paper should be in IEEE format. Not more than 8 pages. </li>
                        <li> Maximum number of participants in a team is 2.</li>
                        <li>Abstract of the paper must be mailed to sditec19@gmail.com on or before 21/04/2019</li>
                        <li>Presentation time will be 8+2min.</li>
                    </ul>
                    <hr>
                    <button type="button" class="btn btn-danger" onclick="eventSession('Tech-Novanza ')">Register</button>
                    <h4>Staff Coordinator</h4>
                    <ul>
                        <li>Ms. Cema.L.Miranda  (9738483968)</li>
                        <li>Mrs. Pavithra Poornima (7760573008)</li>
                    </ul>
                    <hr>
                    <h4>Student Coordinator</h4>
                    <ul>
                        <li>Ankitha Gupta  (9591635155)</li>
                        <li>Usha. H.Y (8095410391)</li>
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
                Shree Devi Institute Of Technology,Kenjar,Mangalore-574142.
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
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>

