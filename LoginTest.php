<?php

if(isset($_POST['submit'])&& !empty($_POST['email']) && !empty($_POST['senha'])){
   // Acessando
   
   include_once("conexao.php");
   $email = $_POST['email'];
   $senha = $_POST['senha'];

  
   $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
   $result = $conn->query($sql);
    
 //print_r($sql);
 // print_r($result);

 
}
   

  
    
   //verificando numeros de linha
   


   






?>