<?php
$conn=mysqli_connect("localhost","root","","db");

    $id=$_POST["id"];
    
    $in="delete from tb where id=$id";
    $q=mysqli_query($conn,$in);
?>