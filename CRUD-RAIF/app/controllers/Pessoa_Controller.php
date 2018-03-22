<?php
    include_once ('Controller.php');
    include_once (__DIR__.'../../models/pessoa.php');

class Pessoa_Controller extends Controller{

    private $pessoa;

    public function __construct() {
        parent::__construct();
        $this->pessoa = new pessoa;
    }

    public function cadastrar() {

      $this->pessoa->nome($this->input->get('nome'))
                   ->sobrenome($this->input->get('sobrenome'))
                   ->email($this->input->get('email'))
                   ->rg($this->input->get('rg'))
                   ->cpf($this->input->get('cpf'))
                   ->cep($this->input->get('cep'))
                   ->estado($this->input->get('estado'))
                   ->cidade($this->input->get('cidade'))
                   ->rua($this->input->get('rua'))
                   ->numero($this->input->get('numero'))
                   ->complemento($this->input->get('complemento'));

      $resultado = $this->pessoa->cadastrar();

      if($resultado) {
        echo ('Cadastro realizado com sucesso.');
        return true;
      } else {
          echo ('Ocorreu um erro durante o cadastro, tente novamente mais tarde.');
          return false;
      }
    }

    public function alterar() {

        $this->pessoa->id($this->input->get('id'))
                               ->nome($this->input->get('nome'))
                               ->instituicao($this->input->get('instituicao'))
                               ->email($this->input->get('email'))
                               ->numero($this->input->get('numero'))
                               ->tipo($this->input->get('tipo'));

        $testeEmail = $this->pessoa->testEmail();

            if($testeEmail) {
               echo "Email em uso.";
            } else {
                $resultado = $this->pessoa->alterar();

                if($resultado) {

                    echo "Usuario alterado com sucesso.";
                    echo "<script>window.setTimeout(\"document.location = './'\", 1400);</script>";
                } else {
                    echo msg005();
                }
            }
    }

    public function listarId($id) {

        return $this->pessoa->listarId($id);

    }

    public function deletarTel($idTelefone) {

        $this->pessoa->id($this->input->get('idUsuario'));

        $this->pessoa->deletarTel($idTelefone);

    }

} 