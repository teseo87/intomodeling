<?php
require('phpmailer/class.phpmailer.php');

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "ssl";
$mail->Port     = 465;  
$mail->Username = "teseo87";
$mail->Password = "lumon1959";
$mail->Host     = "smtp.gmail.com";
// $mail->Mailer   = "smtp";
$mail->SetFrom($_POST["teseo87@gmail.com"], $_POST["Pepo"]);
//$mail->AddReplyTo($_POST["userEmail"], $_POST["userName"]);
$mail->AddAddress("teseo87@gmail.com");	
$mail->Subject = 'Aplly INFO from intomodeling.com';
//$mail->WordWrap   = 80;

// $htmlContent = "<h1>Aplly INFO from intomodeling.com</h1>" +
//     "<p>Information</p>" +
//     "<p>Full Name: " + $_POST['full-name'] + "</p>" +
//     "<p>Age: " + $_POST['age'] + ' </p>' +
//     "<p>Email Address: " + $_POST['email'] + "</p>" +
//     "<p>Phone (Mobile): " + $_POST['mobile'] + "</p>" +
//     "<p>Phone (Parents if U 18): " + $_POST['phoneParents'] + "</p>" +
//     "<p>City: " + $_POST['city'] + "</p>" +
//     "<p>State: " + $_POST['state'] + "</p>" +
//     "<p>Zip: " + $_POST['zip'] + "</p>";

$htmlContent = $_POST['full-name'];

//$htmlContent = 'XXX';

$mail->MsgHTML($htmlContent);
var_dump($_FILES);

$mail->AddAttachment($_FILES["pic"]["tmp_name"], $_FILES["pic"]["name"]);

$mail->IsHTML(true);

if(!$mail->Send()) {
	echo "<p class='error'>Problem in Sending Mail.</p>";
	// header("Location: advice.php"); 
	//  Make sure that code below does not get executed when we redirect. 
	// exit;
} else {
	echo "<p class='success'>Mail Sent Successfully.</p>";
	// header("Location: advice.php"); 
	//  Make sure that code below does not get executed when we redirect. 
	// exit;
}	
?>