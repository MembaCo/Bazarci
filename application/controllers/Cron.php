<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cron extends CI_Controller 
{

	public function __construct() 
	{
		parent::__construct();
		$this->load->model("Kullanici_Model");

	}

	public function count_online() 
	{
		$count = $this->Kullanici_Model->get_online_count();
		$this->db->where("ID", 1)->update("site_settings", array("currently_online" => $count));
		exit();
	}

}

?>