<?php

@include '../Database/config.php';

session_start();

if(isset($_POST['submit'])){

   $auth_create_User = mysqli_real_escape_string($conn, $_POST['$auth_create_User']);

   $auth_create_Pass = md5($_POST['$auth_create_Pass']);
  
   $select = " SELECT * FROM Tbl_auth_create WHERE auth_create_User = '$auth_create_User' && auth_create_Pass = '$auth_create_Pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);
      

      if($row['auth_create_Lstate'] == 'Rescuer'){

         $_SESSION['Rescuer'] = $row['name'];
         header('location:../Rescuer/Interpret.php');

      }elseif($row['auth_create_Lstate'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:../User/Alert.php');

      }
     
   }else{
      $error[] = 'incorrect Username or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="website icon" type="images" href="../image/images.png">
   <title>Login</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/Logins.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="$auth_create_User" required placeholder="Enter your Username">
      <input type="password" name="$auth_create_Pass" required placeholder="Enter your Password">
      <input type="submit" name="submit" value="Login now" class="form-btn">
       <p>Don't have an account? <a href="register.php">Register now</a></p>
   </form>

</div>

</body>
<style>
</style>
</html>