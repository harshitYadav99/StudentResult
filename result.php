
<?php
if(isset($_POST['submit']))
{

	include('dbcon.php');
	
	$standerd=$_POST['std'];
	$rollno =$_POST['rollno'];
	$sql="SELECT * FROM `student_data` WHERE `u_class`='$standerd' AND `u_rollno`='$rollno'";
    $sql2="SELECT * FROM `user_mark` WHERE `u_class`='$standerd' AND `u_rollno`='$rollno'";
$run=mysqli_query($con,$sql);
$run2=mysqli_query($con,$sql2);
   $row=mysqli_num_rows($run2);
   $data2=mysqli_fetch_assoc($run2);
       
if(mysqli_num_rows($run)>0)
{
$data=mysqli_fetch_assoc($run);
?>

<html>
<head>
    <title>Result</title>
<link rel="stylesheet" href="csss/result.css" type="text/css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="index.php"><b>HOME</b></a></li>
                <li><a href="admin/aboutus.php"><b>ABOUT</b></a></li>
                <li><a href="admin/contactus.php"><b>CONTACT</b></a></li>
                <li><a href="login.php"><b>ADMIN LOGIN</b></a></li>
          </ul>
        </div>
      </nav>
      <div class="main-content-header">
        <form method="post" action="result.php">
          <table class="table">
              <img src="dataimg/<?php  echo $data['u_image']; ?>" class="image2" /> 
              <tr>
              <th>Name :</th>
                <td><?php echo $data['u_name'] ?></td>
              </tr>
              <tr>
              <th>Class :</th>
              <td><?php echo $data2['u_class']; ?></td>
              </tr>
              <tr>
              <th>Roll No :</th>
              <td><?php echo $data['u_rollno']; ?></td>
              </tr>
              <tr>
              <th>Father Name :</th>
              <td><?php echo $data['u_father']; ?></td>
              </tr>
              <tr>
              <th>City Name :</th>
              <td><?php echo $data['u_village']; ?></td>
              </tr>
          </table>
<br/>
          <table class="table2">
<br/>
              <tr>
               <th>Subject</th><th>Internal Exam (Score) </th><th>External Exam (Score)</th><th>Total</th><th>Max. Marks</th>
              </tr>
              <tr>
                  
              <th>Software Engineering</th>
                <th><?php echo $data2['u_soft1']; ?></th>
                <th><?php echo $data2['u_soft2']; ?></th>
                <th><?php echo $total1=$data2['u_soft1']+$data2['u_soft2']; ?> </th>
                <th>100</th>
              </tr>
              <tr>  
              <th>Data Mining</th>
                <th><?php echo $data2['u_data1']; ?></th>
                <th><?php echo $data2['u_data2']; ?></th>
                <th><?php echo $total2=$data2['u_data1']+$data2['u_data2']; ?> </th>
                <th>100</th>
              </tr>
              <tr>
              <th>Web Technology</th>
                  <th><?php echo $data2['u_web1']; ?></th>
                  <th><?php echo $data2['u_web2']; ?></th>
                  <th><?php echo $total3=$data2['u_web1']+$data2['u_web2']; ?> </th>
                  <th>100</th>
              </tr>
              <tr>
              <th>Network Management</th>
                  <th><?php echo $data2['u_net1']; ?></th>
                  <th><?php echo $data2['u_net2']; ?></th>
                  <th><?php echo $total4=$data2['u_net1']+$data2['u_net2']; ?></th>
                  <th>100</th>
              </tr>
              <tr>
              <th>Minor Project</th>
                  <th><?php echo $data2['u_minor1']; ?></th>
                  <th><?php echo $data2['u_minor']; ?></th>
                  <th><?php echo $total5=$data2['u_minor1']+$data2['u_minor']; ?></th>
                  <th>100</th>
              </tr>
              <tr>
              <th>Total</th>
                  <th>
                   <?php echo $data2['u_soft1']+$data2['u_data1']+$data2['u_web1']+$data2['u_net1']+$data2['u_minor1']; ?>
                  </th>
                  <th>
                  <?php echo $data2['u_soft2']+$data2['u_data2']+$data2['u_web2']+$data2['u_net2']+$data2['u_minor']; ?>
                  </th>
                  
                  <th><span class="colorchange"><?php echo $all=$total1+$total2+$total3+$total4+$total5; ?></span></th>
                 
                  <th>500</th>
                  
              </tr>    
             
          </table>
             <h1>Result: <span class="colorchange1"><?php 
                        if($all<=165) 
                        {
                            echo "Fail";
                        }
                       else
                       {
                           echo"Pass";
                       }
                      ?></span></h1>
            <marquee scrollamount="5"><p>Your Result is Declared. Kindly check your marks and in case of any discrepancy contact the admin. </p>
                </marquee>
       </form>
      </div>
    </header>
    
</body>
</html>
<?php
}
else
{
?>
<script>
alert('Record Not found');
    window.open('index.php','_self');
</script>
<?php
}

}

?>
