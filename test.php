<?php



function jwt_request($token, $post) {

   header('Content-Type: application/json');
   $ch = curl_init('https://www3.mackenzie.br/mackteste/index.php?salvar'); 
   $post = json_encode($post);
   $authorization = "Authorization: Basic ".$token;
   curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch, CURLOPT_POST, 1);
   curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
   curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
   $result = curl_exec($ch);
   curl_close($ch);
   return json_decode($result);
}

$token = "d4e2ad09-b1c3-4d70-9a9a-0e6149302486";

$post = array(
    'nome' => 'Alek Fumasa',
    'cpf' => '33333333333',
    'email' => 'email@emial.com',
    'mae' => 'Maria',
    'pai' => 'Jose',
    'cep' => '000555444',
    'cidade' => 'Sampa',
    'endereco' => 'Rua 3',
    'idade' => '30',
    'ativo' => '1',
);

$request = jwt_request($token,$post);

print_r($request);

?>