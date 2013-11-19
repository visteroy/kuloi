<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct()
    	{
        	parent::__construct();
        	$this->load->database();
    	}

	public function index()
	{
		$this->load->view('user');
	}
	function check_login()
	{
		if ($_POST['submit_btn']) 
		{
			if ($_POST['username'] == NULL && $_POST['password'] == NULL)
			{
				$alert['nothing'] = "No username and password filled";
				$this->login_fail($alert);
			}
			if ($_POST['username'] != NULL && $_POST['password'] == NULL)
			{
				$alert['nothing'] = "No password filled";
				$this->login_fail($alert);
			}
			if ($_POST['username'] == NULL && $_POST['password'] != NULL)
			{
				$alert['nothing'] = "No username filled";
				$this->login_fail($alert);
			}
			if ($_POST['username'] != NULL && $_POST['password'] != NULL)
			{
				$username = $_POST['username'];
				$password = $_POST['password'];
				$this->load->database();
				$this->load->model('Muser');
				$result = $this->Muser->check_user_exist($username, $password);
				if ($result != NULL)
				{
					$alert['nothing'] = "Login OK";
					$this->login_fail($alert);
				}
				else
				{
					$alert['nothing'] = "Wrong username or password";
					$this->login_fail($alert);
				}
			}
		}
	}
	
	function login_fail($alert)
	{
		$this->load->view('login_fail', $alert);
	}
	function insert_user()
        {
        
        }
}