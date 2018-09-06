<?php
$conn=mysqli_connect("localhost","root","","db");
 $e=$_POST["edit"];
    $arr="select * from tb where id='$e'";
    $array=mysqli_query($conn,$arr);
    while($r=mysqli_fetch_array($array))
    {
        $nm=$r[1];
        $age=$r[2];
        $comment=$r[3];
    }
    echo "<input type='text'  id='e1' value='$nm'>
    <input type='text' id='e2' value='$age'>
    <input type='mail'  id='e3' value='$comment'>";
    ?>