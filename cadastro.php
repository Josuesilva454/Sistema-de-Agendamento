<?php
session_start();
include_once("conexao.php");


if (isset($_POST['submit'])){
      $nomeCompleto =  $_POST['nomeCompleto'];
      $email = $_POST['email'];
      $senha = $_POST['senha'];
      $telefone =  $_POST['telefone'];
      $data_nasc =  $_POST['data_nasc'];
      $cadastrar = "INSERT iNTO cadastro  (nomeCompleto,  email, senha,telefone, data_nasc )  
      values ( '$nomeCompleto',  '$email', '$senha','$telefone' ,  '$data_nasc' ) ";
      $cadastar_events = mysqli_query($conn, $cadastrar);
      $do_email_check = mysqli_num_rows($cadastar_events);
      if ($do_email_check >= 1) {

        echo '<h3>Este e-mail já está registrado, faça o login: <a href="cadastro.php" class="btn2">aqui.</a></h3>';
      }elseif ($senha == "" or $senha < 6) {
        echo "<h3>Escreva sua senha corretamente. Ela deve conter no minimo 6 caracteres.</h3>";
      }else {
        $query = "insert into usuario (nomeCompleto, email, senha,telefone, data_nasc) values ('$nomeCompleto', '$email', '$senha','$telefone', '$data_nasc')";
      $resultado = mysqli_query($conn, $query) or die (mysqli_error());
      
      if ($resultado) {
        setcookie("login",$email);
        header("Location: cadastro.php");
      }else {
        echo "Não foi registrado.";
      }
      }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='css/cadastro.css' rel='stylesheet' />
    <title>Document</title>
</head>
<body>


<a href="login.php">Voltar</a>
    <div class="box">
        <form action="cadastro.php" method="POST">
            <fieldset>
                <legend><b>Cadastro</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nomeCompleto" id="nomeCompleto" class="inputUser" required>
                    <label for="nomeCompleto" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
               <input type="text" class="inputUser" name="senha" id="senha"  required>
               <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br><br>
              
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nasc" id="data_nasc" required>
                <br><br>
              
                <input type="submit" name="submit" id="submit" value="Cadastrar">

            </fieldset>
        </form>
    </div>

    </form>

    </div>
</body>
</html>
