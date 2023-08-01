<?php
include('header.php');
include('sidenav.php');
include('config.php');
include('db_admission.php');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Admission Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div>
<!-- /.container-fluid -->
    </section>
    <section class="content">

    <!-- <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div> -->
    

 
    
        
      <div class="card">
      <div class="card-header bg-success">Student Details</div>

      <div class="card-body">
        
        <!-- <div class="col-sm-3">
        <form action="db_blank.php" method="POST">
      <label for="id">Student Id:</label>
      <input type="number" class="form-control" id="id" placeholder="Enter studentid" name="id">
    </div> -->
   
    <div class="row">
    <div class="col-sm-3">
    <form action="db_admission.php" id="form" method="POST">
      <label for="name">StudentName:</label>
      <input type="text" class="form-control" id="studentname" placeholder="Enter name" name="StudentName">
    </div>

    <!-- <div class="col-sm-3">
      <label for="pwd">Father's Name:</label>
      <input type="text" class="form-control" id="fathername" placeholder="Enter fathername" name="fathertname">
    </div>

    
    <div class="col-sm-3">
      <label for="pwd">Mother Name:</label>
      <input type="text" class="form-control" id="mothername" placeholder="Enter moithername" name="mothername">
    </div>
</div> -->

        <div class="col-sm-3">
      <label for="gender">Gender:</label><br>
      <input type="radio" id="html" name="Gender" value="male">
  <label for="html">Male</label>
  <input type="radio" id="css" name="Gender" value="female">
  <label for="css">Female</label>
    </div>
         
    <!-- <div class="col-sm-3">
      <label for="name">Handicapped:</label>
<select name="handicap" id="handicap" class="form-control">
<option value="">Yes</option>
<option value="">No</option>
</select>
</div>

      
<div class="col-sm-3">
    <label for="name">Child with special need:</label>
<select name="child" id="child" class="form-control">
<option value="">Yes</option>
<option value="">No</option>
</select>
</div>

<div class="col-sm-3">
    <label for="name">Relegion:</label>
<select name="relegion" id="relegion" class="form-control">
<option value="">Hindu</option>
<option value="">Muslim</option>
<option value="">Christian</option>
</select>
</div> -->



<!-- <div class="row">
 <div class="col-sm-3">
      <label for="id">Catageroy:</label>
      <input type="number" class="form-control" id="id" name="caat" placeholder="Enter studentid" name="id">
    </div>
         
    <div class="col-sm-3">
      <label for="name">ADD RF Id Numner:</label>
      <input type="number" class="form-control" id="studentname" placeholder="Enter name" name="rfid">
    </div> -->

    <div class="col-sm-3">
      <label for="date">Date Of Birth:</label>
  <input type="date" id="birthday"   class="form-control" name="DateOfBirth"> 
    </div>
    
    <!-- <div class="col-sm-3">
      <label for="name">Date Of Birth(In Words):</label>
      <input type="text" class="form-control" id="words" placeholder="Enter date in words" name="words">
    </div> -->
    <div class="col-sm-3">
      <label for="name">Class:</label>
      <select name="Class"  class="form-control">
<option value="1">1</option>
<option value="2">2</option>
<select>
</div>
</div>
</div>
</div>
<br>

<div class="card">
      <div class="card-header bg-success">Document details</div>
      <div class="card-body">
      
      <!-- <div class="row">
 <div class="col-sm-3">
      <label for="id">Adhar Card(Student):</label>
      <input type="number" class="form-control" id="studentadhar" placeholder="Adhar catd student" name="studentadhar">
    </div>
         
    <div class="col-sm-3">
      <label for="name">Adhar Card(Father):</label>
      <input type="text" class="form-control" id="Fatheradhar" placeholder="Enter name" name="Fatheradhar">
    </div>
    
    <div class="col-sm-3">
      <label for="no">SSMID no:</label>
      <input type="text" class="form-control" id="SSMID" placeholder="Enter SSMID no" name="SSMID">
    </div>

    <div class="col-sm-3">
      <label for="number">Family Id:</label>
      <input type="number" class="form-control" id="Family" placeholder="Enter Familyid" name="Family">
    </div>
</div> -->



 <!-- <div class="col-sm-3">
      <label for="id">Child Id:</label>
      <input type="number" class="form-control" id="id" placeholder="Enter childid" name="childid">
    </div> -->
    <div class="row">
    <div class="col-sm-3">
      <label for="name">Registration Number:</label>
      <input type="number" class="form-control" id="registerno" placeholder="Enter registerno" name="RegistrationNo">
    </div>
    
    <div class="col-sm-3">
      <label for="pwd">Enrollement Number:</label>
      <input type="number" class="form-control" id="fathername" placeholder="Enter fathername" name="EnrollementNumber">
    </div>
    
    <div class="col-sm-3">
      <label for="pwd">Bank Name</label>
      <input type="name" class="form-control" id="fatherbank" placeholder="Enter fatherbank name" name="BankName">
    </div>

    
    <div class="col-sm-3">
      <label for="number">AccountNumber:</label>
      <input type="number" class="form-control" id="acc" placeholder="Enter account number" name="AccountNumber">
    </div>
