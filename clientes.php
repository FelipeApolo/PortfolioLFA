<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" href="img/logo.png">
    <title>Portifólio Luiz Felipe Apolônio</title>    
</head>
<body>
    <div class="container">
        <!-- Parte 2 - Inserir dados de clientes no banco de dados. -->
        <br><h1>Proposta de Projeto</h1>
            
        <?php

            $nomeCliente = $_POST["nome-cliente"];
            $emailCliente = $_POST["email-cliente"];
            $foneCliente = $_POST["fone-cliente"];
            $projetoCliente = $_POST["projeto-cliente"];            

            if (empty($nomeCliente) || empty($emailCliente) || empty($foneCliente) || empty($projetoCliente)){
                echo "Existem dados obrigatórios que não foram preenchido.";
            }
    
            else{
            
            $host = "localhost";
            $usuario = "root";
            $senha = "";
            $bancoDeDados = "progweb"; 
            
            $conexao = mysqli_connect($host, $usuario, $senha, $bancoDeDados) or 
                die ("Não foi possivel estabelecer conexão com o banco de dados");
                

            $query = "INSERT INTO projeto VALUES ('', '$nomeCliente', '$emailCliente', '$foneCliente', '$projetoCliente', '1')";
            $resultado = mysqli_query ($conexao, $query) or die ("Não foi possivel enviar informações");
            echo $nomeCliente. ", obrigado pelo contato!<br>";
            echo "Suas informações foram enviadas com sucesso, aguarde nosso retorno em breve!";
            }
            ?>
            <br><br><br><a href= "index.html"> Voltar</a>       
        
        
    </div>
</body>

</html>