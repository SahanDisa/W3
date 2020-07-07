<?php
class Mail {
    // function __construct() {
	// 	parent::__construct();
	// }
	function send_mail(){
		if(isset($_POST['send']))
        {
		$to_email=$_POST['to'];
		$subject=$_POST['subject'];
		$message=$_POST['message'];
			
		$to = $to_email;
        $subject = $subject;
        $txt = $message;
        $headers = "From: tsahan998@gmail.com" . "\r\n" .
        "CC: sample@example.com";
		mail($to,$subject,$txt,$headers);
		}
        $this->view->render('/mailView');
	}
}
?>