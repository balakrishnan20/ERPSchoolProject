
<?php
include('config.php');

if (isset($_POST['submit'])) {
  $StudentName = $_POST['StudentName'];
  $FatherName = $_POST['FatherName'];
  $MotherName = $_POST['MotherName'];
  $Gender = $_POST['Gender'];
  $DateOfBirth = $_POST['DateOfBirth'];
  $RegistrationNo = $_POST['RegistrationNo'];
  $EnrollementNumber = $_POST['EnrollementNumber'];
  $BankName= $_POST['BankName'];
  $AccountNumber = $_POST['AccountNumber'];
  $BankIFSCCode= $_POST['BankIFSCCode'];
  $DateOfAdmission= $_POST['DateOfAdmission'];
  $AdmiisionNumber= $_POST['AdmiisionNumber'];
  $ScholarNumber= $_POST['ScholarNumber'];
  $PreviousClass= $_POST['PreviousClass'];
  $PreviousSchoolName= $_POST['PreviousSchoolName'];
  $Class= $_POST['Class'];
  $AdmissionRemarks= $_POST['AdmissionRemarks'];
  $FeeCatageroy= $_POST['FeeCatageroy'];
  $BusNO= $_POST['BusNO'];
  $Hostel= $_POST['Hostel'];
  $Library= $_POST['Library'];
  $FatherContactno= $_POST['FatherContactno'];
  $MotherContactno= $_POST['MotherContactno'];
  $FatherMailid= $_POST['FatherMailid'];
  $MotherMailid= $_POST['MotherMailid'];
  $FatherOccupation= $_POST['FatherOccupation'];
  $MotherOccupation= $_POST['MotherOccupation'];
  $StudentAddress=$_POST['StudentAddress'];
   $village= $_POST['city'];
   $Block= $_POST['Block'];
   $District= $_POST['District'];
   $State= $_POST['State'];
   $Pincode= $_POST['Pincode'];
   $landmark= $_POST['Landmark'];

  $sql = "INSERT INTO add_admission (StudentName, FatherName, MotherName, Gender, DateOfBirth, RegistrationNo, EnrollementNumber, BankName, AccountNumber,
   BankIFSCCode, DateOfAdmission, AdmiisionNumber, ScholarNumber, PreviousClass, PreviousSchoolName, Class, AdmissionRemarks, FeeCatageroy, BusNO, Hostel, Library, FatherContactno, MotherContactno, FatherMailid, MotherMailid, FatherOccupation, MotherOccupation, 
   StudentAddress, city, Block, District, State, Pincode, Landmark) VALUES ('$StudentName', '$FatherName', '$MotherName', '$Gender', '$DateOfBirth', '$RegistrationNo', '$EnrollementNumber', '$BankName', '$AccountNumber', '$BankIFSCCode', 
  '$DateOfAdmission', '$AdmiisionNumber', '$ScholarNumber', '$PreviousClass', '$PreviousSchoolName', 
'$Class', '$AdmissionRemarks', '$FeeCatageroy', '$BusNO', '$Hostel', '$Library', '$FatherContactno', '$MotherContactno', '$FatherMailid', '$MotherMailid', '$FatherOccupation', '$MotherOccupation', 
'$StudentAddress', '$village', '$Block', '$District', '$State', '$Pincode', '$landmark')";



  if ($conn->query($sql) === TRUE) {
   
    echo '<script>';
    echo 'alert("Sucessfully added")';
    echo '</script>';
    // Delay the redirection by 1 second (1000 milliseconds)
    echo '<script>';
    echo 'window.location.href = "admission.php";';
    echo '</script>';

  } 
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}



// Optionally, you can redirect the user back to the form page after showing the alert

  ?>


<?php
if (isset($_POST['StudentId']) && !empty($_POST['StudentId'])) {
    $studentId = $_POST['StudentId'];

    // Query to fetch student details based on studentId
    $query = "SELECT 	StudentName,Gender,DateOfBirth,Class FROM add_admission WHERE Studentid  = ".$studentId;
    $result = mysqli_query($conn, $query);

    if ($result) {



        // Assuming each student has a unique ID, so we expect only one row.
        if ($row = mysqli_fetch_assoc($result)) {
            // Create an associative array to hold the student details
            $studentDetails = array(
                'StudentName' => $row['StudentName'],
                'Gender' => $row['Gender'],
                'DateOfBirth' => $row['DateOfBirth'],
                'Class' => $row['Class']
            );

            // Output the student details in JSON format
            echo json_encode($studentDetails);
        } 
      }
          else {
            echo "Student details not found.";
        }
        }
      ?>

