<?php
session_start();
require(__DIR__ . '../../../src/func/allBasic.php');
require(__DIR__ . '/parts/head.php');


if (!($_SESSION['login'] == 'true')) {
    header("location: http://localhost/signal/index.php");
}
?>

<body>

    <header id="" class="navbarContainer">
        <h1>Signal</h1>
        <div class="navbarSearch">
            <div class="navbarSearch_2">
                <div class="navbarSearch_3">
                    <div class="navbarSearch_4"><svg width="26" height="26" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.5 10.5C2.5 14.9183 6.08172 18.5 10.5 18.5C14.9183 18.5 18.5 14.9183 18.5 10.5C18.5 6.08172 14.9183 2.5 10.5 2.5C6.08172 2.5 2.5 6.08172 2.5 10.5ZM16.7222 10.5C16.7222 13.9364 13.9364 16.7222 10.5 16.7222C7.06356 16.7222 4.27778 13.9364 4.27778 10.5C4.27778 7.06356 7.06356 4.27778 10.5 4.27778C13.9364 4.27778 16.7222 7.06356 16.7222 10.5Z"></path>
                            <path d="M18.7423 16.9039L21.0961 19.1462C21.6346 19.6846 21.6346 20.5577 21.0961 21.0961C20.5577 21.6346 19.6846 21.6346 19.1462 21.0961L16.9039 18.7423C16.3654 18.2038 16.3654 17.4423 16.9039 16.9039C17.4423 16.3654 18.2038 16.3654 18.7423 16.9039Z"></path>
                        </svg><input class="inputSearch" type="text" name="search" autocomplete="off" value="" placeholder="Pesquisar avisos, eventos, cursos..." class="sc-1bpf6xn-3 fyaJKz"></div>
                </div>
            </div>
        </div>
        <div class="navbarNewNotice ">
            <div class="">
                <a href="./cadastrarAviso.php" class="btn-novoAviso btn btn-primary" style="color:white">Novo Aviso</a>
            </div>
        </div>
        <div class="navbarExit " style="position: fixed; right:15;">
            <div class="">
                <a href="./actions/exit.php" class="btn-novoAviso btn btn-danger" style="color:white">Sair</a>
            </div>
        </div>

    </header>


    <?php $data = todosOsAvisos(); ?>

    <main class="quadroContainer">
        <div class="quadro">
            <?php todosOsAvisosPaginacao(); ?>
            <!-- <?php foreach ($data as $row) : ?>
                <div class="customGridStyle"><a class="EventCardstyle__Link" data-bannerid="1539526" data-name="<?php echo $row['titulo']; ?>" data-position="2" data-creative=".search.by_term-full.type-online.response_type-event-card.start-22h.sort-location-score" id="1539526" href="" target="_blank" title="<?php echo $row['titulo']; ?>" aria-label="Evento Online" data-gtm-vis-first-on-screen-2439357_246="1078" data-gtm-vis-total-visible-time-2439357_246="100" data-gtm-vis-has-fired-2439357_246="1">
                        <div class="EventCardstyle__Container">
                            <div data-testid="eventCard" class="EventCardstyle__Container_2">
                                <div class="EventCardstyle__ImageContainer">
                                    <div class=""><img class="EventCardstyle__ImageImg" src="../assets/img/eventoExemplo.jpg" alt="" loading="lazy" width="262px" height="134px">
                                    </div>
                                </div>
                                <div class="hRaRCu">
                                    <div class="kzojOQ">
                                        <div class="dwFxpq">
                                            <div class=""><?php dataFormtEventCard($row['data_evento']); ?></div>
                                        </div>
                                    </div>
                                    <h3 class="EventCardstyle__Title"><?php echo $row['titulo']; ?></h3>
                                    <div class="EventCardstyle__Location"><?php echo $row['tipo_evento']; ?></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?> -->
        </div>

    </main>

</body>
<div class="footer">
    <div class="Footerstyle-Copyright">
        Signal Soluções em Avios e Eventos para Emrpessas. © Copyright 2022
    </div>
</div>


</html>