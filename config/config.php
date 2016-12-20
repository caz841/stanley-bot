<?php
// config.php

// only for debugging
//error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
//ini_set('display_errors', 1);


// set local timezone
date_default_timezone_set('America/New_York');

// General
$projectName="STANLEY”;
$projectEmail=“caz841@gmail.com”;
$projectPhoneNumber=“447880956858”;


// Twilio API credentials
$accountSid = "AC757d0eb0be0ec736ded764bbd2fcdb83”;
$authToken = "6e91dbbee42743185c33d202da983f20"; 
$twilioPhoneNumber = “441158242766";
$siteURL="YOUR SITE URL";


// Slack Webhook integration
$slackWebHookURL="https://hooks.slack.com/services/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";
$slackRoom = “#general”;
$slackBotName = "Stanley"; //THE NAME OF YOUR BOT
$slackBotIcon = ":robot_face:"; // THE PROFILE IMAGE OF YOUR BOT example :money_mouth_face: or :shit:


// Database Stuff
$dbHost = "eu-cdbr-west-01.cleardb.com";
$dbName = "heroku_4b454c1c4675090";
$dbUserName = "bcaf06892c8ef8";
$dbPassword = "b1f500ac";
$dbTable = “test”;

$dbConnection = mysqli_connect($dbHost, $dbUserName, $dbPassword,$dbName);
mysqli_error($dbConnection);


// Responses setup (when you need an automated response to users - i.e. when the team is away or the session is over)
$automatedResponseOver="n"; // options: y | n 
$automatedResponseTeamSleeping ="n"; // options: y | n 
$automatedResponseTimeStart = "Today 9pm";
$automatedResponseTimeEnd = "Tomorrow 10am";


// Create a API client instance
$http = new Services_Twilio_TinyHttp(
    'https://api.twilio.com',
    array('curlopts' => array(
        CURLOPT_SSL_VERIFYPEER => true,
        CURLOPT_SSL_VERIFYHOST => 2
    )));

$client = new Services_Twilio($accountSid, $authToken, "2010-04-01", $http);

?>