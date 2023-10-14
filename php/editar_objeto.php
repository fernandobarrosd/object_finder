<?php
require_once('conectar.php');
require_once('./verificar_sessao.php');
require_once('./utils.php');



$data = [
    "codobj" => $_POST["objeto_id"],
    "nomeobj" => $_POST["objeto_nome"],
    "descobj" => $_POST["objeto_descricao"],
    "lugar" => $_POST["objeto_lugar"],
    "data_encontrado" => $_POST["objeto_data_encontrado"],
    "data_cadastro" => $_POST["objeto_data_cadastro"],
    "devolvido" => $_POST["objeto_devolvido"]
];

update("objetos", $data, $data["codobj"]);


/* $query = "UPDATE objetos ";


foreach ($data as $chave) {
    $value = $data[$chave];

    if (!empty($value)) {
        $query += "SET $chave = '$value'";
    }
}

$query = rtrim($query, ", ");
$query += "WHERE codobj = $objeto_id"; */


?>