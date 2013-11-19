<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Muser extends CI_Model {
	function __construct()
    	{
        	parent::__construct();
        	$this->load->database();
    	}
	function check_user_exist($username, $password)
	{
                $password = md5($password);
		$query = "SELECT * FROM kuloi_user WHERE username='".$username."' AND password='".$password."'";
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
        function insert_user()
        {
            $info = array(
                'id' => rand(10000, 99999) + time(),
                'username' => 'admin',
                'password' => md5('123456'),
                'real_name' => 'Admin',
                'email' => 'admin@kuloi.com',
                'created' => time(),
                'modified' => time()
                
            );
            $query = $this->db->insert('kuloi_user', $info);
        }

}