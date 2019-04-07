<?php
    $con = mysqli_connect("localhost","root","mysql","sambhram");

    if (mysqli_connect_errno()){
        echo "Faild to Connect ".mysqli_connect_error();
    }
?>