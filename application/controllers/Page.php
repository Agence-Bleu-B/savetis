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

		//si envoi mail
		if (isset($_POST['envoimail'])) {
			//verif bots
			if ($_POST['bobot'] == '') {
			//$mail = 'webmaster@bleu-b.com'; // Déclaration de l'adresse de destination.
			$mail = 'info@savetis.com';

			if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui présentent des bogues.

			{

			    $passage_ligne = "\r\n";

			}

			else

			{

			    $passage_ligne = "\n";

			}

			//=====Déclaration des messages au format texte et au format HTML.

			$message_txt = $_POST['lname'].','.$_POST['fname'].','.$_POST['email'].$passage_ligne.$_POST['agence'].$passage_ligne.$_POST['message'];

			$message_html = "<html><head></head><body><b>".$_POST['lname'].','.$_POST['fname'].','.$_POST['email']."</b>, ".$passage_ligne.$_POST['agence'].",".$_POST['message'].".</body></html>";

			//==========
			//=====Lecture et mise en forme de la pièce jointe.

			// $fichier   = fopen("image.jpg", "r");

			// $attachement = fread($fichier, filesize("image.jpg"));

			// $attachement = chunk_split(base64_encode($attachement));

			// fclose($fichier);

			//==========
			//=====Création de la boundary.

			$boundary = "-----=".md5(rand());

			$boundary_alt = "-----=".md5(rand());

			//==========
			//=====Définition du sujet.

			$sujet = $_POST['agence'];

			//=========
			//=====Création du header de l'e-mail.

			$header = "From: \"Site savetis\"<".$_POST['email'].">".$passage_ligne;

			$header.= "Reply-to: ".$_POST['email'].$passage_ligne;

			$header.= "MIME-Version: 1.0".$passage_ligne;

			$header.= "Content-Type: multipart/mixed;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;

			//==========
			//=====Création du message.

			$message = $passage_ligne."--".$boundary.$passage_ligne;

			$message.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary_alt\"".$passage_ligne;

			$message.= $passage_ligne."--".$boundary_alt.$passage_ligne;

			//=====Ajout du message au format texte.

			$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;

			$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;

			$message.= $passage_ligne.$message_txt.$passage_ligne;

			//==========
			$message.= $passage_ligne."--".$boundary_alt.$passage_ligne;
			//=====Ajout du message au format HTML.

			$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;

			$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;

			$message.= $passage_ligne.$message_html.$passage_ligne;

			//==========
			//=====On ferme la boundary alternative.

			$message.= $passage_ligne."--".$boundary_alt."--".$passage_ligne;

			//==========

			$message.= $passage_ligne."--".$boundary.$passage_ligne;
			//=====Ajout de la pièce jointe.

			// $message.= "Content-Type: image/jpeg; name=\"image.jpg\"".$passage_ligne;

			// $message.= "Content-Transfer-Encoding: base64".$passage_ligne;

			// $message.= "Content-Disposition: attachment; filename=\"image.jpg\"".$passage_ligne;

			// $message.= $passage_ligne.$attachement.$passage_ligne.$passage_ligne;

			$message.= $passage_ligne."--".$boundary."--".$passage_ligne; 

			//========== 

			//=====Envoi de l'e-mail.

			mail($mail,$sujet,$message,$header);
		}}
		//si reception inscription newsletter
		if (isset($_POST['subscribe'])) {
			$test = array(
			        'mail' => $_POST['mail']
			);

			$this->db->insert('newsletter', $test);
		}

        $this->load->model('produit_model');
        $this->data['drench_liste'] = $this->produit_model->get_list('drench',$this->language);
        $this->data['cetose_liste'] = $this->produit_model->get_list('cetose',$this->language);
        $this->data['macro_liste'] = $this->produit_model->get_list('macro-elements',$this->language);
        $this->data['digest_liste'] = $this->produit_model->get_list('digest',$this->language);
        $this->data['hygiene_liste'] = $this->produit_model->get_list('hygiene',$this->language);
        $this->data['slider_liste'] = $this->produit_model->get_list_slider($this->language);

        $this->data['lang'] = $this->session->userdata['site_lang'];
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
