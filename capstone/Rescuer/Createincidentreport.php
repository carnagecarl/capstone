<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Flood Smart</title>
        <link rel="website icon" type="images" href="../image/images.png">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../Css/CreateIncid.css" />
        <script src="https://kit.fontawesome.com/069184ff68.js" crossorigin="anonymous"></script>
    </head>

    <body>
    
    <nav>
        <div class="logo">
            <p>FLOOD SMART</p>
            </div>
            <a href="index.php">
    <img src="../image/logo.png" alt="Description of the image">
  </a>
         <ul>
            <li>
            <li>
               <a href="#">Record Management</a>
               <ul class="dropdown">
                   <li><a href=""> Create Incident Report </a></li>
                   <li><a href="Viewrecord.php"> View Records </a></li>
                   
               </ul>
            </li>
            <li>
               <a href="#">Rescuer Operations</a>
               <ul class="dropdown">
                  <li><a href="setrescuer.php">Set Rescuer Dispatch</a></li>
                  <li><a href="Interpret.php">Interpret Dispatch</a></li>
                 
               </ul>
            </li>
             <li>
               <a href="#">Rainwater Indicator</a>
               <ul class="dropdown">
                  <li><a href="Datacollection.php">Data Collection</a></li>
                  <li><a href="Analysis.php">Analyze Data</a></li>
                  <li><a href="alert.php">Alert System</a></li>
               </ul>
         </ul>
         </div>
        </nav>
     </li>
 </li>
   <a href="login.php" class="logout">Logout</a>
</div>

 <?php
include "../Database/Connection.php";

if (isset($_POST["submit"])) {
    $Crt_incid_Rname = $_POST['Crt_incid_Rname'];
    $Crt_incid_Loc = $_POST['Crt_incid_Loc'];
    $Crt_incid_D = $_POST['Crt_incid_D'];
    $Crt_incid_Desc = $_POST['Crt_incid_Desc'];

    $sql = "INSERT INTO `Tbl_Crt_incid` (`Crt_incid_id`, `Crt_incid_Rname`, `Crt_incid_Loc`, `Crt_incid_D`, `Crt_incid_Desc`) VALUES (NULL, '$Crt_incid_Rname', '$Crt_incid_Loc', '$Crt_incid_D', '$Crt_incid_Desc')";


    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: viewrecord.php?msg=New Record created successfully");
        exit(); // Make sure to exit after a header redirect
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}
?>
        <div class="container">
       <form class="form" method="POST">
            <h1>FORM</h1>
            <label for="username">Rescuername:</label>
            <input type="text" name="Crt_incid_Rname" placeholder="Enter Rescuer Name" required>

            <label for="Location">Location:</label>
            <input type="text" name="Crt_incid_Loc" placeholder="Enter your Location" required>

            <label for="Time_Date">Time & Date:</label>
            <input type="datetime-local" name="Crt_incid_D" placeholder="Enter your Time & Date" required>

            <label for="Description">Description:</label>
            <textarea id="text" name="Crt_incid_Desc" rows="5"></textarea>
            <button class="save" type="submit"  name="submit">Save</button>
            <button class="cancel" type="cancel"  name="cancel">Cancel</button>
        </form>
    </div>
    


