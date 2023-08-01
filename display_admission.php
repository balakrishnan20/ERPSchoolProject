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
           
            </div>
        </div>
    </div>
    </section>


          <div class="container-fluid">
        <h1>Admission Details</h1>
        <table id="example1" class="table table-bordered table-striped table-hover table-resposive">
            <thead>
                <tr class="table bg-Success">
                     <th aria-label="Studentid: activate to sort column ascending"> Id</th>
                    <th>StudentName</th>
                    <th>RegistrationNumber</th>
                    <th>AdmiisionNumber</th>
                    <th>FatherName</th>
                    <th>Address</th>
              <thead>
            <tbody>
            <?php
          $ql = "SELECT * FROM add_admission ";
        $result = mysqli_query($conn,$ql);

        if (mysqli_num_rows($result) > 0)  {
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
           
            echo "<td>".$row['Studentid']."</td>";
        
            // echo '<td><button href="admission.php?id="'. $row['StudentName'].'" onclick=document.getElementById("id02").style.display="block">View</button></td>';
        echo "<td><a href='#' class='student-link' data-toggle='modal' data-target='#studentModal' data-id='" . $row['Studentid'] . "'>" . $row['StudentName'] . "</a></td>";
        echo '<td><a href="#" class="reg-number-link" data-toggle="modal" data-target="#detailsModal" data-regid="' . $row['Studentid'] . '">' . $row['RegistrationNo'] . '</a></td>';
        echo '<td><a href="#" class="admin-link" data-toggle="modal" data-target="#adminModal" data-adminid="' . $row['Studentid'] . '">' . $row['AdmiisionNumber'] . '</a></td>';
        echo '<td><a href="#" class="parent-link" data-toggle="modal" data-target="#parentModal" data-parentid="' . $row['Studentid'] . '">' . $row['FatherName'] . '</a></td>';
        echo '<td><a href="#" class="address-link" data-toggle="modal" data-target="#addressModal" data-addressid="' . $row['Studentid'] . '">' . $row['StudentAddress'] . '</a></td>';

            // echo '<td><a href="#" class="name-link" data-toggle="modal" data-target="#detailsModal">' . $row['StudentName'] . '</a></td>';
        
            
   
            
            echo "</tr>";
          }
        } else {
          echo "<tr><td colspan='4'>No employees found</td></tr>";
        }
