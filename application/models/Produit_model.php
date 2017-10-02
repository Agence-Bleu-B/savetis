<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Produit_model extends CI_Model
{
    /**************************************************************/
    /** fonction permettant de retrouver les images des produits **/
    /**************************************************************/
    public function get_list($cat,$lng){
        //init return
        $return = array();
        //prepa requete
        if ($lng == 'french') {
            $foo = 'SELECT nom, frtext AS text,image,frpdf AS pdf,id FROM produits WHERE frapp = 1 AND categorie = "'.$cat.'"' ;
        }
        if ($lng == 'dutch') {
            $foo = 'SELECT nom, dutext AS text,image,dupdf AS pdf,id FROM produits WHERE duapp = 1 AND categorie = "'.$cat.'"' ;
        }
        if ($lng == 'english') {
            $foo = 'SELECT nom, entext AS text,image,enpdf AS pdf,id FROM produits WHERE enapp = 1 AND categorie = "'.$cat.'"' ;
        }
        //requete
        $query = $this->db->query($foo);

        // mise en variable
        $i =0;
        foreach ($query->result_array() as $row)
        {
            $return[$i]['nom'] = $row['nom'];
            $return[$i]['id'] = $row['id'];
            $return[$i]['image'] = $row['image'];
            $return[$i]['text'] = $row['text'];
            $return[$i]['pdf'] = $row['pdf'];
            $i++;
        }
        return $return;
    }
    /*****************************************************************************/
    /** fonction permettant de retrouver les images des produits pour le slider **/
    /*****************************************************************************/
    public function get_list_slider($lng){
        //init return
        $return = array();
        //prepa requete
        if ($lng == 'french') {
            $foo = 'SELECT sl1fr AS slot1,sl2fr AS slot2,sl3fr AS slot3,sl4fr AS slot4 FROM slider' ;
        }
        if ($lng == 'dutch') {
            $foo = 'SELECT sl1du AS slot1,sl2du AS slot2,sl3du AS slot3,sl4du AS slot4 FROM slider' ;
        }
        if ($lng == 'english') {
            $foo = 'SELECT sl1en AS slot1,sl2en AS slot2,sl3en AS slot3,sl4en AS slot4 FROM slider' ;
        }
        //get id from slier
        $query = $this->db->query($foo);
        //get from produits
        foreach ($query->result_array() as $row){
            if ($lng == 'french') {
                $foo2 = 'SELECT nom, frtext AS text,image,frpdf AS pdf,id FROM produits WHERE id IN ('.$row["slot1"].','.$row["slot2"].','.$row["slot3"].','.$row["slot4"].')';
            }
            if ($lng == 'dutch') {
                $foo2 = 'SELECT nom, dutext AS text,image,dupdf AS pdf,id FROM produits WHERE id IN ('.$row["slot1"].','.$row["slot2"].','.$row["slot3"].','.$row["slot4"].')' ;
            }
            if ($lng == 'english') {
                $foo2 = 'SELECT nom, entext AS text,image,enpdf AS pdf,id FROM produits WHERE id IN ('.$row["slot1"].','.$row["slot2"].','.$row["slot3"].','.$row["slot4"].')' ;
            }
        }
        $query2 = $this->db->query($foo2);
        // mise en variable
        $i=0;
        foreach ($query2->result_array() as $row)
        {
            $return[$i]['nom'] = $row['nom'];
            $return[$i]['id'] = $row['id'];
            $return[$i]['image'] = $row['image'];
            $return[$i]['text'] = $row['text'];
            $return[$i]['pdf'] = $row['pdf'];
            $i++;
        }
        return $return;
    }
    // /********************************************/
    // /****** création d'une news         *********/
    // /********************************************/
    // public function new_news($post){
    //     $array = array();
    //     foreach ($post as $key => $value){
    //         $$key = $value;
    //     }
    //     $array['cible'] = $cible;
    //     $array['date'] = time();
    //     //verifications

    //     if (!isset($titre)|| $titre == "") {
    //         $array['titre'] = 'actualité du '.date('d/m/Y',time());
    //     }
    //     else{
    //         $array['titre'] = $titre;
    //     }
    //     if (!isset($couverture)|| $couverture == "") {
    //         $array['couverture'] = 'elements/newsbanner.png';
    //     }
    //     else{
    //         //decoupage couverture
    //         $exp = explode('images/', $couverture);
    //         $array['couverture'] = $exp[1];
    //     }
    //     if (!isset($text)) {
    //         $array['text'] = ' ';
    //     }
    //     else {
    //         $array['text'] = $text;
    //     }
    //     return $this->db->insert('news', $array);
        
    // }
    // /********************************************/
    // /****** effacement d'une news       *********/
    // /********************************************/
    // public function delete_news($id){
    //     //delete from news
    //     $this->db->where('id', $id);
    //     $this->db->delete('news');
    //     //verification si fichier
    //     return "l'actualité à été supprimée" ;
    // }
    // /********************************************/
    // /****** modification d'une news     *********/
    // /********************************************/
    // public function modif_news($post,$id){
    //     $array = array();
    //     foreach ($post as $key => $value){
    //         $$key = $value;
    //     }
    //     $array['cible'] = $cible;
    //     $array['date'] = time();
    //     //verifications

    //     if (!isset($titre)|| $titre == "") {
    //         $array['titre'] = 'actualité du '.date('d/m/Y',time());
    //     }
    //     else{
    //         $array['titre'] = $titre;
    //     }
    //     if (!isset($couverture)|| $couverture == "") {
    //         $array['couverture'] = 'elements/newsbanner.png';
    //     }
    //     else{
    //         $finder = stripos($couverture, 'images/');
    //         //decoupage couverture si besoin
    //         if ($finder) {
    //             $exp = explode('images/', $couverture);
    //             $array['couverture'] = $exp[1];
    //         }
    //         else{
    //             $array['couverture'] = $couverture;
    //         }
            
    //     }
    //     if (!isset($text)) {
    //         $array['text'] = ' ';
    //     }
    //     else {
    //         $array['text'] = $text;
    //     }
    //     $this->db->where('id',$id);
    //     return $this->db->update('news', $array);
    // }
    // /********************************************/
    // /****** chargement d'une news (detail) ******/
    // /********************************************/
    // public function load_news($id){
    //     $this->db->select("*");
    //     $this->db->where('id', $id);
    //     $query = $this->db->get('news');
    //     $result = $query->result_array();
    //     return $result[0];
    // }
    // /********************************************/
    // /****** recuperation liste des news *********/
    // /********************************************/
    // public function get_list($cible,$page){
    //     //init return
    //     $return = array();
    //     //calcul offset bdd
    //     if ($page != null) {
    //         $limit = $page;
    //         $offset= $page;
    //     }
    //     else{
    //         $offset = 0;
    //         $page = 0;
    //         $limit = 10;
    //     }
    //     switch ($cible) {
    //         case 2:
    //             # requete publique only
    //             $this->db->select();
    //             $this->db->where('cible', 2);
    //             $this->db->order_by('date', 'DESC');
    //             $this->db->limit($limit,$offset);
    //             $query = $this->db->get('news');
    //             break;
    //         case 1:
    //             # requete perso only
    //             $this->db->select();
    //             $this->db->where('cible', 1);
    //             $this->db->order_by('date', 'DESC');
    //             $this->db->limit($limit,$offset);
    //             $query = $this->db->get('news');
    //             break;
    //         case 0:
    //             # requete all
    //             $this->db->select();
    //             $this->db->order_by('date', 'DESC');
    //             $this->db->limit($limit,$offset);
    //             $query = $this->db->get('news');
    //             break;
    //         default:
    //             # requete publique only
    //             $this->db->select();
    //             $this->db->where('cible', 2);
    //             $this->db->order_by('date', 'DESC');
    //             $this->db->limit($limit,$offset);
    //             $query = $this->db->get('news');
    //             break;
    //     }
    //     // mise en variable
    //     $i =0;
    //     foreach ($query->result_array() as $row)
    //     {
    //         $return[$i]['titre'] = $row['titre'];
    //         $return[$i]['id'] = $row['id'];
    //         $return[$i]['date'] = date('d/m/Y',$row['date']);
    //         $return[$i]['couverture'] = $row['couverture'];
    //         $return[$i]['cible'] = $this->cible($row['cible']);
    //         $return[$i]['text'] = $row['text'];
    //         $i++;
    //     }
    //     return $return;
    // }
    // /********************************************/
    // /****** fonction comptage des news **********/
    // /********************************************/
    // public function count_news($cible){
    //     switch ($cible) {
    //         case 2:
    //             $this->db->like('cible', '2');
    //             $this->db->from('news');
    //             $count = $this->db->count_all_results();
    //             break;
    //         case 1:
    //             # requete perso only
    //             $this->db->like('cible', '1');
    //             $this->db->from('news');
    //             $count = $this->db->count_all_results();
    //             break;
    //         case 0:
    //             $count = $this->db->count_all('news');
    //             break;
    //         default:
    //             # requete publique only
    //             $this->db->like('cible', '2');
    //             $this->db->from('news');
    //             $count = $this->db->count_all_results();
    //             break;
    //     }
    //     return $count;
    // }
    // /********************************************/
    // /****** fonction calcul cible      **********/
    // /********************************************/
    // public function cible($number){
    //     switch ($number) {
    //         case 1:
    //             $return = 'personnel';
    //             break;
    //         case 2:
    //             $return = 'publique';
    //             break;
            
    //         default:
    //             $return = 'publique';
    //             break;
    //     }
    //     return $return;
    // }
}
