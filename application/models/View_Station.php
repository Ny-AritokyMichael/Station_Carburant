<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class View_Station extends CI_Model
{    
      private $id_Details_Carburant;
      private $nom_Pompiste;
      private $cin;
      private $id_Carburant;
      private $nom_Carburant;
      private $prix_Carburant;
      private $quantite;

      public function setId_Details_Carburant($id_Details_Carburant){
        $this->id_Details_Carburant = $id_Details_Carburant;
      }
      public function getId_Details_Carburant(){
          return $this->id_Details_Carburant;
      }

      public function setNom_Pompiste($nom_Pompiste){
        $this->nom_Pompiste = $nom_Pompiste;
      }
      public function getNom_Pompiste(){
          return $this->nom_Pompiste;
      }


      public function setCin($cin){
        $this->cin = $cin;
      }
      public function getCin(){
          return $this->cin;
      }


      public function setId_Carburant($id_Carburant){
        $this->id_Carburant = $id_Carburant;
      }
      public function getId_Carburant(){
          return $this->id_Carburant;
      }

      public function setNom_Carburant($nom_Carburant){
        $this->nom_Carburant = $nom_Carburant;
      }
      public function getNom_Carburant(){
          return $this->nom_Carburant;
      }



      public function setPrix_Carburant($prix_Carburant){
        $this->prix_Carburant = $prix_Carburant;
      }
      public function getPrix_Carburant(){
          return $this->prix_Carburant;
      }



      public function setQuantite($quantite){
        $this->quantite = $quantite;
      }
      public function getQuantite(){
          return $this->quantite;
      }


     

      public function __construct($id_Details_Carburant='' , $nom_Pompiste='', $cin='', $id_Carburant='',$nom_Carburant=''  ,$prix_Carburant='', $quantite='')
      {
          parent::__construct();
          $this->setId_Details_Carburant($id_Details_Carburant);
          $this->setNom_Pompiste($nom_Pompiste);
          $this->setCin($cin);
          $this->setId_Carburant($id_Carburant);
          $this->setNom_Carburant($nom_Carburant);
          $this->setprix_Carburant($prix_Carburant);
          $this->setquantite($quantite);
        
      }

      public function getView(){
        $query = $this->db->query("select * from view_Station");
        $view = array();
        foreach($query->result_array() as $row){
            $temp = new View_Station();
            $temp->setId_Details_Carburant($row['id_details_carburant']);
            $temp->setNom_Pompiste($row['nom_pompiste']);
            $temp->setCin($row['cin']);
            $temp->setId_Carburant($row['id_carburant']);
            $temp->setNom_Carburant($row['nom_carburant']);
            $temp->setPrix_Carburant($row['prix_carburant']);
            $temp->setQuantite($row['quantite']);
            $view[] = $temp;
        }
        return $view;
      }


    public function supprimer_Detail($id){
        $sql = "delete from details_Carburant where id_details_carburant = %d";
        $sql = sprintf($sql, $id);
        $this->db->query($sql);
    }

    public function total($quantite, $prix_Carburant){
      return $quantite * $prix_Carburant;
    }


}

?>

