<?php 
use Requests\Requests;
require "Requests.php";
require "header.php";



$urlToken = "https://www3.mackenzie.br/mackteste/index.php?token";
$urlListar = "https://www3.mackenzie.br/mackteste/index.php?listar";

$request = new Requests();
$request->token($urlToken);
//print_r($token);
//$listar = $resquest->listar();
//print_r($listar);

?>
</body>
</html>