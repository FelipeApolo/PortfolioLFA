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
        <!-- Parte 1 - Atualiza os status dos projetos dos clientes.. -->
        <br><br><h1>Atualização dos Projetos</h1>
        
        <?php
            $idProjeto = $_POST["id-projeto"];
            $statusProjeto = $_POST["opcao-projeto"];
            
            if (empty($idProjeto) || empty($statusProjeto)){
                echo "Algum campo está fazio!<br>";
            }        
            else{
        
                $host = "localhost";
                $usuario = "root";
                $senha = "";
                $bancoDeDados = "progweb";

                $conexao = mysqli_connect($host, $usuario, $senha, $bancoDeDados) or 
                    die ("Não foi possivel estabelecer conexão com o banco de dados");
                   

                $query = "UPDATE projeto SET Status='$statusProjeto' WHERE Id='$idProjeto'";
                $resultado = mysqli_query ($conexao, $query) or die ("ERRO - Status não atualizado!");
                echo "Status atualizado com sucesso!";
            }
        ?>     

        
        <br><a href= "index.html"> Voltar</a>
    </div>
</body>
</html>

