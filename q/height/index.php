<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, 'http://explorer.dogemone.online/domain/getinfo');
$result = curl_exec($ch);
$obj = json_decode($result, TRUE);
//print_r($obj);
curl_close($ch);
print_r($obj['height']);
?>
