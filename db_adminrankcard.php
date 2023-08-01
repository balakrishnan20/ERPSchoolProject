<?php
include('config.php');

if (isset($_POST['submit'])) {
  $Examname = $_POST['Examname'];
  $Class = $_POST['Class'];
  $Section = $_POST['Section'];

  $sql = "INSERT INTO add_rankcard( Examname, Class, Section) VALUES ('$Examname', '$Class', '$Section')";

if ($conn->query($sql) === TRUE) {

   echo ("Sucessfully added");

 } 
 else {
   echo "Error: " . $sql . "<br>" . $conn->error;
 }
}
?>