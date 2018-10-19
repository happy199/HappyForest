<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function acceuil()
    {
        $this->load->view('acceuil');
    }
    public function gallery()
    {
        $this->load->view('galerie');
    }
    public function candidates()
    {
        $donne =  $this->miss->get()->result();

        $donnee=array();
        $i=0;
        foreach ($donne as $row){
            $data[$i]["nom"]=$row->nom;
            $data[$i]["prenom"]=$row->prenom;
            $data[$i]["ecole"]=$row->ecole;
            $data[$i]["image"]=$row->image;
            $data[$i]["id_candi"]=$row->id_candi;

            $data[$i]["votes"]=$this->miss->get_vote($row->id_candi);

            $i++;
        }
        $donnee=$data;
//        die(var_dump($data));
        $this->load->view('candidates', compact("donnee"));
    }
    public function partenaire()
    {
        $this->load->view('partenaire');
    }

    public function essaie($value='')
    {
        $donnee =  $this->miss->get();

        var_dump($donnee->result());
    }

    public function save_vote(){
        $ip=$this->uri->segment(3);
        $id_candidate=$this->uri->segment(4);
       // die(var_dump(array($id_candidate,$ip)));
        $ip=1100;
        if ($this->miss->check_ip($ip)==false)
        {
            $this->miss->save_vote($ip,$id_candidate);
            redirect(base_url()."users/candidates");
        }
        redirect(base_url()."users/candidates");


    }


}