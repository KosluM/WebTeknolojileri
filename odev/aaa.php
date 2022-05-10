<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://free-nba.p.rapidapi.com/players?page=0&per_page=25",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: free-nba.p.rapidapi.com",
		"X-RapidAPI-Key: 9061e556a6msh2c574387159d5c6p12a437jsn5aa5975fce64"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}