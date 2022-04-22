 <?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Ctrl_Details_Carburant extends CI_Controller
{

    public function insert_Details_Carburant(){
        $this->load->helper('assets_helper');
        $this->load->model('View_Station');
        $this->load->model('Details_Carburant');
        $quantite = $this->input->post('quantite');
        $nom_Pompiste = $this->input->post('nom_Pompiste');
        $nom_Carburant = $this->input->post('nom_Carburant');
        $this->Details_Carburant->insert_Details($quantite,$nom_Carburant,$nom_Pompiste);
        $data = array();
        $data['data'] =  $this->View_Station->getView();
        $this->load->view('liste_View_Station',$data);
    }
    

    public function insert_Details_Carburant_Pompiste(){
        $this->load->helper('assets_helper');
        $this->load->model('View_Station');
        $this->load->model('Details_Carburant');
        $quantite = $this->input->post('quantite');
        $id_Pompiste = $this->input->post('id_Pompiste');
        $nom_Carburant = $this->input->post('nom_Carburant');
        $this->Details_Carburant->insert_Details_Pompiste($quantite,$nom_Carburant,$id_Pompiste);
        $this->load->view('liste_Carburant_Pompiste');
    }

}

?>
