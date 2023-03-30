<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student76-35303135e38d", "ua92-studentAc", "student76-35303135e38d");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $fathername = $_POST['fathername'];
    $mothername = $_POST['mothername'];
    $Email = $_POST['Email'];
    $address_p = $_POST['address_p'];
    $phone_no = $_POST['phone_no'];
   

    $sql = "INSERT INTO parent_id (fathername,mothername,Email,address_p,phone_no) VALUES ('$fathername','$mothername','$Email','$address_p','$phone_no')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>