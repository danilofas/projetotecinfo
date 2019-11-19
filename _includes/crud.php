<?php

require_once ('connectionPDO.php');

abstract class Crud extends Database{
    protected $table;

    abstract public function insert();
    abstract public function update($id);

    public function search($id){
        $sql = "SELECT * FROM $this->table WHERE id = :id";
        $stmt = Database::prepare($sql);
        $stmt->bindParam(':id',$id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function searchAnotherData($nomeColuna, $dado){
        $sql = "SELECT * FROM $this->table WHERE $nomeColuna = :dado";
        $stmt = Database::prepare($sql);
        $stmt->bindParam(':dado',$dado, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(); 
    }

    public function searchAll(){
        $sql = "SELECT * FROM $this->table";
        $stmt = Database::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function delete($id){
        $sql = "DELETE FROM $this->table WHERE id = :id";
        $stmt = Database::prepare($sql);
        $stmt->bindParam(':id',$id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}