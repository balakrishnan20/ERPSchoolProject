<?php
include('header.php');
include('sidenav.php');

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Employee Registration Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    
    <div class="card">
      <div class="card-header bg-success">Employee Details</div>

      <div class="card-body">
        
    <div class="row">
    <div class="col-sm-4">
    <form action="" method="POST">
      <label for="name">FirstName:</label>
      <input type="text" class="form-control" id="studentname" placeholder="Enter First name" name="FirstName">
    </div>


    <div class="col-sm-4">
      <label for="name">LastName:</label>
      <input type="text" class="form-control" id="studentname" placeholder="Enter Last name" name="LastName">
    </div>



     <div class="col-sm-4">
      <label for="gender">Gender:</label><br>
      <input type="radio" id="male" name="Gender" value="male">
  <label for="html">Male</label>
  <input type="radio" id="female" name="Gender" value="female">
  <label for="css">Female</label>
    </div>
    </div>
<br>

<div class="row">
    <div class="col-sm-4">
      <label for="name">DateOfBirth:</label>
      <input type="date" class="form-control" id="studentname" placeholder="Enter Last name" name="DateOfBirth">
</div>


    <div class="col-sm-4">
      <label for="name">Marital Status:</label>
     <select name="status" class="form-control">
        <option value="single">single</option>
        <option value="Married">Married</option>
</select>
    </div>


    <div class="col-sm-4">
      <label for="name">PhoneNUmber:</label>
      <input type="text" class="form-control" id="studentname" placeholder="Enter home phone Number" name="PhoneNumber">
    </div>
</div>
<br>

    <div class="row">
    <div class="col-sm-4">
      <label for="name">Home PhoneNUmber:</label>
      <input type="text" class="form-control" id="studentname" placeholder="Enter home phone Number" name="HomePhoneNumber">
    </div>


    <div class="col-sm-4">
      <label for="name">Email Address:</label>
      <input type="text" class="form-control" id="studentname" placeholder="Enter work ohone Number" name="Emailaddress">
    </div>



    <div class="col-sm-4">
    <!-- <form action="db_admission.php" method="POST"> -->
      <label for="name">Address:</label>
      <input type="text" class="form-control" id="studentname" placeholder="Enter First name" name="Address">
    </div>
</div>
<br>

<div class="row">
    <div class="col-sm-4">
      <label for="name">City:</label>
      <input type="text" class="form-control" id="studentname" placeholder="Enter Last name" name="City">
    </div>



<div class="col-sm-4">
      <label for="name">State:</label>
      <input type="text" class="form-control" id="studentname" placeholder="Enter state" name="State">
    </div>

<div class="col-sm-4">
      <label for="name">Country:</label>
      <input type="text" class="form-control" id="studentname" placeholder="Enter city" name="Country">
    </div>
</div>

<br>



<div class="row">
    <div class="col-sm-4">
      <label for="name">Degree:</label>
      <input type="text" class="form-control" id="studentname" placeholder="Enter Degree" name="Degree">
    </div>



    <div class="col-sm-4">
      <label for="name">Major:</label>
      <input type="text" class="form-control" id="studentname" placeholder="Enter Major" name="Major">
    </div>


<div class="col-sm-4">
      <label for="name">Univercity:</label>
      <input type="text" class="form-control" id="studentname" placeholder="Enter Univercity" name="Univercity">
    </div>
</div>

<br>

<div class="row">
    <div class="col-sm-4">
      <label for="name">Passedout Year:</label>
      <input type="text" class="form-control" id="studentname" placeholder="Enter Passedout year" name="PassedoutYear">
    </div>



<div class="col-sm-4">
      <label for="name">Total Years Of Experiences:</label>
      <input type="number" class="form-control" id="studentname" placeholder="Enter Passedout year" name="TotalYearsOfExperiences">
    </div>


<div class="col-sm-4">
      <label for="name">Previous Organization name:</label>
      <input type="text" class="form-control" id="studentname" placeholder="Enter Passedout year" name="PreviousOrganizationName">
    </div>
</div>

<br>

<div class="row">
<div class="col-sm-4">
      <label for="name">Applying Position:</label>
      <input type="text" class="form-control" id="studentname" placeholder="Enter subjects" name="Applyingposition">
    </div>

    
<div class="col-sm-4">
      <label for="name">Type of Work:</label>
      <select name="status" class="form-control">
        <option value="Permanent">Permanent</option>
        <option value="Temporary">Temporary</option>
        <option value="both">Both</option>
</select>
    </div>




<div class="col-sm-4">
      <label for="name">Prefered Location:</label>
      <input type="number" class="form-control" id="studentname" placeholder="Enter preferd location" name="PreferedLocation">
    </div>
</div>
<br>

<div class="row">
<div class="col-sm-4">
      <label for="name">Notice Period:</label>
      <input type="text" class="form-control" id="studentname" placeholder="Enter notice period" name="NoticePeriod">
    </div>

    <div class="col-sm-4"> 
    <i class="fas fa-upload"></i>  
          <label for="resume">Upload Resume</label>
          <input type="file" class="form-control-file" class="form-group" name="resume">
        </div>
</div>
<br>

<div class="row">
    <div class="col-sm-12">
      <label for="name">Cover Letter or Addinoal Information:</label>
      <textarea class="form-control" rows="5" name="coverletter"></textarea>
</div>
</div>



<br>



<button type="submit" name="submit" class="btn btn-success">Submit</button>
</div>
</div>





    <!-- /.content -->
 
  <!-- /.content-wrapper -->
<?php
include('footer.php');
include('script.php');
?>