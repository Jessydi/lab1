<?php

require_once('User.php');
require_once('Project.php');
require_once('Task.php');
require_once('Logger.php');
$logger = new SendToEmail();
$dataLogger = new DataLogger();
$user1 = new User("someNasdame",$logger, $dataLogger);
$admin = new Admin($logger, $dataLogger);
$someProject = new Project();


