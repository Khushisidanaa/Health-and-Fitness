<?php

//start session on web page
session_start();
//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('665909276814-72mis2anih9it4jqso9f7g6n9sg3geh5.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost:8080/dashboard/MWA_Proj/login.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');


?>  




