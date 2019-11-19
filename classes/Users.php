<?php

require_once ('../_includes/crud.php');

class Usuarios extends Crud{

    protected $table = "usuarios";
    private $nome;
    private $cpf;
    private $sexo;
    private $email;
    private $user;
    private $password;
    private $matricula;
    private $cargo;

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getCpf(){
        return $this->cpf;
    }
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }
    public function getSexo(){
        return $this->sexo;
    }
    public function setSexo($sexo){
        $this->sexo = $sexo;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function getUser(){
        return $this->user;
    }
    public function setUser($user){
        $this->user = $user;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setPassword($password){
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }
    public function getMatricula(){
        return $this->matricula; 
    }
    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }
    public function getCargo(){
        return $this->cargo;
    }
    public function setCargo($cargo){
        $this->cargo = $cargo;
    }

    public function insert(){
        $sql = "INSERT INTO $this->table (nome, cpf, sexo, email, usuario, matricula, password, cargo) VALUES (:nome,:cpf, :sexo, :email, :user, :matricula, :password, :cargo)";
        $stmt = Database::prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':cpf', $this->cpf);
        $stmt->bindParam(':sexo', $this->sexo);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':user', $this->user);
        $stmt->bindParam(':matricula', $this->matricula);
        $stmt->bindParam(':password', $this->password);
        $stmt->bindParam(':cargo', $this->cargo);
        return $stmt->execute();
    }

    public function update($id){
        $sql = "UPDATE $this->table SET nome = :nome, cpf = :cpf, sexo = :sexo, usuario = :user, matricula = :matricula, password = :password, cargo = :cargo WHERE id = :id";
        $stmt = Database::prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':cpf', $this->cpf);
        $stmt->bindParam(':sexo', $this->sexo);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':user', $this->user);
        $stmt->bindParam(':matricula', $this->matricula);
        $stmt->bindParam(':password', $this->password);
        $stmt->bindParam(':cargo', $this->cargo);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

}

?>