<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fldsmart_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the delete button is clicked
if (isset($_POST['delete'])) {
    $delete_id = $_POST['delete_id'];

    // Perform the delete operation for the selected row
    $delete_sql = "DELETE FROM `Tbl_Crt_incid` WHERE Crt_incid_id = $delete_id";
}

$sql = "SELECT * FROM `Tbl_Crt_incid` WHERE isDeleted = 1";
$result = $conn->query($sql);
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
    <link rel="stylesheet" type="text/css" href="../Css/historys.css" />
</head>

<body>
    <br>
    <a href="viewrecord.php" class="back">Back</a>

    <?php
    if ($result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>ID</th>
                    <th>RESCUER NAME</th>
                    <th>LOCATION</th>
                    <th>TIME&DATE</th>
                    <th>DESCRIPTION</th>
                    <th>Action</th>
                </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['Crt_incid_id']}</td>
                    <td>{$row['Crt_incid_Rname']}</td>
                    <td>{$row['Crt_incid_Loc']}</td>
                    <td>{$row['Crt_incid_D']}</td>
                    <td>{$row['Crt_incid_Desc']}</td>
                    <td>
                        <form method='post' action=''>
                            <input type='hidden' name='delete_id' value='{$row['Crt_incid_id']}'>
                            <input type='submit' name='delete' value='Delete'>
                        </form>
                    </td>
                  </tr>";
        }
        echo "</table>";
    }
    ?>
</body>

</html>

<?php
$conn->close();
?>
