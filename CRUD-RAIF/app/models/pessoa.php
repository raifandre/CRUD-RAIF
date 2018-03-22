<?php
include_once(__DIR__."../../models/Model.php");

  class pessoa extends Model {
    // propriedades da classe objeto
    public $id;
    public $nome;
    public $sobrenome;
    public $email;
    public $rg;
    public $cpf;
    public $cep;
    public $estado;
    public $cidade;
    public $rua;
    public $numero;
    public $complemento;

   	public function __construct() {
        $this->open();
    }

    public function cadastrar(){

        $this->conn->beginTransaction();

        $cadastrar = $this->conn->query("INSERT INTO cadastro (nome, sobrenome, email, rg, cpf, cep, estado, cidade, rua, numero, completo)
            VALUES ('$this->nome', '$this->sobrenome', '$this->email', '$this->rg', '$this->cpf', '$this->cep', '$this->estado', '$this->cidade', '$this->rua', '$this->numero', '$this->completo')");
        
        if($cadastrar){
            $this->conn->commit();
            return true;
        }

    }

    public function alterar() {

        $this->conn->beginTransaction();

        $alterar = $this->conn->query("UPDATE usuario SET nome = '$this->nome', instituicao_ext = '$this->instituicao', email = '$this->email', 
        status = '$this->status', perfil = 1 WHERE id = '$this->id'");


        if($alterar) {

            $sql = "SELECT id FROM telefone WHERE id_Usuario = '$this->id'";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $id = $stmt->fetchAll();


            for($i = 0; $i < count($id); $i++) {
                if($this->tipo[$i] != '' && $this->numero[$i] != ''){
                    $telefone = $this->conn->query("UPDATE telefone SET tipo = '{$this->tipo[$i]}', numero = '{$this->numero[$i]}' WHERE id_Usuario = '$this->id' AND id = '{$id[$i]->id}'");
                }
            }


            if(!$telefone) {
                $this->conn->rollBack();
                return false;
            }


            $contador = 0;
            for($j = 0; $j < count($this->numero); $j++) {
                if($this->numero[$j] != ''){
                    $contador = $contador + 1;
                }
            }

            if($contador != count($id) && count($id) == 1) {
                for($i = 1; $i < count($this->numero); $i++) {
                    if($this->tipo[$i] != '' && $this->numero[$i] != ''){
                        $newtelefone = $this->conn->query("INSERT INTO telefone (id_Usuario, tipo, numero) VALUES('$this->id', '{$this->tipo[$i]}', '{$this->numero[$i]}')");
                    }
                    if(!$newtelefone) {
                      $this->conn->rollBack();
                        return false;
                    }
                    else {
                        $this->conn->commit();
                        return true;
                    }
                }
            }
            if($contador != count($id) && count($id) == 2) {
                for($i = 2; $i < count($this->numero); $i++) {
                    if($this->tipo[$i] != '' && $this->numero[$i] != ''){
                        $newtelefone = $this->conn->query("INSERT INTO telefone (id_Usuario, tipo, numero) VALUES('$this->id', '{$this->tipo[$i]}', '{$this->numero[$i]}')");
                    }
                    if(!$newtelefone) {
                      $this->conn->rollBack();
                        return false;
                    }
                    else {
                        $this->conn->commit();
                        return true;
                    }
                }
            } else {
                $this->conn->commit();
                return true;
            }
        }

        else {
            $this->conn->rollBack();
            return false;
        }

    }

    public function listarId($id) {
        $sql = "SELECT * FROM usuario WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();

    }

};