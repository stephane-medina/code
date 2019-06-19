<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Produits_model extends CI_Model
{
/*-------------------------------------------------------------------------------------------------------------*/
     public function liste() 
     {
         $results = $this->db->query('SELECT * FROM produits ORDER BY pro_id DESC');
         $aListe = $results->result(); 
         return $aListe;            
     }
/*-------------------------------------------------------------------------------------------------------------*/
     public function modif_forbidden($pro_id)
     {
         $results = $this->db->query("SELECT * FROM produits WHERE pro_id= ?", array($pro_id));
         $aListe = $results->row();
         return $aListe;
     }
/*-------------------------------------------------------------------------------------------------------------*/
     public function modif_allowed($pro_id,$data)
     {
         $this->db->where('pro_id', $pro_id);
         $this->db->update('produits', $data);
     }
/*-------------------------------------------------------------------------------------------------------------*/
     public function suppr($pro_id,$data)
     {
         $this->db->where('pro_id', $pro_id);
         $this->db->delete('produits', $data);
     }
/*-------------------------------------------------------------------------------------------------------------*/
     public function ajout($data)
     {
         $this->db->insert("produits", $data);
     }
/*-------------------------------------------------------------------------------------------------------------*/
}
?>
