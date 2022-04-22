<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

require_once('Pompiste.php');
require_once('Carburant.php');

class Details_Carburant extends CI_Model
{    
      private $id_Details_Carburant;
      private $quantite;
      private $id_Carburant;
      private $id_Pompiste;


      public function setId_Details_Carburant($id_Details_Carburant){
        $this->id_Details_Carburant = $id_Details_Carburant;
      }
      public function getId_Details_Carburant(){
          return $this->id_Details_Carburant;
      }


      public function setQuantite($quantite){
        $this->quantite = $quantite;
      }
      public function getQuantite(){
          return $this->quantite;
      }



      public function setId_Carburant($id_Carburant){
        $this->id_Carburant = $id_Carburant;
      }
      public function getId_Carburant(){
          return $this->id_Carburant;
      }

      public function setId_Pompiste($id_Pompiste){
        $this->id_Pompiste = $id_Pompiste;
      }
      public function getId_Pompiste(){
          return $this->id_Pompiste;
      }



     

    //   public function __construct($id_Details_Carburant='' , , $quantite='', $id_Carburant='',, $id_Pompiste='')
    //   {
    //       parent::__construct();
    //       $this->setId_Details_Carburant($id_Details_Carburant);
    //       $this->setquantite($quantite);
    //       $this->setId_Carburant($id_Carburant);
    //       $this->setid_Pompiste($id_Pompiste);
    //   }

      
      

    public function insert_Details($quantite,$nom_Carburant,$nom_Pompiste){
        $pompiste = new Pompiste();
        $carburant = new Carburant();
        $getPompiste = $pompiste->getSimple_Pompiste($nom_Pompiste);
        $getCarburant = $carburant->getSimple_Carburant($nom_Carburant);
        $id_Carburant = $getCarburant->getId_Carburant();
        $id_Pompiste = $getPompiste->getId_Pompiste();
        $sql = "insert into details_carburant values(default, %d, %d,%d)";
        $sql = sprintf($sql,$quantite,$id_Carburant  , $id_Pompiste);
        $this->db->query($sql);
    }

    public function insert_Details_Pompiste($quantite,$nom_Carburant,$id_Pompiste){
      $carburant = new Carburant();
      $getCarburant = $carburant->getSimple_Carburant($nom_Carburant);
      $sql = "insert into details_carburant values(default, %d, %d,%d)";
      $sql = sprintf($sql,$quantite,$getCarburant->getId_Carburant()  , $id_Pompiste);
      $this->db->query($sql);
  }


}

?>

