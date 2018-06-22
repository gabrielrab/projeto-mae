<?php

include_once("banco.php");
    

if(isset($_POST['texto']) && $_POST['texto'] != ''){
    $inserir = array();
    
    $inserir['texto'] = $_POST['texto'];
    $inserir['data'] = $_POST['data'];
    $inserir['bimestre'] = $_POST['bimestre'];
    
    inserir_aula($conexao, $inserir);
    
} else{
    echo '<div class="erro"><h3 class="branco">Algo deu errado !</h3></div>';
}
?>