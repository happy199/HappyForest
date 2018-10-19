<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MissModel extends CI_Controller {

	public function get()
	{
		$all = $this->db->select("*")
				->from("info_img")
				->get();

		return $all;
	}
    public function get_vote($id_candidate)
    {
        $all = $this->db->select("id_votant")
            ->from("info_votant")
            ->where("id_candi",$id_candidate)
            ->get()
            ->num_rows();

        return $all;
    }

    public function check_ip($ip)
    {
        $check = $this->db->select("*")
            ->from("info_votant")
            ->where("ip_votant",$ip)
            ->get()
            ->num_rows();
        if ($check>0){
            return true;
        }else{
            return false;
        }
    }

    public function save_vote($ip,$id_candidate)
    {
        $this->db->insert("info_votant",array("id_candi"=>$id_candidate,"date_vote"=>date('Y-m-d H:i:s'),"ip_votant"=>$ip));

    }
}
