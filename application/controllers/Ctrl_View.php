<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Ctrl_View extends CI_Controller
{


    public function getView_All(){
        $this->load->helper('assets_helper');
        $this->load->model('View_Station');
        $data = array();
        $data['data'] =  $this->View_Station->getView();
        $this->load->view('liste_View_Station',$data);
    }



    public function delete(){
        $this->load->helper('assets_helper');
        $this->load->model('View_Station');
        $id = $this->input->get('id_details_carburant');
        $this->View_Station->supprimer_Detail($id);
        $data = array();
        $data['data'] =  $this->View_Station->getView();
        $this->load->view('liste_View_Station',$data);
    }



}

?>
