<?php
function getDataWeatherByCity($nameCity)
{
	// call api o day
	// api : http://api.openweathermap.org/data/2.5/forecast?q=HaNoi&appid=073f342f34bacc8898356a523fa5b4f8&units=metric&lang=vi&fbclid=IwAR21QHSHW8WA-nYAYbRsHOQSdrA7RwyeVD_hoSeYDdXmO2jCk1oXtarZ3ps
	$api = "http://api.openweathermap.org/data/2.5/forecast?q={$nameCity}&appid=073f342f34bacc8898356a523fa5b4f8&units=metric&lang=vi&fbclid=IwAR21QHSHW8WA-nYAYbRsHOQSdrA7RwyeVD_hoSeYDdXmO2jCk1oXtarZ3ps";
	// khoi tao curl
	$ch = curl_init();
	// cho phep truy cap vap url - api
	curl_setopt($ch, CURLOPT_URL, $api);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	
	$respone = curl_exec($ch);
	curl_close($ch);
	// convert ve mang php
	$respone = json_decode($respone, true);
	return $respone;
}