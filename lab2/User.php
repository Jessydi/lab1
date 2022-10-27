<?php
class User
{
	public $storage;
	public function __construct(Storage $storage)
	{
		$this->storage = $storage;
	}
}
