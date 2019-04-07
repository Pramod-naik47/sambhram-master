<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Cultural Events</title>
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
            $("#Lights").click(function(){
                $("#YouMeinAurHum").modal();
            });

            $("#TheHennaArt").click(function(){
                $("#hennaModal").modal();
            });

            $("#CreativeWriting").click(function(){
                $("#Mind-IchModal").modal();
            });


            $("#ComicCon").click(function(){
                $("#ComicModal").modal();
            });


            $("#CrazyMarketiers").click(function(){
                $("#AdMadModal").modal();
            });

            $("#MirrorImage").click(function(){
                $("#PehchaanKaunModal").modal();
            });

            $("#FrameIt").click(function(){
                $("#ZoomModal").modal();
            });

            $("#Kosupure").click(function(){
                $("#SktchingModal").modal();
            });


            $("#TheChasers").click(function(){
                $("#Find-O-SearchModal").modal();
            });


            $("#SongsUnlimited").click(function(){
                $("#Antya-Akshara").modal();
            });

            $("#RhytmicRide").click(function(){
                $("#singingModal").modal();
            });

            $("#FaceOff").click(function(){
                $("#CorporatetalksModal").modal();
            });

            $("#PrettyCute-Icles").click(function(){
                $("#MinuteModal").modal();
            });


            $("#ThePerformers").click(function(){
                $("#LipModal").modal();
            });


            $("#DanceMania").click(function(){
                $("#danaceModal").modal();
            });
            $("#solodance").click(function(){
                $("#soloModal").modal();
            });
        });


    </script>
    <style>
        #Lights {
            height: 250px;
            background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/tom_dick_and_harry.jpeg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        #TheHennaArt{
            height: 250px;
            background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/mehendi.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        #CreativeWriting{
            height: 250px;
            background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/creative_writing.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        #DanceMania {
            height: 250px;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(images/group_dance.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        #CrazyMarketiers {
            height: 250px;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(images/madads.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        #MirrorImage {
            height: 250px;
            background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/face_painting.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        #FrameIt{
            height: 250px;
            background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/photography.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        #Kosupure{
            height: 250px;
            background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/sketching.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        #TheChasers {
            height: 250px;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(images/treasure_hunt.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        #SongsUnlimited {
            height: 250px;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(images/singing.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        #RhytmicRide {
            height: 250px;
            background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/antakshari.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        #FaceOff{
            height: 250px;
            background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/stress_interview.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        #PrettyCute-Icles{
            height: 250px;
            background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/jam.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        #ThePerformers {
            height: 250px;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(images/lip_sync.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        #ComicCon {
            height: 250px;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(images/comiccon.jpeg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        #solodance {
            height: 250px;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(images/solo.jpg);
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
                <h2>Cultural Engineering</h2>
            </div>
        </div>
        <div class="event-body">
            <div class="row">
                <div  class="col-lg-4 col-sm-4">
                    <div id="Lights" class="cursor">
                        <div class="event-title" style="">You Mein Aur Hum<br>(Tom Dick and Harry)</div>
                    </div>
                </div>
                <div  class="col-lg-4 col-sm-4">
                    <div id="TheHennaArt" class="cursor">
                        <div class="event-title">The Henna Art</div>
                    </div>
                </div>
                <div  class="col-lg-4 col-sm-4">
                    <div id="CreativeWriting" class="cursor">
                        <div class="event-title">Mind-Ich<br>(Creative writing)</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div  class="col-lg-4 col-sm-4">
                    <div id="ComicCon" class="cursor">
                        <div class="event-title">Comic Con</div>
                    </div>
                </div>
                <div  class="col-lg-4 col-sm-4">
                    <div id="CrazyMarketiers" class="cursor">
                        <div class="event-title">Ad Mad<br>(Mad Ads)</div>
                    </div>
                </div>
                <div  class="col-lg-4 col-sm-4">
                    <div id="MirrorImage" class="cursor">
                        <div class="event-title">Pehchaan Kaun <br>(Face Painting) </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div  class="col-lg-4 col-sm-4">
                    <div id="FrameIt" class="cursor">
                        <div class="event-title">Zoom <br>(Photography)</div>
                    </div>
                </div>
                <div  class="col-lg-4 col-sm-4">
                    <div id="Kosupure" class="cursor">
                        <div class="event-title">Scribble<br>(Sketching)</div>
                    </div>
                </div>
                <div  class="col-lg-4 col-sm-4">
                    <div id="TheChasers" class="cursor">
                        <div class="event-title" >Find-O-Search <br>(Treasure Hunt)</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div  class="col-lg-4 col-sm-4">
                    <div id="SongsUnlimited" class="cursor">
                        <div class="event-title">Antya-Akshara<br>(Antakshari)</div>
                    </div>
                </div>
                <div  class="col-lg-4 col-sm-4">
                    <div id="RhytmicRide" class="cursor">
                        <div class="event-title">Chorus<br>(singing)</div>
                    </div>
                </div>
                <div  class="col-lg-4 col-sm-4">
                    <div id="FaceOff" class="cursor">
                        <div class="event-title">Corporate talks<br>(Stress Interview)</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div  class="col-lg-4 col-sm-4">
                    <div id="PrettyCute-Icles" class="cursor">
                        <div class="event-title">Just a Minute</div>
                    </div>
                </div>
                <div  class="col-lg-4 col-sm-4">
                    <div id="ThePerformers" class="cursor">
                        <div class="event-title">Lip Sync</div>
                    </div>
                </div>
                <div  class="col-lg-4 col-sm-4">
                    <div id="DanceMania" class="cursor">
                        <div class="event-title">Group Dance</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div  class="col-lg-4 col-sm-4">
                    <div id="solodance" class="cursor">
                        <div class="event-title">Solo Dance</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<div class="row">
    <div id="YouMeinAurHum" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">You Mein Aur Hum(Tom Dick and Harry)</h3>
                    <h4>Day 2</h4>
                </div>
                <div class="modal-body">
                    <h4>Rules</h4>
                    <ul>
                        <li>Three make a team. </li>
                        <li>Use of cell phones is prohibited. </li>
                        <li>Prelims will be conducted if necessary</li>
                        <li>The topics will cover famous Celebrities, Politicians, Sports Person, etc.</li>
                    </ul>
                    <hr>
                    <button type="button" class="btn btn-danger" onclick="eventSession('You Mein Aur Hum')">Register</button>
                    <h4>Staff Coordinator</h4>
                    <ul>
                        <li>Ms. Suganthi  (8098267889)</li>
                    </ul>
                    <hr>
                    <h4>Student Coordinator</h4>
                    <ul>
                        <li>Lakshmi (8951909231)</li>
                        <li>Punya (7899289229 )</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="hennaModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">The Henna Art (Mehendi)</h3>
                    <h4>Day 2</h4>
                </div>
                <div class="modal-body">
                    <h4>Rules</h4>
                    <ul>
                        <li>Two make a team. </li>
                        <li>Time Limit: 60 minutes. </li>
                        <li>Required materials should be brought by participants. </li>
                        <li>Theme: Indian bridal design (one full hand).</li>
                    </ul>
                    <hr>
                    <button type="button" class="btn btn-danger" onclick="eventSession('The Henna Art')" >Register</button>
                    <h4>Staff Coordinator</h4>
                    <ul>
                        <li>Mrs. Shree Vidhya  (9741851721)</li>
                    </ul>
                    <hr>
                    <h4>Student Coordinator</h4>
                    <ul>
                        <li>Zafrina (9164668448)</li>
                        <li>Sana Kavser (7022614387)</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="Mind-IchModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Mind-Ich(Creative writing)</h3>
                    <h4>Day 2</h4>
                </div>
                <div class="modal-body">
                    <h4>Rules</h4>
                    <ul>
                        <li>Competition will be held in English and Kannada. Participants can choose from either of the languages.</li>
                        <li>Topics will be given on spot.</li>
                        <li>Participants are encouraged to put for original and unaided writings during competition.</li>
                    </ul>
                    <hr>
                    <button type="button" class="btn btn-danger" onclick="eventSession('Mind-Ich')">Register</button>
                    <h4>Staff Coordinator</h4>
                    <ul>
                        <li>Mrs. Anusha  (8553776893)</li>
                    </ul>
                    <hr>
                    <h4>Student Coordinator</h4>
                    <ul>
                        <li>Kirran Shet (8970153767)</li>
                        <li>Kruthika (7022216166)</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div id="ComicModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Comic Con</h3>
                    <h4>Day 1</h4>
                </div>
                <div class="modal-body">
                    <h4>Rules</h4>
                    <ul>
                        <li>Two make a team.</li>
                        <li> Use of cell phones is prohibited.</li>
                        <li>Prelims will be conducted if necessary</li>
                        <li>The topics will cover famous English TV Series, Anime and Comic Movies.</li>
                    </ul>
                    <hr>
                    <button type="button" class="btn btn-danger" onclick="eventSession('Comic Con')">Register</button>
                    <h4>Staff Coordinator</h4>
                    <ul>
                        <li>Mr. Vignesh (7204273146)</li>
                    </ul>
                    <hr>
                    <h4>Student Coordinator</h4>
                    <ul>
                        <li>Daryll (8722870199)</li>
                        <li>Harsha  (9481851297)</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="AdMadModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Ad Mad(Mad Ads)</h3>
                    <h4>Day 1</h4>
                </div>
                <div class="modal-body">
                    <h4>Rules</h4>
                    <ul>
                        <li>Time duration: 4+1 minutes. </li>
                        <li>Theme is open to the participants.</li>
                        <li>Vulgarity will result in disqualification. </li>
                    </ul>
                    <hr>
                    <button type="button" class="btn btn-danger" onclick="eventSession('Ad Mad')">Register</button>
                    <h4>Staff Coordinator</h4>
                    <ul>
                        <li>Mr. Arun K(99455082873)</li>
                    </ul>
                    <hr>
                    <h4>Student Coordinator</h4>
                    <ul>
                        <li>Sandesh Bangera (9482040031)</li>
                        <li>Nihal Noronha (7259471261)</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="PehchaanKaunModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Pehchaan Kaun(Face Painting)</h3>
                    <h4>Day 2</h4>
                </div>
                <div class="modal-body">
                    <h4>Rules</h4>
                    <ul>
                        <li>2 make a team. </li>
                        <li>The theme has to be explained. </li>
                        <li>Time duration 90 minutes.</li>
                        <li>Judgement is based on innovation, presentation and clarity of idea.</li>
                    </ul>
                    <hr>
                    <button type="button" class="btn btn-danger" onclick="eventSession('Pehchaan Kaun')">Register</button>
                    <h4>Staff Coordinator</h4>
                    <ul>
                        <li>Mrs. Lakshmi Baliga  (7411495459)</li>
                    </ul>
                    <hr>
                    <h4>Student Coordinator</h4>
                    <ul>
                        <li>Suzan Law  (6360547424)</li>
                        <li>Shifa Sultan (8746069266)</li>
                        <li>Arya Shika (8123160870)</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="ZoomModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Zoom (Photography)</h3>
                    <h4>Day 1</h4>
                </div>
                <div class="modal-body">
                    <h4>Rules</h4>
                    <ul>
                        <li>Topic will be given on spot. </li>
                        <li>The participants have to bring his/her own digital camera.</li>
                        <li>Digital camera should have a memory card which will be formatted zbefore the commencement of the event and enhancing images are not permitted. </li>
                        <li>Images are evaluated on the basis of impact, composition, technical quality and suitability to the specific theme. </li>
                    </ul>
                    <hr>
                    <button type="button" class="btn btn-danger" onclick="eventSession('Zoom (Photography)')">Register</button>
                    <h4>Staff Coordinator</h4>
                    <ul>
                        <li>Mr. Sadanada  (9591964222)</li>
                    </ul>
                    <hr>
                    <h4>Student Coordinator</h4>
                    <ul>
                        <li>Mohammed Hadnan (7736132335)</li>
                        <li>Siddaram Aradhya (8861215540)</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="SktchingModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Scribble(Sktching)</h3>
                    <h4>Day 2</h4>
                </div>
                <div class="modal-body">
                    <h4>Rules</h4>
                    <ul>
                        <li>Drawing Charts to be provided .</li>
                        <li>Participants should get the materials required .</li>
                        <li>Time duration 1 hour .</li>
                        <li>Topic will be given on spot .</li>
                        <li>Using phone during competition is prohibited .</li>
                    </ul>
                    <hr>
                    <button type="button" class="btn btn-danger" onclick="eventSession('Scribble(Sktching)')">Register</button>
                    <h4>Staff Coordinator</h4>
                    <ul>
                        <li>Mrs. Archana  (9481180471)</li>
                    </ul>
                    <hr>
                    <h4>Student Coordinator</h4>
                    <ul>
                        <li>Jumana  (8951370617)</li>
                        <li>Nikitha (8951615987)</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="Find-O-SearchModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Find-O-Search(Treasure Hunt)</h3>
                    <h4>Day 2</h4>
                </div>
                <div class="modal-body">
                    <h4>Rules</h4>
                    <ul>
                        <li>4 make a team.</li>
                        <li>Use of cell phones will not be allowed during the event. </li>
                        <li>Wandering outside the college campus will disqualify the team. </li>
                        <li>The decision of the event coordinators will be final and binding. </li>
                    </ul>
                    <hr>
                    <button type="button" class="btn btn-danger" onclick="eventSession('Find-O-Search')">Register</button>
                    <h4>Staff Coordinator</h4>
                    <ul>
                        <li>Mr. Manjunath  (9900573829)</li>
                    </ul>
                    <hr>
                    <h4>Student Coordinator</h4>
                    <ul>
                        <li>Manuja (9844651998)</li>
                        <li>Mamatha G S  (886779250 )</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="Antya-Akshara" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Antya-Akshara(Antakshari)</h3>
                    <h4>Day 2</h4>
                </div>
                <div class="modal-body">
                    <h4>Rules</h4>
                    <ul>
                        <li>3 make a team. </li>
                        <li>Only Bollywood Hindi songs.</li>
                        <li>The decision of the event coordinators will be final. </li>
                    </ul>
                    <hr>
                    <button type="button" class="btn btn-danger" onclick="eventSession('Antya-Akshara')">Register</button>
                    <h4>Staff Coordinator</h4>
                    <ul>
                        <li>Ms. Nasreen  (9164829531)</li>
                    </ul>
                    <hr>
                    <h4>Student Coordinator</h4>
                    <ul>
                        <li>Divya Prasad Rai  (7411744726)</li>
                        <li>Thejas D R (9535416673)</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="singingModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Chorus(singing)</h3>
                    <h4>Day 2</h4>
                </div>
                <div class="modal-body">
                    <h4>Rules</h4>
                    <ul>
                        <li>Time duration 3+1 minutes. </li>
                        <li>Filmy or album songs are allowed (English, Hindi, Kannada, and Malayalam). </li>
                        <li>Any type of instruments is allowed (No karaoke).</li>
                    </ul>
                    <hr>
                    <button type="button" class="btn btn-danger" onclick="eventSession('Chorus')">Register</button>
                    <h4>Staff Coordinator</h4>
                    <ul>
                        <li>Mrs. Pavithra  (7760573008)</li>
                    </ul>
                    <hr>
                    <h4>Student Coordinator</h4>
                    <ul>
                        <li>Vinutha B K  (7829204137 )</li>
                        <li>Usha H Y  (8095410391)</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="CorporatetalksModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Corporate talks</h3>
                    <h4>Day 2</h4>
                </div>
                <div class="modal-body">
                    <h4>Rules</h4>
                    <ul>
                        <li>Selected students will be interviewed individually by a committee. </li>
                        <li>The committee consist of three panel members. </li>
                        <li>Students will be asked stressful questions to test their patience and communication skills under a stressful situation.</li>
                    </ul>
                    <hr>
                    <button type="button" class="btn btn-danger" onclick="eventSession('Corporate talks')">Register</button>
                    <h4>Staff Coordinator</h4>
                    <ul>
                        <li>Mr. Prateek (9972818118)</li>
                    </ul>
                    <hr>
                    <h4>Student Coordinator</h4>
                    <ul>
                        <li>Manoj (9743035537)</li>
                        <li>Suraj  (9663954905)</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="MinuteModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Just a Minute</h3>
                    <h4>Day 2</h4>
                </div>
                <div class="modal-body">
                    <h4>Rules</h4>
                    <ul>
                        <li>It’s a solo event. </li>
                        <li>Number of rounds is dependent on number of participants. </li>
                        <li>No foul languages. </li>
                        <li>Formation of the sentences should be grammatically correct.</li>
                        <li>Judges decision is final.</li>
                    </ul>
                    <hr>
                    <button type="button" class="btn btn-danger" onclick="eventSession('Just a Minute')">Register</button>
                    <h4>Staff Coordinator</h4>
                    <ul>
                        <li>Mr. Shrikanth (9880410030)</li>
                    </ul>
                    <hr>
                    <h4>Student Coordinator</h4>
                    <ul>
                        <li>Bhakthi (8970491678)</li>
                        <li>Disha  (9606317660 )</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="LipModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <btton type="button" class="close" data-dismiss="modal">&times;</btton>
                    <h3 class="modal-title">Lip Sync</h3>
                    <h4>Day 2</h4>
                </div>
                <div class="modal-body">
                    <h4>Rules</h4>
                    <ul>
                        <li>Four members make a team. </li>
                        <li>The maximum time limit is 4 minutes per performance. After 4 minutes music will be stopped. </li>
                        <li>Teams can useprops. </li>
                        <li>Prelims will be conducted if necessary.</li>
                    </ul>
                    <hr>
                    <button type="button" class="btn btn-danger" onclick="eventSession('Lip Sync')">Register</button>
                    <h4>Staff Coordinator</h4>
                    <ul>
                        <li>Mrs. Sandhya (9900170151)</li>
                    </ul>
                    <hr>
                    <h4>Student Coordinator</h4>
                    <ul>
                        <li>Ayesha Gulshan  (8197616004)</li>
                        <li>Sapnaz (8296766988)</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="danaceModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Group Dance</h3>
                    <h4>Day 2</h4>
                </div>
                <div class="modal-body">
                    <h4>Rules</h4>
                    <ul>
                        <li>Minimum of 6 members and Maximum of 10 participants.</li>
                        <li>Time duration 3+1 minutes (Including stage setting.</li>
                        <li>Judgement criteria: The dancers, stage creation and presentation. </li>
                        <li>Music should be submitted in CD/Pen drive at least one hour before the competition to organizers..</li>
                        <li>Vulgarity and obscenity will result in disqualification of the  · Vulgarity and obscenity will result in disqualification of the participants. .</li>
                        <li>Marks will be deducted if time limit exceeds.</li>
                        <li>Types: Hip Hop, Jazz, Free Style, Semi classical, Fusion,  · Types: Hip Hop, Jazz, Free Style, Semi classical, Fusion, Contemporary, Movie songs etc.</li>
                        <li>Props are allowed.</li>
                    </ul>
                    <hr>
                    <button type="button" class="btn btn-danger" onclick="eventSession('Group dance')">Register</button>
                    <h4>Staff Coordinator</h4>
                    <ul>
                        <li>Mr. Rajesh  (8050102807)</li>
                    </ul>
                    <hr>
                    <h4>Student Coordinator</h4>
                    <ul>
                        <li>Shamitha Shetty  (7259934438)</li>
                        <li>Praveena kumar (9900235223)</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="soloModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <btton type="button" class="close" data-dismiss="modal">&times;</btton>
                    <h3 class="modal-title">Solo Dance</h3>
                    <h4>Day 2</h4>
                </div>
                <div class="modal-body">
                    <h4>Rules</h4>
                    <ul>
                        <li>Time duration 3+1 minutes (Including stage setting).</li>
                        <li>Judgement criteria: The dancer, stage creation and presentation.</li>
                        <li>Music should be submitted in CD/Pendrive at least one hour before the competition to organizers. </li>
                        <li>Vulgarity and obscenity will result in disqualification of the participants.</li>
                        <li>Marks will be deducted if time limit exceeds.</li>
                        <li>Types: Hip Hop, Jazz, Free Style, Semi classical, Fusion, Contemporary, Movie songs etc.</li>
                        <li>Props are allowed.</li>
                    </ul>
                    <hr>
                    <button type="button" class="btn btn-danger" onclick="eventSession('Solo Dance')">Register</button>
                    <h4>Staff Coordinator</h4>
                    <ul>
                        <li>Mr. Rajesh  (8050102807)</li>
                    </ul>
                    <hr>
                    <h4>Student Coordinator</h4>
                    <ul>
                        <li>Shamitha Shetty  (7259934438)</li>
                        <li>Praveena kumar (9900235223)</li>
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

