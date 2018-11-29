<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class My_pdfuploads_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function file_upload(){
        $user = $this->session->userdata('user__');
        $url = $this->input->post('txtURL');
        $data = array(
            'URL_' => $url,
            'USERNAME_' => $user,
            'STATUS_' => 1,
            'DATE_' => date('Y-m-d H:i:s')
            );
        $query = $this->db->insert('b2_pdf', $data);
        $pdfid = $this->db->insert_id();

        $path_ = $this->upload_me($pdfid);
        $data = array(
            'PATH_' => $path_
            );
        $this->db->where('PDFID', $pdfid);
        $query = $this->db->update('b2_pdf', $data);
        if($query == TRUE){
            $data = '<span style="color:00aa00">Uploaded successfully</span>';
        } else {
            $data = '<span style="color:#ff0000">Some server error !! Please try again.</span>';
        }
    return $data;    
    }

    function upload_me($pdfid){
        //clearstatcache();
        $config = array(
            'upload_path' => './assets/newspaper',
            'allowed_types' => 'jpg|png|pdf',
            'overwrite' => TRUE,
            'max_size' => 7000,
            'file_name' => 'news_'.$pdfid,
            'overwrite' => true
        );
        $file_element_name = 'myfile';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload($file_element_name)) {
            $path_ji = $this->upload->data();
            $path_ = $path_ji['file_name'];
        } else {

            $path_ = 'no-image.png';
        }
        return $path_;
    }

    function deletepdf_($pdfid) {
        $path__ = FCPATH . 'assets/newspaper/';
        $this->db->where('PDFID', $pdfid);
        $query = $this->db->get('b2_pdf');

        if ($query->num_rows() != 0) {
            $r = $query->row();

            $this->db->where('PDFID', $pdfid);
            $q = $this->db->delete('b2_pdf');

            $src = $path__ . $r->PATH_;
            @unlink($src);

            if($q == TRUE){
                $data = 'Deleted successfully.';
            } else {
                $data = 'Server not responding. Please try again.';
            }
        } else {
            $data = 'Server not responding. Please try again.';
        }
        return $data;
    }

    function get_files(){
        $this->db->order_by('PDFID', 'desc');
        $this->db->where('STATUS_',1);
        $query = $this->db->get('b2_pdf');
        return $query->result();
    }
}

