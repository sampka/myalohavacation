<?php
<<<<<<< HEAD
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
	


 print_r($response);
	

mail($emailadd, $subject, $email_message);
echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
=======

 $url = 'https://api.sendgrid.com/';
 $user = 'azure_85cc94cc954ae67d5f6ffe0beb837869@azure.com';
 $pass = '5tizzoB7HGrK6P7'; 


 $params = array(
      'api_user' => $user,
      'api_key' => $pass,
      'to' => 'sampka@gmail.com',
      'subject' => 'subject of the email',
      'html' => 'I am the HTML parameter',
      'text' => 'I am the text parameter',
      'from' => 'test@myalohavacation.com',
   );

 $request = $url.'api/mail.send.json';


        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
        $from = "From: Contact Form";
        $mobile = $_POST['number'];

        $to = 'thisiswhereitsgoing@gmail.com'; 
        $subject = 'Message for subject line of email';

        $humanBool=66;

        $body = "From: $name\n E-Mail: $email\n Message:\n $message";

        // now we go through some validation of the parts in the form 
        // to check everything was entered. In hindsight HTML 5 
        // 'required' attribute is much easier and fulfills exactly 
        // what I did here anyway.
        // Check if name has been entered
     

        // Check if email has been entered and is valid
       

        //Check if message has been entered
       
          $humanBool = 66;
     

        // If there are no errors in the data fields i.e. missing data
        
                $url = 'https://api.sendgrid.com/';
                //create array params for api call
                //these params are what appear in the email that arrives into your email account.
                $params = array(
                    'api_user'  => $user,
                    'api_key'   => $pass,
                    'to'        => 'whereEmailIsGoing@gmail.com',
                    'subject'   => 'Subject',
                    'html'      => 'test',
                    'text'      => 'this is the text element',
                    'from'      => 'test@myalohavacation.com',
                  );

                // I don't why I concatenated this but one of the 
                // resources I used while researching said to do it. It 
                // worked, it's also unneccessary. $request is just 
                // https://api.sendgrid.com/api/mail.send.json. I think 
                // the founder of that article is just having a private 
                // joke at people using his code for help.

                //concatenate api url to url above
                $request =  $url.'api/mail.send.json';

                //debugging
                //$error = error_get_last();
                //echo this to see what errors are happening in the file

                // Repetitive code.....
                $url2 = 'https://api.sendgrid.com/api/mail.send.json';


                // Okay queue magic time. I'll explain it as overview
                // here and you guys can step through after the 
                // explanation. 1) magic. 2) Sorcery. I don't quite get 
                // all of it so my explanation would be poor but I
                // will say HOW it works overall. All previous arrays
                // and variables are packaged up in one pack and then
                // a service is called and they are sent as $result 



                // use key 'http' even if you send the request to https://
                $options = array(
                    'http' => array(
                        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                        'method'  => 'POST',
                        'content' => http_build_query($params),
                    ),
                );
                $context  = stream_context_create($options);
                $result = file_get_contents($url2, false, $context);

                // debugging code if something goes wrong 
                // var_dump($result);
                $result='<div class="alert alert-success">Thank You! I will be in touch</div>';

                // this is here to reset the page and clear the fields
                // of the form once mail has been sent.
                $page = $_SERVER['PHP_SELF'];
                $sec = "3";
                header("Refresh: $sec; url=$page");



>>>>>>> parent of c42a08a... da
?>
