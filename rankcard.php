<?php
include('config.php');
include('header.php');
include('sidenav.php');

?>



<!-- <script type="text/javascript">
     $('#form').submit(function (e)) {
       e.preventDefault();
     } -->

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
        <div class="card-header bg-success">
         Marksheet
        </div>
        <div class="card-body">
        <div class="row">
    <div class="col-sm-4">
      <label for="name">Student Name:</label>
      <input type="text" class="form-control" id="studentname" placeholder="Enter name" name="StudentName">
    </div>



    <div class="col-sm-4">
      <label for="name">Register Number:</label>
      <input type="text" class="form-control" id="studentname" placeholder="Enter register number" name="RegisterNumber">
    </div>



    <div class="col-sm-4">
      <label for="name">Class:</label>
      <input type="text" class="form-control" id="studentname" placeholder="Enter class" name="Class">
    </div>
    </div>
<br>
   
<div class="row">
    <div class="col-sm-4">
      <label for="name">Section:</label>
      <input type="text" class="form-control" id="studentname" placeholder="Enter section" name="Section">
    </div>
  

    <div class="col-sm-4">
        <label for="name">Subject Name:</label>
        <select name="SubjectName"  class="form-control">
        <?php
          $ql = "SELECT * FROM add_subj";
          $result = mysqli_query($conn,$ql);
  
          if (mysqli_num_rows($result) > 0)  {
            while ($row = mysqli_fetch_assoc($result)) {
              // echo "<option value="$row['SubjectName']">Select</option>";
    
              echo "<option value='" . $row['SubjectName'] . "'>".$row['SubjectName'] ."</option>";
            }
          }
          else {
            echo "<option value=''>No subjects found</option>";
        }
              

        ?>
            </select>
    </div>
  
    <br>
    
    <div class="col-sm-4">
        <label for="name">Subject Mark:</label>
      <input type="text" class="form-control" id="studentname" placeholder="Enter subject code" name="SubjectMark">
    </div>
      </div>


<br>



<div class="row">
    <div class="col-sm-4">
      <label for="name">Total Marks:</label>
      <input type="text" class="form-control" id="studentname" placeholder="Enter total marks" name="Total Marks">
    </div>


    <div class="col-sm-4">
      <label for="name">Grade:</label>
      <input type="text" class="form-control" id="studentname" placeholder="Enter Grade" name="Grade">
    </div>

    <div class="col-sm-4">
      <label for="name">Result:</label>
      <input type="text" class="form-control" id="studentname" placeholder="Enter result" name="result">
    </div>
</div>

<br>
<button type="submit" id="div1" name="submit" class="btn btn-success">Submit</button>
</form>
      </div>
        </div>
        <!-- /.card-body -->
        
        <!-- /.card-footer-->
      
      <!-- /.card -->

    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include('footer.php');
include('script.php');
?>