<?php
class Project
{
	public $users = [];
	public $tasks = [];
	public function addTask(ITaskCreator $newTask)
	{
		$this->tasks[] = $newTask;
	}
	public function addUser(IUser $newUser)
	{
		$this->users[] = $newUser;
	}
}
