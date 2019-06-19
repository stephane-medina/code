<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Produits extends CI_Controller
{
///-------------------------------------------------------------------------------------------------------------
/// \brief                  Fonction d'affichage de la page d'acceuil jarditou
/// \author                 Madsteph
/// \date                   02/05/2019
    
    public function accueil()
    {
        $this->load->view('accueil');
    }
///-------------------------------------------------------------------------------------------------------------
/// \brief                  Fonction d'affichage de la liste complète des produits de la BDD jarditou
/// \details                Affiché sous forme de tableau dans la partie Admin du site Jarditou 
/// \param                  $aListe     Contient le SELECT * de la table des produits
/// \return                 $aView      Contient le SELECT * de la table des produits sous forme de tableau
/// \author                 Madsteph
/// \date                   02/05/2019
    
    public function liste()
    {
        $this->load->model('produits_model');
        $aListe = $this->produits_model->liste();
        $aView["liste_produits"] = $aListe;
        // On passe le tableau en second argument de la méthode
        $this->load->view('liste', $aView);
    }
///-------------------------------------------------------------------------------------------------------------
/// \brief                  Fonction d'affichage du formulaire de connexion à l'interface d'administration
/// \details                Affiché sous forme de formulaire 
/// \param                  $aListe     Contient le SELECT * de la table des produits
/// \author                 Madsteph
/// \date                   02/05/2019

    public function admin()
    {
        $this->load->view('admin');
    }
/*-------------------------------------------------------------------------------------------------------------*/
    public function choix_admin()
    {
        $this->load->view('choix_admin');
    }
///-------------------------------------------------------------------------------------------------------------
/// \brief                  Fonction d'ajout d'un item dans la BDD
/// \details                Affiché sous forme de formulaire 
/// \param                  $aListe_cat      Provient du Categories_model et contient la liste par nom des catégories
/// \param                  $config1         Contient les parametres de contrôle de saisie et les messages d'erreur
/// \param                  $aview1          Envoie des messages d'erreur vers la view
/// \param                  $data            Récupère les saisies venant du POST
/// \param                  $date            Permet de récupérer la date au bon format
/// \param                  $name            Récupère le nom du fichier demandé dans la saisie
/// \param                  $file_ext        Permet de récupérer l'extension du fichier
/// \param                  $config          Contient les parametres du fichier nouveau
/// \return                 $aView           Renvoie la liste des catégories
/// \author                 Madsteph
/// \date                   06/05/2019
    public function ajout()
    {
        $this->load->model('Categories_model');
        $aListe_cat = $this->Categories_model->select_cat();
        $aView["liste_categories"] = $aListe_cat;
                
        $config1 = array (
                        array (
                              'field' => 'pro_libelle',
                              'label' => 'libellé',
                              'rules' => 'required',
                              'errors' => array (
                                                'required' => 'Vous devez saisir un %s.',
                                                ),
                              ),
                        );
        
        $this->form_validation->set_rules($config1);
        
        if ($this->form_validation->run() == TRUE)
        {
            $data = $this->input->post();
            $date=date('Y-m-d');
            $data["pro_d_ajout"]= $date;
            if (isset($data['sous_cat_id']))
            {
                $data["pro_cat_id"]= $data['sous_cat_id'];
                unset($data['sous_cat_id']);
            }
            $name = $_FILES["pro_photo"]["name"];
            $file_ext = pathinfo($name, PATHINFO_EXTENSION);
            
            $this->load->model('Produits_model');
            $this->Produits_model->ajout($data);
            
            $config['upload_path'] = FCPATH.'assets/img/';
            $config['file_name'] = $this->db->insert_id().'.'.$file_ext;
            $config['allowed_types'] = 'gif|jpg|png';
            $config['overwrite'] = TRUE;
            $config['max_size'] = '1024';
            $config['max_width']  = '1024';
            $config['max_height']  = '768';
            $this->load->library("upload", $config);
            
            if (!$this->upload->do_upload('pro_photo')) 
            {
                $errors = array('error' => $this->upload->display_errors());
                $aView1["errors"] = $errors;
                $this->load->view('ajout', $aView1);
            }
            
            redirect('Produits/liste');
        }
        else
        {
            $this->load->view('ajout', $aView);
            
        }
    }
/*-------------------------------------------------------------------------------------------------------------*/
    
    public function get_modele_json($cat_id)
    {       
        
        $this->load->model('Categories_model');
        $modeles = $this->Categories_model->select_sous_cat($cat_id);
        
        $this->output->set_content_type('application/json');
        $this->output->set_status_header(200);        
        $this->output->set_output(json_encode($modeles));
           
    }
    
/*-------------------------------------------------------------------------------------------------------------*/
    
    public function modif($pro_id)
    {
        date_default_timezone_set('Europe/Paris');
        $this->load->model('Categories_model');
        $aListe_cat = $this->Categories_model->select_cat();
        $aView["liste_categories"] = $aListe_cat;
        $config1 = array (
            array (
                'field' => 'pro_libelle',
                'label' => 'libellé',
                'rules' => 'required',
                'errors' => array (
                    'required' => 'Vous devez saisir un %s.',
                ),
            ),
        );
        
        $this->form_validation->set_rules($config1);
        
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->model('produits_model');
            $aListe = $this->produits_model->modif_forbidden($pro_id);
            $aView["produits"] = $aListe; // première ligne du résultat
            $this->load->view('modif', $aView);
        }
        else
        {
            $data = $this->input->post();
            $date=date('Y-m-d H:i:s');
            $data["pro_d_modif"]= $date;
            $name = $_FILES["pro_photo"]["name"];
            $file_ext = pathinfo($name, PATHINFO_EXTENSION);
            $pro_id = $this->input->post("pro_id");
            $this->load->model('produits_model');
            $this->produits_model->modif_allowed($pro_id,$data);
            $config['upload_path'] = FCPATH.'assets/img/';
            $config['file_name'] = $pro_id.'.'.$file_ext;
            $config['allowed_types'] = 'gif|jpg|png';
            $config['overwrite'] = TRUE;
            $config['max_size'] = '1024';
            $config['max_width']  = '1024';
            $config['max_height']  = '768';
            $this->load->library("upload", $config);
            if (!$this->upload->do_upload('pro_photo'))
            {
                $errors = array('error' => $this->upload->display_errors());
                $aView1["errors"] = $errors;
                $this->load->view('ajout', $aView1);
            }
            redirect('produits/liste');
        }
    }
/*-------------------------------------------------------------------------------------------------------------*/
    public function suppr($pro_id)
    {
            $data = $this->input->get();
  //          $pro_id = $this->input->get("pro_id");
            $this->load->model('produits_model');
            $this->produits_model->suppr($pro_id,$data);
            redirect('produits/liste');
    }
}
?>