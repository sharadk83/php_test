<?php
 
require_once($_SERVER['DOCUMENT_ROOT']."/html_test/config.php");
$name = $_POST['full_name'];
$phone_number = $_POST['phone_number'];
$user_email = $_POST['email'];
$password = md5($_POST['password']);
$status=0;
$activationcode=md5($email.time());
$insert = "INSERT INTO `userregistration`(`name`, `phone_number`, `email`, `password`,`activationcode`,`status`) VALUES ('$name','$phone_number','$user_email','$password','$activationcode','$status')";	
$query = mysqli_query($con,$insert);
if($query)
 {
 $server_protocol = $_SERVER['REQUEST_SCHEME'] . '://'.$_SERVER['HTTP_HOST']; 
require_once($_SERVER['DOCUMENT_ROOT']."/html_test/sendgrid-php/vendor/autoload.php");
  $email = new \SendGrid\Mail\Mail();
    $email->setFrom("sharadinnowise@gmail.com", "Email verification");
    $email->setSubject("Email verification");
    $email->addTo($user_email, $name);    
    $email->addContent(
      'text/html', "<html></body><div><div>Dear $name,</div></br></br><div style='padding-top:8px;'>Please click The following link For verifying and activation of your account</div><div style='padding-top:10px;'><a href='$server_protocol/html_test/view/emailverify/email_verification.php?code=$activationcode' target='_blank'>Click Here</a></div>
</div></body></html>");

    $sendgrid = new \SendGrid('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');
    try {
        $response = $sendgrid->send($email); 
               
        return 'Message has been sent';
    } catch (Exception $e) {
        echo 'Message could not be sent.';
        echo 'Caught exception: '.  $e->getMessage(). "\n";
    }


	
}
else
{
echo "<script>alert('Data not inserted');</script>";
}
//echo $mess = "User registred successfully";
?>