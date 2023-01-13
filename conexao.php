<?php
	$servidor = "localhost";
	$usuario = "";
	$senha = "";
	$dbname = "evento";
	
    try {
     
        	//Criar a conexao
	$conn = mysqli_connect( $servidor , $usuario , $senha , $dbname);
    echo "Conexão realizado com sucesso";
    }catch (PDOException $e){
        
        die("Não foi possível realiza conexão!". $e->getMessage());
    }
    


  