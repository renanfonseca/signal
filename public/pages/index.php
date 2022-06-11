<?php
session_start();
require(__DIR__ . '../../../src/func/allBasic.php');
require(__DIR__ . '/parts/head.php');
?>

<body class="page-login">

    <aside class="aside aside-in-up aside-left height-all">
        <div class="aside-item">
            <div class="logo logo-page-login">
                <img src="public/assets/imgs/brand.png" alt="">
            </div>
            <div class="text  msg-page-login-title">
                Tenha o mundo em suas mãos
            </div>
        </div>
        <div class="div-img">
            <img src="../public/assets/imgs/terra.png" alt="">
        </div>
        <div class="aside-item">
            <div>
                Company Name
            </div>
        </div>
    </aside>

    <main class="content container column">
        <div>
            <nav class=" menu container row flex-end">
                <div>
                    <a id="btn-cadastrar" class="btn btn-green" href="pages/cadastrar.html">Cadastrar</a>
                </div>
            </nav>


            <div class=" login-form container column">
                <h1>LOGIN</h1>
                <form action="" class="container column">

                    <input class="input-email" type="email" name="" id="emalInputLogin" placeholder="email">
                    <input class="input-password" type="password" name="" id="passwordInputLogin" placeholder="senha">

                    <input class="btn-submit btn-magic-mint " type="submit" value="Entrar">

                </form>
            </div>
        </div>
    </main>

    <script src="public/assets/scripts/ajax.js"></script>
</body>

</html>