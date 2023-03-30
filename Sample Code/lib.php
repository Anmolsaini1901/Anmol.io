<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student76-35303135e38d", "ua92-studentAc", "student76-35303135e38d");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $borrowing_price  = $_POST['borrowing_price '];
    $ret_date = $_POST['ret_date'];
   
   

    $sql = "INSERT INTO library (borrowing_price,ret_date) VALUES ('$borrowing_price','$ret_date')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {0
      echo "Error adding record ";
    }

}

?>