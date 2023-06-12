<?php include('admin/config.php')?>
<?php 

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $text = $_POST['text'];


 $insert = "INSERT INTO `contact`(`name`,`mobile`,`email`,`subject`,`text`)values('$name','$mobile','$email','$subject','$text')";

 $sql = mysqli_query($db,$insert);

 if($sql)
 {
   $_SESSION['status'] = "Thanks for connect us we will connect u soon... !";
   header('location:dr-anand-kale-contact.php');
 }
 else{
   $_SESSION['status'] = "Try Again!";
   header('location:dr-anand-kale-contact.php');
 
 }