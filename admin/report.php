<?php
$dept=$_GET['dept'];
?>
<html>
<head>
    <title>Report Page</title>
</head>
<body>
    <table width="100%" align="center" border="1" cellpadding="5px" cellspacing="5px"  rules="rows" >
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
    $qry = "SELECT * FROM reg WHERE department='".$dept."'";
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
</body>
</html>
<?php
header("Content-type:application/octet-stream");
header("Content-Disposition:attachment;Filename=".$dept."-Report.doc");
?>