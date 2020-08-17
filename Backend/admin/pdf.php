<?php
include "../mpdf/mpdf.php";
include "db/db.php";

$id=$_GET['id'];

$sql1= "SELECT * FROM `personaltb` WHERE id=$id";
$result1=mysqli_query($con,$sql1);
$arr=mysqli_fetch_array($result1);


$mpdf=new mPDF('c');
$mpdf->AddPage('L');
$html='
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <h4>Profile Pic:</h4><img src="../Images/'.$arr['image'].'">
    <h4>Name:</h4>'.$arr['name'].'<br>
    <h4>Age:</h4><p>'.$arr['age'].'</p><br>
    <h4>Gender:</h4><p>'.$arr['gender'].'</p><br>
    <h4>Contact Number:</h4><p>'.$arr['phone'].'</p><br>
  
</body>
</html>

';
;$mpdf->WriteHTML($html,2);
$mpdf->Output($arr['name'].'.pdf','D');
exit;
