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
    /***************************************************************************/
    /** fonction permettant de retrouver les images des produits pour l'admin **/
    /***************************************************************************/
    public function get_list_admin(){
        //init return
        $return = array();
        //prepa requete
        $foo = 'SELECT * FROM produits ORDER BY categorie ' ;
        //requete
        $query = $this->db->query($foo);

        // mise en variable
        $i =0;
        foreach ($query->result_array() as $row)
        {
            $return[$i]['id'] = $row['id'];
            $return[$i]['nom'] = $row['nom'];
            $return[$i]['categorie'] = $row['categorie'];
            $return[$i]['entext'] = $row['entext'];
            $return[$i]['dutext'] = $row['dutext'];
            $return[$i]['frtext'] = $row['frtext'];
            $return[$i]['frapp'] = $row['frapp'];
            $return[$i]['enapp'] = $row['enapp'];
            $return[$i]['duapp'] = $row['duapp'];
            $return[$i]['image'] = $row['image'];
            $return[$i]['frpdf'] = $row['frpdf'];
            $return[$i]['enpdf'] = $row['enpdf'];
            $return[$i]['dupdf'] = $row['dupdf'];
            $i++;
        }
        return $return;
    }
    /***************************************************************************/
    /** ajout d'un produit                                                    **/
    /***************************************************************************/
    public function ajout_produit($post){
        foreach ($post['pays'] as $key => $value) {
            if ($value == 'FR') {
                $fr = 1;
            }
            if ($value == 'NL') {
                $du = 1;
            }
            if ($value == 'EN') {
                $en = 1;
            }
        }
        if (!isset($fr)) {
            $fr = 0;
        }
        if (!isset($en)) {
            $en = 0;
        }
        if (!isset($du)) {
            $du = 0;
        }
        //prepa requete
        $data = array(
            'nom' => $post['nom'],
            'categorie' => $post['cat'],
            'entext' => $post['texten'],
            'frtext' => $post['textfr'],
            'dutext' => $post['textdu'],
            'duapp' => $du,
            'frapp' => $fr,
            'enapp' => $en
        );

        $this->db->insert('produits', $data);   
    }
     /***************************************************************************/
    /** modif d'un produit                                                    **/
    /***************************************************************************/
    public function modif_produit($post){
        foreach ($post['pays'] as $key => $value) {
            if ($value == 'FR') {
                $fr = 1;
            }
            if ($value == 'NL') {
                $du = 1;
            }
            if ($value == 'EN') {
                $en = 1;
            }
        }
        if (!isset($fr)) {
            $fr = 0;
        }
        if (!isset($en)) {
            $en = 0;
        }
        if (!isset($du)) {
            $du = 0;
        }
        //prepa requete
        $data = array(
            'nom' => $post['nom'],
            'categorie' => $post['cat'],
            'entext' => $post['texten'],
            'frtext' => $post['textfr'],
            'dutext' => $post['textdu'],
            'duapp' => $du,
            'frapp' => $fr,
            'enapp' => $en
        );
        $this->db->where('id', $post['id']);
        $this->db->update('produits', $data);   
    }
   /****************************************************************************/
    /** suppression d'un produit                                              **/
    /***************************************************************************/
    public function delete_produit($id){
        $this->db->where('id', $id);
        $this->db->delete('produits');
    }
    /****************************************************************************/
    /** modif images                                            **/
    /***************************************************************************/
    public function modif_image($post,$files){
        $filename=$files['photo']['name'];
        //enregistre images
        //load library
        $this->load->library('upload');
        // config upload
        $chemin = './assets/images/'.$post["cat"];
        $config['upload_path'] = $chemin;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']    = '0';
        $this->upload->initialize($config);
        $this->upload->do_upload('photo');
        $test = $this->upload->display_errors();
        
        $data = array(
                'image'  => $this->upload->data('file_name')
        );
        $this->db->where('id', $post['id']);
        $this->db->update('produits', $data);
        return $test;
    }
    /****************************************************************************/
    /** modif pdf                                                             **/
    /***************************************************************************/
    public function modif_pdf($post,$files){
        //load library
        $this->load->library('upload');
        // config upload
        $chemin = './pdf';
        $config['upload_path'] = $chemin;
        $config['allowed_types'] = 'pdf';
        $config['max_size']    = '0';
        $this->upload->initialize($config);
        if (isset($files['enpdf']) && $files['enpdf']['name'] != '' ) {
            $filename=$files['enpdf']['name'];
            $this->upload->do_upload('enpdf');
            $data = array(
                    'enpdf'  => $this->upload->data('file_name')
            );
            $this->db->where('id', $post['id']);
            $this->db->update('produits', $data);
        }
        if (isset($files['dupdf']) && $files['dupdf']['name'] != '' ) {
            $filename=$files['dupdf']['name'];
            $this->upload->do_upload('dupdf');
            $data = array(
                    'dupdf'  => $this->upload->data('file_name')
            );
            $this->db->where('id', $post['id']);
            $this->db->update('produits', $data);
        }
        if (isset($files['frpdf']) && $files['frpdf']['name'] != '' ) {
            $filename=$files['frpdf']['name'];
            $this->upload->do_upload('frpdf');
            $data = array(
                    'frpdf'  => $this->upload->data('file_name')
            );
            $this->db->where('id', $post['id']);
            $this->db->update('produits', $data);
        }
    }
    /***************************************************************************/
    /** récupération prduit selectioner pour el slider                        **/
    /***************************************************************************/
    public function get_selected($sel){
        //prepa requete
        $foo = 'SELECT * FROM slider' ;
        //requete
        $query = $this->db->query($foo);

        // mise en variable
        foreach ($query->result_array() as $row)
        {
            $return = $row[$sel];
        }
        return $return;
    }
    /***************************************************************************/
    /** update slider                        **/
    /***************************************************************************/
    public function update_slider($post){
        $data = array(
                'sl1fr'  => $post['sl1fr'],
                'sl2fr'  => $post['sl2fr'],
                'sl3fr'  => $post['sl3fr'],
                'sl4fr'  => $post['sl4fr'],
                'sl1en'  => $post['sl1en'],
                'sl2en'  => $post['sl2en'],
                'sl3en'  => $post['sl3en'],
                'sl4en'  => $post['sl4en'],
                'sl1du'  => $post['sl1du'],
                'sl2du'  => $post['sl2du'],
                'sl3du'  => $post['sl3du'],
                'sl4du'  => $post['sl4du']
        );
        $this->db->empty_table('slider');
        $this->db->replace('slider', $data);
    }
    
}
