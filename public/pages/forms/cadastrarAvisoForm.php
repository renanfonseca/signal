<?php
session_start();
require(__DIR__ . '../../../../src/func/allBasic.php');
require(__DIR__ . '../../parts/head.php');


$title = filter_input(INPUT_POST, 'titleInput',  FILTER_DEFAULT);
$select = filter_input(INPUT_POST, 'selectType',  FILTER_DEFAULT);
$data = filter_input(INPUT_POST, 'dateInput',  FILTER_DEFAULT);
$text = filter_input(INPUT_POST, 'textareaInput',  FILTER_DEFAULT);


if (!empty($title)) {
    echo $title;
    echo 'ta preenchido';
} else {
    $_SESSION['cadastroAvisoErro'] = "Preencha todos os campos";
    header("location: http://localhost/signal/public/pages/cadastrarAviso.php");
}

if (!empty($select)) {
    echo $select;
    echo 'ta preenchido';
} else {
    $_SESSION['cadastroAvisoErro'] = "Preencha todos os campos";
    header("location: http://localhost/signal/public/pages/cadastrarAviso.php");
}

if (!empty($data)) {
    echo $data;
    echo 'ta preenchido';
} else {
    $_SESSION['cadastroAvisoErro'] = "Preencha todos os campos";
    header("location: http://localhost/signal/public/pages/cadastrarAviso.php");
}

if (!empty($text)) {
    echo $text;
    echo 'ta preenchido';
} else {
    $_SESSION['cadastroAvisoErro'] = "Preencha todos os campos";
    header("location: http://localhost/signal/public/pages/cadastrarAviso.php");
}

if (!empty($title) && !empty($select) && !empty($data) && !empty($text)) {
    try {
        $sql = "INSERT INTO aviso (titulo, texto, tipo_evento, data_evento) VALUES (?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$title, $text, $select, $data]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
