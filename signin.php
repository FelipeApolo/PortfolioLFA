<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Signin Template · Bootstrap v5.1</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/signin.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

    <!-- Bootstrap core CSS -->
    <link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>
  
<body class="text-center">
    
    <main class="form-signin">
        <!-- Ação 1.2 - Ao clicar em entrar vai redirecionar o usuario para a tela do servidor . -->
        <form action = "login.php" method = "post">
            <img class="mb-4" src="img/img6.png" alt="" width="100" height="">
            <h1 class="h3 mb-3 fw-normal">Faça login</h1>

            <div class="form-floating">
                <input type="email" name="email-user" id="" required class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email </label>
            </div>
            <div class="form-floating">
                <input type="password" name="senha-user" id="" required class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Senha</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
                <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
        </form>
    </main>    
</body>

</html>