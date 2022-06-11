<?php
session_start();
require('./public/pages/parts/head.php');
require('./src/basicSetup/database/connection.php');

if (($_SESSION['login'] == 'true')) {
    header("location: http://localhost/signal/public/pages/home.php");
}
?>
<!-- <a href="./public/pages/home.php">Home</a> -->

<body class="page-login">

    <aside class="aside aside-in-up aside-left height-all">
        <div class="aside-item">
            <!-- <div class="logo logo-page-login">
                <img src="public/assets/imgs/brand.png" alt="">
            </div> -->
            <div class="text  msg-page-login-title">
                Tenha o controle da sua comunicação na palma da mão
            </div>
        </div>
        <!-- <div class="div-img">
            <img src="../public/assets/imgs/terra.png" alt="">
        </div> -->
        <div class="aside-item">
            <div class="text">
            Signal Soluções em Avios e Eventos para Emrpessas. © Copyright 2022
            </div>
        </div>
    </aside>

    <main class="content container-login" style="justify-content: center;">
        <div>
            <!-- <nav class=" menu container row flex-end">
                <div>
                    <a id="btn-cadastrar" class="btn btn-green" href="pages/cadastrar.html">Cadastrar</a>
                </div>
            </nav> -->


            <div class=" login-form container-login column">
                <h1>LOGIN</h1>
                <form action="/signal/public/pages/forms/loginForm.php" method="POST" class="container-login column">

                    <input class="input-email" type="email" name="emailLogin" id="emalInputLogin" placeholder="email">
                    <input class="input-password" type="password" name="passLogin" id="passwordInputLogin" placeholder="senha">

                    <input class="btn-submit btn-blue " type="submit" value="Entrar">

                </form>
            </div>
        </div>
    </main>

    <!-- <script src="public/assets/scripts/ajax.js"></script> -->
</body>

</html>