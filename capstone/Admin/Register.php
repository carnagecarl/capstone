<?php

@include '../Database/config.php';

if(isset($_POST['submit'])){

   $auth_create_Fname = mysqli_real_escape_string($conn, $_POST['auth_create_Fname']);
   $auth_create_Lname = mysqli_real_escape_string($conn, $_POST['auth_create_Lname']);
   $auth_create_User = mysqli_real_escape_string($conn, $_POST['auth_create_User']);
   $auth_create_Add = mysqli_real_escape_string($conn, $_POST['auth_create_Add']);
   $auth_create_Pass = md5($_POST['auth_create_Pass']);
   $auth_create_Lstate = $_POST['auth_create_Lstate'];

   $select = " SELECT * FROM Tbl_auth_create WHERE auth_create_User ='$auth_create_User' && auth_create_Pass = '$auth_create_Pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'User already exist!';

   }else{

      if($auth_create_Pass != $auth_create_Pass){
         $error[] = 'Password not matched!';
      }else{
         $insert = "INSERT INTO Tbl_auth_create (auth_create_Fname, auth_create_Lname, auth_create_User, auth_create_Add, auth_create_Pass, auth_create_Lstate) VALUES('$auth_create_Fname','$auth_create_Lname','$auth_create_User','$auth_create_Add','$auth_create_Pass','$auth_create_Lstate')";
         mysqli_query($conn, $insert);
         header('location:login.php');
      }
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
   <title>Register Form</title>
   <link rel="stylesheet" href="../css/Logins.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="POST">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="auth_create_User" required placeholder="Enter your Username">
      <input type="password" name="auth_create_Pass" required placeholder="Enter your Password">
      <input type="text" name="auth_create_Fname" required placeholder="Enter your First Name">
      <input type="text" name="auth_create_Lname" required placeholder="Enter your Last Name">
      <input type="text" name="auth_create_Add" required placeholder="Enter your Address">
      <select name="auth_create_Lstate">
         <option value="user">User</option>
         <option value="Rescuer">Rescuer</option>
      </select>
      <input type="submit" name="submit" value="register" class="form-btn">
      <p>Already have an account? <a href="login.php">Login Now</a></p>
   </form>

</div>

</body>
</html>