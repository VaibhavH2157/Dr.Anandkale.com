<?php include('admin/config.php')?>
<?php 


 $name = $_POST['name'];
 $number = $_POST['mobile'];
 $department = $_POST['department'];
 $message = $_POST['message'];
 $date_added = ('D-m-y, H-i-s');


 $insert = "INSERT INTO `appointment`(`name`,`mobile`, `department`, `text`) values('$name','$number','$department','$message')";

 $sql = mysqli_query($db,$insert);
 if($sql)
{
  $_SESSION['status'] = "Your Appoinment has been submitted successfully!";
  header('location:dr-anand-kale-appointment.php');
}
else{
  $_SESSION['status'] = "Try Again!";
  header('location:dr-anand-kale-appointment.php');

}