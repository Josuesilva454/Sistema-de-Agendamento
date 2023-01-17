<?php


$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);


if(empty($dados['email'])){
    $retorna = ['erro'=> true, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo usuário!</div>"];
}elseif(empty($dados['senha'])){
    $retorna = ['erro'=> true, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo senha!</div>"];
}

echo json_encode($retorna);