<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('My_model', 'mpm');
    }

    public function index() {  

        $this->session->unset_userdata('siteLogin');
        $data_ = $this->my_library->heading_for_page(1);

        $data['desc_'] = $data_['desc_'];
        $data['title'] = $data_['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('disclaimer', $data);
        // $this->load->view('templates/footer');
    }    

    public function home() {
        $this->check_site_login();
        $data_ = $this->my_library->heading_for_page(2);

        $data['desc_'] = $data_['desc_'];
        $data['title'] = $data_['title'];
        $data['menu'] = 1;

        $data['news'] = $this->mpm->get_newsdetail();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu', $data);
        $this->load->view('home');
        $this->load->view('templates/footer');
    }

    public function firm() {
        $this->check_site_login();
        $data_ = $this->my_library->heading_for_page(3);

        $data['desc_'] = $data_['desc_'];
        $data['title'] = $data_['title'];
        $data['menu'] = 2;

        $data['files'] = $this->mpm->get_recent_file();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu', $data);
        $this->load->view('firm');
        $this->load->view('templates/footer');
    }

    public function whyus() {
        $this->check_site_login();
        $data_ = $this->my_library->heading_for_page(6);

        $data['desc_'] = $data_['desc_'];
        $data['title'] = $data_['title'];
        $data['menu'] = 5;

        $data['files'] = $this->mpm->get_recent_file();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu', $data);
        $this->load->view('whyus');
        $this->load->view('templates/footer');
    }

    public function career() {
        $this->check_site_login();
        $data_ = $this->my_library->heading_for_page(7);

        $data['desc_'] = $data_['desc_'];
        $data['title'] = $data_['title'];
        $data['menu'] = 6;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu', $data);
        $this->load->view('career');
        $this->load->view('templates/footer');
    }

    public function contact() {
        $this->check_site_login();
        $data_ = $this->my_library->heading_for_page(8);

        $data['desc_'] = $data_['desc_'];
        $data['title'] = $data_['title'];
        $data['menu'] = 7;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu', $data);
        $this->load->view('contact');
        $this->load->view('templates/footer');
    }

    public function innews() {
        $this->check_site_login();
        $data_ = $this->my_library->heading_for_page(9);

        $data['desc_'] = $data_['desc_'];
        $data['title'] = $data_['title'];
        $data['menu'] = 0;

        $data['files'] = $this->mpm->get_files();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu', $data);
        $this->load->view('innews');
        $this->load->view('templates/footer');
    }

    public function team() {
        $this->check_site_login();
        $data_ = $this->my_library->heading_for_page(4);

        $data['desc_'] = $data_['desc_'];
        $data['title'] = $data_['title'];
        $data['menu'] = 3;

        $data['team'] = $this->mpm->get_team();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu', $data);
        $this->load->view('team', $data);
        $this->load->view('templates/footer');
    }

    public function practiceArea() {
        $this->check_site_login();
        $data_ = $this->my_library->heading_for_page(5);

        $data['desc_'] = $data_['desc_'];
        $data['title'] = $data_['title'];
        $data['menu'] = 4;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu', $data);
        $this->load->view('practice');
        $this->load->view('templates/footer');
    }

    public function practiceDetail($pid_) {
        $this->check_site_login();
        $data_ = $this->my_library->heading_for_page(5);

        $data['desc_'] = $data_['desc_'];
        $data['title'] = $data_['title'];
        $data['menu'] = 4;

        $data['pid_'] = $pid_;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu', $data);
        $this->load->view('practiceDetail', $data);
        $this->load->view('templates/footer');
    }

    public function memberDetail($id_) {
        $this->check_site_login();
        $data_ = $this->my_library->heading_for_page(4);

        $data['desc_'] = $data_['desc_'];
        $data['title'] = $data_['title'];
        $data['menu'] = 3;

        $data['team'] = $this->mpm->get_team_byid($id_);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu', $data);
        $this->load->view('memberDetail', $data);
        $this->load->view('templates/footer');
    }

    public function check_site_login() {
        if (!$this->session->userdata('siteLogin'))
            redirect('web');
    }

    function uploadCV() {
        //-------------
        $config = array(
            'upload_path' => './assets_/resume',
            'allowed_types' => 'doc|docx|pdf',
            'overwrite' => TRUE,
        );

        $file_element_name = 'txtUploadFile';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload($file_element_name)) {
            $path_ji = $this->upload->data();
            $path_ = $path_ji['full_path'];
        } else {
            echo $this->upload->display_errors();
            die();
            $path_ = 'x';
        }

        if ($path_ != 'x') {
            $this->email->set_mailtype("html");

            $this->email->attach($path_);

            $msg_ = "<h2 style='color: #000090'>Email from Careers Page: </h2> <br /><span style='font-size: 13px; color: #121212'>Name: ";
            $msg_ = $msg_ . $this->input->post('txtName') . "<br /><br />";
            $msg_ = $msg_ . "Contact: ";
            $msg_ = $msg_ . $this->input->post('txtPh') . "<br /><br />";
            $msg_ = $msg_ . "Email ID: ";
            $msg_ = $msg_ . $this->input->post('txtEmail') . "<br /><br />";
            $msg_ = $msg_ . "City: ";
            $msg_ = $msg_ . $this->input->post('txtCity') . "<br />";

            $from_ = $this->input->post('txtEmail');
            $name_ = $this->input->post('txtName');

            $this->email->from($from_, $name_);
            $this->email->to('hr@yadavlawassociates.com');

            $this->email->subject('Curriculum Vitae: ' . $this->input->post('txtName'));
            $this->email->message($msg_);

            if ($this->email->send()) {
                $this->session->set_flashdata('error_msg', 'Thanks for submitting your CV. We will get back to you soon...');
            } else {
                $this->session->set_flashdata('error_msg', 'Something went wrong....Try after sometime');
            }
        } else {
            $this->session->set_flashdata('error_msg', 'X: Server Error while attaching file !!');
        }

        redirect('web/career/');
    }

    function client_section() {
        //-------------        
        $this->email->set_mailtype("html");

        $msg_ = "<h2 style='color: #000090'>Email from Client Section of Contact Page: </h2> <br /><span style='font-size: 13px; color: #121212'>Name: ";
        $msg_ = $msg_ . $this->input->post('txtName') . "<br /><br />";
        $msg_ = $msg_ . "Contact: ";
        $msg_ = $msg_ . $this->input->post('txtPh') . "<br /><br />";
        $msg_ = $msg_ . "Email ID: ";
        $msg_ = $msg_ . $this->input->post('txtEmail') . "<br /><br />";
        $msg_ = $msg_ . "Preferred Time for Contact ";
        $msg_ = $msg_ . $this->input->post('txtTime') . "<br /><br />";
        $msg_ = $msg_ . "Query: ";
        $msg_ = $msg_ . $this->input->post('txtQuery') . "<br />";

        $from_ = $this->input->post('txtEmail');
        $name_ = $this->input->post('txtName');

        $this->email->from($from_, $name_);
        $this->email->to('client@yadavlawassociates.com');
        //$this->email->bcc('');

        $this->email->subject('Inventor/Client Enquiry from: ' . $this->input->post('txtName'));
        $this->email->message($msg_);

        if ($this->email->send()) {
            $this->session->set_flashdata('error_msg', 'Thanks for Contacting us. We will get back to you soon...');
        } else {
            $this->session->set_flashdata('error_msg', 'Something went wrong....Try after sometime');
        }
        redirect('/web/contact/');
    }

    public function entersite() {
        //$this->form_validation->set_rules('g-recaptcha-response', 'Captcha', 'callback_recaptcha');

        /*if ($this->form_validation->run() === FALSE) {
            $this->session->unset_userdata('siteLogin');
            redirect('web');
        } else {*/
            $this->session->set_userdata('siteLogin', '1');
            redirect('web/home');
        //}
    }

    public function recaptcha($str = '') {
        $google_url = "https://www.google.com/recaptcha/api/siteverify";
        $secret = '6LfMMB4UAAAAAJYRgEGSNjw5PYJr0KCvyamryAs8';
        $ip = $_SERVER['REMOTE_ADDR'];
        $url = $google_url . "?secret=" . $secret . "&response=" . $str . "&remoteip=" . $ip;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_TIMEOUT, 10);
        curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
        $res = curl_exec($curl);
        curl_close($curl);
        $res = json_decode($res, true);
        //reCaptcha success check
        if ($res['success']) {
            return TRUE;
        } else {
            $this->session->set_flashdata('_msg_q', 'The reCAPTCHA field is telling me that you are a robot. Please check the recaptcha field and try again?');
            return FALSE;
        }
    }

}
