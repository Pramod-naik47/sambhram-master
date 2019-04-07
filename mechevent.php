<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Mechanical Events</title>
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
            $("#pPresentation").click(function(){
                $("#ttppModal").modal();
            });

            $("#Debate").click(function(){
                $("#debateModal").modal();
            });

            $("#Foundry").click(function(){
                $("#foundryModal").modal();
            });


            $("#RoboWar").click(function(){
                $("#roboModal").modal();
            });


            $("#ScrapWelding").click(function(){
                $("#swModal").modal();
            });
        });
    </script>
    <style>
        #pPresentation{
            height: 250px;
            background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/paper_presentation.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        #Debate{
            height: 250px;
            background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/quiz.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        #Foundry{
            height: 250px;
            background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/modeling.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        #RoboWar {
            height: 250px;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(images/robowars.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        #ScrapWelding {
            height: 250px;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(images/welding.jpg);
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
            #pPresentation{
                margin-top: 52%;
            }
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
                <h2>Mechanical Engineering</h2>
            </div>
        </div>

        <div class="event-body">
            <div class="row">
                <div  class="col-lg-4 col-sm-4">
                    <div id="pPresentation" class="cursor">
                        <div class="event-title" style=""> Papyrus<br>(Paper Presentation)</div>
                    </div>
                </div>
                <div  class="col-lg-4 col-sm-4">
                    <div id="Debate" class="cursor">
                        <div class="event-title">quizzies</div>
                    </div>
                </div>
                <div  class="col-lg-4 col-sm-4">
                    <div id="Foundry" class="cursor">
                        <div class="event-title">Pro-Modeler</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div  class="col-lg-4 col-sm-4">
                    <div id="RoboWar" class="cursor">
                        <div class="event-title">Clash of Bots</div>
                    </div>
                </div>
                <div  class="col-lg-4 col-sm-4">
                    <div id="ScrapWelding" class="cursor">
                        <div class="event-title">Junkyard<br>(Scrap Welding)</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<div class="row">
    <div id="ttppModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Papyrus(Paper Presentation)</h3>
                    <h4>Day 1</h4>
                </div>
                <div class="modal-body">
                    <h4>Rules</h4>
                    <ul>
                        <li>The topic for presentation is “RECENT TRENDS IN MECHANICAL ENGINEERING ”. </li>
                        <li>A team can consist of 1 or 2 members. </li>
                        <li>Paper to be submitted in IEEE format </li>
                        <li>Time provided for presentation is 8+2 mins. (8-ppt and 2 for Q&A) </li>
                        <li>Abstract of the presentation should be mailed to on or before 15/04/2019  to  mechsdit@gmail.com</li>
                        <li>Decision of judges and event heads is final.</li>
                    </ul>
                    <hr>
                    <button type="button" class="btn btn-danger" onclick="eventSession('Papyrus')">Register</button>
                    <h4>Staff Coordinator</h4>
                    <ul>
                        <li>Mr. Ganesha Prasad  (7760231818)</li>
                    </ul>
                    <hr>
                    <h4>Student Coordinator</h4>
                    <ul>
                        <li>Sakshath Shenava  (7204538086)</li>
                        <li>Jnanesh Kumar (9901661888)</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="debateModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Quizzies(Mechanical/Auto Quiz)</h3>
                    <h4>Day 1</h4>
                </div>
                <div class="modal-body">
                    <h4>Rules</h4>
                    <ul>
                        <li>A team must consist of 2 members.</li>
                        <li>Prelims will be conducted before the final round. </li>
                        <li>The participants will not be allowed to use mobile or other electrical gadgets during the quiz.</li>
                        <li>Decision of judges and event heads is final. </li>
                    </ul>
                    <hr>
                    <button type="button" class="btn btn-danger" onclick="eventSession('Quizzies')" >Register</button>
                    <h4>Staff Coordinator</h4>
                    <ul>
                        <li>Mr. Nobel James (9809935615)</li>
                    </ul>
                    <hr>
                    <h4>Student Coordinator</h4>
                    <ul>
                        <li>Nihal Noronha  (7259471261)</li>
                        <li>Darren Royston  (9964348387)</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="foundryModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Pro-Modeler(3D Modeling)</h3>
                    <h4>Day 1</h4>
                </div>
                <div class="modal-body">
                    <h4>Rules</h4>
                    <ul>
                        <li>Design and duration will  be given on spot.</li>
                        <li>Software used will be Solid Edge.</li>
                        <li>In all cases, the judges decision will be final and binding. </li>
                    </ul>
                    <hr>
                    <button type="button" class="btn btn-danger" onclick="eventSession('Pro-Modeler')">Register</button>
                    <h4>Staff Coordinator</h4>
                    <ul>
                        <li>Mr. Nirmith Jain  (9964139996)</li>
                    </ul>
                    <hr>
                    <h4>Student Coordinator</h4>
                    <ul>
                        <li>Mohammed Rayyan Rafi (9741203156)</li>
                        <li>Wajahat Ali  (9158804652 )</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="roboModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Clash of Bots(Robo War)</h3>
                    <h4>Day 1</h4>
                </div>
                <div class="modal-body">
                    <h4>Rules</h4>
                    <ul>
                        <li>Four make a team and have to belong to the same institution.</li>
                        <li>Weight limit of the bots is to be 10+5.</li>
                        <li>Dimension of the bot: 60cm*60cm*60cm with ±10% tolerance.</li>
                        <li>The bot will be inspected for safety before the event begins. If found to be unsafe for the participants/spectators, it will be  · The bot will be inspected for safety before the event begins. If found to be unsafe for the participants/spectators, it will be disqualified.</li>
                        <li>The maximum time limit for the clash of combatants inside the arena is 10 minutes.</li>
                        <li>A bot will be declared immobile (out) if it cannot exhibit linear motion of at least one inch within 10 seconds. A bot with one side  · A bot will be declared immobile (out) if it cannot exhibit linear motion of at least one inch within 10 seconds. A bot with one side of its drive train disabled will not be counted out if it can demonstrate some degree of controlled movement.</li>
                        <li>The bot cannot be split into two sub-units. Two distinct parts connected by a flexible cable will be considered separate units.</li>
                        <li>Damaging the arena will lead to immediate disqualification.</li>
                        <li>Lego kits, readymade kits, car bases and development boards are not permitted. Readymade gear boxes are permitted.</li>
                        <li>In all cases, the judges decision will be final and binding</li>
                    </ul>
                    <hr>
                    <button type="button" class="btn btn-danger" onclick="eventSession('Clash of Bots')">Register</button>
                    <h4>Staff Coordinator</h4>
                    <ul>
                        <li>Mr. Arun Krishna  (9945082873)</li>
                        <li>Mr. Kishan M  (9902898706)</li>
                    </ul>
                    <hr>
                    <h4>Student Coordinator</h4>
                    <ul>
                        <li>Divyaprasad Rai(8073339052)</li>
                        <li>Thejas D R  (9535416673)</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="swModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Junkyard(Scrap Welding)</h3>
                    <h4>Day 1</h4>
                </div>
                <div class="modal-body">
                    <h4>Rules</h4>
                    <ul>
                        <li>Two make a team. </li>
                        <li>Design and duration will be given on spot. </li>
                        <li>Scrap items will be provided.</li>
                        <li>In all cases, the judges decision will be final and binding.</li>
                    </ul>
                    <hr>
                    <button type="button" class="btn btn-danger" onclick="eventSession('Junkyard')">Register</button>
                    <h4>Staff Coordinator</h4>
                    <ul>
                        <li>Mr.Sachin L  (9482249016)</li>
                    </ul>
                    <hr>
                    <h4>Student Coordinator</h4>
                    <ul>
                        <li>Sooraj Kumar  (7760458612)</li>
                        <li>Vinyas C (9544028005)</li>
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
                Shree Devi Institute Of Technology,Kenjar,Mangalore-575003.
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

