<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL ?>css/style.css">
    <title>Login do Painel</title>
</head>
<body>
    

    
    <div class="box-login">
        <h2>Efetue o login:</h2>
        <form method="post">
            <input type="text" name="user" placeholder="Login..." required/>
            <input type="password" name="password" placeholder="Senha..." required/>
            <input type="submit" name="acao" value="Logar" required/>
            <a href="<?php echo INCLUDE_PATH?>">Voltar à página</a>
        </form>
    </div><!--box-login-->

</body>
</html>