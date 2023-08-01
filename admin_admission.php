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
            <h1>Blank Page</h1>
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
        <div class="card-header">
          <h3 class="card-title">Admission Form</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
       
          
        </div>
        <!-- /.card-body -->
        <div class="card-body">

        <div class="row"> 
        <div class="col-lg-3"> 
    <label for="id">Student ID:</label>
    <input type="number" class="form-control" id="id" name="id"> 

    <div class="col-lg-3"> 
    <label for="name">Student Name:</label>
    <input type="text" class="form-control" id="studentname" name="studentname">
 </div>
    <div class="col-lg-3">
    <label for="name">Father's Name:</label>
    <input type="text" class="form-control" id="fathername" name="fathername"></div>

    <div class="col-lg-3"></div>
    <label for="name">Mother's Name:</label>
    <input type="text" class="form-control" id="mothername" name="mothername"></div>
  </div>
</div>

<div class="row"> 
        <div class="col-lg-3"> 
    <label for="gender">Gender:</label>
        <input type="radio" name="gender" id="male" value="male">
        <input type="radio" name="gender" id="female" value="female">
</div>
    <div class="col-lg-3"> 
    <label for="name">Handicapped:</label>
    <select name="handicap" id="handicap">
    <option value="">Yes</option>
    <option value="">No</option>
</select>
 </div>
    <div class="col-lg-3">
    <label for="name">Child with special need:</label>
    <select name="child" id="child">
    <option value="">Yes</option>
    <option value="">No</option>
</select>
</div>

    <div class="col-lg-3"></div>
    <label for="name">Relegion:</label>
    <select name="relegion" id="relegion">
    <option value="">Hindu</option>
    <option value="">Muslim</option>
    <option value="">Christian</option>
</select>
  </div>
</div>



        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include('footer.php');
include('script.php');
?>