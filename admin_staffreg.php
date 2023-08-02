<?php
include('header.php');
include('sidenav.php');
include('config.php');
include('db_staffreg.php');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Staff Registration Form</h1>
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
      <div class="card-header bg-success">Staff Details</div>

      <div class="card-body">
        
    <div class="row">
    <div class="col-sm-4">
    <form action="db_staffreg.php" method="POST">
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
      <label for="name">Phone Number:</label>
      <input type="text" class="form-control" id="studentname" placeholder="Enter Number" name="PhoneNumber">
    </div>


    <div class="col-sm-4">
      <label for="name">Home PhoneNUmber:</label>
      <input type="text" class="form-control" id="studentname" placeholder="Enter home phone Number" name="HomePhoneNumber">
    </div>
    <div>
<br>

    <div class="row">
    <div class="col-sm-4">
      <label for="name">Work PhoneNUmber:</label>
      <input type="text" class="form-control" id="studentname" placeholder="Enter work ohone Number" name="WorkPhoneNumber">
    </div>



    <div class="col-sm-4">
      <label for="name">Email Address:</label>
      <input type="text" class="form-control" id="studentname" placeholder="Enter Email" name="EmailAddress">
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
      <label for="name">Previous School Name:</label>
      <input type="text" class="form-control" id="studentname" placeholder="Enter Passedout year" name="PreviousSchoolName">
    </div>
</div>

<br>

<div class="row">
<div class="col-sm-4">
      <label for="name">Subjects Handled:</label>
      <input type="text" class="form-control" id="studentname" placeholder="Enter subjects" name="SubjectsHandled">
    </div>

    
<div class="col-sm-4">
      <label for="name">Class Handled:</label>
      <input type="text" class="form-control" id="studentname" placeholder="Enter subjects" name="ClassHandled">
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
</div>

<br>

<div class="row">
<div class="col-sm-12">
<label>AGREEMENT (Read carefully before signing or submitting electronically)</label><br>
By my signature:<br>
<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
I acknowledge that individuals who provide false, inaccurate, or incomplete information in the application form, in an interview, or any other part of the hiring process or who fail to disclose information requested in the application form, in an interview, or any other part of the hiring process will not be eligible for employment, or, if they are hired, they will be subject to termination.<br>
<br>
<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
 I acknowledge that to the fullest extent permitted by state and federal law, the District will consider all information concerning an applicant or an employee in making hiring, termination, and other employment-related decisions. The term "all information" includes information of any kind (verbal, written, photographic, videographic, etc.) that is accessible in any medium (print, electronic, etc.) from any source.<br>
<br>
<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
I acknowledge that the District will consider public information and other information to which it has lawful access. This may include information that is contained in social networking sites, blogs, and other electronic sites, such as YouTube. If there is information that pertains to me that I believe requires explanation, interpretation, or clarification when it is considered by the District, it is my obligation to communicate this information to the District.<br>
<br>
<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
 I authorize the District to conduct a complete check regarding my background including, but not limited to, criminal record, child and dependent adult abuse registry screening, and sex offender registry. I agree to prepare and sign any other form necessary to complete a criminal background check.I further authorize all government agencies departments, bureaus, or related entities to release any and all information regarding my criminal history, if any. I agree to immediately notify the District if I should be convicted of any crime while my application is pending, or during my period of employment, if hired.<br>
 <br>
 <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
I authorize all current and former employers, teachers, and references to release all information regarding my professional competence, performance, character, and background. I waive any right I may have against any person contacted as a reference concerning this application.<br>
<br>
<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
I acknowledge that information that is relevant to the District’s decisions will be considered regardless of the date on which the District obtains the information and regardless of the date on which the information was first published, created, or made accessible to the District.<br>
 <br>
<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
 I understand that this application will be considered active for twelve (12) months from the date filed. I further understand that if I am employed by the Oelwein Community Schools, this application and associated documents will become part of my permanent record.<br>
  <br>
 <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
I understand that this application is not a contract of employment. In accepting the position, if hired, I understand that employment is at will, unless otherwise specified by the Code of Iowa. I acknowledge that the District may discharge an at-will employee at any time for any legal reason or no reason at all.<br>
 <br>
<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
I agree to submit to both pre-employment and post-employment random drug and alcohol testing. (Note: This only applies to Bus Drivers as required by the State of Iowa.)
</div>
</div>
<br>


<div class="row">
<div class="col-sm-12">
<label>Do you currently hold a valid Iowa Teachers License with appropriate endorsement for the position you are applying for?</label><br>
<input type="radio" name="validIowaTeachers" id="yes" name="Valid" value="female">Yes<br>
<input type="radio" name="validIowaTeachers" id="no" name="Valid" value="female">No
</div>
</div>
<br>

<div class="row">
<div class="col-sm-12">
    <lablel for="name"><b>Please list your endorsements:</b></label>
<input type="text"name="endorsements" class="form-control" name="end">
</div>
</div>
<br>

<div class="row">
<div class="col-sm-12">
<label>Are you currently under contract for any school district next year?</label><br>
<input type="radio" id="yes" name="contract" value="female">Yes<br>
<input type="radio" id="no" name="contract" value="female">No
</div>
</div>
<br>

<div class="row">
<div class="col-sm-12">
<label>By my electronic submission of this form:</label><br>

<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> I attest that all the information contained in this application is accurate, complete, and true.<br>

<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> I am bound by all elements of the agreement section of the application.<br>

<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> I understand and accept that electronic submission will be considered equivalent to an original hand written signature on a paper copy of the application.
</div>
</div>
<br>

<div class="row">
<div class="col-sm-4">
<label>Name:</label>
<input type="text"  class="form-control" name="Name">
</div>




<div class="col-sm-4">
<label>Signaturee:</label>
<input type="text" class="form-control" name="Signature">
</div>


<div class="col-sm-4">
<label>Date:</label>
<input type="text" class="form-control" name="Date">
</div>
</div>
<br>
</div>
</div>


<button type="submit" name="submit" class="btn btn-success">Submit</button>
</div>
</div>




    <!-- /.content -->
 
  <!-- /.content-wrapper -->
<?php
include('footer.php');
include('script.php');
?>