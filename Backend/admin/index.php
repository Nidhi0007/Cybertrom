
<?php
include "db/db.php";
include "inc/head.php";
include "inc/nav.php";
?>

<div class="row mt-5">

                   
                    <div class="col-4">
                    <h4> Please Fill the details</h4>
                    <form action="index.php" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                    <label ><h4>    Name</h4></label>
                    <input type="text" name="name" placeholder="Enter your name " class="form-control">
                    </div>
                    <div class="form-group">
                    <label ><h4>Age</h4></label>
                    <input type="int" id="age" name="age" placeholder="Enter your age" class="form-control">
                    </div>
                    <div class="form-group">
                    <label ><h4>Gender</h4></label>
                    <select name="gender" class="form-control">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <label ><h4>Phone</h4></label>
                    <input type="text" name="phone" placeholder="Enter your Phone number " class="form-control">
 
                    </div>
                    <div class="form-group">
                    <label ><h4>Image</h4></label>
                    <input type="file" name="img"  class="form-control" >
                    </div>
                    <div class="form-group mt-4">
               
                    <button class="form control btn-primary" type="submit" name="submit" >submit</button>
                    </div>

                    </form>
                    </div>
                    

</div>
<?php
include "inc/bottom.php";

?>
<?php

if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $phone=$_POST['phone'];
    
    $imgname=$_FILES['img']["name"];
    $imgtemp=$_FILES["img"]["tmp_name"];
    move_uploaded_file($imgtemp,"../Images/$imgname");
    $query="INSERT INTO `personaltb`(`name`, `age`, `gender`, `phone`, `image`) VALUES ('$name','$age','$gender','$phone','$imgname')";
    $run=mysqli_query($con,$query);
    if ($run){
        echo "<script>alert('uploaded')</script>";
    }else{
        echo "<script>alert('not uploaded')</script>";
    }
}