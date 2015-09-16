<?php
/*
 **************************************
 *									  *
 * Config here                        *
 *									  *
 **************************************
 */

$to = "tkanchar@asu.edu";
$siteName = "YOUR_SITE_NAME";

/*
 *************************************************************
 *									                         *
 *      Don't Change below code, if you don't know php.      *
 *									                         *
 *************************************************************
 */

$name = $_POST['fname'];
$mail = $_POST['email'];
$subject = $_POST['subj'];
$message = $_POST['mssg'];

if (isset($name) && isset($mail) && isset($message)) {

//$mailSub = '[Contact] ['.$siteName.']'.$subject;
	$mailSub = $subject;
// $email_message .= "First Name: ".clean_string($first_name)."\n";
	$body = "Sender Name: ".clean_string($name)."\n\n";
	$body .= "Sender Mail: ".clean_string($mail)."\n\n";
	$body .= "Message Subject: ".clean_string($subject)."\n\n";
	$body .= "Message: ".clean_string($message);

	$header = 'From: '.$mail ."\r\n";
	$header .= 'Reply-To: '.$mail ."\r\n";
	$header .= 'X-Mailer: PHP/' . phpversion();
/*	'From: '.$email_from."\r\n".

'Reply-To: '.$email_from."\r\n" .

'X-Mailer: PHP/' . phpversion(); */
//echo mail($to, $mailSub, $body, $header);
	echo mail("tkanchar@asu.edu", "Test", "Test", "Test");
}else{
	echo '0';
}
?>
