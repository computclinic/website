<?php
// multiple recipients
$to  = 'somashek@gmail.com' . ', '; // note the comma
$to .= 'somashekarg@softtrends.com';

// subject
$subject = 'Birthday Reminders for August';

// message
$message = '
  <p>Here are the birthdays upcoming in August!</p>
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

// Additional headers
$headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$headers .= 'From: Birthday Reminder <birthday@example.com>' . "\r\n";


// Mail it
mail($to, $subject, $message, $headers);

if (@mail($to, $email, $message, $headers))
    {
        echo 'The message has been sent.';
    }
	else{
        echo 'failed';
    }
?>