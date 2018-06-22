<?php

$bdServidor = 'localhost';
$bdUsuario = 'root';
$bdSenha = '';
$bdBanco = 'projeto-mae';

$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

if (mysqli_connect_errno($conexao)) {
    echo "Problemas para conectar no banco. Verifique os dados!";
    die();
}

function inserir_aula($conexao, $inserir){
    $sqlGravar = "
    INSERT INTO aula (texto, data, bimestre)
    VALUES(
        '{$inserir['texto']}',
        '{$inserir['data']}',
        '{$inserir['bimestre']}'
    )
    ";
    mysqli_query($conexao, $sqlGravar);
}
?>