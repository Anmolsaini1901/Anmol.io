<?php

//mysqli_connect() function establishes a connection with MySQL server and returns the connection as an object.
/*
   $host = "sdb-57.hosting.stackcp.net";
   $username  = "student76-35303135e38d";
   $passwd = "ua92-studentAc";
   $dbname = "student76-35303135e38d";
*/
$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student76-35303135e38d", "ua92-studentAc", "student76-35303135e38d");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}


/*
The isset() function checks whether a variable
 is set, which means that it has to be declared 
 and is not NULL. 
 This function returns true if the variable
  exists and is not NULL, 
  otherwise it returns false.
*/
if (isset($_POST['submit'])) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $Email = $_POST['Email'];
    $Gender = $_POST['Gender'];
/*
mysqli_query() function accepts a string value
representing a query as one of the parameters
and, executes/performs the given query 
on the database
*/
    $sql = "INSERT INTO Pupil (firstname,lastname,Email,Gender) VALUES ('$firstname','$lastname','$Email','$Gender')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>