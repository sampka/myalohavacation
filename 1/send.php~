<?php

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
                    'to'        => 'sampka@gmail.com',
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



?>
// after this goes the HTML form here is one box from the form as its 
// all the same no need to repeat it all I think.

<div class="form-group">

                        <div class="col-xs-10 col-xs-offset-1">
                            <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" style="text-transform:capitalize" value="<?php echo htmlspecialchars($_POST['name']); ?>" required>
                            <?php echo "<p class='text-danger'>$errName</p>";?>
                        </div>
