<?php
session_start();
if (isset($_SESSION['login'])): ?>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Report</title>
        <link href="../include/bootstrap.min.css" rel="stylesheet">
        <script src="../include/bootstrap.min.js"></script>
        <link href="../newfonts/newfonts.css" rel="stylesheet">
        <script src="../js/jquery.js"></script>
        <script>
            $(document).ready(function () {
                $("#ae") .click(function () {
                    $("#aetable").show();
                    $("#cvtable").hide();
                    $("#ectable").hide();
                    $("#cstable").hide();
                    $("#metable").hide();
                    $("#cultable").hide();
                })
            });
            $(document).ready(function () {
                $("#ce") .click(function () {
                    $("#cvtable").show();
                    $("#aetable").hide();
                    $("#ectable").hide();
                    $("#cstable").hide();
                    $("#metable").hide();
                    $("#cultable").hide();
                })
            });
            $(document).ready(function () {
                $("#ec") .click(function () {
                    $("#ectable").show();
                    $("#aetable").hide();
                    $("#cvtable").hide();
                    $("#cstable").hide();
                    $("#metable").hide();
                    $("#cultable").hide();
                })
            });
            $(document).ready(function () {
                $("#cs") .click(function () {
                    $("#cstable").show();
                    $("#aetable").hide();
                    $("#cvtable").hide();
                    $("#ectable").hide();

                    $("#metable").hide();
                    $("#cultable").hide();
                })
            });
            $(document).ready(function () {
                $("#me") .click(function () {
                    $("#metable").show();
                    $("#aetable").hide();
                    $("#cvtable").hide();
                    $("#ectable").hide();
                    $("#cstable").hide();

                    $("#cultable").hide();
                })
            });
            $(document).ready(function () {
                $("#cul") .click(function () {
                    $("#cultable").show();
                    $("#aetable").hide();
                    $("#cvtable").hide();
                    $("#ectable").hide();
                    $("#cstable").hide();
                    $("#metable").hide();

                })
            });
            function genReport(dept) {
                window.location.href="report.php?dept="+dept;
            }
        </script>
        <style>
            body{
                background-image: url("../images/adminback.jpg");
                background-repeat: no-repeat;
                background-size: cover;
            }
            h2{
                font-family: Courgette;
                text-align: center;
                font-size: 40px;
            }
            span{
                font-family: Philosopher;
                font-size: 30px;
                color: black;
            }
            table{
                width: 100%;
                font-family: Catamaran;
                color: black;
                background-color: rgba(213, 184, 255, 1);
            }
            table td{
                font-family:Catamaran;
                font-size: 15px;
                text-align: center;
                height: 50%;
                padding-right: 1%;
                padding-left: 1%;
                padding-top: 1%;
                padding-bottom: 1%;
            }
            table,th,td{
                border: 1px solid black;
            }
            .panel{
                opacity: 0.6;
                margin-top: 5%;
            }
        </style>
    </head>
    <body>
    <div class="container">
        <div class="panel">
              <h2>Details</h2>
              <span>Select Branch</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><input id="ae" type="radio" name="event" value="Aeronautical">Aeronautical
            &nbsp;&nbsp;<input id="ce" type="radio" name="event" value="Civil" >Civil
            &nbsp;&nbsp;<input id="ec" type="radio" name="event" value="E&C" >E&C
            &nbsp;&nbsp;<input id="cs" type="radio" name="event" value="CS/IS" >CS/IS
            &nbsp;&nbsp;<input id="me" type="radio" name="event" value="Mechanical" >Mechanical
            &nbsp;&nbsp;<input id="cul" type="radio" name="event" value="Cultural" >Cultural</span>
        </div>
        <table id="aetable" rules="rows" style="display: none" class="table-striped table-hover">
            <tr>
                <td colspan="6" style="font-family: Courgette">Aeronautical registration</td>
                <td colspan="7" style="text-align: right;font-family: Courgette"><button onclick="genReport('Aeronautical')" class="btn btn-danger">Report</button></td>
            </tr>
            <tr>
                <td>No</td>
                <td>Event</td>
                <td>Department</td>
                <td>Name</td>
                <td>Phone Number</td>
                <td>College</td>
                <td>Team Members</td>
            </tr>
            <?php
            include_once '../dbconnect.php';
            $qry = "SELECT * FROM reg WHERE department='Aeronautical' order by event";
            $res = mysqli_query($con,$qry);
            $i = 1;
            while ($arr = mysqli_fetch_row($res)):
                ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $arr[1]; ?></td>
                    <td><?php echo $arr[2]; ?></td>
                    <td><?php echo strtoupper($arr[3]) ; ?></td>
                    <td><?php echo $arr[4]; ?></td>
                    <td><?php echo $arr[5]; ?></td>
                    <td><?php echo strtoupper($arr[6]) ; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
        <table id="cvtable" rules="rows" style="display: none" class="table-striped table-hover">
            <tr>
                <td colspan="6" style="font-family: Courgette">Civil registration</td>
                <td colspan="7" style="text-align: right;font-family: Courgette"><button onclick="genReport('Civil')" class="btn btn-danger">Report</button></td>
            </tr>
            <tr>
                <td>No</td>
                <td>Event</td>
                <td>Department</td>
                <td>Name</td>
                <td>Phone Number</td>
                <td>College</td>
                <td>Team Members</td>
            </tr>
            <?php
            include_once '../dbconnect.php';
            $qry = "SELECT * FROM reg WHERE department='Civil' order by event";
            $res = mysqli_query($con,$qry);
            $i = 1;
            while ($arr = mysqli_fetch_row($res)):
                ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $arr[1]; ?></td>
                    <td><?php echo $arr[2]; ?></td>
                    <td><?php echo strtoupper($arr[3]) ; ?></td>
                    <td><?php echo $arr[4]; ?></td>
                    <td><?php echo $arr[5]; ?></td>
                    <td><?php echo strtoupper($arr[6]) ; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
        <table id="ectable" rules="rows" style="display: none" class="table-striped table-hover">
            <tr>
                <td colspan="6" style="font-family: Courgette">Electronics and Comunication registration</td>
                <td colspan="7" style="text-align: right;font-family: Courgette"><button onclick="genReport('Electronics')" class="btn btn-danger">Report</button></td>
            </tr>
            <tr>
                <td>No</td>
                <td>Event</td>
                <td>Department</td>
                <td>Name</td>
                <td>Phone Number</td>
                <td>College</td>
                <td>Team Members</td>
            </tr>
            <?php
            include_once '../dbconnect.php';
            $qry = "SELECT * FROM reg WHERE department='Electronics' order by event";
            $res = mysqli_query($con,$qry);
            $i = 1;
            while ($arr = mysqli_fetch_row($res)):
                ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $arr[1]; ?></td>
                    <td><?php echo $arr[2]; ?></td>
                    <td><?php echo strtoupper($arr[3]) ; ?></td>
                    <td><?php echo $arr[4]; ?></td>
                    <td><?php echo $arr[5]; ?></td>
                    <td><?php echo strtoupper($arr[6]) ; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
        <table id="cstable" rules="rows" style="display: none" class="table-striped table-hover">
            <tr>
                <td colspan="6" style="font-family: Courgette">Cs/Is registration</td>
                <td colspan="7" style="text-align: right;font-family: Courgette"><button onclick="genReport('Computer Science')" class="btn btn-danger">Report</button></td>
            </tr>
            <tr>
                <td>No</td>
                <td>Event</td>
                <td>Department</td>
                <td>Name</td>
                <td>Phone Number</td>
                <td>College</td>
                <td>Team Members</td>
            </tr>
            <?php
            include_once '../dbconnect.php';
            $qry = "SELECT * FROM reg WHERE department='Computer Science' order by event";
            $res = mysqli_query($con,$qry);
            $i = 1;
            while ($arr = mysqli_fetch_row($res)):
                ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $arr[1]; ?></td>
                    <td><?php echo $arr[2]; ?></td>
                    <td><?php echo strtoupper($arr[3]) ; ?></td>
                    <td><?php echo $arr[4]; ?></td>
                    <td><?php echo $arr[5]; ?></td>
                    <td><?php echo strtoupper($arr[6]) ; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
        <table id="metable" rules="rows" style="display: none"class="table-striped table-hover">
            <tr>
                <td colspan="6" style="font-family: Courgette">Mechanical registration</td>
                <td colspan="7" style="text-align: right;font-family: Courgette"><button onclick="genReport('Mechanical')" class="btn btn-danger">Report</button></td>
            </tr>
            <tr>
                <td>No</td>
                <td>Event</td>
                <td>Department</td>
                <td>Name</td>
                <td>Phone Number</td>
                <td>College</td>
                <td>Team Members</td>
            </tr>
            <?php
            include_once '../dbconnect.php';
            $qry = "SELECT * FROM reg WHERE department='Mechanical' order by event";
            $res = mysqli_query($con,$qry);
            $i = 1;
            while ($arr = mysqli_fetch_row($res)):
                ?>
                <tr>
                    <td ><?php echo $i++; ?></td>
                    <td ><?php echo $arr[1]; ?></td>
                    <td ><?php echo $arr[2]; ?></td>
                    <td ><?php echo strtoupper($arr[3]) ; ?></td>
                    <td ><?php echo $arr[4]; ?></td>
                    <td ><?php echo $arr[5]; ?></td>
                    <td ><?php echo strtoupper($arr[6]) ; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
        <table id="cultable" rules="rows" style="display: none" class="table-striped table-hover">
            <tr>
                <td colspan="6" style="font-family: Courgette">Cultural registration</td>
                <td colspan="7" style="text-align: right;font-family: Courgette"><button onclick="genReport('Cultural')" class="btn btn-danger">Report</button></td>
            </tr>
            <tr>
                <td>No</td>
                <td>Event</td>
                <td>Department</td>
                <td>Name</td>
                <td>Phone Number</td>
                <td>College</td>
                <td>Team Members</td>
            </tr>
            <?php
            include_once '../dbconnect.php';
            $qry = "SELECT * FROM reg WHERE department='cultural' order by event";
            $res = mysqli_query($con,$qry);
            $i = 1;
            while ($arr = mysqli_fetch_row($res)):
                ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $arr[1]; ?></td>
                    <td><?php echo $arr[2]; ?></td>
                    <td><?php echo strtoupper($arr[3]) ; ?></td>
                    <td><?php echo $arr[4]; ?></td>
                    <td><?php echo $arr[5]; ?></td>
                    <td><?php echo strtoupper($arr[6]) ; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
    </body>
    </html>
<?php else: ?>
    <script>window.location="index.php"</script>
<?php endif; ?>
<?php
//    header("Content-type: application/octet/*");
//    header("Content-Disposition: attatchment;Filename=")
//?>
