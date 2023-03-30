<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student76-35303135e38d", "ua92-studentAc", "student76-35303135e38d");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $class_level = $_POST['class_level'];
    $capacity = $_POST['capacity'];
    $class_year = $_POST['class_year'];
  

    $sql = "INSERT INTO class (class_level,capacity,class_year) VALUES ('$class_level','$capacity','$class_year')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>