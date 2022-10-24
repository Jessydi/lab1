<?php
class User
{
	private $storage;
	public function __construct(Storage $storage)
	{
		$this->storage = $storage;
	}
}
