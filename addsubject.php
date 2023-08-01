<?php
include('config.php');
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
<div class="card">
<div class="card-header bg-success">
 Subject Name
</div>
<div class="card-body">
<div class="row">
<div class="col-sm-6">
<form action="" id="form" method="POST">
<label for="name">Subject Name:</label>
<input type="text" class="form-control" id="studentname" placeholder="Enter subject code" name="SubjectName">
</div>
</div>

<br>
<button type="submit"  name="submit" class="btn btn-success">Save</button>
</div>
</div>
</form>
</div>
<?php
if (isset($_POST['submit'])) {
  $SubjectName = $_POST['SubjectName'];

  $sql = "INSERT INTO add_subj (SubjectName) VALUES ('$SubjectName')";


  if ($conn->query($sql) === TRUE) {
   
  
    echo "Sucessfully added";
    
    // Delay the redirection by 1 second (1000 milliseconds)

  } 
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>

<?php
include('footer.php');
include('script.php');
?>