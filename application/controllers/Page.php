<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	function __construct(){
    	parent :: __construct();
            //Setting language in session on first load
            if(!$this->session->userdata('site_lang')){ 
    		$this->load->library('session');
    		$newdata = array(
    			'site_lang'  => $this->config->item('language')
    		);
    		$this->session->set_userdata($newdata);
    	}
            //Loading language from session variable
    	$this->language = $this->session->userdata['site_lang']; 
    	$this->lang->load('product',$this->language);	
    }

	public function index()
	{
        $this->load->model('produit_model');
        $this->data['drench_liste'] = $this->produit_model->get_list('drench',$this->language);
        $this->data['cetose_liste'] = $this->produit_model->get_list('cetose',$this->language);
        $this->data['macro_liste'] = $this->produit_model->get_list('macro-elements',$this->language);
        $this->data['digest_liste'] = $this->produit_model->get_list('digest',$this->language);
        $this->data['hygiene_liste'] = $this->produit_model->get_list('hygiene',$this->language);
        $this->data['slider_liste'] = $this->produit_model->get_list_slider($this->language);
        //vue
		$this->load->view('common/head');
		$this->load->view('common/header');
		$this->load->view('page/accueil',$this->data);
		$this->load->view('common/footer');
	}
    public function switchLang($language = "") {
    
	    $language = ($language != "") ? $language : "french";
	    $this->session->set_userdata('site_lang', $language);
	    
	    redirect($_SERVER['HTTP_REFERER']);
        
    }
}
