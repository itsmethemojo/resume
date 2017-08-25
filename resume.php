<?php
// load html source from github
$url = 'https://raw.githubusercontent.com/itsmethemojo/resume/master/resume.html';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$data = curl_exec($ch);
curl_close($ch);

// set the cachetime to 30 days
header('Cache-Control: max-age=2592000');

// prevent browser ressource blocking for static includes via http
echo str_replace('http://', 'https://', $data);
