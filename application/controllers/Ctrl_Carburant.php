<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Ctrl_Carburant extends CI_Controller
{

    public function getSimple(){
        $this->load->helper('assets_helper');
        $this->load->model('Carburant');
        $nom_carburant = $this->input->get('nom_carburant');
        $data = array();
        $data['data_Simple_Carburant'] =  $this->Carburant->getSimple_Carburant($nom_carburant);
        $this->load->view('insert_Carburant',$data);
    } 
    
}

?>
