<?php
require_once('AmazonS3.php');
require_once('LocalStorage.php');
require_once('User.php');
$AmazonS3 = AmazonS3::getInstance();
$LocalStorage = LocalStorage::getInstance();
$user1 = new User($AmazonS3);
$user1->storage->connectToStorage("fsd");
LocalStorage::localStorageFunc();
