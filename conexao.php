<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "evento";
	
    try {
     
        	//Criar a conexao
	$conn = mysqli_connect( $servidor , $usuario , $senha , $dbname);
    }catch (PDOException $e){
        
        die("Não foi possível realiza conexão!". $e->getMessage());
    }
    


  