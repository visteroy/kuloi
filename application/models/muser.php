<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Muser extends CI_Model {
	function __construct()
    	{
        	parent::__construct();
        	$this->load->database();
    	}
	function check_user_exist($username, $password)
	{
		$query = "SELECT * FROM kuloi_user WHERE username='".$username."' AND password='".$username."'";
		$result = $this->db->query($query);
		if ($result)
		{
			return $result->result_array();
		}
		else
		{
			return NULL;
		}
	}

}