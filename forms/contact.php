
<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  $receiving_email_address = 'sepaivaluna@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];
  

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();

  // $name = $_POST['name'];
  // $email = $_POST['email'];
  // $contactSubject = $_POST['subject'];
  // $message = $_POST['message'];

  // $from = 'From: codingsergio.com/contact-form'; // Edit to suit your needs 
  // $to = 'sepaivaluna@gmail.com'; // Edit to suit the email on which you wish to recieve the form details
  // $subject = 'Contact form submission'; 

  // $body = "From: $name\n E-Mail: $email\n Subject: $contactSubject\n Message:\n $message";

  // if ($_POST['submit']) {
  //     if (mail ($to, $subject, $body, $from)) { 
  //         echo '<p>Your message has been sent!</p>';
  //     } else { 
  //         echo '<p>Something went wrong, go back and try again!</p>'; 
  //     }
  // }


?>
