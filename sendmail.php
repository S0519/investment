<?php 
  if(isset($_POST['submit-contact'])){ 
   $name=$_POST['name'];  
   $email=$_POST['email']; 
   $phone=$_POST['phone'];
   $message=$_POST['message'];  
    $to      =  'xyz@gmail.com';
    $subject =  'Contact us form filled by user on investing.com/';
    $message =  'Message from : '."\r\n".
                'Name :  '.$name."\r\n". 
                'Email :  '.$email."\r\n". 
                'Phone :  '.$phone."\r\n".
                'Message : '.$message;
    $headers =  'From: webmaster@example.com'       . "\r\n" .
                'Reply-To: webmaster@example.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

   if(mail($to, $subject, $message, $headers)){ 
         //Start the session if already not started.
    
    echo "<script>  
        alert('We’ve received your message, and one of our sales representatives will be in touch with you shortly');
        window.location.href='contact.html';
          </script>"; 
      }
   else{
       echo "SMTP error";
      }
   }
 
?>
