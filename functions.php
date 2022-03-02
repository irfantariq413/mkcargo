<?php
define("EMAIL_TO", "info@mkcargo.co.uk");
define("EMAIL_FROM", "info@mkcargo.co.uk");

function send_book_email(){
	
	extract($_POST);
	
	$info['subject'] ='Some one contact us';
	$info['to'] =EMAIL_TO;
	$message='';
	if(isset($full_name))
	$message .= '<p><strong>Name:</strong> '.$full_name.'</p>';
	 
	 if(isset($phone))
	$message .= '<p><strong>Phone:</strong> '.$phone.'</p>';
	
	if(isset($address))
	$message .= '<p><strong>Address:</strong> '.$address.'</p>';
	
	if(isset($time))
	$message .= '<p><strong>Time:</strong> '.$time.'</p>';
	
	if(isset($destination))
	$message .= '<p><strong>Destination:</strong> '.$destination.'</p>';
	
	$info['message'] = $message;
	

	
		return do_send_email($info);
	
	
	
	
}



function send_quote_email(){
	
	
	extract($_POST);
	
	$info['subject'] ='Some one contact us';
	$info['to'] =EMAIL_TO;
	$message='';
	
	if(isset($full_name))
	$message .= '<p><strong>Name:</strong> '.$full_name.'</p>';
	
	if(isset($subject))
	$message .= '<p><strong>Address:</strong> '.$subject.'</p>';
	
	if(isset($email))
	$message .= '<p><strong>Email:</strong> '.$email.'</p>';
	 
	 if(isset($phone))
	$message .= '<p><strong>Phone:</strong> '.$phone.'</p>';
	
	
	if(isset($service))
	$message .= '<p><strong>Service:</strong> '.$service.'</p>';
	
	
	if(isset($message_txt))
	$message .= '<p><strong>Message:</strong> '.$message_txt.'</p>';
	
	$info['message'] = $message;
	
	
	
	
	
	
		return do_send_email($info);
	
}

function do_send_email($info){
	extract($info);
	
	if(!isset($from))
	$from = EMAIL_FROM;
	 
	 
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	 
	 
	$headers .= 'From: '.$from."\r\n".
		'Reply-To: '.$from."\r\n" .
		'X-Mailer: PHP/' . phpversion();
		
	
	 
	if(mail($to, $subject, $message, $headers)){
		return 1;
	} else{
	   return 0;
	}	
}


function print_data($str=''){
	echo "<pre>"; print_r($str); echo "</pre>"; 
}