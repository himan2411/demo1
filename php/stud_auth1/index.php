<!DOCTYPE html>
<?php
include("conn.php");
session_start();
$Index_No=$_SESSION['Index_No'];
if(!isset($_SESSION['Index_No'])) 
 {
       header("location:login.php");
					 
 }
	 
?>
<html lang="en">
<head>
     <!--Import Google Icon Font-->
     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <title>View School</title>
   </head>
<body>
     <?php include("header.php");?>
        <div class="body-wrapper">
    <!-- partial:partials/_sidebar.html -->

    <!-- partial -->
    <!-- partial:partials/_navbar.html -->
	
   
	
    <!-- partial -->
    <div class="page-wrapper mdc-toolbar-fixed-adjust">
      <main class="content-wrapper">
        <div class="mdc-layout-grid">
          <div class="mdc-layout-grid__inner">
           
            
            
           
            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
              <div class="mdc-card table-responsive">
                <div class="table-heading px-2 px-1 border-bottom">
                  <h1 class="mdc-card__title mdc-card__title--large">Student's Information</h1>
                </div>
                <table class="table" class="scrollmenu" style="overflow-x:scroll;">
                  <thead>
                    <tr>
                      <th class="text-left"></th>
                      <th>Gr_No</th>
                      <th>Aadhar_No</th>
                      <th>Index_No</th>
                      <th>Student_Name</th>
                      <th>Father_Name</th>
                      <th>Contact_No</th>
                      <th>Email_Id</th>
                      <th>DOB</th>
                      <th>Gender</th>
                      <th>Standard</th>
                      <th>Percentage</th>
                      <th>C_Percentage</th>
                      <th>Ext_Academics</th>
                      <th>C_Ext_Academics</th>
                      <th>Ext_Sports</th>
                      <th>Ext_Cultural</th>
                      <th>C_Ext_Cultural</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
		  <?php 
		  
		 
	    $sql = "SELECT * FROM Student WHERE Index_No='$Index_No'";
$result = $conn->query($sql);
      while($row1 = $result->fetch_assoc())
	  { 
	  
	  
  ?>
				  
                    <tr>
					<!--
					<td><a class="waves-effect waves-light btn blue" href="updateStudent.php" style="margin-left:0%;">Update</a>
					<a class="waves-effect waves-light btn blue" href="deleteStudent.php" style="margin-left:0%;">Delete</a> </td>
                    -->
                    <td><?php echo $row1['Gr_No'];?></td>
					<td><?php echo $row1['Aadhar_No'];?></td>
					<td><?php echo $row1['Index_No'];?></td>
					<td><?php echo $row1['Student_Name'];?></td>
					<td><?php echo $row1['Father_Name'];?></td>
					<td><?php echo $row1['Contact_No'];?></td>
					<td><?php echo $row1['Email_Id'];?></td>
					<td><?php echo $row1['DOB'];?></td>
					<td><?php echo $row1['Gender'];?></td>
					<td><?php echo $row1['Standard'];?></td>
					<td><?php echo $row1['Percentage'];?></td>
					<td><?php echo $row1['C_Percentage'];?></td>
					<td><?php echo $row1['Ext_Academics'];?></td>
					<td><?php echo $row1['C_Ext_Academics'];?></td>
                      
                      <td><div class="col mdc-button" data-mdc-auto-init="MDCRipple"><i class="mdi mdi-heart text-blue"></i></div><div class="col mdc-button" data-mdc-auto-init="MDCRipple"><i class="mdi mdi-forum text-yellow"></i></div><div class="col mdc-button" data-mdc-auto-init="MDCRipple"><i class="mdi mdi-delete text-red"></i></div></td>
					  
                    </tr>
                 
                     <?php
	  }
  ?>
                    
                   
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </main>
      <!-- partial:partials/_footer.html -->
      <footer>
        <div class="mdc-layout-grid">
          <div class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">
              <span class="text-muted"><a class="text-green" href="https://www.bootstrapdash.com/" target="_blank"></a></span>
            </div>
            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6 d-flex justify-content-end">
              <span class="mt-0 text-right"> <i class="mdi mdi-heart text-red"></i></span>
            </div>
          </div>
        </div>
      </footer>
      <!-- partial -->
    </div>
  </div>
  <!-- body wrapper -->
  <!-- plugins:js -->
  <script src="node_modules/material-components-web/dist/material-components-web.min.js"></script>
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="node_modules/progressbar.js/dist/progressbar.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/misc.js"></script>
  <script src="js/material.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>
</html>