</div>   

<br>

<div class="row">
 <div class="col-sm-3">
      <label for="name">Bank IFSC Code:</label>
      <input type="number" class="form-control" id="code" placeholder="Enter IFSC code" name="BankIFSCCode">
    </div>

</div>
</div>
</div>


<br>
<div class="card">
      <div class="card-header bg-success">Admission details</div>
      <div class="card-body">
      

  <!-- <div class="row">
    <div class="col-sm-3">
      <label for="name">AdmissionType:</label>
      <select name="admission" id="type" class="form-control">
<option value="">Public</option>
<option value="">Private</option>
</select>
    </div>
         
    <div class="col-sm-3">
      <label for="name">Admiision Scheme:</label>
      <select name="child" id="scheme" class="form-control">
<option value="">Non RTE</option>
<option value="">RTE</option>
</select>
</div>

<div class="col-sm-3">
      <label for="pwd">Student old or new :</label>
      <select name="old" id="old" class="form-control">
<option value="">Old</option>
<option value="">New</option>
</select>
    </div> -->
    
    <!-- <div class="col-sm-3">
      <label for="number">Medium:</label>
      <select name="med" id="old" class="form-control">
<option value="">Tamil</option>
<option value="">English</option>
</select>
    </div> -->

<div class="row">
    <div class="col-sm-3">
      <label for="name">Date Of Admission:</label>
      <input type="date" class="form-control" id="words" placeholder="Enter date in words" name="DateOfAdmission">
    </div>
         
    <div class="col-sm-3">
      <label for="name">Admission Number:</label>
      <input type="number" class="form-control" id="admission" placeholder="Enter admission number" name="AdmiisionNumber">
     </div>

<div class="col-sm-3">
      <label for="name">Scholar Number:</label>
      <input type="number" class="form-control" id="scholar" placeholder="Enter  number" name="ScholarNumber">
        </div>
    
<div class="col-sm-3">
      <label for="number">Previous Class:</label>
      <select name="PreviousClass" id="pre" class="form-control">
<option value="">1</option>
<option value="">2</option>
</select>
    </div>
     </div>

<br>
<div class="row">
    <div class="col-sm-3">
      <label for="name">Previous School Name:</label>
      <input type="text" class="form-control" id="schoolname" placeholder="Enter school name" name="PreviousSchoolName">
       </div>



<!-- <div class="col-sm-3">
      <label for="name">Section:</label>
      <select name="sec" id="sec" class="form-control">
<option value="">A</option>
<option value="">B</option>
</select>
</div> -->

<div class="col-sm-3">
      <label for="name">Admission Remarks:</label>
      <input type="text" class="form-control" id="add" placeholder="Enter remarks" name="AdmissionRemarks">
  </div>



    <div class="col-sm-3">
      <label for="name">Fee Catageroy:</label>
      <select name="FeeCatageroy" id="fee" class="form-control">
<option value="paid">Paid</option>
<option value="unpaid">Unpaid</option>
</select>
</div>




    <div class="col-sm-3">
      <label for="name">Bus Number:</label>
      <select name="BusNO" id="bus" class="form-control">
<option value="1">1</option>
<option value="2">2</option>
</select>
</div>
</div>
<br>

<div class="row">
<div class="col-sm-3">
      <label for="name">Hostel:</label>
      <select name="Hostel" id="hos" class="form-control">
<option value="yes">yes</option>
<option value="no">no</option>
</select>
</div>

<div class="col-sm-3">
      <label for="name">Library:</label>
      <select name="Library" id="lib" class="form-control">
<option value="Yes">yes</option>
<option value="No">no</option>
</select>
</div>
</div>
</div>
</div>

<!-- <div class="row">
    <div class="col-sm-3">
      <label for="name">Sibiling 1 detail:</label>
      <select name="det" id="det" class="form-control">
<option value=""></option>
<option value=""></option>
</select>
</div>

<div class="col-sm-3">
      <label for="name">sibiling 1 name:</label>
      <input type="text" class="form-control" id="sib" placeholder="Enter name" name="sib">
</div>

<div class="col-sm-3">
      <label for="name">Sibiling 2 detail:</label>
      <select name="det2" id="det2" class="form-control">
<option value=""></option>
<option value=""></option>
</select>
</div>

<div class="col-sm-3">
      <label for="name">sibiling 2 name:</label>
      <input type="text" class="form-control" id="sib2" placeholder="Enter name" name="sib2">
