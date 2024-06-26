<?php



// specify your email here







$to = 'to@craftquest.in, vijay.limbani@metizsoft.com';



$sender_emailid = 'WebInquiry@craftquest.in';







	// Assigning data from $_POST array to variables



    if (isset($_POST['name'])) { $fname = $_POST['name']; }

    if (isset($_POST['email'])) { $email = $_POST['email']; }

    // if (isset($_POST['contact_no'])) { $cnumber = $_POST['contact_no']; }

    if (isset($_POST['message'])) { $message = $_POST['message']; }

    // if (isset($_FILES['file'])) { $file = $_FILES['file']['name']; }

   

	// Construct subject of the email



	$subject = 'Inquiry Form CraftQuest';



	$body_message = "

<html>

<head>

<title>Craft Quest</title>

</head>

<body>



<table>

<tr>

	<td><b>Full Name</b></td> 

	<td>: $fname</td>

</tr>

<tr>

	<td><b>Email Address</b></td>

	<td>: $email</td>

</tr>

<tr>

	<td><b>Message</b></td>

	<td>: $message</td>

</tr>



</table>

</body>

</html>

";







	// Construct headers of the message



	$headers = 'From: ' . $sender_emailid . "\r\n";

	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	$headers .= 'Reply-To: ' . $to . "\r\n";

	$mail_sent = mail($to, $subject, $body_message, $headers);

if ($mail_sent == true) { ?>
 <script language="javascript" type="text/javascript">
  alert('Thank you for the message. We will contact you shortly.');
  window.location.href = 'index.php';
 </script>
 <?php
 }else { ?>
  <script language="javascript" type="text/javascript">
   alert('Message failed. Please, send an email to to@craftquest.in');
   window.location.href = 'contact.php';
  </script>
 <?php } ?>




