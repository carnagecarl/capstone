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
    <link rel="stylesheet" type="text/css" href="../Css/Index.css" />
    <link rel="stylesheet" type="text/css" href="../Css/Datacollect.css" />
    <script src="https://kit.fontawesome.com/069184ff68.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  </head>

<body>
  <nav>
    <div class="logo">
      <p>FLOOD SMART</p>
         
  <ul>
      <li>
        <a href="#">Record Management</a>
          <ul class="dropdown">
             <li><a href="Createincidentreport.php"> Create Incident Report </a></li>
             <li><a href="Viewrecord.php"> View Records </a></li>    
          </ul>
      </li>

      <li>
        <a href="#">Rescuer Operations</a>
          <ul class="dropdown">
            <li><a href="Setrescuer.php">Set Rescuer Dispatch</a></li>
            <li><a href="Interpret.php">Interpret Dispatch</a></li>
          </ul>
      </li>
             
      <li>
        <a href="#">Rainwater Indicator</a>
          <ul class="dropdown">
             <li><a href="Datacollection.php">Data Collection</a></li>
             <li><a href="Analysis.php">Analyze Data</a></li>
             <li><a href="Alert.php">Alert System</a></li>
          </ul>
  </ul>
    </div>
  </nav>

<br><br><br><br><br><br><br><br><br>
 
   <center>
      <table>
        <thead>
          <tr>
            <th>HOURS</th>
            <th>MEASURES</th>
          </tr>
        </thead>
        <tbody id="realtime-data-body">
          <tr>
            <td id="hours-td">1</td>
            <td id="measures-td">7.5 CM</td>
          </tr>
        </tbody>
      </table>
      <br><br><br><br>
      <button class="save" type="submit"  name="submit">Analyze</button>
    </center>

    <br><br><br><br><br><br><br>

    <a href="logout.php" class="logout">Logout</a>
    
    <script>
      setInterval(function() {
        var randomMeasures = (Math.random() * 100).toFixed(1);
        $('#measures-td').text(randomMeasures + " CM");
      }, 3600000);

      function analyzeData() {
        var currentMeasureCm = parseFloat($('#measures-td').text());
        
        // AJAX request to analysis.php
        $.ajax({
          url: 'analysis.php',
          type: 'POST',
          data: { measureCm: currentMeasureCm },
          success: function(data) {
            // Update the results table with the response from analysis.php
            $('#results-container').html(data);
          },
          error: function(error) {
            console.error('Error:', error);
          }
        });
      }
    </script>
  </body>
</html>