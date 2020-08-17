<?php
include "db/db.php";
include "inc/head.php";
include "inc/nav.php";
session_start();
?>


        
         

<?php


if(isset($_SESSION['User']))
{
    echo ' WellCome ' . $_SESSION['User'].'<br/>';
    echo '<a href="list.php?logout">Logout</a>';
}
else
{
  echo "<script>window.open('login.php?auth= Please login to view this page','_self')</script>";
}

$limit=5;
if(isSet($_GET['page'])){
  $page=$_GET['page'];
}else{
  $page=1;
}
echo "<div class='main-div'>";
echo " <h1>List of submitted responses</h2>";
echo "<div class='row postsList'>";
echo "<div class='col-lg-12'>";
echo  '<table class="table table-bordered table-strped">';

echo '<thead>';
echo '<tr>';
echo '<th>Photo</th>';
echo  ' <th>Name</th>';
   
echo  '<th>Download</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
$offset=($page-1)*$limit;
$sql= "SELECT * FROM `personaltb`LIMIT {$offset},{$limit}";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
  

  echo ' <tr>';
                        
   echo "<td><img src='../Images/" .$row['image']."'>";

   echo" <td> ".$row['name']."</td>";
    echo '<td><a href="pdf.php?id='.$row['id'].'">PDF</a></td>';


    
echo '    </tr>';
}
echo '</tbody>';
echo '</table>';
echo '</div>';
echo '</div>';
echo '</div>';


$sql1= "SELECT * FROM `personaltb`";

$result1=mysqli_query($con,$sql1);
if(mysqli_num_rows($result1)>0){
  $total_records=mysqli_num_rows($result1);
 
  $total_page=ceil($total_records/ $limit);
  echo '<ul class="pagination">';
  
  for($i=1; $i <= $total_page; $i++){

    echo '<li class="page-item"><a class="page-link" href="list.php?page='.$i.'"><h4>' .$i. '</h4></a></li>';
  }

  echo '</ul>';

}



?>
<?php 
 
    if(isset($_GET['logout']))
    {
        session_destroy();
        echo "<script>window.open('login.php?auth= Logout succesfull','_self')</script>";
    }

?>