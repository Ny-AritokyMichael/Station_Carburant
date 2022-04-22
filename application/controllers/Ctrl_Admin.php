<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Ctrl_Admin extends CI_Controller
{

    public function login_Admin(){
        $this->load->helper('assets_helper');
        $this->load->view('login_Admin');
    }

    public function connexion_Admin(){
        $this->load->helper('assets_helper');
        $this->load->model('Admin');
        $email = $this->input->post('email');
        $mdp = $this->input->post('mdp');
        $verifier = $this->Admin->verifier_Admin($email,$mdp);
        if($verifier == 1){
            $this->load->view('acceuil.php');

        }else{
            $this->load->view('erreur');
            
        }

    }

}

?>
