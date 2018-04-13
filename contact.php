<?php>
if (isset($_POST['name']) &&  isset($_POST['email']) && isset($_POST['message'])){
if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){
 $fname = $_POST['name'];
 $email = $_POST['email'];
 $message = $_POST['message'];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
  echo 'kindly Provide Valid Email';
 } else {
  $body = $name."\n".$email."\n".$message;

 if(mail('priyamalekar999@gmail.com', 'NGT Response ', $body , 'From:Response@nevergiveupthoughts.com ')){
   echo 'Thanks for your contacting.';
  } else {
   echo 'There is a problem in sending mail.';
  }
 }
 
}
	else {
		echo 'All Fields are required.';
	}
?>

