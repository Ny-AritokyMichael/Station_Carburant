<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Produit extends CI_Model
{    
      private $id_Produit;
      private $nom_Produit;
      private $quantite;
      private $prix_produit;

      public function setId_Produit($id_Produit){
        $this->id_Produit = $id_Produit;
      }
      public function getId_Produit(){
          return $this->id_Produit;
      }

      public function setNom_Produit($nom_Produit){
        $this->nom_Produit = $nom_Produit;
      }
      public function getNom_Produit(){
          return $this->nom_Produit;
      }

      public function setQuantite($quantite){
        $this->quantite = $quantite;
      }
      public function getQuantite(){
          return $this->quantite;
      }


      public function setPrix_Produit($prix_Produit){
        $this->prix_Produit = $prix_Produit;
      }
      public function getprix_Produit(){
          return $this->prix_Produit;
      }


      public function __construct($id_Produit='' , $nom_Produit='' , $quantite='' ,$prix_Produit='')
      {
          parent::__construct();
          $this->setId_Produit($id_Produit);
          $this->setNom_Produit($nom_Produit);
          $this->setQuantite($quantite);
          $this->setprix_Produit($prix_Produit);

      }


      public function insert_Porduit($nom, $prix_Produti){
        $sql = "insert into poste values(default, %s, %s)";
        $sql = sprintf($sql, $this->db->escape($nom), $this->db->escape($prix_Produti));
        $this->db->query($sql);
    }


    public function supprimer_Produit($id){
        $sql = "delete from user where id = %d";
        $sql = sprintf($sql, $this->db->espace($id));
        $this->db->query($sql);
    }
}

?>

