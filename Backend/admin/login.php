<?php
include "db/db.php";
include "inc/head.php";
include "inc/nav.php";
session_start();
?>
<?php
  if(@$_GET['Empty']==true){

?>
<div class="alert-light text-danger text-center"><?php echo $_GET['Empty']?></div>


<?php
  }

?>

<?php 
                        if(@$_GET['Invalid']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>                                
                    <?php
                        }
                    ?>

<?php 
                        if(@$_GET['auth']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['auth'] ?></div>                                
                    <?php
                        }
                    ?>

<form action="login.php" method="post">
<h2>Login Form</h2>

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <input type="text" name="username" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="inputPassword3">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" name="login" class="btn btn-primary">Login</button>
    </div>
  </div>
</form>

<?php

if(isSet($_POST["login"])){
  if(empty($_POST['username']) || empty($_POST['password'])){
    echo "<script>window.open('login.php?Empty= Please enter Username and password','_self')</script>";

  }else{
    $query="SELECT * FROM `admin` WHERE username='".$_POST['username']."' AND password='".$_POST['password']."'";
    $out=mysqli_query($con,$query);
    if(mysqli_fetch_assoc($out))
    {
        $_SESSION['User']=$_POST['username'];
        echo "<script>window.open('list.php','_self')</script>";
    }
    else
    {
      echo "<script>window.open('login.php?Invalid= Invalid Username and password','_self')</script>";
    }
    
  }

} 

?>
