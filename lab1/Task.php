<?php
interface ITaskCreator
{
	public function changeStatus($status);
}
class Task implements ITaskCreator
{
	public $project;
	public $status;
	public $user;
	public $data;
	function __construct(Project $project, User $user, $status, $data)
	{
		$this->data = $data;
		$this->project = $project;
		$this->user = $user;
		$this->status = $status;
	}
	public function changeStatus($status)
	{
		$this->status = $status;
	}
}
