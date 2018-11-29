<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('my_model', 'mm');
	}
	public function index()
	{
		$this->check_site_login();
		$data['folder'] = 'login';
		$data['page'] = 'index';
		$data['login_'] = 'true';

		$this->load->view('templates/header');
		$this->load->view('login', $data);
		$this->load->view('templates/footer');
	}
	public function check_site_login() {
        if (!$this->session->userdata('siteLogin'))
            redirect(_ROOT_URL_);
    }
	function member(){
		$this->check_login();

		$data['dashboard'] = '';
		$data['member'] = ' class="active"';
		$data['news'] = '';
		$data['pdf'] = '';
		$data['title'] = "Member's Profile";
		$data['folder'] = 'members';
		$data['page'] = 'index';
		$data['login_'] = 'false';
		$data['print_members'] = $this->mm->get_members();
		$this->load->view('templates/header');
		$this->load->view('home', $data);
		$this->load->view('templates/footer');
	}
	function get_members(){
		$data['print_members'] = $this->mm->get_members();
		echo json_encode($data);
	}

	function dashboard(){
		$this->check_login();

		$data['dashboard'] = ' class="active"';
		$data['member'] = '';
		$data['news'] = '';
		$data['pdf'] = '';
		$data['title'] = "Dashboard";
		$data['folder'] = 'dashboard';
		$data['page'] = 'index';
		$data['login_'] = 'false';

		$this->load->view('templates/header');
		$this->load->view('home', $data);
		$this->load->view('templates/footer');	
	}
	function check_login(){
		$this->check_site_login();
        if(! $this->session->userdata('user__')){redirect(_ROOT_URL_.'/'.'index.php/web/home');}
    }
	function checkAuthen(){
		if($this->mm->checkuser() == true){
			redirect('admin/member');
		} else {
			redirect('admin');
		}
	}
	function logout(){
		$this->unset_user_sessions();
		redirect(_ROOT_URL_.'/'.'index.php/web/home');
	}

	function unset_user_sessions(){
		$this->session->unset_userdata('user__');
		$this->session->unset_userdata('status__');
	}
	function del_member($mid){
		$data = $this->mm->del_member($mid);
		echo json_encode($data);
	}
	function edit_member($mid){
		$data = $this->mm->get_member($mid);
		echo json_encode($data);	
	}
	function submitmember(){
		$data = $this->mm->submitmember();
		echo json_encode($data);
	}
}
