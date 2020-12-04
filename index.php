<?php
require __DIR__ . '/vendor/autoload.php';

$client = new \Google_Client();
$client->useApplicationDefaultCredentials();
// set the service account json file location manually
$client->setAuthConfig(__DIR__ . 'service_account.json');
$client->setApplicationName("GMB");
// set the scope to access GMBs
$client->setScopes([
    "https://www.googleapis.com/auth/business.manage"
]);