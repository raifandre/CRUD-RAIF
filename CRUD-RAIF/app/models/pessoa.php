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

        $cadastrar = $this->conn->query("INSERT INTO cadastro (nome, sobrenome, email, rg, cpf, cep, estado, cidade, rua, numero, complemento)
            VALUES ('$this->nome', '$this->sobrenome', '$this->email', '$this->rg', '$this->cpf', '$this->cep', '$this->estado', '$this->cidade', '$this->rua', '$this->numero', '$this->complemento')");
        
        if($cadastrar){

            $this->conn->commit();
            return true;

        } else {

            $this->conn->rollBack();
            return false;
        }

    }

    public function alterar() {
        $this->conn->beginTransaction();

        $alterar = $this->conn->query("UPDATE cadastro SET nome = '$this->nome', sobrenome = '$this->sobrenome', email = '$this->email', 
        rg = '$this->rg', cpf = '$this->cpf', cep = '$this->cep', estado = '$this->estado', cidade = '$this->cidade', rua = '$this->rua', numero = '$this->numero', complemento = '$this->complemento'  WHERE id = '$this->id'");


        if($alterar) {

            $this->conn->commit();
            return true;

        } else {

            $this->conn->rollBack();
            return false;
        }

    }

    public function deletar($id) {

        $sql = "DELETE FROM cadastro WHERE id = '$id'";
        $stmt = $this->conn->prepare($sql);
        $resultado = $stmt->execute();
        return $resultado;

    }

    public function buscarId($id) {
        $sql = "SELECT * FROM cadastro WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();

    }

    public function listar() {
        $sql = "SELECT * FROM cadastro";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();

    }

};