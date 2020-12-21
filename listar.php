<!DOCTYPE html>
<html>
<head>
<title>Mackenzie API</title>
</head>
<body>

<h1>Mackenzie API</h1>
<p>Listar</p>
<?php
$ch = curl_init();

$url = "https://www3.mackenzie.br/mackteste/index.php?listar";

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$resp = curl_exec($ch);

if($e = curl_error($ch)) {
    echo $e;
} else {
    $decoded = json_decode($resp, true);
    //print_r($decoded);
    foreach($decoded as $x => $val) {
        echo "$x = $val<br>";
      }
}

curl_close($ch);
?>
</body>
</html>