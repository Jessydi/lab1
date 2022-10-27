<?php
class Storage
{
	private static $instances = [];
	private function __construct()
	{
	}
	private function
	__clone()
	{
	}
	public  function __wakeup()
	{
		throw new \Exception("Cannot unserialize a singleton");
	}
	public static function getInstance(): Storage
	{
		$cls = static::class;
		if (!isset(self::$instances[$cls])) {
			self::$instances[$cls] = new static();
		}
		return self::$instances[$cls];
	}
	public function connectToStorage($key)
	{
		echo "connected with ", $key;
	}
}
