<?php
if (isset($_POST ["cadastrarPessoa"])){

  include_once("../controllers/Pessoa_Controller.php");
  $pessoa = new Pessoa_Controller;
  $pessoa->cadastrar();

}