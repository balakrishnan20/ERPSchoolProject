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
           
            </div>
        </div>
    </div>
    </section>

          <div class="container-fluid">
        <h1>Admission Details</h1>
        <table id="" class="table table-bordered table-striped table-hover table-resposive">
            <thead>
                <tr class="table bg-Success">
                     <th aria-label="Studentid: activate to sort column ascending"> Id</th>
                    <th>FirstName</th>
                    <th>Address</th>
                    <th>Degree</th>
                    <th>endorsements</th>
              <thead>
            <tbody>
            <?php
          $sql = "SELECT * FROM add_staffreg ";
        $result = mysqli_query($conn,$sql);
  
        if (mysqli_num_rows($result) > 0)  {
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>";
             
              echo "<td>".$row['Staff_id']."</td>";
          
              // echo '<td><button href="admission.php?id="'. $row['StudentName'].'" onclick=document.getElementById("id02").style.display="block">View</button></td>';
 echo "<td><a href='#' class='staff-link' data-toggle='modal' data-target='#staffModal' data-id='" . $row['Staff_id'] . "'>" . $row['FirstName'] . "</a></td>";
          echo '<td><a href="#" class="address-link" data-toggle="modal" data-target="#addressModal" data-addid="' . $row['Staff_id'] . '">' . $row['Address'] . '</a></td>';
          echo '<td><a href="#" class="degree-link" data-toggle="modal" data-target="#degModal" data-degid="' . $row['Staff_id'] . '">' . $row['Degree'] . '</a></td>';
          echo '<td><a href="#" class="det-link" data-toggle="modal" data-target="#detModal" data-detid="' . $row['Staff_id'] . '">' . $row['endorsements'] . '</a></td>';
  
              // echo '<td><a href="#" class="name-link" data-toggle="modal" data-target="#detailsModal">' . $row['StudentName'] . '</a></td>'
              
              echo "</tr>";
            }
        }
        else {
            echo "<tr><td colspan='4'>No employees found</td></tr>";
          }
  ?>
     
     </tbody>
          </table>
      </div>  
     
  
   <!-- Bootstrap Modal for displaying student details -->
   <div class="modal fade" id="staffModal">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title">Staff Details</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                      <p><strong>FirstName:</strong> <span id="firstname"></span></p>
                      <p><strong>LastName:</strong> <span id="lastname"></span></p>
                      <p><strong>Gender:</strong> <span id="gender"></span></p>
                      <p><strong>DateOfBirth:</strong> <span id="dob"></span></p>
                      <p><strong>PhoneNumber:</strong> <span id="phonenumber"></span></p>
                      <p><strong>HomePhoneNumber:</strong> <span id="homephonenumber"></span></p>	
                      <p><strong>WorkPhoneNumber:</strong> <span id="workphonenumber"></span></p>
                      <p><strong>EmailAddress:</strong> <span id="email"></span></p>
         
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
  
                  </div>
              </div>
          </div>
      </div>
  </div>
  
  <!-- Include Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <script>
      // JavaScript to handle StudentName link clicks and fetch details
      $(document).ready(function () {
          $('.staff-link').on('click', function () {
              var staffid = $(this).data('id');
              $.ajax({
                  url: 'db_staffreg.php', // Create a PHP file to handle this request and fetch student details from the database
                  type: 'POST',
                  data: {Staffid: staffid},
                  success: function (response) {
                    var data = JSON.parse(response);
                      $('#firstname').text(data.FirstName);
                      $('#lastname').text(data.LastName);
                      $('#gender').text(data.Gender);
                      $('#dob').text(data.DateOfBirth);
                      $('#phonenumber').text(data.PhoneNumber);
                      $('#homephonenumber').text(data.HomePhoneNumber);
                      $('#workphonenumber').text(data.WorkPhoneNumber);
                      $('#email').text(data.EmailAddress);
                  },
                  error: function () {
                      alert('Error fetching student details.');
                  }
                
              });
          });
      });
    
  </script>



