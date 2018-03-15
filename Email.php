<?php
// Email Class
class Email {
	// Properties for Email class
	private $sendersAddress="";
	private $sendToAddress="";
	private $subjectLine="";
	private $message="";
	// Constructor
	public function __construct() 
	{
	
	}
	// Setters
	public function setSender($inSender) 
	{
		$this->sendersAddress = $inSender;
	} 
	
	public function setSendTo($inSendTo)
	{
		$this->sendToAddress = $inSendTo;
	}
	
	public function setSubject($inSubject)
	{
		$this->subjectLine = $inSubject;
	}
	
	public function setMessage($inMessage)
	{
		$inMessage = htmlentities($inMessage);
		$inMessage = wordwrap($inMessage,70,"\n");
		$this->message = $inMessage;
	}
	// Getters
	public function getSender()
	{
		return $this->sendersAddress;
	}
	
	public function getSendTo()
	{
		return $this->sendToAddress;
	}
	
	public function getSubject()
	{
		return $this->subjectLine;
	}
	
	public function getMessage()
	{
		return $this->message;
	}
	// Method
	public function sendEmail()
	{
		$headers = "From: $this->sendersAddress" . "\r\n";
		return mail($this->sendToAddress,$this->subjectLine,$this->message,$headers);
	}
}
?>