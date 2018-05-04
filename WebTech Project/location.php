<?php

echo "hello";

$ip = $_SERVER['REMOTE_ADDR'];
echo $ip;

require_once("userip/ip.codehelper.io.php");
require_once("userip/php_fast_cache.php");

$_ip = new ip_codehelper();

$real_client_ip_address = $_ip->getRealIP();
$visitor_location       = $_ip->getLocation($real_client_ip_address);

$guest_ip   = $visitor_location['IP'];
$guest_country = $visitor_location['CountryName'];
$guest_city  = $visitor_location['CityName'];
$guest_state = $visitor_location['RegionName'];

echo "IP Address: ". $guest_ip. "<br/>";
echo "Country: ". $guest_country. "<br/>";
echo "State: ". $guest_state. "<br/>";
echo "City: ". $guest_city. "<br/>";

$Country_Longitude 	= $visitor_location['CountryLongitude'];
$Country_Longitude 	= $visitor_location['CountryLongitude'];
/*
$user_ip = getenv('REMOTE_ADDR');
$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
$city = $geo["geoplugin_city"];
$region = $geo["geoplugin_regionName"];
$country = $geo["geoplugin_countryName"];
echo "City: ".$city."<br>";
echo "Region: ".$region."<br>";
echo "Country: ".$country."<br>";
*/

/*
geoplugin_request
geoplugin_status
geoplugin_credit
geoplugin_city
geoplugin_region
geoplugin_areaCode
geoplugin_dmaCode
geoplugin_countryCode
geoplugin_countryName
geoplugin_continentCode
geoplugin_latitude
geoplugin_longitude
geoplugin_regionCode
geoplugin_regionName
geoplugin_currencyCode
geoplugin_currencySymbol
geoplugin_currencySymbol_UTF8
geoplugin_currencyConverter
*/
?>