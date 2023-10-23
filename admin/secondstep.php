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
<link rel="stylesheet" href="../csss/secondstep.css" type="text/css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="../index.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
            </ul>
        </div>
      </nav>
      <div class="main-content-header">
          
          <form method="post" action="thirdstep.php">
              <h2>Step 2/2 : Add Exam mark</h2>
         
          <td><input type="hidden" name="class" class="class" value="<?php  echo $_POST['class']; ?>" required/></td>
          
          <td><input type="hidden" name="rollno" class="rollno" value="<?php  echo $_POST['rollno']; ?>" required/></td>
          
              
              
          <table class="table1">
              <span> <h4 class="h_3">First Exam (A)</h4></span>
             <tr>
                <th>Software Engineering</th>   <th> Data Mining </th> <th>Web Technology</th>
             </tr>
             <tr>
                 <td><input type='text' name='soft1' placeholder='Software Engineering' required/></td>
                 <td><input type='text' name='data1' placeholder='Data Mining' required/></td>
                 <td><input type='text' name='web1' placeholder='Web Technology' required/></td>
             </tr>
             </table>
             <table class="table2">
             <tr>
                 <th>Network Management</th>   <th>Minor Project</th> 
             </tr>
                 <tr>
                 
                 <td><input type='text' name='net1' placeholder='Network Management' required/></td>
                 <td><input type='text' name='minor1' placeholder='Minor Project' required/></td>
                 
             </tr>
             
         </table>
          <span> <h4 class="h3">Second Exam(B)</h4> </span>
         <table class="table4">
             <tr>
                <th>Software Engineering</th>   <th> Data Mining </th> <th>Web Technology</th>
             </tr>
             <tr>
                 <td><input type='text' name='soft2' placeholder='Software Engineering' required/></td>
                 <td><input type='text' name='data2' placeholder='Data Mining' required/></td>
                 <td><input type='text' name='web2' placeholder='Web Technology' required/></td>
             </tr>
             </table>
             <table class="table2">
             <tr>
                 <th>Network Management</th>   <th>Minor Project</th> 
             </tr>
                 <tr>
                 
                 <td><input type='text' name='net2' placeholder='Network Management' required/></td>
                 <td><input type='text' name='minor2' placeholder='Minor Project' required/></td>
                 
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
<?php
if(isset($_POST['submit1']))
{ 
    include('../dbcon.php');
    $username=$_POST['name'];
    $class=$_POST['class'];
    $rollno=$_POST['rollno'];
    $father=$_POST['father'];
    $mother=$_POST['mother'];
    $mobile=$_POST['mobile'];
    $village=$_POST['village'];
    
    $imagename=$_FILES['img']['name'];
    $tempname=$_FILES['img']['tmp_name'];
    move_uploaded_file($tempname,"../dataimg/$imagename");
    
    $sql="INSERT INTO `Student_data`(`u_name`, `u_class`, `u_rollno`, `u_father`, `u_mother`, `u_mobile`, `u_village`, `u_image`) VALUES ('$username','$class','$rollno','$father','$mother','$mobile','$village','$imagename')";
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?>
        <script>
        alert('1step Complete and this is second  Step');
        </script>
        <?php
    }
    else
    {
       ?>
        <script>
        alert('Failed');
        </script>
        <?php 
    }
}

?>
