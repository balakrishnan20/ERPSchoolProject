<?php
include('config.php');

if (isset($_POST['submit'])) {
  $Firstname = $_POST['Firstname'];
  $Lastname = $_POST['Lastname'];
  $Class = $_POST['Class'];
  $Section = $_POST['Section'];
  $pickuppoint = $_POST['pickuppoint'];
  $droppingpoint = $_POST['droppingpoint'];
  $location = $_POST['location'];
  $landmark= $_POST['landmark'];
  $address = $_POST['address'];
  $mobileno= $_POST['mobileno'];
  $parentname= $_POST['parentname'];
  $signature= $_POST['signature'];
  $distances= $_POST['distances'];
  $busnumber= $_POST['busnumber'];
  $amount= $_POST['amount'];
 


  $sql = "INSERT INTO add_busform  (Firstname, Lastname, Class, Section, pickuppoint, droppingpoint, location, landmark, address,
   mobileno, parentname, signature, distances, busnumber, amount) VALUES ('$Firstname', '$Lastname', '$Class', '$Section', '$pickuppoint', '$droppingpoint', '$location', '$landmark', '$address', '$mobileno', 
  '$parentname', '$signature', '$distances', '$busnumber', '$amount')";



  if ($conn->query($sql) === TRUE) {
    echo " record created successfully.";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>