<div class="modal fade" id="addressModal">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title">Staff Details</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                      <p><strong>Address:</strong> <span id="address"></span></p>
                      <p><strong>Country:</strong> <span id="country"></span></p>
                      <p><strong>State:</strong> <span id="state"></span></p>
                      <p><strong>City:</strong> <span id="city"></span></p>
                      
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
  
                  </div>
              </div>
          </div>
      </div>
  </div>
  
  <!-- Include Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <script>
      // JavaScript to handle StudentName link clicks and fetch details
      $(document).ready(function () {
          $('.address-link').on('click', function () {
              var addid = $(this).data('addid');
              $.ajax({
                  url: 'db_staffreg.php', // Create a PHP file to handle this request and fetch student details from the database
                  type: 'POST',
                  data: {Addid :addid},
                  success: function (response) {
                      var data = JSON.parse(response);
                      $('#address').text(data.Address);
                      $('#country').text(data.Country);
                      $('#state').text(data.State);
                      $('#city').text(data.City);
                  },
                  error: function () {
                      alert('Error fetching student details.');
                  }
              });
          });
      });
  </script>



<div class="modal fade" id="degModal">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title">Staff Details</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                      <p><strong>Degree:</strong> <span id="Degree"></span></p>
                      <p><strong>Major:</strong> <span id="Major"></span></p>
                      <p><strong>Univercity:</strong> <span id="Univercity"></span></p>
                      <p><strong>PassedoutYear:</strong> <span id="PassedoutYear"></span></p>
                      <p><strong>TotalYearsOfExperiences:</strong> <span id="TotalYearsOfExperiences"></span></p>
                      <p><strong>PreviousSchoolName:</strong> <span id="PreviousSchoolName"></span></p>
                      <p><strong>SubjectsHandled:</strong> <span id="SubjectsHandled"></span></p>
                      <p><strong>ClassHandled:</strong> <span id="citClassHandledy"></span></p>
                      <p><strong>PreferedLocation:</strong> <span id="PreferedLocation"></span></p>
                      <p><strong>NoticePeriod:</strong> <span id="NoticePeriod"></span></p>
                      
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
  
                  </div>
              </div>
          </div>
      </div>
  </div>
  
  <!-- Include Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <script>
      // JavaScript to handle StudentName link clicks and fetch details
      $(document).ready(function () {
          $('.degree-link').on('click', function () {
              var degid = $(this).data('degid');
              $.ajax({
                  url: 'db_staffreg.php', // Create a PHP file to handle this request and fetch student details from the database
                  type: 'POST',
                  data: {Degid :degid},
                  success: function (response) {
                      // Parse the JSON response received from the PHP file
                      var data = JSON.parse(response);
                      $('#Degree').text(data.Degree);
                      $('#Major').text(data.Major);
                      $('#Univercity').text(data.Univercity);
                      $('#PassedoutYear').text(data.PassedoutYear);
                      $('#TotalYearsOfExperiences').text(data.TotalYearsOfExperiences);
                      $('#PreviousSchoolName').text(data.PreviousSchoolName);
                      $('#SubjectsHandled').text(data.SubjectsHandled);
                      $('#ClassHandled').text(data.ClassHandled);
                      $('#PreferedLocation').text(data.PreferedLocation);
                      $('#NoticePeriod').text(data.NoticePeriod);
                  },
                  error: function () {
                      alert('Error fetching student details.');
                  }
              });
          });
      });
  </script>


<div class="modal fade" id="detModal">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title">Staff Details</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                      <p><strong>Endorsements:</strong> <span id="endorsements"></span></p>
                      <p><strong>contract:</strong> <span id="contract"></span></p>
                      <p><strong>Name:</strong> <span id="Name"></span></p>
                      <p><strong>Signature:</strong> <span id="Signature"></span></p>
                      <p><strong>Date:</strong> <span id="Date"></span></p>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
  
                  </div>
              </div>
          </div>
      </div>
  </div>
  
  <!-- Include Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <script>
      // JavaScript to handle StudentName link clicks and fetch details
      $(document).ready(function () {
          $('.det-link').on('click', function () {
              var detid = $(this).data('detid');
              $.ajax({
                  url: 'db_staffreg.php', // Create a PHP file to handle this request and fetch student details from the database
                  type: 'POST',
                  data: {Detid :detid},
                  success: function (response) {
                      var data = JSON.parse(response);
                      $('#endorsements').text(data.endorsements);
                      $('#contract').text(data.contract);
                      $('#Name').text(data.Name);
                      $('#Signature').text(data.Signature);
                      $('#Date').text(data.Date);
                  },
                  error: function () {
                      alert('Error fetching student details.');
                  }
              });
          });
      });
  </script>

</body>
</html>
  

  <div class="card-footer">
          <!-- Footer -->
        </div>
        <!-- card-footer -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  
  <!-- /.content-wrapper -->
    </div>
    </div>

<?php
include('footer.php');
include('script.php');
?> 