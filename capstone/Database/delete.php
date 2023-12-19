<?php
include "../Database/Connection.php";

// Check if the "Crt_incid_id" parameter is present in the URL
if (isset($_GET["id"])) {
    $Crt_incid_id = $_GET["id"];
   

    // Perform the delete operation
    // $sql = "DELETE FROM `Tbl_Crt_incid` WHERE Crt_incid_id = $Crt_incid_id";
    // $result = mysqli_query($conn, $sql);

    //Instead of deleting the data from the table, we are just gonna flag the data that we want to remove as 1,
    //1 indicates that the data has been deleted.

    $sql = "UPDATE `Tbl_Crt_incid`
    SET isDeleted = 1
    WHERE Crt_incid_id = $Crt_incid_id";
    $result = mysqli_query($conn, $sql);
  

    if ($result) {
        header("Location: ../Admin/viewrecord.php?msg=Data deleted successfully");
        exit();
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
} else {
    echo "Crt_incid_id is missing in the URL";
}
?>
