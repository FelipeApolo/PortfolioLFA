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
        <!-- Parte 1 - Verificação do login. -->
        <br><br><h1>Login</h1>
        <?php
    
        $emailUser = $_POST["email-user"];
        $senhaUser = $_POST["senha-user"];

        if (empty($emailUser) || empty($senhaUser)){
            echo "É necessario preencher e-mail e/ou Senha.";
        }
    
        else{
            
            $host = "localhost";
            $usuario = "root";
            $senha = "";
            $bancoDeDados = "progweb";

            $conexao = mysqli_connect($host, $usuario, $senha, $bancoDeDados) or 
                die ("Não foi possivel estabelecer conexão com o banco de dados");
                echo "Conexão com o banco de dados estabelecida com sucesso.<br><br>";

            $query = "SELECT Nome, Email FROM usuario WHERE Email = '$emailUser' AND Senha = '$senhaUser'";
            $resultado = mysqli_query ($conexao, $query);

            if($coluna = mysqli_fetch_array($resultado)){
                echo "Bem-vindo, ".$coluna["Nome"]."! <br><br>Login: ".$coluna["Email"]."<br><br>";
            }
            else{
                echo "Usuário ou Senha incoreta!";
            }
        }
        ?>

        <!-- Parte 3 - Analise dos status dos projetos dos clientes. -->

        <br><br><h1>Status de Projetos </h1>
        
        <div class="container">     
        <table class="table table-striped table-light">
            <thead >
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Projeto</th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col">Resposta</th>
                </tr>
            </thead>
            <tbody>                
                <?php    
                    $host = "localhost";
                    $usuario = "root";
                    $senha = "";
                    $bancoDeDados = "progweb";                     
                    
                    $conexao = mysqli_connect($host, $usuario, $senha, $bancoDeDados) or 
                        die ("Não foi possivel estabelecer conexão com o banco de dados");
                    

                    $queryProjeto = "SELECT * FROM projeto ORDER BY Status";
                    $resultadoProjeto = mysqli_query ($conexao, $queryProjeto);

                    while($colunaProjeto  = mysqli_fetch_array($resultadoProjeto)){
                        echo"<tr>";
                            echo "<td>".$colunaProjeto["Id"]."</td>";
                            echo "<td>".$colunaProjeto["Cliente"]."</td>";
                            echo "<td>".$colunaProjeto["Email"]."</td>";
                            echo "<td>".$colunaProjeto["Telefone"]."</td>";
                            echo "<td>".$colunaProjeto["Projeto"]."</td>";
                            echo "<td>".$colunaProjeto["Status"]."</td>";
                                
                                if($colunaProjeto["Status"] == 1) {
                                ?>
                                <!-- Ação 3 - Atualiza os status dos projetos dos clientes. -->
                                <form action = "update.php" method = "post">
                                    <input type="hidden" name= "id-projeto" value="<?php echo $colunaProjeto["Id"];?>">
                                    <td><button class="btn btn-secondary" type="submit" name= "opcao-projeto" value="2">Aceitar</button></td> 
                                    <td><button class="btn btn-secondary" type="submit" name= "opcao-projeto" value="3">Negar</button></td> 
                                </form>   
                                <?php
                                }
                                if($colunaProjeto["Status"] == 2) {
                                    ?>
                                    <form action = "update.php" method = "post">
                                        <input type="hidden" name= "id-projeto" value="<?php echo $colunaProjeto["Id"];?>">
                                        <td><button class="btn btn-secondary" type="submit" name= "opcao-projeto" value="4">Finalizar</button></td> 
                                        <td> </td> 
                                    </form>   
                                    <?php
                                }
                                
                                    ?>
                                <td><a href="mailto:<?=$colunaProjeto["Email"]?>?subject=Orcamento <?=$colunaProjeto["Status"]?>&body=Olá seu pedido foi analisado e seu status esta <?=$colunaProjeto["Status"]?>, agradecemos pela oportunidade. ">Enviar Email</a></td>;                              
                                    <?php
                        echo"</tr>";
                    }
                                    ?>                
            </tbody>
        </table>
        </div>  
                 
        <br><a href= "index.html"> Voltar</a>
    </div>
</body>
</html>

