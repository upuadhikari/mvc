<?php
//Create the Transport
class mailer{
	protected $mailer;
	protected $config;
	public function_construct()
	{
   $transport = (new /Swift_SmtpTransport($this->config->mailer_host,$this->config->mailer_host,$this->config->mailer_host,$this->config->mailer_host))
  ->setUsername('your username')
  ->setPassword('your password')
;

// Create the Mailer using your created Transport
$mailer = new /Swift_Mailer($transport);
}

// Create a message
$message = (new /Swift_Message('Wonderful Subject'))
  ->setFrom(['john@doe.com' => 'John Doe'])
  ->setTo(['receiver@domain.org', 'other@domain.org' => 'A name'])
  ->setBody('Here is the message itself')
  ;

// Send the message
$result = $mailer->send($message);