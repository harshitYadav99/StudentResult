<?php
if(isset($_POST['submit']))
{
include('../dbcon.php');
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
    
    $sql="UPDATE `user_mark` SET  `u_soft1` = '$soft1', `u_data1` = '$data1', `u_web1` = '$web1', `u_net1` = '$net1', `u_minor1` = '$minor1', `u_soft2` = '$soft2', `u_data2` = '$data2', `u_web2` = '$web2', `u_net2` = '$net2', `u_minor` = '$minor2' WHERE `u_rollno` = '$rollno'";
    
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?>
        <script>
        alert('Data Updated  Succesfully');
        window.open('updatemark_form.php?sid=<?php echo $rollno; ?>', '_self');
             </script>
       
       
        <?php
    }
    else
    {
        echo "Error";
    }
}
?>