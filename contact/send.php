<?php

require_once 'Mail.php';
ini_set('display_errors', 0);

$to = 'dan@valleyds.com';
$from = 'noreply@danjmendoza.com';
$subject = 'Contact form danjmendoza.com';
$message = 'Name: ' . $_POST['name'] .', Email: ' . $_POST['email'] .', Message: ' . $_POST['message'];

$headers = array(
	'From'			=> $from,
	'To'			=> $to,
	'Subject'		=> $subject,
	'MIME-Version' 	=> "1.0",
	'Content-type' 	=> "text/html; charset=iso-8859-1",
);
/*'options' => array(
		'hostname'=>'smtp.gmail.com',
		'port'=>'465',
		'username'=>'hello@vapormass.com',
		'password'=>'say42Hay',
		'encryption'=>'tls'
	),*/
$settings = array(
	'host'		=> 'ssl://smtp.gmail.com',
	'username'	=> 'dan@valleyds.com',
	'password'	=> '19oucHle',
	'auth'		=> true,
	'port'		=> '465',
);

$smtp = Mail::factory('smtp', $settings);

if ($_POST['subject'] == '')
{
	$mail = $smtp->send($to, $headers, $message);
}
else
{
	$email = true;
}

$error = PEAR::isError($mail);

if ($error)
{
	$value = array(
		'success'	=> false,
		'message'	=> 'Message Could Not Be Sent',
	);
} else {
	$value = array(
		'success'	=> true,
		'message'	=> 'Thanks!', 
	);
}
echo json_encode($value);