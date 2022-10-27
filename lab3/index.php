<?php
require_once('SocialPoster.php');
$FacebookPoster = new FacebookPoster("login", "pass");
$FacebookPoster->post("qwewe");
$LinkedInPoster = new LinkedInPoster("login", "pass");
$LinkedInPoster->post("qweweqweweqwewe");
