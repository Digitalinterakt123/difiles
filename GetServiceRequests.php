<?php

$username='ramana@aptdc.in';
$password='Aptdc2018!';
$URL='https://ejaa.fa.em2.oraclecloud.com/crmRestApi/resources/11.13.18.05/serviceRequests?limit=200';

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL,$URL);
curl_setopt($curl, CURLOPT_TIMEOUT, 30); //timeout after 30 seconds
curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($curl, CURLOPT_USERPWD, "$username:$password");

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}