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
   
}
