<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Ctrl_Pompiste extends CI_Controller
{

    public function login_Pompiste(){
        $this->load->helper('assets_helper');
        $this->load->view('login_Pompiste');
    }

    public function deconnexion(){
        $this->load->helper('assets_helper');
        $this->load->view('index');
    }
    public function insert_Pompiste_Page(){
        $this->load->helper('assets_helper');
        $this->load->model('Pompiste');
        $nom = $this->input->post('nom');
        $cin = $this->input->post('cin');
        $email = $this->input->post('email');
        $mdp = $this->input->post('mdp');
        $this->Pompiste->insert_Pompiste($nom,$cin,$email,$mdp);
        $this->load->view('login_Pompiste');
    }

    public function connexion_Pompiste(){
        $this->load->helper('assets_helper');
        $this->load->model('Pompiste');
        $email = $this->input->post('email');
        $mdp = $this->input->post('mdp');
        $verifier = $this->Pompiste->verifier_Employe($email,$mdp);
        if($verifier == 1){
            $data = array();
            $data['Pompiste'] =  $this->Pompiste->getEmail_Pompiste($email,$mdp);
            $this->load->view('liste_Carburant_Pompiste',$data);

        }else{
            $this->load->view('erreur');   
        }
    }

    

    public function getSimple(){
        $this->load->helper('assets_helper');
        $this->load->model('Pompiste');
        $nom_Pompiste = $this->input->get('nom_pompiste');
        $data = array();
        $data['data'] =  $this->Pompiste->getSimple_Pompiste($nom_Pompiste);
        $this->load->view('insert_Carburant',$data);
    }


    public function getid_Pompiste(){
        $this->load->helper('assets_helper');
        $this->load->model('Pompiste');
        $id_Pompiste = $this->input->get('id_Pompiste');
        $data = array();
        $data['id'] =  $this->Pompiste->getId($id_Pompiste);
        $this->load->view('insert_Carburant_Pompiste',$data);
    }


    

}

?>
