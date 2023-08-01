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
        <div class="card-header bg-success ">
          <h3 class="card-title">Rank Card</h3>
</div>
        <div class="card-body">
          
        <form action="db_adminrankcard.php" id="form" method="POST">
          <div class="row">
            <div class="col-sm-4">
  <div class="form-group">
    <label for="name">Exam Name:</label>
    <input type="text" class="form-control"  name="Examname" id="email">
  </div>
</div>
  
<div class="col-sm-4">
  <div class="form-group">
    <label for="name">Class:</label>
    <input type="text" class="form-control"  name="Class" id="email">
  </div>
</div>

  

<div class="col-sm-4">
  <div class="form-group">
    <label for="name">Section:</label>
    <input type="text" class="form-control" name="Section" id="email">
  </div>
</div>

  <br>
  <button type="submit" id="div1" name="submit" class="btn btn-success">Submit</button>
</form>

        </div>
        <!-- /.card-body -->
       
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


