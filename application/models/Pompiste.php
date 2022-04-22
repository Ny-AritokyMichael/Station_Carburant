<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Pompiste extends CI_Model
{    
      private $id_Pompiste;
      private $nom_Pompiste;
      private $cin;
      private $email;
      private $mdp;

      public function setId_Pompiste($id_Pompiste){
        $this->id_Pompiste = $id_Pompiste;
      }
      public function getId_Pompiste(){
          return $this->id_Pompiste;
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

      public function setEmail($email){
        $this->email = $email;
      }
      public function getEmail(){
          return $this->email;
      }

      public function setMdp($mdp){
        $this->mdp = $mdp;
      }
      public function getMdp(){
          return $this->mdp;
      }


      public function __construct($id_Pompiste='' , $nom_Pompiste='' , $cin='' , $email='',$mdp='')
      {
          parent::__construct();
          $this->setId_Pompiste($id_Pompiste);
          $this->setNom_Pompiste($nom_Pompiste);
          $this->setCin($cin);
          $this->setEmail($email);
          $this->setMdp($mdp);

      }

      public function insert_Pompiste($nom,$cin,$email, $mdp){
        $sql = "insert into pompiste values(default, %s, %s, %s, %s)";
        $sql = sprintf($sql, $this->db->escape($nom),$this->db->escape($cin),$this->db->escape($email), $this->db->escape($mdp));
        $this->db->query($sql);
    }


      public function verifier_Pompiste($email , $mdp){
        $sql = "select count(*) as verifier from pompiste where email = %s and mdp =%s";
        $sql = sprintf($sql , $this->db->escape($email), $this->db->escape($mdp));
        $query= $this->db->query($sql);
        $rows = $query->row_array();
        $retour= $rows['verifier'];
        return $retour;
    }

      public function get_All_Pompiste(){
        $query = $this->db->query("select * from pompiste");
        $view = array();
        foreach($query->result_array() as $row){
            $temp = new Pompiste();
            $temp->setId_Pompiste($row['id_pompiste']);
            $temp->setNom_Pompiste($row['nom_pompiste']);
            $temp->setCin($row['cin']);
            $temp->setEmail($row['email']);
            $temp->setMdp($row['mdp']);
            $view[] = $temp;
        }
        return $view;
      }

      public function getSimple_Pompiste($nom_Pompiste){
        $sql  = "select * from pompiste where nom_pompiste = '". $nom_Pompiste ."'" ;
        
        $query = $this->db->query($sql);
        $view = new Pompiste();
        foreach($query->result_array() as $row){
            $view->setId_Pompiste($row['id_pompiste']);
            $view->setNom_Pompiste($row['nom_pompiste']);
            $view->setCin($row['cin']);
            $view->setEmail($row['email']);
            $view->setMdp($row['mdp']);
        }
        return $view;
      }

      public function getEmail_Pompiste($email,$mdp){
        $sql  = "select * from pompiste where email = '". $email ."' and mdp = '". $mdp ."'" ;
        
        $query = $this->db->query($sql);
        $view = new Pompiste();
        foreach($query->result_array() as $row){
            $view->setId_Pompiste($row['id_pompiste']);
            $view->setNom_Pompiste($row['nom_pompiste']);
            $view->setCin($row['cin']);
            $view->setEmail($row['email']);
            $view->setMdp($row['mdp']);
        }
        return $view;
      }

      public function getId($id){
        $sql  = "select * from pompiste where id_Pompiste= '". $id ."'" ;
        
        $query = $this->db->query($sql);
        $view = new Pompiste();
        foreach($query->result_array() as $row){
            $view->setId_Pompiste($row['id_pompiste']);
            $view->setNom_Pompiste($row['nom_pompiste']);
            $view->setCin($row['cin']);
            $view->setEmail($row['email']);
            $view->setMdp($row['mdp']);
        }
        return $view;
      }


    

    public function verifier_Employe($email , $mdp){
        $sql = "select count(*) as verifier from pompiste where email = %s and mdp=%s";
        $sql = sprintf($sql , $this->db->escape($email), $this->db->escape($mdp));
        $query= $this->db->query($sql);
        $rows = $query->row_array();
        $retour= $rows['verifier'];
        return $retour;
    }
}

?>

