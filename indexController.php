<?php

require 'model/user/User.class.php';

$buffer = file_get_contents('http://vps330057.ovh.net/dolibarr/htdocs/api/index.php/user/2?api_key=2b4adc9e07eae50f88dd06b45ac98c3260044dda');
$xml_search = simplexml_load_string("<doc>$buffer</doc>");

$xml_user = json_decode(json_encode($xml_search),TRUE);



//$user = new User($xml_user);

require 'view/indexView.php';
