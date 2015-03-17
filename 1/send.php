<?php
//--------------------------Set these paramaters--------------------------

// Subject of email sent to you.
$subject = 'Application for '.clean_string($Condo)."  Guests: ".clean_string($guests); 

// Your email address. This is where the form information will be sent. 
$emailadd = 'sampka@gmail.com'; 

// Where to redirect after form is processed. 
$url = 'http://www.myalohavacation.com/1/application.html'; 

function died($error) {
		// your error code can go here
		echo "We are very sorry, but there were error(s) found with the form your submitted. ";
		echo "These errors appear below.<br /><br />";
		echo $error."<br /><br />";
		echo "Please go back and fix these errors.<br /><br />";
		die();
	}
	
	if(	!isset($_POST['email'])) {
		died('We are sorry, but there appears to be a problem with the form your submitted.');		
	}

   
	$email = $_POST['email']; // required
	
	
	$error_message = "";
	$email_exp = "^[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$";
  if(!eregi($email_exp,$email)) {
  	$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
  
  if(strlen($error_message) > 0) {
  	died($error_message);
  }
  
function clean_string($string) {
	  $bad = array("content-type","bcc:","to:","cc:","href");
	  return str_replace($bad,"",$string);
	}
	
	$email_message = "Aplication details below.\n\n";

    $email_message .= "This is a application for the ".clean_string($Condo)."\n\n";
	$email_message .= "I will be paying by ".clean_string($payment)."\n\n";
	$email_message .= "Guests: ".clean_string($guests)."\n\n";
	$email_message .= "Arriving: ".clean_string($AriveMonth)."-".clean_string($AriveDay)."-".clean_string($AriveYear)."    ".clean_string($AriveTime).clean_string($AriveAM)."\n\n";
	$email_message .= "Departing: ".clean_string($DepartMonth)."-".clean_string($DepartDay)."-".clean_string($DepartYear)."    ".clean_string($DepartTime).clean_string($DepartAM)."\n\n";
	$email_message .= "Permanent Address: \n".clean_string($PAddress)."\n\n";
	$email_message .= "Email: ".clean_string($email)."\n\n";
	$email_message .= "Home Phone: "."(".clean_string($hPhone).")".clean_string($hPhone2)."-".clean_string($hPhone4)."\n\n";
	$email_message .= "Cell Phone: "."(".clean_string($cPhone).")".clean_string($cPhone2)."-".clean_string($cPhone3)."\n\n";
	$email_message .= "Place of Employment: ".clean_string($employ)."\n\n";
	$email_message .= "Address of Employment: \n".clean_string($employaddress)."\n\n";
	$email_message .= "Contact Person and Phone: ".clean_string($ContactPandP).", "."(".clean_string($conPhone).")".clean_string($conPhone2)."-".clean_string($conPhone3)."\n\n";
	$email_message .= "Emergency Contact Name: ".clean_string($EContactname)."\n\n";
	$email_message .= "Emergency Contact Address: \n".clean_string($EContactAddress)."\n\n";
	$email_message .= "Emergency Contact Phone: "."(".clean_string($ePhone1).")".clean_string($ePhone2)."-".clean_string($ePhone3)."\n\n";
	$email_message .= "Renting a Car: ".clean_string($_parking)."\n\n";
	$email_message .= "Day final Payment is Due: ".clean_string($DueMonth)."-".clean_string($DueDay)."-".clean_string($DueYear)."\n\n";
    $email_message .= "Additional Comments or Questions: ".clean_string($Additional)."\n\n";


	#printf($email_message);
	


	$smtpurl = 'https://api.sendgrid.com/';
	$user = 'azure_85cc94cc954ae67d5f6ffe0beb837869@azure.com';
	$pass = '5tizzoB7HGrK6P7';

$params = array(
      'api_user' => $user,
      'api_key' => $pass,
      'to' => $emailadd,
      'subject' => $subject,
      'html' => $email_message,
      'from' => 'test@myalohavacation.com',
   );

	$request = $smtpurl.'api/mail.send.json';

	 // Generate curl request
 $session = curl_init($request);

 // Tell curl to use HTTP POST
 curl_setopt ($session, CURLOPT_POST, true);

 // Tell curl that this is the body of the POST
 curl_setopt ($session, CURLOPT_POSTFIELDS, $params);

 // Tell curl not to return headers, but do return the response
 curl_setopt($session, CURLOPT_HEADER, false);
 curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

 // obtain response
 $response = curl_exec($session);
 curl_close($session);

 // print everything out
 print_r($response);
	

#mail($emailadd, $subject, $email_message);
echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
?>
