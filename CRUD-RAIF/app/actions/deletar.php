<?php
    include_once("../controllers/Pessoa_Controller.php");
    $id = $_GET['id'];
    $pessoa = new Pessoa_Controller;
    $deletar = $pessoa->deletar($id);
?>