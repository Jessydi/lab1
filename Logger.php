<?php
interface ILogger
{
	public function log($message);
}

class SendToEmail implements ILogger
{
	private function sendToEmail($message)
	{
		echo "$message", "\n";
	}
	public function log($message)
	{
		$this->sendToEmail($message);
	}
}
class SendToMessenger implements ILogger
{
	private function sendToMessenger($message)
	{
		echo "$message", "\n";
	}
	public function log($message)
	{
		$this->sendToMessenger($message);
	}
}

class DataLogger implements ILogger
{
	private function LogData($message)
	{
		echo "$message", "\n";
	}
	public function log($message)
	{
		$this->LogData($message);
	}
}
