<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Carburant extends CI_Model
{    

      private $id_Carburant;
      private $nom_Carburant;
      private $prix_Carburant;



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

     

    //   public function __construct($id_Carburant='',$nom_Carburant=''  ,$prix_Carburant='')
    //   {
    //       parent::__construct();
    //       $this->setId_Carburant($id_Carburant);
    //       $this->setNom_Carburant($nom_Carburant);
    //       $this->setprix_Carburant($prix_Carburant);
        
    //   }

      public function getSimple_Carburant($nom_Carburant){
        $sql = "select * from carburant where nom_carburant= '". $nom_Carburant ."'" ;
        $query = $this->db->query($sql);
        $carburant = new Carburant();
        foreach($query->result_array() as $row){       
            $carburant->setId_Carburant($row['id_carburant']);
            $carburant->setNom_Carburant($row['nom_carburant']);
            $carburant->setPrix_Carburant($row['prix_carburant']);
        }
        return $carburant;
      }
}

?>

