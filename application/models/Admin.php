<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Model
{    
      private $email_Admin;
      private $mdp_Admin;

      public function setEmail_Admin($email_Admin){
        $this->email_Admin = $email_Admin;
      }
      public function getEmail_Admin(){
          return $this->email_Admin;
      }

      public function setMdp_Admin($mdp_Admin){
        $this->mdp_Admin = $mdp_Admin;
      }
      public function getMdp_Admin(){
          return $this->mdp_Admin;
      }


      public function __construct( $email_Admin='',$mdp_Admin='')
      {
          $this->setEmail_Admin($email_Admin);
          $this->setMdp_Admin($mdp_Admin);

      }


    

    public function verifier_Admin($email_Admin , $mdp_Admin){
        $sql = "select count(*) as verifier from admin where email_Admin = %s and mdp_Admin=%s";
        $sql = sprintf($sql , $this->db->escape($email_Admin), $this->db->escape($mdp_Admin));
        $query= $this->db->query($sql);
        $rows = $query->row_array();
        $retour= $rows['verifier'];
        return $retour;
    }


}

?>

