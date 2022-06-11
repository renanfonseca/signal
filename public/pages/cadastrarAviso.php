<?php
session_start();
require(__DIR__ . '../../../src/func/allBasic.php');
require(__DIR__ . '/parts/head.php');

if(!($_SESSION['login'] == 'true') ) {
    header("location: http://localhost/signal/index.php");
}
?>

<div class="container mt-3">
    <?php
    if (!empty($_SESSION['cadastroAvisoErro'])) {
    ?>
        <div class="alert alert-dark" role="alert">
            <?php echo $_SESSION['cadastroAvisoErro']; ?>
        </div>
        
    <?php
        $_SESSION['cadastroAvisoErro'] = "";
    }
    ?>
    <form action="./forms/cadastrarAvisoForm.php" method="POST">
        <div class="mb-3">
            <div class="row">
                <div class="col mb-1">
                    <label for="titleInput" class="form-label">Título do Evento</label>
                    <input type="text" class="form-control" id="titleInput" name="titleInput">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="date" class="form-control" placeholder="" name="dateInput">
                </div>
                <div class="col">
                    <select name="selectType" id="" class="form-select">
                        <option selected>Tipo de Evento</option>
                        <option value="Presencial">Presencial</option>
                        <option value="Online">Online</option>
                        <option value="Aviso">Aviso</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="fileImg">Imagem de Capa</label><br />
                        <input type="file" class="form-control-file" id="fileImg">
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="textareaInput">Conteudo</label>
                        <textarea name="textareaInput" id="textareaInput" class="form-control" rows="20"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="d-flex justify-content-around">
                <div class="">
                    <button class="btn btn-primary" type="submit">Salvar</button>
                </div>
                <div class="">
                    <a href="./home.php" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </div>
    </form>
</div>