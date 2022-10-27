<?php
require_once('ISocial.php');
abstract class SocialNetworkPoster
{
	public $social;
	abstract public function socialCreate(): ISocial;
	public function post($content)
	{
		$this->social = $this->socialCreate();
		$this->social->logIn();
		$this->social->createPost($content);
	}
}
class FacebookPoster extends SocialNetworkPoster
{
	private $login, $password;

	public function __construct(string $login, string $password)
	{
		$this->login = $login;
		$this->password = $password;
	}

	public function socialCreate(): ISocial
	{
		return new FacebookConnector($this->login, $this->password);
	}
}

class LinkedInPoster extends SocialNetworkPoster
{
	private $email, $password;

	public function __construct(string $email, string $password)
	{
		$this->email = $email;
		$this->password = $password;
	}

	public function socialCreate(): ISocial
	{
		return new LinkedInConnector($this->email, $this->password);
	}
}
