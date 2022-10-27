<?php
interface ISocial
{
	public function logIn(): void;

	public function createPost($content): void;
}
class FacebookConnector implements ISocial
{
	private $login, $password;

	public function __construct(string $login, string $password)
	{
		$this->login = $login;
		$this->password = $password;
	}

	public function logIn(): void
	{
		echo " login $this->login \n password $this->password\n";
	}


	public function createPost($content): void
	{
		echo "create a post in Facebook:\n $content \n";
	}
}


class LinkedInConnector implements ISocial
{
	private $login, $password;

	public function __construct(string $login, string $password)
	{
		$this->login = $login;
		$this->password = $password;
	}

	public function logIn(): void
	{
		echo " login $this->login \n password $this->password\n";
	}


	public function createPost($content): void
	{
		echo "create a post in LinkedIn:\n $content \n";
	}
}
