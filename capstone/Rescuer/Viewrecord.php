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
        <link rel="website icon" type="images" href="../image/images.png">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100;500&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="../Css/viewrecordss.css">


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
                   <li><a href="createincidentreport.php"> Create Incident Report </a></li>
                   <li><a href="viewrecord.php"> View Records </a></li>
                   
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
                  <li><a href="datacollection.php">Data Collection</a></li>
                  <li><a href="Analysis.php">Analyze Data</a></li>
                  <li><a href="alert.php">Alert System</a></li>
               </ul>
         </ul>
         </div>
        </nav>
  <a href="login.php" class="logout">Logout</a>
      <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>RESCUE NAME</th>
            <th>LOCATION</th>
            <th>DATE/TIME</th>
            <th>DESCRIPTION</th>
            <th>Action</th>
        </tr>
    </thead>
     
    <tbody class="scrollable-table">
  
        <?php
        //0 indicates that the data is not deleted
        $sql = "SELECT * FROM `Tbl_Crt_incid` WHERE isDeleted = 0";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["Crt_incid_id"] . "</td>";
            echo "<td>" . $row["Crt_incid_Rname"] . "</td>";
            echo "<td>" . $row["Crt_incid_Loc"] . "</td>";
            echo "<td>" . $row["Crt_incid_D"] . "</td>";
            echo "<td>" . $row["Crt_incid_Desc"] . "</td>";
            echo "<td><a href='../Database/delete.php?id=" .$row["Crt_incid_id"] . "' class='link-dark'>Remove</a></td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>  
</div>
     <button class="Print" onclick="window.print()">Print</button>
     <button class="History" id="HistoryButton" onclick="History()">History</button>
<script>
    function History() {
        window.location.href = 'history.php';
    }
</script>
</html>
<style type="text/css">
    .scrollable-table {
            max-height: 200px; /* Adjust the height as needed */
            overflow-y: scroll;
        }
        
</style>