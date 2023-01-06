<?php
class Article {
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function getArticles(){
        $this->db->query('SELECT * FROM `produits`');
        $results = $this->db->resultSet();
        return $results;
    }
    public function  addArticle($data){
        $this->db->query('INSERT INTO produits(name_prod,quantite,prix,admin_id,image) VALUES (:name, :quantite, :prix ,:admin,:image)');

        $this->db->bind(':name', $data['name_prod']);
        $this->db->bind(':quantite', $data['quantite']);
        $this->db->bind(':prix', $data['prix']);
        $this->db->bind(':admin', $data['user_id']);
        $this->db->bind(':image', $data['image']);

        //   execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function updateArticle($data){
        $this->db->query(' UPDATE `produits` SET `name_prod`= :name_prod,`quantite`= :quantite,`prix`=:prix WHERE `id_prod`= :id_prod');
        $this->db->bind(':id_prod', $data['id_prod']);
        $this->db->bind(':name_prod', $data['name_prod']);
        $this->db->bind(':quantite', $data['quantite']);
        $this->db->bind(':prix', $data['prix']);
        
        //   execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
   public function deleteArticle($id_prod){
    $this->db->query('DELETE FROM `produits`  WHERE `id_prod`= :id_prod');
    $this->db->bind(':id_prod', $id_prod);
    //   execute
    if ($this->db->execute()) {
        return true;
    } else {
        return false;
    }
   }
    public function getPostById($id_prod){
        $this->db->query('SELECT * FROM `produits` WHERE id_prod = :id_prod');
        $this->db->bind(':id_prod',$id_prod);
        $row =$this ->db ->single();
        return $row;
    }
} 