<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Civil Events</title>
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
            $("#Techkrithi").click(function(){
                $("#tppModal").modal();
            });

            $("#BridgeMaking").click(function(){
                $("#bridgeModal").modal();
            });

            $("#Centerlinemarking").click(function(){
                $("#clmModal").modal();
            });


            $("#MindTickler").click(function(){
                $("#mtModal").modal();
            });


            $("#SolidWasteManagement").click(function(){
                $("#wasteModal").modal();
            });
        });
    </script>
    <style>
        #Techkrithi {
            height: 250px;
            background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/paper_presentation.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        #BridgeMaking{
            height: 250px;
            background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/bridge_making.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        #Centerlinemarking{
            height: 250px;
            background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/ruler.jpeg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        #MindTickler {
            height: 250px;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(images/quiz.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        #SolidWasteManagement {
            height: 250px;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(images/waste_management.jpg);
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
                <h2>Civil Engineering</h2>
            </div>
        </div>
        <div class="event-body">
            <div class="row">
                <div  class="col-lg-4 col-sm-4">
                    <div id="Techkrithi" class="cursor">
                        <div class="event-title" style="">Techkrithi<br>(Paper Presentation)</div>
                    </div>
                </div>
                <div  class="col-lg-4 col-sm-4">
                    <div id="BridgeMaking" class="cursor">
                        <div class="event-title">Bridge Making </div>
                    </div>
                </div>
                <div  class="col-lg-4 col-sm-4">
                    <div id="Centerlinemarking" class="cursor">
                        <div class="event-title">Rule Without Ruler</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div  class="col-lg-4 col-sm-4">
                    <div id="MindTickler" class="cursor">
                        <div class="event-title">Mind Tickler<br>(Technical Quiz)</div>
                    </div>
                </div>
                <div  class="col-lg-4 col-sm-4">
                    <div id="SolidWasteManagement" class="cursor">
                        <div class="event-title" style="margin-right: 3%">Solid Waste Management </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div id="tppModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Techkrithi (Technical Paper Presentation)</h3>
                        <h4>Day 1</h4>
                    </div>
                    <div class="modal-body">
                        <h4>Rules</h4>
                        <ul>
                            <li>Two members make a team.</li>
                            <li>Time Duration : 8+2 minutes.</li>
                            <li>TOPIC: Recent trends in Civil Engineering.</li>
                            <li>Papers have to be submitted in IEEE format. </li>
                            <li>Soft copy is to be mailed to "mail to: sdit.civil15@gmail.com"on or before 20-04-2019.</li>
                        </ul>
                        <hr>
                        <button type="button" class="btn btn-danger" onclick="eventSession('Techkriti')">Register</button>
                        <h4>Staff Coordinator</h4>
                        <ul>
                            <li>Ms. Hithaishi(9449467766)</li>
                        </ul>
                        <hr>
                        <h4>Student Coordinator</h4>
                        <ul>
                            <li>Sreelakshmy  (9400406373)</li>
                            <li>Niriksha Rani  (8971607488)</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="bridgeModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Bridge Making</h3>
                        <h4>Day 1</h4>
                    </div>
                    <div class="modal-body">
                        <h4>Rules</h4>
                        <ul>
                            <li>Two members make a team. </li>
                            <li>Time Duration :  1½ hours. </li>
                            <li>Required stationary items must be brought by participants. </li>
                            <li>Bridge making  materials will be provided</li>
                            <li>Truss is compulsory.</li>
                            <li>Judge’s decision will be final .</li>
                        </ul>
                        <hr>
                        <button type="button" class="btn btn-danger" onclick="eventSession('Bridge Making')">Register</button>
                        <h4>Staff Coordinator</h4>
                        <ul>
                            <li>Mrs. Lakshmi Baliga (7411495459)</li>
                        </ul>
                        <hr>
                        <h4>Student Coordinator</h4>
                        <ul>
                            <li>Varun R  (7353020249)</li>
                            <li>Vijay R Chonnad (9538941661)</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="clmModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Rule Without Ruler</h3>
                        <h4>Day 1</h4>
                    </div>
                    <div class="modal-body">
                        <h4>Rules</h4>
                        <ul>
                            <li>Two members in a team. </li>
                            <li>1st round: Aptitude test (Half an hour)if required.</li>
                            <li>2nd round: Area measurement (1 hour).</li>
                            <li>All the required materials will be provided and no extra materials must be brought by the participants except calculator. </li>
                            <li> Decision will be based on accuracy and timing. </li>
                            <li>Judge’s decision will be final.</li>
                        </ul>
                        <hr>
                        <button type="button" class="btn btn-danger" onclick="eventSession('Rule Without Ruler')">Register</button>
                        <h4>Staff Coordinator</h4>
                        <ul>
                            <li>Mr. Prajnesh(9945828520)</li>
                        </ul>
                        <hr>
                        <h4>Student Coordinator</h4>
                        <ul>
                            <li>Abdul Raheem (9739051865)</li>
                            <li>Shabarish R  (9632218880)</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="mtModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Mind Tickler (Technical Quiz)</h3>
                        <h4>Day 1</h4>
                    </div>
                    <div class="modal-body">
                        <h4>Rules</h4>
                        <ul>
                            <li>Preliminary round will be conducted.</li>
                            <li>Questions are related to civil engineering field.</li>
                            <li>2 make a team.</li>
                            <li>Judge's decision will be final.</li>
                        </ul>
                        <hr>
                        <button type="button" class="btn btn-danger" onclick="eventSession('Mind Tickler')">Register</button>
                        <h4>Staff Coordinator</h4>
                        <ul>
                            <li>Ms Pooja Rani (7204992980)</li>
                        </ul>
                        <hr>
                        <h4>Student Coordinator</h4>
                        <ul>
                            <li>Dildar (8408091865)</li>
                            <li>Pavithra G (9731508958)</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="wasteModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Solid Waste Management</h3>
                        <h4>Day 1</h4>
                    </div>
                    <div class="modal-body">
                        <h4>Rules</h4>
                        <ul>
                            <li>Each team consists of 3 members.</li>
                            <li>Duration: 2 hours .</li>
                            <li>Stationary items like Gum, scissor, blade, pins etc to be brought by the participants. </li>
                            <li>Waste materials or used items like cloth, plastic, cardboard, wires, metal items, etc to be brought by the participants as well.</li>
                            <li>Judges decision will be final.</li>
                        </ul>
                        <hr>
                        <button type="button" class="btn btn-danger" onclick="eventSession('Waste Management')">Register</button>
                        <h4>Staff Coordinator</h4>
                        <ul>
                            <li>Mr. Vignesh (7204273146)</li>
                        </ul>
                        <hr>
                        <h4>Student Coordinator</h4>
                        <ul>
                            <li>Arun S Nair  (8075403783)</li>
                            <li>Karthik K M  (9606581547)</li>
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

