<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    table,th,td{
    border:2px solid black;   }</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php 
$conn=mysqli_connect("localhost","root","","dbname");
if(isset($_POST['save'])){
    $name=$_POST['name'];
    $age=$_POST['adress'];
    $class=$_POST['rollNo'];
    $marks=$_POST['marks'];
    $qrry="insert into tbname(name,adress,rollNo,marks) values($name,$adress,$rollNo,$marks)";
    mysqli_query($conn,$qrry);
    echo "$name $adress $rollNo $marks";
    
}
?>
<body>
    <form method="post">
    <table>
        <tr>
        <th>Name</th>
        <th><input type="text" name="name"></th>
        </tr>
        <tr>
            <td>adress</td>
            <td><input type="text" name="adress"></td>
        </tr>
        <tr>
            <td>rollNo</td>
            <td><input type="text" name="rollNo"></td>
        </tr>
        <tr>
            <td>Marks</td>
            <td><input type="text" name="marks"></td>
        </tr>
        <tr>
            <td><input type="submit" name ="new" value="Add New"></td>
            <td align="right"><input type="submit"  name="save" value="Save"></td>
        </tr>
    </table>
    </form>
</body>
</html>