<?php
$conn=mysqli_connect("localhost","root","","db");

    $nm=$_POST["sa"];
    $age=$_POST["sb"];
    $comment=$_POST["sc"];
    $in="insert into tb(nm,age,comment) values('$nm','$age','$comment')";
    $q=mysqli_query($conn,$in);
?>