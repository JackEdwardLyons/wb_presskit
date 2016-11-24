<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];

$mail_to = 'wildblendco@gmail.com';
$subject = 'Message from a Media Kit viewer'.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
      (function thankYou() {
        var thankyouMessage = "<h2 class='thanks'>Thank You! Your message has been sent!</h2>";
        $('.contact-us-form').append(thankyouMessage);
        $(".thanks").fadeOut(2000);
      })();
      
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		var sorryMessage = "<h2 class='sorry'>Woops! Something went wrong, please try again.</h2>";
        $('.contact-us-form').append(sorryMessage);
        $(".sorry").fadeOut(2000);
	</script>
<?php
}
?>