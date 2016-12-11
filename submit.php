<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://104.236.60.235:3000/signup");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 200);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($_POST));
$data = curl_exec($ch);
curl_close($ch);
header("Location: /confirm");
?>