<?php
if (isset($_POST['Student']) && !empty($_POST['Student'])) {
    $student = $_POST['Student'];

    // Query to fetch student details based on studentId
    $query = "SELECT 	RegistrationNo,EnrollementNumber,BankName,AccountNumber,BankIFSCCode FROM add_admission WHERE Studentid  = " . $student;
    $result = mysqli_query($conn, $query);

    if ($result) {



        // Assuming each student has a unique ID, so we expect only one row.
        if ($row = mysqli_fetch_assoc($result)) {
            // Create an associative array to hold the student details
            $documentDetails = array(
                'RegistrationNo' => $row['RegistrationNo'],
                'EnrollementNumber' => $row['EnrollementNumber'],
                'BankName' => $row['BankName'],
                'AccountNumber' => $row['AccountNumber'],
                'BankIFSCCode' => $row['BankIFSCCode']
            );

            // Output the student details in JSON format
            echo json_encode($documentDetails);
        } 
      }
          else {
            echo "Student details not found.";
        }
        }
      ?>

    
<?php
if (isset($_POST['StudentiD']) && !empty($_POST['StudentiD'])) {
    $studentiD = $_POST['StudentiD'];

    // Query to fetch student details based on studentId
    $query = "SELECT 	DateOfAdmission,AdmiisionNumber,ScholarNumber,PreviousClass,PreviousSchoolName,AdmissionRemarks,FeeCatageroy,BusNO,Hostel,Library FROM add_admission WHERE Studentid  = " .$studentiD;
    $result = mysqli_query($conn, $query);

    if ($result) {



        // Assuming each student has a unique ID, so we expect only one row.
        if ($row = mysqli_fetch_assoc($result)) {
            // Create an associative array to hold the student details
            $adminDetails = array(
                'DateOfAdmission' => $row['DateOfAdmission'],
                'AdmiisionNumber' => $row['AdmiisionNumber'],
                'ScholarNumber' => $row['ScholarNumber'],
                'PreviousClass' => $row['PreviousClass'],
                'PreviousSchoolName' => $row['PreviousSchoolName'],
                'AdmissionRemarks' => $row['AdmissionRemarks'],
                'FeeCatageroy' => $row['FeeCatageroy'],
                'BusNO' => $row['BusNO'],
                'Hostel' => $row['Hostel'],
                'Library' => $row['Library']
            );

            // Output the student details in JSON format
            echo json_encode($adminDetails);
        } 
      }
          else {
            echo "Student details not found.";
        }
        }
      ?>


<?php
if (isset($_POST['Parentid']) && !empty($_POST['Parentid'])) {
    $id = $_POST['Parentid'];

    // Query to fetch student details based on studentId
    $query = "SELECT 	FatherName,MotherName,FatherContactno,MotherContactno,FatherMailid,MotherMailid,FatherOccupation,MotherOccupation FROM add_admission WHERE Studentid  = " .$id;
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Assuming each student has a unique ID, so we expect only one row.
        if ($row = mysqli_fetch_assoc($result)) {
            // Create an associative array to hold the student details
            $adminDetails = array(
                'FatherName' => $row['FatherName'],
                'MotherName' => $row['MotherName'],
                'FatherContactno' => $row['FatherContactno'],
                'MotherContactno' => $row['MotherContactno'],
                'FatherMailid' => $row['FatherMailid'],
                'MotherMailid' => $row['MotherMailid'],
                'FatherOccupation' => $row['FatherOccupation'],
                'MotherOccupation' => $row['MotherOccupation']
            );

            // Output the student details in JSON format
            echo json_encode($adminDetails);
        } 
      }
          else {
            echo "Student details not found.";
        }
        }
      ?>




<?php
if (isset($_POST['Addressid']) && !empty($_POST['Addressid'])) {
    $addid = $_POST['Addressid'];

    // Query to fetch student details based on studentId
    $query = "SELECT 	StudentAddress,Block,city,District,State,Pincode,Landmark FROM add_admission WHERE Studentid  = " .$addid;
    $result = mysqli_query($conn, $query);

    if ($result) {



        // Assuming each student has a unique ID, so we expect only one row.
        if ($row = mysqli_fetch_assoc($result)) {
            // Create an associative array to hold the student details
            $adminDetails = array(
                'StudentAddress' => $row['StudentAddress'],
                'Block' => $row['Block'],
                'city' => $row['city'],
                'District' => $row['District'],
                'State' => $row['State'],
                'Pincode' => $row['Pincode'],
                'Landmark' => $row['Landmark']
            );

            // Output the student details in JSON format
            echo json_encode($adminDetails);
        } 
      }
          else {
            echo "Student details not found.";
        }
        }
      ?>

      


   
