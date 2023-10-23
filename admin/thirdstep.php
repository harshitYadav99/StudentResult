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

<html>
<head>
    <title>Homepage</title>
<link rel="stylesheet" href="../csss/addmark.css" type="text/css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
          <img src="../image/logo_1.png" class="logo"/>
            <ul class="main-nav" animate slideInDown>
                <li><a href="../index.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
            </ul>
        </div>
      </nav>
      <div class="main-content-header">
          <h2>First Step- Student Details</h2>
       
      </div>
    </header>
    
</body>
</html>
<?php
if(isset($_POST['submit']))
{
include('../dbcon.php');
    $class=$_POST['class'];
    $rollno=$_POST['rollno'];
    $soft1=$_POST['soft1'];
    $data1=$_POST['data1'];
    $web1=$_POST['web1'];
    $net1=$_POST['net1'];
    $minor1=$_POST['minor1'];
    
    $soft2=$_POST['soft2'];
    $data2=$_POST['data2'];
    $web2=$_POST['web2'];
    $net2=$_POST['net2'];
    $minor2=$_POST['minor2'];
    
    $sql="INSERT INTO `user_mark`(`u_rollno`,`u_class`,`u_soft1`, `u_data1`, `u_web1`, `u_net1`, `u_minor1`, `u_soft2`, `u_data2`, `u_web2`, `u_net2`, `u_minor`) VALUES ('$rollno','$class','$soft1','$data1','$web1','$net1','$minor1','$soft2','$data2','$web2','$net2','$minor2')";
    
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?>
        <script>
        alert('Data Inserted Succesfully');
        window.open('admindash.php?sid=<?php echo $rollno; ?>', '_self');
        </script>
        <?php
    }
}
?>