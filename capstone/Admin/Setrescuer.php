<?php
include "../Database/Connection.php";

// Handle Remove action
if(isset($_POST['remove_rescuer'])){
    $rescueNameToRemove = mysqli_real_escape_string($conn, $_POST['remove_rescueName']);
    
    // Perform database deletion operation (modify this based on your schema)
    $deleteRescuer = "DELETE FROM rescuer_table WHERE rescueName = '$rescueNameToRemove'";
    mysqli_query($conn, $deleteRescuer);
}

// Handle Registration action
if(isset($_POST['submit'])){
    // Sanitize and retrieve input data from the registration form
    $username = mysqli_real_escape_string($conn, $_POST['auth_create_User']);
    $address = mysqli_real_escape_string($conn, $_POST['auth_create_Add']);
   
    // Set initial status to "Pending"
    $status = "Pending";

    // Insert rescuer information into the database
    $insert = "INSERT INTO rescuer_table (rescueName, location, status) VALUES ('$username', '$address', '$status')";
    mysqli_query($conn, $insert);

    // Redirect to a page or perform additional actions as needed
    header('location: setrescuer.php');
}

// Fetch rescuers from the registration table for display
$selectRegistrations = "SELECT * FROM Tbl_auth_create";
$resultRegistrations = mysqli_query($conn, $selectRegistrations);
$registrations = mysqli_fetch_all($resultRegistrations, MYSQLI_ASSOC);
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
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../Css/setrescuers.css" />
        <script src="https://kit.fontawesome.com/069184ff68.js" crossorigin="anonymous"></script>
    </head>
    <script>
   function openModal(rescueName, location, status) {
      // Populate modal with data
      document.getElementById('rescueNameInfo').innerText = rescueName;
      document.getElementById('locationInfo').innerText = location;
      document.getElementById('statusInfo').innerText = status;

      // Set the Remove button's onclick event to call the removeRescuer function with the rescueName
      document.getElementById('removeButton').onclick = function() {
         removeRescuer(rescueName);
      };

      // Show the modal
      document.getElementById('rescuerInfoModal').style.display = 'block';
   }

   function closeModal() {
      // Hide the modal
      document.getElementById('rescuerInfoModal').style.display = 'none';
   }

   function removeRescuer() {
      // Send AJAX request or submit a form to handle rescuer removal
      // For simplicity, I'm using a form submit here
      document.getElementById('removeRescuerForm').action = 'setrescuer.php';
      document.getElementById('removeRescuerForm').submit();
   }
</script>


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

        <br><br><br><br><br>

<center>            
    <div style="overflow-x: auto;">
        </div>
    
<a href="login.php" class="logout">Logout</button>
</a>


<!-- Add this modal HTML before the closing </body> tag -->
<div class="modal" id="rescuerInfoModal">
   <div class="modal-content">
      <span class="close" onclick="closeModal()">&times;</span>
      <h2>Rescuer Information</h2>
      <form id="removeRescuerForm" method="post">
         <input type="hidden" id="removeRescueName" name="remove_rescueName">
         <p><strong>Rescue Name:</strong> <span id="rescueNameInfo"></span></p>
         <p><strong>Location:</strong> <span id="locationInfo"></span></p>
         <p><strong>Status:</strong> <span id="statusInfo"></span></p>
         <p><strong>Action:</strong> <span id="statusInfo"></span></p>
         <button type="button" id="removeButton" onclick="removeRescuer()">Remove Rescuer</button>
      </form>
   </div>
</div>
<a href="#" class="add" onclick="openModal('', '', '')">Add Dispatchment</a>


      <table id="rescuerTable" class="display">
         <thead>
            <tr>
               <th>Rescue Name</th>
               <th>Location</th>
               <th>Status</th>
            </tr>
         </thead>
         <tbody>
            <?php foreach ($registrations as $registration): ?>
               <tr>
                  <td><?= $registration['auth_create_User']; ?></td>
                  <td><?= $registration['auth_create_Add']; ?></td>
                  <td>Pending</td>
                 
               </tr>
            <?php endforeach; ?>
         </tbody>
      </table>


</html>
