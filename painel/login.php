<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://kit.fontawesome.com/d913e226cd.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL ?>css/style.css">
    <title>Login do Painel</title>
</head>
<body>
    

    
    <div class="box-login">
        <?php
        
        if(isset($_POST['acao'])){
            $user = $_POST['user'];
            $password = $_POST['password'];
            $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.usuarios` WHERE user = ? AND password = ? ");
            $sql->execute(array($user,$password));
            if($sql->rowCount() == 1){
                $info = $sql->fetch();
                //Logamos
                $_SESSION['login'] = true;
                $_SESSION['user'] = $user;
                $_SESSION['password'] = $password;
                $_SESSION['cargo'] = $info['cargo'];
                $_SESSION['nome'] = $info['nome'];
                $_SESSION['img'] = $info['img'];
                header('Location: '.INCLUDE_PATH_PAINEL);
                die();
            }else{
                //Falhou
                echo '<div class="erro-box"><i class="fa-regular fa-circle-xmark"></i> Usuário ou senha incorretos! </div>';
            }
        }
        
        ?>
        <h2>Efetue o login:</h2>
        <form method="post">
            <input type="text" name="user" placeholder="Login..." required/>
            <input type="password" name="password" placeholder="Senha..." required/>
            <input type="submit" name="acao" value="Logar" required/>
            <a class="voltar" href="<?php echo INCLUDE_PATH?>">Voltar à página</a>
        </form>
    </div><!--box-login-->

</body>
</html>