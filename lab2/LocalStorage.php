<?php
require_once('Storage.php');
class LocalStorage extends Storage
{
	public static function localStorageFunc()
	{
		echo "something from local storage";
	}
}
