<?php
$conn=mysqli_connect("localhost","root","","db");
$qry="select * from tb";
$arr=mysqli_query($conn,$qry);
echo "<tr>
<th>ID</th>
<th>Name</th>
<th>age</th>
<th>comment</th>
<th>delete</th>
<th>edit</th>
</tr>";
 while($r=mysqli_fetch_array($arr))
 {
     $id=$r[0];
     $fname=$r[1];
     $age=$r[2];
     $comment=$r[3];
     

     echo "<tr> <td>$id</td><td> $fname</td> <td>$age</td><td>$comment</td> <td><button id='dlt' class='btn btn-sm btn-danger' data-id='$id'>delete</button></td> <td><button id='edt' class='btn btn-sm btn-success' data-id='$id'>edit</button></td> </tr>";
     
 }




?>