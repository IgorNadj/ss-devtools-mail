<?php 


class CaptureMailer extends Mailer {
	
	public function sendHTML($to, $from, $subject, $htmlContent, $attachedFiles = array(), $customHeaders = array(), $plainContent = ''){
		$email = new StoredEmail();
		$email->To = $to;
		$email->From = $from;
		$email->Subject = $subject;
		$email->Body = $htmlContent;
		$email->write();
	}
	
	public function sendPlain($to, $from, $subject, $plainContent, $attachedFiles = array(), $customHeaders = array()) {
		$this->sendHTML($to, $from, $subject, $plainContent, $attachedFiles, $customHeaders, null);
	}	
	
}