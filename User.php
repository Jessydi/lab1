<?php
interface IUser
{
	public function changeTaskStatus(ITaskCreator $task, $newTaskStatus);
	public function addNewUserToProjectIUser(IUser $user, Project $project);
}

class User implements IUser
{
	public $name;
	private $dataLogger;
	private $logger;
	public $tasks = [];
	function __construct($name, ILogger $logger, DataLogger $dataLogger)
	{
		$this->dataLogger = $dataLogger;
		$this->logger = $logger;
		$this->name = $name;
	}
	private function sendNotification($message)
	{
		$this->logger->log($message);
	}
	private function logData($message)
	{
		$this->dataLogger->log($message);
	}
	public function changeTaskStatus(ITaskCreator $task, $newTaskStatus)
	{
		$this->logData(["dateTime" => "data", "user" => $this]);
		$task->changeStatus($newTaskStatus);
	}
	public function addNewUserToProjectIUser(IUser $user, Project $project)
	{
		$this->sendNotification("Notification", $user);
		$project->addUser($user);
	}
}
class Admin implements IUser
{
	private $logger;
	private $dataLogger;
	function __construct(ILogger $logger, DataLogger $dataLogger)
	{
		$this->logger = $logger;
		$this->dataLogger = $dataLogger;
	}
	private function sendNotification($message)
	{
		$this->logger->log($message);
	}
	private function logData($message)
	{
		$this->dataLogger->log($message);
	}
	public function createTask(Project $project, IUser $user, $status, $taskData)
	{
		$task = new Task($project, $user, $status, $taskData);
		$project->addTask($task);
		$project->addUser($user);
		$this->sendNotification("Notification", $user);
		return $task;
	}
	public function changeTaskStatus(ITaskCreator $task, $newTaskStatus)
	{
		$this->logData(["dateTime" => "data", "user" => $this]);
		$task->changeStatus($newTaskStatus);
	}
	public function addNewUserToProjectIUser(IUser $user, Project $project)
	{
		$this->sendNotification("Notification", $user);
		$project->addUser($user);
	}
}
