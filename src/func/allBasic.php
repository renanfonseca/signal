<?php
require(__DIR__ . '../../basicSetup/database/connection.php');



function todosOsAvisos()
{
    global $conn;
    $data = $conn->query('SELECT * FROM aviso ORDER BY data_evento');
    return $data;
}

function todosOsAvisosPaginacao()
{
    global $conn;
    $limite = 12;
    $pg = (isset($_GET['pg'])) ? (int)$_GET['pg'] : 1;
    $inicio = ($pg * $limite) - $limite;

    $sql = "SELECT * FROM aviso ORDER BY data_evento LIMIT " . $inicio . ", " . $limite;

    try {
        $query = $conn->prepare($sql);
        $query->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
?>
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
<?php
    }
    try {
        $sql_Total = 'SELECT * FROM aviso';
        $query_Total = $conn->prepare($sql_Total);
        $query_Total->execute();

        $query_result = $query_Total->fetchAll(PDO::FETCH_ASSOC);

        $query_count =  $query_Total->rowCount();

        
        $qtdPag = ceil($query_count / $limite);
    } catch (PDOexception $error_Total) {
        echo 'Erro ao retornar os Dados. ' . $error_Total->getMessage();
    }

    
    echo "<div class='container'>";
    echo '<ul id="paginacao" class="d-flex justify-content-center">';
    echo '<li style="margin-right:45px;"><a class="anterior" href="home.php?pg=1">Anterior</a></li>';

    if ($qtdPag > 1 && $pg <= $qtdPag) {

        for ($i = 1; $i <= $qtdPag; $i++) {

            if ($i == $pg) {

                echo "<li><a class='ativo'>" . $i . "</a></li>";
            } else {

                echo "<li><a href='busca?pg=$i'>" . $i . "</a></li>";
            }
        }
    }

    echo "<li style='margin-left:45px;'><a class='proxima' href='home.php?pg=$qtdPag'>Próxima</a></li></div>";
}

function dataFormtEventCard($d)
{
    $date = new DateTime($d);
    echo $date->format('d/m/y');
}
