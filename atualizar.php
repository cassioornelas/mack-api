<!DOCTYPE html>
<html>
<head>
<title>Mackenzie API</title>
</head>
<body>

<h1>Mackenzie API</h1>
<p>Atualizar</p>
<?php

$url = "https://www3.mackenzie.br/mackteste/index.php?atualizar";

$data_array = array(
    'id' => '0',
    'nome' => 'Alek Fumasa',
    'cpf' => '33333333333',
    'email' => 'email@emial.com',
    'mae' => 'Maria',
    'pai' => 'Jose',
    'cep' => '000555444',
    'cidade' => 'Sampa',
    'endereco' => 'Rua 3',
    'idade' => '30',
    'ativo' => '0',
);

$data = http_build_query($data_array);

$header = array(
    'Content-Type: application/json',
    'Authorization: Basic d4e2ad09-b1c3-4d70-9a9a-0e6149302486'
);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

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