</div>
</div> -->

<br>

<div class="card">
      <div class="card-header bg-success">Parent Details</div>
<div class="card-body">


<div class="row">
<div class="col-sm-3">
<label for="pwd">Father Name:</label>
      <input type="text" class="form-control" id="fathername" placeholder="Enter fathername" name="FatherName">
    </div>

    
    <div class="col-sm-3">
      <label for="pwd">Mother Name:</label>
      <input type="text" class="form-control" id="mothername" placeholder="Enter moithername" name="MotherName">
    </div>

    <div class="col-sm-3">
      <label for="name">Father Contact no:</label>
      <input type="number" class="form-control" id="num" placeholder="Enter number" name="FatherContactno">
</div>

<div class="col-sm-3">
      <label for="name">Mother Contact no:</label>
      <input type="number" class="form-control" id="num2" placeholder="Enter mother number" name="MotherContactno">
</div>
</div>

<br>

<div class="row">
<div class="col-sm-3">
      <label for="name">Father Mailid:</label>
      <input type="email" class="form-control" id="fathermail" placeholder="Enter number" name="FatherMailid">
</div>

<div class="col-sm-3">
      <label for="name">Mother Mailid:</label>
      <input type="email" class="form-control" id="mothermail" placeholder="Enter mailid" name="MotherMailid">
</div>



<div class="col-sm-3">
      <label for="name">Father Occupation:</label>
      <input type="text" class="form-control" id="fatherocc" placeholder="Enter occupation" name="FatherOccupation">
</div>



<div class="col-sm-3">
      <label for="name">Mother Occupation:</label>
      <input type="text" class="form-control" id="motherocc" placeholder="Enter occupation" name="MotherOccupation">
</div>
</div>
</div>
</div>
<br>

<!-- <div class="col-sm-3">
      <label for="name">Guardian Name:</label>
      <input type="text" class="form-control" id="gautd" placeholder="Enter occupation" name="gautd">
</div>

<div class="col-sm-3">
      <label for="name">Guardian Contact no:</label>
      <input type="number" class="form-control" id="gaurd1" placeholder="Enter mother number" name="gaurd1">
</div>
</div>

<br>
<div class="row">
<div class="col-sm-3">
      <label for="name">Guardian Mailid:</label>
      <input type="text" class="form-control" id="Guardiamail" placeholder="Enter number" name="Guardiamail">
</div>

<div class="col-sm-3">
      <label for="name">Gaurdian Occupation:</label>
      <input type="text" class="form-control" id="gaurdocc" placeholder="Enter occupation" name="gaurdocc">
</div> -->
<!-- <div class="row">
<div class="col-sm-3">
      <label for="name">Student Contact no:</label>
      <input type="number" class="form-control" id="studnum" placeholder="Enter student number" name="studnum">
</div>

<div class="col-sm-3">
      <label for="name">Whatsapp no:</label>
      <input type="number" class="form-control" id="whatsnum" placeholder="Enter student number" name="whatsnum">
</div>
</div>

<div class="col-sm-3">
      <label for="name">Student Mailid:</label>
      <input type="text" class="form-control" id="studmail" placeholder="Enter mail" name="studmail">
</div>
</div> -->



<div class="card">
      <div class="card-header bg-success">Address Details</div>
<div class="card-body">
<br>
<div class="row">
<div class="col-sm-3">
      <label for="name"> Address:</label>
      <input type="text" class="form-control" id="studadd" placeholder="Enter studaddress" name="StudentAddress">
</div>

<div class="col-sm-3">
      <label for="name">Block:</label>
      <input type="number" class="form-control" id="block" placeholder="Enter studaddress" name="Block">
</div>

<div class="col-sm-3">
      <label for="name">village/city:</label>
      <input type="text" class="form-control" id="village" placeholder="Enter studaddress" name="city">
</div>


<div class="col-sm-3">
      <label for="name">District:</label>
      <input type="text" class="form-control" id="dist" placeholder="Enter district" name="District">
</div>
</div>

<br>
<div class="row">
<div class="col-sm-3">
      <label for="name">State:</label>
      <input type="text" class="form-control" id="block" placeholder="Enter state" name="State">
</div>

<div class="col-sm-3">
      <label for="name">Pincode:</label>
      <input type="number" class="form-control" id="pin" placeholder="Enter snumtate" name="Pincode">
</div>
<div class="col-sm-3">
      <label for="name">Landmark:</label>
      <input type="text" class="form-control" id="land" placeholder="Enter state" name="Landmark">
</div>
</div>
</div>
</div>
<br>






<button type="submit" id="div1" name="submit" class="btn btn-success">Submit</button>
</form>




    <!-- /.content -->
  <!-- /.content-wrapper -->
<?php
include('footer.php');
include('script.php');
?>

