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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
    <p>'.$arr['name'].'</p>
</body>
</html>

';
;$mpdf->WriteHTML($html,2);
$mpdf->Output($arr['name'].'.pdf','D');
exit;
