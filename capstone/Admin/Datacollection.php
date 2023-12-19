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
    <link rel="stylesheet" type="text/css" href="../Css/Index.css" />
    <link rel="stylesheet" type="text/css" href="../Css/Datacollect.css" />
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

<br><br><br><br><br><br><br><br><br>
 
<center>            
  <table>
    <tr>
      <th>HOURS</th>
      <th>MEASURES</th>
    </tr>
  </table>
</center>

<br><br><br><br><br><br><br>

<a href="login.php" class="logout">Logout</button>

</body>
</html>