<?php
    $conn=mysqli_connect("localhost","root","","db");
    $e=$_POST['id'];
        $nm=$_POST["nm"];
        $age=$_POST["age"];
        $comment=$_POST["comment"];
        $up="UPDATE tb set nm='$nm', age='$age', comment='$comment' where id='$e'";
        mysqli_query($conn,$up);
        
    


?>