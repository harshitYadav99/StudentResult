<?php
session_start();
				
				if(isset($_SESSION['uid']))
				{
					echo "";					
				}
				else
				{
					header('location: ../login.php');
				}
				
?>
<?php
include('../dbcon.php');
$rollno=$_GET['sid'];


$sql="SELECT * FROM `student_data` WHERE `u_rollno`='$rollno'";
$run=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($run);

$class=$row['u_class'];

$sql2="SELECT * FROM `user_mark` WHERE `u_class`='$class'";
$run2=mysqli_query($con,$sql2);
$data=mysqli_fetch_assoc($run2);

//combine Table///


?>
<html>
<head>
    <title>Update Mark Detail</title>
<link rel="stylesheet" href="../csss/updatemark_form.css" type="text/css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="admindash.php"><b>DASHBOARD</b></a></li>
                <li><a href="../index.php"><b>HOME</b></a></li>
                <li><a href="aboutus.php"><b>ABOUT</b></a></li>
                <li><a href="contactus.php"><b>CONTACT</b></a></li>
            </ul>
        </div>
      </nav>
      <div class="main-content-header">
          
          <form method="post" action="update_mark_data.php">
              <table>
             <h4> 
                <tr>
                  <th>Student Name: </th>
                  <td><span class="span"><?php echo $row['u_name']; ?></span></td>
                </tr>
              </h4>
              <h4>
                <tr>
                  <th>Student Class: </th>
                  <td><span class="span"><?php echo $row['u_class']; ?></span></td>
                </tr>
              </h4>
              <h4>
                <tr>
                  <th>Student Rollno: </th>
                  <td><span class="span"><?php echo $row['u_rollno']; ?></span></td>
                </tr>
              </h4>
                  </table>
          <table class="table1">
              <span> <h4 class="h_3">First Exam (A)</h4></span>
             <tr>
                <th>Software Engineering</th>   <th> Data Mining </th> <th>Web Technology</th>
             </tr>
             <tr>
                 <td>
                <input type='text' name='soft1' value="<?php echo $data['u_soft1']; ?>" class="th" required/></td>
                 <td><input type='text' name='data1' value="<?php echo $data['u_data1']; ?>" class="th"/></td>
                 <td><input type='text' name='web1' value="<?php echo $data['u_web1']; ?> " class="th" required/></td>
             </tr>
             </table>
             <table class="table2">
             <tr>
                 <th>Network Management</th>   <th>Minor Project</th> 
             </tr>
                 <tr>
                 
                 <td><input type='text' name='net1' value="<?php echo $data['u_net1']; ?> " class="th" required/></td>
                 <td><input type='text' name='minor1' value="<?php echo $data['u_minor1']; ?> " class="th" required/></td>
                 
             </tr>
             
         </table>
          <span> <h4 class="h3">Second Exam(B)</h4> </span>
         <table class="table4">
             <tr>
                <th>Software Engineering</th>   <th> Data Mining </th> <th>Web Technology</th>
             </tr>
             <tr>
                 <td><input type='text' name='soft2' value="<?php echo $data['u_soft2']; ?> " class="th" required/></td>
                 <td><input type='text' name='data2' value="<?php echo $data['u_data2']; ?> " class="th" required/></td>
                 <td><input type='text' name='web2' value="<?php echo $data['u_web2']; ?> " class="th" required/></td>
             </tr>
             </table>
             <table class="table2">
             <tr>
                 <th>Network Management</th>   <th>Minor Project</th> 
             </tr>
                 <tr>
                 
                 <td><input type='text' name='net2' value="<?php echo $data['u_net2']; ?> " class="th" required/></td>
                 <td><input type='text' name='minor2' value="<?php echo $data['u_minor']; ?> " class="th" required/></td>
                 </tr>
             <tr>
             <td><input type="hidden" name="rollno" value="<?php echo $row['u_rollno']; ?>"/></td>
            </tr>
             <tr>
             <td align="center" colspan="2"><input type="submit" name="submit" value="Submit" class="submit"/></td>   
             </tr>
             
         </table>
         
       
       </form>
      </div>
    </header>
    
</body>
</html>