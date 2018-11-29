<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pdf_uploads extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('My_pdfuploads_model', 'mpm');
    }

    function index(){ 
        $this->check_login();
        $data['dashboard'] = '';
        $data['member'] = '';
        $data['news'] = '';
        $data['pdf'] = ' class="active"';
        $data['title'] = "Uploads News Files";
        $data['folder'] = 'pdfup';
        $data['page'] = 'index';
        $data['login_'] = 'false';

        $data['user'] = $this->session->userdata('user__');
        $this->load->view('templates/header');
        $this->load->view('home', $data);
        $this->load->view('templates/footer');
    }   
    public function check_site_login() {
        if (!$this->session->userdata('siteLogin'))
            redirect(_ROOT_URL_);
    } 
    function check_login(){
        $this->check_site_login();
        if(! $this->session->userdata('user__')){redirect(_ROOT_URL_.'/'.'index.php/web/home');}
    }
    function file_upload(){
        $data['msg'] = $this->mpm->file_upload();
        echo json_encode($data);
    }
    
    function deletepdf($id) {
        $data['msg']  = $this->mpm->deletepdf_($id);
        echo json_encode($data);
    }
    
    function get_files(){
        $data = $this->mpm->get_files();
        echo json_encode($data);
    }
}