<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	private $isco;
	private $data = array();//data head et footer sous certaines conditions
	private $data2 = array();//data corp

	public function __construct()
    {
        parent::__construct();
        //chargement models
		$this->load->model('admin_model');
		//si demande decco
		if (isset($_GET['deco'])) {
			$this->admin_model->deco();
		}
		//si post verif si ok et mise en session si ok
		if (isset($_POST['val'])) {
			$mdp = $_POST['password'];
			$log = $_POST['login'];
			$this->admin_model->connection($log,$mdp);
		}
		//verif si connecté
	    $this->isco = $this->admin_model->isconnect();
	    //recuperation de la page en cours
	    $explode = explode('/', $this->uri->ruri_string());
		$this->data['pagecours'] = $explode[1];
    }
	
	public function index()
	{
		//affichage page selon connection
		if ($this->isco) {
			$this->load->view('admin/header',$this->data);
			$this->load->view('admin/home',$this->data2);
		}
		else{
			$this->load->view('admin/header-reg',$this->data);
			$this->load->view('admin/register',$this->data2);
		}
        $this->load->view('admin/footer');
	}
	public function produits()
	{
		$this->load->model('produit_model');
		//gestion des requetes
		if (isset($_POST['new'])) {
			$this->produit_model->ajout_produit($_POST);
		}
		if (isset($_POST['delete'])) {
			$this->produit_model->delete_produit($_POST['id']);
		}
		if (isset($_POST['changephoto'])) {
			$this->produit_model->modif_image($_POST,$_FILES);
		}
		if (isset($_POST['changepdf'])) {
			$this->produit_model->modif_pdf($_POST,$_FILES);
		}

        $this->data['produits_liste'] = $this->produit_model->get_list_admin();
		//affichage page selon connection
		if ($this->isco) {
			$this->load->view('admin/header',$this->data);
			$this->load->view('admin/produits',$this->data2);
		}
		else{
			$this->load->view('admin/header-reg',$this->data);
			$this->load->view('admin/register',$this->data2);
		}
        $this->load->view('admin/footer');
	}
	public function slider()
	{
		$this->load->model('produit_model');
		$this->data['produits_liste'] = $this->produit_model->get_list_admin();
		//rajouter une selcetion des elmnts slider

		//affichage page selon connection
		if ($this->isco) {
			$this->load->view('admin/header',$this->data);
			$this->load->view('admin/slider',$this->data2);
		}
		else{
			$this->load->view('admin/header-reg',$this->data);
			$this->load->view('admin/register',$this->data2);
		}
        $this->load->view('admin/footer');
	}
	public function newsletter()
	{
		//affichage page selon connection
		if ($this->isco) {
			$this->load->view('admin/header',$this->data);
			$this->load->view('admin/newsletter',$this->data2);
		}
		else{
			$this->load->view('admin/header-reg',$this->data);
			$this->load->view('admin/register',$this->data2);
		}
        $this->load->view('admin/footer');
	}
}
