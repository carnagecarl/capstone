<?php
include "../Database/Connection.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Flood Smart</title>
        <link rel="website icon" type="images" href="images/images.png">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../Css/Interpret.css" />
        <script src="https://kit.fontawesome.com/069184ff68.js" crossorigin="anonymous"></script>
    </head>

    <body>
    
    <nav>
        <div class="logo">
            <p>FLOOD SMART</p>
            
         <ul>
            <li>
            <li>
               <a href="#">Record Management</a>
               <ul class="dropdown">
                   <li><a href="Createincidentreport.php"> Create Incident Report </a></li>
                   <li><a href="viewrecord.php"> View Records </a></li>
                   
               </ul>
            </li>
            <li>
               <a href="#">Rescuer Operations</a>
               <ul class="dropdown">
                  <li><a href="#">Set Rescuer Dispatch</a></li>
                  <li><a href="Interpretdi.php">Interpret Dispatch</a></li>
                 
               </ul>
            </li>
             <li>
               <a href="#">Rainwater Indicator</a>
               <ul class="dropdown">
                  <li><a href="#">Data Collection</a></li>
                  <li><a href="#">Analyze Data</a></li>
                  <li><a href="#">Alert System</a></li>
               </ul>
         </ul>
         </div>
        </nav>
      


<a href="logout.php" class="logout">Logout</button>




      
    </body>
</html>