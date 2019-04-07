<html>
<head>
    <meta charset="UTF-8">
    <title>admin</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="../animate.css" rel="stylesheet">
    <link href="../include/bootstrap.min.css" rel="stylesheet">
    <link href="../newfonts/newfonts.css" rel="stylesheet">
    <script src="../include/bootstrap.min.js"></script>

    <script src="../js/jquery.js"></script>
    <style>
        body{
            background-image: url("../images/adminback2.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
          table{
            width: 100%;
            font-family: Courgette;
            color: greenyellow;
            background-color: rgba(30,50,110,0.5);
        }
        td{
            font-size: 20px;
            text-align: center;
        }
        #main{
            margin-top: 10%;
        }
        span{
            font-family: Amaranth;
            font-weight: bold;
            font-size: 20px
        }
        /*img{*/
            /*box-shadow:  0 1px 2px rgba(0,0,0,0.24);*/
        /*}*/
    </style>
    <script>
        $(function () {
            $("#fd").click(function () {
                $("#main").hide();
                $("#feedback").show();
            });
            $(".back").click(function () {
                window.location.reload();
            });
        });
    </script>
</head>
<body>
    <div class="container">
        <h1 style="font-family: Amaranth;text-align: center">Choose your task</h1>
        <div id="main" class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-3 text-center">
                <a href="eventreport.php"><img src="../images/icon1.jpg" height="180" width="200" class="img-circle"></a><br/>
                <span>Registration report</span>
            </div>
            <div class="col-xs-3 text-center">
                <img src="../images/icon2.png" id="fd" height="160" width="160" class="img-circle"><br/>
                <span>View Feedback</span>
            </div>
            <div class="col-xs-3"></div>
        </div>



        <table id="feedback"  rules="rows" class="animated slideInLeft" style="display: none">
            <tr>
                <td class="back" style="text-align: left;color: crimson;"><i class="fa fa-2x fa-backward" style="cursor: pointer"></i></td>
            </tr>
            <tr>
                <td>No</td>
                <td>uname</td>
                <td>Email</td>
                <td>Suggation</td>
                <td>rate</td>
            </tr>
            <?php
            include_once '../dbconnect.php';
            $qry = "SELECT * FROM feedback";
            $res = mysqli_query($con,$qry);
            $i = 1;
            while ($arr = mysqli_fetch_row($res)):
                ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $arr[1]; ?></td>
                    <td><?php echo $arr[2]; ?></td>
                    <td><?php echo $arr[3]; ?></td>
                    <td><?php echo $arr[4]; ?></td>

                </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>