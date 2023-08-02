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

      <!-- Default box -->
    
           
      <div class="card">
      <div class="card-header bg-success">School Transportation Request Form</div>

      <div class="card-body">
        
        <!-- <div class="col-sm-3">
        <form action="db_blank.php" method="POST">
      <label for="id">Student Id:</label>
      <input type="number" class="form-control" id="id" placeholder="Enter studentid" name="id">
    </div> -->
   
    <div class="row">
    <div class="col-sm-4">
    <form action="db_bussform.php" id="form" method="POST">
      <label for="name">FirstName:</label>
      <input type="text" class="form-control" id="studentname" placeholder="Enter name" name="Firstname">
    </div>

    <div class="col-sm-4">
      <label for="name">LastName:</label>
      <input type="text" class="form-control" id="studentname" placeholder="Enter name" name="Lastname">
    </div>



    <div class="col-sm-4">
      <label for="name">Class:</label>
      <select name="Class" placeholder="selectclass" class="form-control">
<option value="1">1</option>
<option value="2">2</option>
<select>
    </div>
</div>
<br>

<div class="row">
    <div class="col-sm-4">
      <label for="name">Section:</label>
      <select name="Section" placeholder="selectsec" class="form-control">
<option value="A">A</option>
<option value="B">B</option>
<select>
    </div>
<br>

   
    <div class="col-sm-4">
      <label for="name">Pick-up Point:</label>
      <input type="text" class="form-control" id="studentname" placeholder="Enter pickup point" name="pickuppoint">
</div>


<div class="col-sm-4">
      <label for="name">Dropping Point:</label>
      <input type="text" class="form-control" id="studentname" placeholder="Enter drooping point" name="droppingpoint">
</div>
</div>

<br>
<div class="row">
    <div class="col-sm-4">
      <label for="name">Location Of Residency:</label>
      <input type="text" class="form-control" id="studentname" placeholder="Enter pickup point" name="location">
</div>

<div class="col-sm-4">
      <label for="name">Landmark:</label>
      <input type="text" class="form-control" id="studentname" placeholder="Enter pickup point" name="landmark">
</div>

    <div class="col-sm-4">
      <label for="name">Address:</label>
      <input type="text" class="form-control" id="studentname" placeholder="Enter busnumber" name="address">
</div>
</div>
<br>

<div class="row">
<div class="col-sm-6">
      <label for="name">Mobile Number:</label>
      <input type="text" class="form-control" id="studentname" placeholder="Enter busnumber" name="mobileno">
</div>
</div>
<br>

<label>TERMS AND CONDITIONS ​</label><br>
<h5>Transportation of the student to and from the school shall be the responsibility of the parent. The  school may provide conveyance in selected routes subject to following terms and conditions.</h5>
<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
School transportation registration fees per annum is Rs.1000/-. Monthly bus charges shall be  payable in advance. The bus charges are likely to change to meet increasing costs.<br>
<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
The transportation fee is fixed for a full month. Hence reduction in conveyance fees will not be  allowed for availing bus facility for periods less than one month.<br>
<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
Transportation facilities are available from the nearest approved bus stops only.<br>
<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
Parents who wish to discontinue school transport arrangements must submit the School  Conveyance Discontinuation Form duly filled in at least one month in advance.<br>
<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
Transportation fee, once paid for a month, will not be refunded, even if the child discontinues in  between.<br>
<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
Conveyance may not be available on “2 working days” of every month. On such days, parents shall  make their own arrangements for transportation.<br>
<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
The student shall be at the specified bus stop at least 10 minutes ahead of the prescribed time.  Those who miss the bus shall make their own arrangement to reach the school.<br> 
<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
Deviation from the approved route or picking up from home will not be allowed to reduce the  effective travel time for students and to avoid unwanted delays.<br>
<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
No student or parent is permitted to talk to drivers on any issue including request for change in  approved collection or dropping point.<br>
<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
If any change is desired the same shall be communicated to the school office through mail Id info@sjonsite.com /call on +91 8086477777 with date and  clear instructions to avoid any confusion.<br>
<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
Parents are requested to notify in  advance to the Bus Attendant or the school office if their ward will not be traveling by school bus on any particular day.<br>
<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
Parents are required to support the school by ensuring their children behave responsibly on the  school bus.<br>
<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
I have read the terms and conditions for availing the school conveyance facilities and agree to strictly abide by them and those amended from time to time.<br>
<br>
    <div class="row">
    <div class="col-sm-4">
      <label for="name">Name of the parent:</label>
      <input type="text" class="form-control" id="studentname" placeholder="Enter parentname" name="parentname">
</div>

<div class="col-sm-4">
      <label for="name">Signature of Parent:</label>
      <input type="text" class="form-control" id="studentname" placeholder="signature" name="signature">
</div>
</div>
<br>
<hr>             

<b><h3>(For office use only)</h3></b>
<br>

<div class="row">
<div class="col-sm-4">
      <label for="name">Pick-up point and Dropping point in km:</label>
      <input type="text" class="form-control" id="studentname" placeholder="km" name="distances">
</div>


<div class="col-sm-4">
      <label for="name">Bus Number:</label>
      <input type="text" class="form-control" id="studentname" placeholder="bus number" name="busnumber">
</div>

<div class="col-sm-4">
      <label for="name">Amount (Rs):</label>
      <input type="text" class="form-control" id="studentname" placeholder="Amount" name="amount">
</div>
</div>

<br>

<button type="submit" id="div1" name="submit" class="btn btn-success">Submit</button>
</form>

</div>
</div>
    
        <!-- /.card-footer-->
     
      <!-- /.card -->

    
    <!-- /.content -->
  
  <!-- /.content-wrapper -->
<?php
include('footer.php');
include('script.php');
?>