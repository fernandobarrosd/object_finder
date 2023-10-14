<?php

function update($table, $columns, $id) {
    require_once('conectar.php');
    require_once('./verificar_sessao.php');
    
    $query = "UPDATE $table ";


    foreach ($columns as $chave) {
        $value = $columns[$chave];

        if (!empty($value)) {
            $query += "SET $chave = '$value'";
        }
    }

    $query = rtrim($query, ", ");
    $query += "WHERE codobj = $id";

    mysqli_query($conexao, $query) or die(mysql_error());
} 
?>