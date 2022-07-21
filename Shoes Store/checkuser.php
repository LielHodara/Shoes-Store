<?php
$con=mysqli_connect("localhost","root","","shoesstore");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT * FROM user");
 if(isset($_POST['emailID'])){
     if(isset($_POST['pwID'])){
         while($row=mysqli_fetch_array($result))
         if($row['Email']==$_POST['emailID']&& $row['Password']==$_POST['pwID'] ){
            header("Refresh:0.2; url=home.html");
            echo "<script>alert('Login Successfully.')</script>";
            mysqli_close($con);
            return;
         }else{
            header("Refresh:0.2; url=login.php");
            
           
         }
         


     }
 }
 mysqli_close($con);
 ?>