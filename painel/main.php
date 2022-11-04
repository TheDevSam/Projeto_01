<?php

    if(isset($_GET['loggout'])){
        Painel::loggout();
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://kit.fontawesome.com/d913e226cd.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL ?>css/style.css">
    <title>Painel de Controle</title>
</head>
<body>

<div class="menu">
    <div class="menu-wraper">
    <div class="box-usuario">
        <?php

            if($_SESSION['img'] == ''){

        ?>
        <div class="avatar-usuario">
            <i class="fa-solid fa-user"></i>
        </div>
        <?php }else{ ?>
            
        <div class="imagem-usuario">
            <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $_SESSION['img'];?>" />
        </div>

        <?php } ?>
            
        <div class="nome-usuario">
            <p><?php echo $_SESSION['nome'];?></p>
            <p><?php echo pegaCargo($_SESSION['cargo']); ?></p>
        </div>

        <div class="itens-menu">
            <h2>Cadastro</h2>
            <a href="">Cadastrar depoimento</a>
            <a href="">Cadastrar serviço</a>
            <a href="">Cadastrar slide</a>
        </div>

        <div class="itens-menu">
            <h2>Gestão</h2>
            <a href="">Listar depoimento</a>
            <a href="">Listar serviço</a>
        </div>
        
        
        
    </div>
    </div>
</div>
    <header>
        <div class="center">
            <div class="menu-btn">
                <i class="fa-solid fa-bars"></i>
            </div>
            <div class="loggout">
                <a href="<?php echo INCLUDE_PATH_PAINEL?>?loggout"><i class="fa-solid fa-right-from-bracket"></i><span> Sair </span></a>
            </div>
        </div>

        <div class="clear"></div>

    </header>


<div class="content">

    <div class="box-content left w100">

            
            <div class="painel"><i class="fa-solid fa-house"></i><p>Painel de Controle</p></div>

            <div class="box-caixas-informacoes">

                <div class="box-informacoes">
                    <p>Usuários Online</p>
                    <span>10</span>
                </div>
                <div class="box-informacoes">
                    <p>Usuários Online</p>
                    <span>10</span>
                </div>
                <div class="box-informacoes">
                    <p>Usuários Online</p>
                    <span>10</span>
                </div>
                

            </div>
    </div>

    <!-- <div class="box-content left w100">
        
    </div>

    <div class="box-content left w50">
        
    </div>

    <div class="box-content right w50">
        
    </div> -->

    <div class="clear">

    </div>

</div>

    <script src="<?php echo INCLUDE_PATH?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH_PAINEL?>js/main.js"></script>
</body>
</html>