?>
   
   </tbody>
        </table>
    </div>  
   

 <!-- Bootstrap Modal for displaying student details -->
 <div class="modal fade" id="studentModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Student Details</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p><strong>Student Name:</strong> <span id="student-name"></span></p>
                    <p><strong>Gender:</strong> <span id="gender"></span></p>
                    <p><strong>Date of Birth:</strong> <span id="dob"></span></p>
                    <p><strong>Class:</strong> <span id="class"></span></p>
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
        $('.student-link').on('click', function () {
            var studentId = $(this).data('id');
            $.ajax({
                url: 'db_admission.php', // Create a PHP file to handle this request and fetch student details from the database
                type: 'POST',
                data: {StudentId: studentId},
                success: function (response) {
                    // Parse the JSON response received from the PHP file
                    var data = JSON.parse(response);
                    $('#student-name').text(data.StudentName);
                    $('#gender').text(data.Gender);
                    $('#dob').text(data.DateOfBirth);
                    $('#class').text(data.Class);
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


<div class="modal fade" id="detailsModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Document Details</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p><strong>Registration Number:</strong> <span id="register"></span></p>
                    <p><strong>Enrollement Number:</strong> <span id="enrollment"></span></p>
                    <p><strong>Bank Name:</strong> <span id="bank"></span></p>
                    <p><strong>AccountNumber:</strong> <span id="account"></span></p>
                    <p><strong>Bank IFSC Code:</strong> <span id="ifsc"></span></p>
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
        $('.reg-number-link').on('click', function () {
            var student = $(this).data('regid');
           
            $.ajax({
                url: 'db_admission.php', // Create a PHP file to handle this request and fetch student details from the database
                type: 'POST',
                data: {Student: student},
                success: function (response) {
                    // Parse the JSON response received from the PHP file
                    var data = JSON.parse(response);
                    $('#register').text(data.RegistrationNo);
                    $('#enrollment').text(data.EnrollementNumber);
                    $('#bank').text(data.BankName);
                    $('#account').text(data.AccountNumber);
                    $('#ifsc').text(data.BankIFSCCode);
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

<div class="modal fade" id="adminModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Admission Details</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p><strong>Date Of Admission:</strong> <span id="date"></span></p>
                    <p><strong>Admission Number:</strong> <span id="admin"></span></p>
                    <p><strong>Scholar Number:</strong> <span id="scholar"></span></p>
                    <p><strong>Previous Class:</strong> <span id="prev"></span></p>
                    <p><strong>Previous School Name:</strong> <span id="scl"></span></p>
                    <p><strong>Admission Remarks:</strong> <span id="remar"></span></p>
                    <p><strong>Fee Catageroy:</strong> <span id="fee"></span></p>
                    <p><strong>Bus Number:</strong> <span id="bus"></span></p>
                    <p><strong>Hostel:</strong> <span id="hostel"></span></p>
                    <p><strong>Library:</strong> <span id="library"></span></p>
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
        $('.admin-link').on('click', function () {
            var studentiD = $(this).data('adminid');
           
            $.ajax({
                url: 'db_admission.php', // Create a PHP file to handle this request and fetch student details from the database
                type: 'POST',
                data: {StudentiD: studentiD},
                success: function (response) {
                    // Parse the JSON response received from the PHP file
                    var data = JSON.parse(response);
                    $('#date').text(data.DateOfAdmission);
                    $('#admin').text(data.AdmiisionNumber);
                    $('#scholar').text(data.ScholarNumber);
                    $('#prev').text(data.PreviousClass);
                    $('#scl').text(data.PreviousSchoolName);
                    $('#remar').text(data.AdmissionRemarks);
                    $('#fee').text(data.FeeCatageroy);
                    $('#bus').text(data.BusNO);
                    $('#hostel').text(data.Hostel);
                    $('#library').text(data.Library);
                },
                error: function () {
                    alert('Error fetching student details.');
                }
            });
        });
    });
</script>


<div class="modal fade" id="parentModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Parent Details</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p><strong>Father Name:</strong> <span id="father"></span></p>
                    <p><strong>Mother Name:</strong> <span id="mother"></span></p>
                    <p><strong>Father Contact no:</strong> <span id="fatherno"></span></p>
                    <p><strong>Mother Contact no:</strong> <span id="motherno"></span></p>
                    <p><strong>Father Mailid:</strong> <span id="fmail"></span></p>
                    <p><strong>Mother Mailid:</strong> <span id="mmail"></span></p>
                    <p><strong>Father Occupation:</strong> <span id="focc"></span></p>
                    <p><strong>Mother Occupation:</strong> <span id="mocc"></span></p>
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
        $('.parent-link').on('click', function () {
            var parentid = $(this).data('parentid');
           
            $.ajax({
                url: 'db_admission.php', // Create a PHP file to handle this request and fetch student details from the database
                type: 'POST',
                data: {Parentid: parentid},
                success: function (response) {
                    // Parse the JSON response received from the PHP file
                    var data = JSON.parse(response);
                    $('#father').text(data.FatherName);
                    $('#mother').text(data.MotherName);
                    $('#fatherno').text(data.FatherContactno);
                    $('#motherno').text(data.MotherContactno);
                    $('#fmail').text(data.FatherMailid);
                    $('#mmail').text(data.MotherMailid);
                    $('#focc').text(data.FatherOccupation);
                    $('#mocc').text(data.MotherOccupation);
                   
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
                    <h4 class="modal-title">Address Details</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p><strong>Address:</strong> <span id="addres"></span></p>
                    <p><strong>Block:</strong> <span id="block"></span></p>
                    <p><strong>village/city:</strong> <span id="village"></span></p>
                    <p><strong>District:</strong> <span id="district"></span></p>
                    <p><strong>State:</strong> <span id="state"></span></p>
                    <p><strong>Pincode:</strong> <span id="pincode"></span></p>
                    <p><strong>Landmark:</strong> <span id="landmark"></span></p>
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
            var addressid = $(this).data('addressid');
           
            $.ajax({
                url: 'db_admission.php', // Create a PHP file to handle this request and fetch student details from the database
                type: 'POST',
                data: {Addressid: addressid},
                success: function (response) {
                    // Parse the JSON response received from the PHP file
                    var data = JSON.parse(response);
                    $('#addres').text(data.StudentAddress);
                    $('#block').text(data.Block);
                    $('#village').text(data.city);
                    $('#district').text(data.District);
                    $('#state').text(data.State);
                    $('#pincode').text(data.Pincode);
                    $('#landmark').text(data.Landmark);
                    
                   
                },
                error: function () {
                    alert('Error fetching student details.');
                }
            });
        });
    });

</script>
    
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