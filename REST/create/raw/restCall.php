<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
$url='http://localhost/restRaw/c';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "name=php");
$result = curl_exec($ch);


echo '<pre>';
curl_close($ch);
echo $result;

?>
</body>
</html>