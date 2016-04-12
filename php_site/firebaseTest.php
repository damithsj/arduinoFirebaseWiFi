<?php
require_once 'firebaseLib.php';
// --- This is your Firebase URL
$url = 'https://myawesomearduino.firebaseio.com/';
// --- Use your token from Firebase here
$token = 'vG0wWuTWVn7O6mtWjhFPM9s5A03i1ukEurmeABiQ';
// --- Here is your parameter from the http GET
$arduino_data = $_GET['arduino_data'];
// --- $arduino_data_post = $_POST['name'];
// --- Set up your Firebase url structure here
$firebasePath = '/temperature/';
/// --- Making calls
$fb = new fireBase($url, $token);
$response = $fb->push($firebasePath, $arduino_data);
sleep(2);