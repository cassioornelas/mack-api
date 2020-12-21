<!DOCTYPE html>
<html>
<head>
<title>Mackenzie API</title>
</head>
<body>

<h1>Mackenzie API</h1>
<p>Salvar</p>
<?php

$url = "https://www3.mackenzie.br/mackteste/index.php?salvar";

header('Content-Type: application/json');
$token = "d4e2ad09-b1c3-4d70-9a9a-0e6149302486";
$authorization = "Authorization: Bearer d4e2ad09-b1c3-4d70-9a9a-0e6149302486";
curl_setopt($url, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));


$data_array = array(
    'nome' => 'Fulano',
    '1' => 'Youtuber',
    'cpf' => '33333333333',
    '2' => '33333333333',
    'email' => 'email@emial.com',
    '3' => 'email@emial.com',
    'mae' => 'Maria',
    '4' => 'Maria',
    'pai' => 'Jose',
    '5' => 'Jose',
    'cep' => '000555444',
    '6' => '000555444',
    'cidade' => 'Sampa',
    '7' => 'Sampa',
    'endereco' => 'Rua 3',
    '8' => 'Rua 3',
    'idade' => '30',
    '9' => '30',
    'ativo' => '1',
    '10' => '1'
);

$data = http_build_query($data_array);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$resp = curl_exec($ch);

if($e = curl_error($ch)) {
    echo $e;
} else {
    $decoded = json_decode($resp);
    foreach($decoded as $key => $val) {
        echo $key . ': ' . $val . '<br>';
    }
}

curl_close($ch);


?>
</body>
</html>