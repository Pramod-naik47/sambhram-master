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
        #nfs {
            height: 250px;
            background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/pubg.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }
        #cs{
            height: 250px;
            background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/counter_strike.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }
        #TechPresento{
            height: 250px;
            background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/paper_presentation.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        #Quizholic {
            height: 250px;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(images/quiz.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        #Web {
            height: 250px;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(images/webmasters.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        #Spycoder {
            height: 250px;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(images/spycoder.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        #Grapix {
            height: 250px;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(images/tech_dumb_charads.jpeg);
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
            $("#nfs").click(function(){
                $("#nfsModal").modal();
            });

            $("#cs").click(function(){
                $("#csModal").modal();
            });

            $("#TechPresento").click(function(){
                $("#tpModal").modal();
            });


            $("#Quizholic").click(function(){
                $("#tqModal").modal();
            });


            $("#Web").click(function(){
                $("#webModal").modal();
            });

            $("#Spycoder").click(function(){
                $("#spyModal").modal();
            });
            $("#Grapix").click(function(){
                $("#grapixModal").modal();
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
            <div class="title">
                <h1>Events</h1>
                <h2>Cs/Is Engineering</h2>
            </div>
        </div>

        <div class="event-body">
            <div class="row">
                <div  class="col-lg-4 col-sm-4">
                    <div id="nfs" class="cursor">
                            <div class="event-title" style="">PUBG</div>
                    </div>
                </div>
                <div  class="col-lg-4 col-sm-4">
                    <div id="cs" class="cursor">
                            <div class="event-title">Counter Strike</div>
                    </div>
                </div>
                <div  class="col-lg-4 col-sm-4">
                    <div id="TechPresento" class="cursor">
                            <div class="event-title">TechPresento</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div  class="col-lg-4 col-sm-4">
                    <div id="Quizholic" class="cursor">
                            <div class="event-title">Quizholic</div>
                    </div>
                </div>
                <div  class="col-lg-4 col-sm-4">
                    <div id="Web" class="cursor">
                            <div class="event-title">Web Mania</div>
                    </div>
                </div>
                <div  class="col-lg-4 col-sm-4">
                    <div id="Spycoder" class="cursor">
                            <div class="event-title">So You Think <br>You Can Code</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div  class="col-lg-4 col-sm-4">
                    <div id="Grapix" class="cursor">
                            <div class="event-title">Tech Dumb Charads</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div id="nfsModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">PUBG</h3>
                        <h4>Day 1</h4>
                    </div>
                    <div class="modal-body">
                        <h4>Rules</h4>
                        <ul>
                            <li>Squad only</li>
                            <li>Team will be subjected to disqualification if they are found to be using emulators or any other additional tools for the game.</li>
                            <li>Even if players modify the game files on their smartphones or using one key to bind two actions during the gameplay the whole squad will be eliminated.</li>
                        </ul>
                        <hr>
                        <button type="button" class="btn btn-danger" onclick="eventSession('PUBG')">Register</button>
                        <h4>Staff Coordinator</h4>
                        <ul>
                            <li>Mr Rizwan Shaikh (9632593123)</li>
                        </ul>
                        <hr>
                        <h4>Student Coordinator</h4>
                        <ul>
                            <li>Harsh Bidappa (9481851297)</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="csModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Counter Strike (Gaming)</h3>
                        <h4>Day 1</h4>
                    </div>
                    <div class="modal-body">
                        <h4>Rules</h4>
                        <ul>
                            <li>Counter Strike 1.6</li>
                            <li>Only 5 members in a team, each of them belonging to the same institution.</li>
                            <li>In a match two teams will go against each other.</li>
                            <li>In each match there will be 12 rounds and the 1st team to get to 7 wins will be promoted for the next match.</li>
                            <li>College identity cards are mandatory.</li>
                            <li>Altering of the video and some specific setting is prohibited, if found, will result in immediate disqualification.</li>
                        </ul>
                        <hr>
                        <button type="button" class="btn btn-danger" onclick="eventSession('Counter Strike')" >Register</button>
                        <h4>Staff Coordinator</h4>
                        <ul>
                            <li>Mr. Sadanand (9591964222)</li>
                        </ul>
                        <hr>
                        <h4>Student Coordinator</h4>
                        <ul>
                            <li>Preetham (7899033055)</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="tpModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">TechPresento (Technical Paper Presentation)</h3>
                        <h4>Day 1</h4>
                    </div>
                    <div class="modal-body">
                        <h4>Rules</h4>
                        <ul>
                            <li>Maximum two make a team.</li>
                            <li>Soft copy of the papers are to be submitted to the given email ID 4 days prior to the event.</li>
                            <li>Total time duration 6+1, 6 minutes to present and 1 minute for the questionnaires.</li>
                            <li>No spot registration.</li>
                            <li>Current IT (2017-2018-2019) topics are appreciated for the event</li>
                            <li>Any misbehaviour or misleading action by the candidate can result in direct rejection of the candidate from the presentation.</li>
                            <li>The paper must be in IEEE format and an original.</li>
                            <li>Two hard copies of your paper must be provided.</li>
                            <li>The judges decision will be the final.</li>
                            <li>Mail your paper to techpresent.sdit@yahoo.com</li>
                        </ul>
                        <hr>
                        <button type="button" class="btn btn-danger" onclick="eventSession('Tech Presento')">Register</button>
                        <h4>Staff Coordinator</h4>
                        <ul>
                            <li>Mrs. Nisha Veronica Coutinho (9731957668)</li>
                            <li>Ms. Srinidhi Shetty (8197791650)</li>
                        </ul>
                        <hr>
                        <h4>Student Coordinator</h4>
                        <ul>
                            <li>Bhakthi Shetty (8970491678)</li>
                            <li>Akhil Nair (8296767823)</li>
                            <li>Harshitha Shetty  (8867477441)</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="tqModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Quizholic (Technical Quiz)</h3>
                        <h4>Day 1</h4>
                    </div>
                    <div class="modal-body">
                        <h4>Rules</h4>
                        <ul>
                            <li>Two make a team.</li>
                            <li>Event is of Three Rounds.</li>
                            <li>Prelims will be conducted if necessary. </li>
                            <li>Decisions made by organizers and judges are final.</li>
                        </ul>
                        <hr>
                        <button type="button" class="btn btn-danger" onclick="eventSession('Quizolic')">Register</button>
                        <h4>Staff Coordinator</h4>
                        <ul>
                            <li>Mrs. Reshma (9481466542)</li>
                        </ul>
                        <hr>
                        <h4>Student Coordinator</h4>
                        <ul>
                            <li>Siddaramaradhya (8861215540 </li>
                            <li>Patel Ashiya (7760119233)</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="webModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Web Mania</h3>
                        <h4>Day 1</h4>
                    </div>
                    <div class="modal-body">
                        <h4>Rules</h4>
                        <ul>
                            <li>Two make a team.</li>
                            <li>Time duration 2 HOURS.</li>
                            <li>No gadgets are allowed.</li>
                            <li>Prelims will be conducted if necessary.</li>
                            <li>Themes will be provided on the spot.</li>
                            <li>API (bootstraps, Angular JS, Animate,JOuery) And IDE will be provided.</li>
                            <li>Judges decision will be final.</li>
                        </ul>
                        <hr>
                        <button type="button" class="btn btn-danger" onclick="eventSession('Web Mania')">Register</button>
                        <h4>Staff Coordinator</h4>
                        <ul>
                            <li>Mr. Rohan (9535645357)</li>
                        </ul>
                        <hr>
                        <h4>Student Coordinator</h4>
                        <ul>
                            <li>Pramod (9482022134)</li>
                            <li>Shriya Devadiga (9916121139)</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="spyModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">So You Think You Can Code</h3>
                        <h4>Day 1</h4>
                    </div>
                    <div class="modal-body">
                        <h4>Rules</h4>
                        <ul>
                            <li>Two make a team.</li>
                            <li>No gadgets are allowed if so instant disqualification.</li>
                            <li>Decisions made by organizers and judges are final.</li>
                            <li>Round 1: Paper Test.</li>
                            <li>Round 2: Debugging.</li>
                            <li>Round 3: Coding.</li>
                        </ul>
                        <hr>
                        <button type="button" class="btn btn-danger" onclick="eventSession('Code')">Register</button>
                        <h4>Staff Coordinator</h4>
                        <ul>
                            <li>Mr. Shrikanth (9880410030)</li>
                        </ul>
                        <hr>
                        <h4>Student Coordinator</h4>
                        <ul>
                            <li>Daryll Castelino (8722870159)</li>
                            <li>Sumanth (8970732631)</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="grapixModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">TECH DUMB CHARADES</h3>
                        <h4>Day 1</h4>
                    </div>
                    <div class="modal-body">
                        <h4>Rules</h4>
                        <ul>
                            <li>Three make a team.</li>
                            <li>No lip movements, no subjects and no alphabet indication.</li>
                            <li>Decisions made by organizers and judges are final.</li>
                        </ul>
                        <hr>
                        <button type="button" class="btn btn-danger" onclick="eventSession('Tech Dumb Charads')">Register</button>
                        <h4>Staff Coordinator</h4>
                        <ul>
                            <li> Ms. Raksha P (8197930538)</li>
                        </ul>
                        <hr>
                        <h4>Student Coordinator</h4>
                        <ul>
                            <li>Shraddha (9164761579)</li>
                            <li>Reshma (8310815092)</li>
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

