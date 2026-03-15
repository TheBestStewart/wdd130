<?php
if(isset($_POST['email'])) {
    $email_to = "stewartsmithvd5@gmail.com";
    $email_subject = "Contact from WDD 130 Site";
    $name = $_POST['name'];
    $email_from = $_POST['email'];
    $message = $_POST['message'];

    function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"",$string);
    }

    $email_message = "Form details below.\n\n";
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";

// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers);
?>
  <!-- include your own success html here -->

  <div class="feedback">Form submitted.</div>
  <?php
}
?>
