<?php
include('config.php');

if (isset($_POST['submit'])) {
  $FirstName = $_POST['FirstName'];
  $LastName = $_POST['LastName'];
  $Gender = $_POST['Gender'];
  $DateOfBirth = $_POST['DateOfBirth'];
  $PhoneNumber = $_POST['PhoneNumber'];
  $HomePhoneNUmber = $_POST['HomePhoneNumber'];
  $WorkPhoneNumber= $_POST['WorkPhoneNumber'];
  $EmailAddress = $_POST['EmailAddress'];
  $Address= $_POST['Address'];
  $City= $_POST['City'];
  $State= $_POST['State'];
  $Country= $_POST['Country'];
  $Degree= $_POST['Degree'];
  $Major=$_POST['Major'];
  $Univercity= $_POST['Univercity'];
  $PassedoutYear= $_POST['PassedoutYear'];
  $TotalYearsOfExperiences= $_POST['TotalYearsOfExperiences'];
  $PreviousSchoolName= $_POST['PreviousSchoolName'];
  $SubjectsHandled= $_POST['SubjectsHandled'];
  $ClassHandled= $_POST['ClassHandled'];
  $PreferedLocation= $_POST['PreferedLocation'];
  $NoticePeriod= $_POST['NoticePeriod'];
  $validIowaTeachers= $_POST['validIowaTeachers'];
  $endorsements= $_POST['endorsements'];
  $contract= $_POST['contract'];
  $Name= $_POST['Name'];
  $Signature= $_POST['Signature'];
  $StudentAddress=$_POST['Date'];
   $Date= $_POST['Date'];
 
  


  $sql = "INSERT INTO add_staffreg (FirstName, LastName, Gender, DateOfBirth, PhoneNumber, HomePhoneNumber, WorkPhoneNumber, EmailAddress,
   Address, City, State, Country, Degree, Major, Univercity, PassedoutYear, TotalYearsOfExperiences, PreviousSchoolName, SubjectsHandled, ClassHandled, PreferedLocation, NoticePeriod, validIowaTeachers, endorsements, contract, Name, 
   Signature, Date ) VALUES ('$FirstName', '$LastName', '$Gender', '$DateOfBirth', '$PhoneNumber', '$HomePhoneNUmber', '$WorkPhoneNumber', '$EmailAddress', '$Address', 
  '$City', '$State', '$Country', '$Degree', '$Major', 
'$Univercity', '$PassedoutYear', '$TotalYearsOfExperiences', '$PreviousSchoolName', '$SubjectsHandled', '$ClassHandled', '$PreferedLocation', '$NoticePeriod', '$validIowaTeachers', '$endorsements', '$contract', '$Name', 
'$Signature', '$Date')";



  if ($conn->query($sql) === TRUE) {
    echo " staff record created successfully.";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
  ?>


<?php
if (isset($_POST['Staff_id']) && !empty($_POST['Staff_id'])) {
    $id = $_POST['Staff_id'];
    // Query to fetch student details based on studentId
    $query = "SELECT 	FirstName,LastName,Gender,DateOfBirth,PhoneNumber,HomePhoneNumber,WorkPhoneNumber,EmailAddress FROM add_staffreg WHERE Staff_id  =".$id;
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Assuming each student has a unique ID, so we expect only one row.
        if ($row = mysqli_fetch_assoc($result)) {
            // Create an associative array to hold the student details
            $staffDetails = array(
                'FirstName' => $row['FirstName'],
                'LastName' => $row['LastName'],
                'Gender' => $row['Gender'],
                'DateOfBirth' => $row['DateOfBirth'],
                'PhoneNumber' => $row['PhoneNumber'],
                'HomePhoneNumber' => $row['HomePhoneNumber'],
                'WorkPhoneNumber' => $row['WorkPhoneNumber'],
                'EmailAddress' => $row['EmailAddress']
            );
            // Output the student details in JSON format
            echo json_encode($staffDetails);
        } 
      }
          else {
            echo "Student details not found.";
        }
        }
      ?>



<?php
if (isset($_POST['Staff_id']) && !empty($_POST['Staff_id'])) {
    $addid = $_POST['Staff_id'];

    // Query to fetch student details based on studentId
    $query = "SELECT 	Address,Country,State,City FROM add_staffreg WHERE Staff_id  = ".$addid;
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Assuming each student has a unique ID, so we expect only one row.
        if ($row = mysqli_fetch_assoc($result)) {
            // Create an associative array to hold the student details
            $addDetails = array(
                'Address' => $row['Address'],
                'Country' => $row['Country'],
                'State' => $row['State'],
                'City' => $row['City']
            );

            // Output the student details in JSON format
            echo json_encode($addDetails);
        } 
      }
          else {
            echo "Student details not found.";
        }
        }
      ?>


<?php
if (isset($_POST['Staff_id']) && !empty($_POST['Staff_id'])) {
    $degid = $_POST['Staff_id'];

    // Query to fetch student details based on studentId
    $query = "SELECT 	Degree,	Major,Univercity,PassedoutYear,TotalYearsOfExperiences,PreviousSchoolName,SubjectsHandled,ClassHandled,PreferedLocation,NoticePeriod FROM add_staffreg WHERE Staff_id  = ".$degid;
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Assuming each student has a unique ID, so we expect only one row.
        if ($row = mysqli_fetch_assoc($result)) {
            // Create an associative array to hold the student details
            $degDetails = array(
                'Degree' => $row['Degree'],
                'Major' => $row['Major'],
                'Univercity' => $row['Univercity'],
                'PassedoutYear' => $row['PassedoutYear'],
                'TotalYearsOfExperiences' => $row['TotalYearsOfExperiences'],
                'PreviousSchoolName' => $row['PreviousSchoolName'],
                'SubjectsHandled' => $row['SubjectsHandled'],
                'ClassHandled' => $row['ClassHandled'],
                'PreferedLocation' => $row['PreferedLocation'],
                'NoticePeriod' => $row['NoticePeriod'],
                'City' => $row['City']
            );

            // Output the student details in JSON format
            echo json_encode($degDetails);
        } 
      }
          else {
            echo "Student details not found.";
        }
        }
      ?>


<?php
if (isset($_POST['Staff_id']) && !empty($_POST['Staff_id'])) {
    $detid = $_POST['Staff_id'];

    // Query to fetch student details based on studentId
    $query = "SELECT 	endorsements,	contract,Name,Signature,Date FROM add_staffreg WHERE Staff_id  = ".$detid;
    $result = mysqli_query($conn, $query);

    if ($result) {

        // Assuming each student has a unique ID, so we expect only one row.
        if ($row = mysqli_fetch_assoc($result)) {
            // Create an associative array to hold the student details
            $detDetails = array(
                'endorsements' => $row['endorsements'],
                'contract' => $row['contract'],
                'Name' => $row['Name'],
                'Date' => $row['Date']
            );

            // Output the student details in JSON format
            echo json_encode($detDetails);
        } 
      }
          else {
            echo "Student details not found.";
        }
        }
      ?>