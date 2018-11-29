<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	function checkuser(){
		$user = $this->input->post('txtUser');
		$pwd = $this->input->post('txtPwd');

		$this->db->where('USERNAME', $user);
		$this->db->where('PASSWORD', $pwd);
		$query = $this->db->get('login');

		if($query->num_rows()!=0){
			$r = $query->row();
			$this->session->set_userdata('user__', $r->USERNAME);
			$this->session->set_userdata('status__', $r->STATUS_);
			$this->session->set_flashdata('msg_', 'success');
			$bool_ = true;
		} else {
			$this->session->unset_userdata('user__');
			$this->session->unset_userdata('status__');
			$this->session->set_flashdata('msg_', 'X: False Credentials...');
			$bool_ = false;
		}
		return $bool_;
	}

	function changepwd(){
		if($this->session->userdata('pwd_count') <= 3){
		    $old_pwd = $this->input->post('old_pwd');
		    $new_pwd = $this->input->post('new_pwd');

		    $this->db->where('USERNAME', $this->session->userdata('user__'));
		    $this->db->where('PASSWORD', $old_pwd);
		    $query = $this->db->get('login');

		    if($query->num_rows() != 0){
		        $data = array(
		            'PASSWORD' => $new_pwd
		        );
		        $this->db->where('USERNAME', $this->session->userdata('user__'));
		        $this->db->where('PASSWORD', $old_pwd);
		        $query = $this->db->update('login', $data);

		        $bool_ = array('res_'=>TRUE, 'msg_' => 'good');
		        $this->session->unset_userdata('pwd_count');
		    } else {
		        $bool_ = array('res_'=>FALSE, 'msg_' => 'Your old credentials are not matching. Please try again!!!');
		    }
		} else {
		    $bool_ = array('res_'=>FALSE, 'msg_' => 'All three chances over.');
		}
	return $bool_;
    }

	function get_members(){
		$this->db->order_by('PRIORITY_');
		$query = $this->db->get('members');
		return $query->result();
	}
	function get_member($mid){
		$this->db->where('MID', $mid);
		$query = $this->db->get('members');
		return $query->row();
	}
	function submitmember(){
		$name = $this->input->post('txtName_');
		$expertArea = $this->input->post('txtExpertArea');
		$experience = $this->input->post('txtExperience');
		$contact = $this->input->post('txtContact');
		$email = $this->input->post('txtEmail');
		$brief = $this->input->post('txtBriefDesc_');
		$cond_ = $this->input->post('condition_');
		$modify = $this->input->post('MID_modify');

		if($cond_ == 'new'){
			$this->db->select('MAX(PRIORITY_) as pr');
			$query = $this->db->get('members');
			$r =  $query->row();
			$counter = $r->pr + 1;

			$data = array(
				'NAME_' => $name,
				'EXPERT_AREA' => $expertArea,
				'EXPERIENCE' => $experience,
				'BRIEF_DESC_' => $brief,
				'CONTACT_DETAIL' => $contact,
				'EMAIL_' => $email,
				'USERNAME_' => $this->session->userdata('user__'),
				'DATE_' => date('Y-m-d H:i:s'),
				'STATUS_' => 1,
				'PRIORITY_'=>$counter
				);
			$query = $this->db->insert('members', $data);
			if($query == true){
				$mid_ = $this->db->insert_id();

				$photo_path_ = $this->upload_member_photo($mid_);
				$cv_path_ = $this->upload_cv($mid_);
				$data = array(
						'PHOTO_' => $photo_path_,
						'CV_' => $cv_path_
					);
				$this->db->where('MID', $mid_);
				$query = $this->db->update('members', $data);
				if($query == true){
					$data = array('res_'=>'new', 'msg'=>'<span style="padding: 3px; color: #ffffff; background: #00AA00; border-radius: 5px">Submitted Successfully.</span>');
				} else {
					$data = array('res_'=>'new', 'msg'=>'<span style="padding: 3px; color: #ffffff; background: #0000ff; border-radius: 5px">Submitted Successfully but without any uploads.</span>');
				}
			} else {
				$data = array('res_'=>'new', 'msg'=>'<span style="padding: 3px; color: #ffffff; background: #ff0000; border-radius: 5px">Something goes wrong. Please try again.</span>');
			}
		} else if($cond_ == 'edit'){
			$photo_path_ = $this->upload_member_photo($modify);
			$cv_path_ = $this->upload_cv($modify);
			if($photo_path_ != 'no-image.png' && $cv_path_ != 'no-file'){
				$data = array(
					'NAME_' => $name,
					'PHOTO_' => $photo_path_,
					'EXPERT_AREA' => $expertArea,
					'EXPERIENCE' => $experience,
					'BRIEF_DESC_' => $brief,
					'CONTACT_DETAIL' => $contact,
					'EMAIL_' => $email,
					'CV_' => $cv_path_,
					'USERNAME_' => $this->session->userdata('user__'),
					'DATE_' => date('Y-m-d H:i:s'),
					);
			} else if($photo_path_ == 'no-image.png' && $cv_path_ == 'no-file'){
					$data = array(
					'NAME_' => $name,
					'EXPERT_AREA' => $expertArea,
					'EXPERIENCE' => $experience,
					'BRIEF_DESC_' => $brief,
					'CONTACT_DETAIL' => $contact,
					'EMAIL_' => $email,
					'USERNAME_' => $this->session->userdata('user__'),
					'DATE_' => date('Y-m-d H:i:s'),
					);
			} else if($photo_path_ != 'no-image.png' && $cv_path_ == 'no-file'){
				$data = array(
					'NAME_' => $name,
					'PHOTO_' => $photo_path_,
					'EXPERT_AREA' => $expertArea,
					'EXPERIENCE' => $experience,
					'BRIEF_DESC_' => $brief,
					'CONTACT_DETAIL' => $contact,
					'EMAIL_' => $email,
					'USERNAME_' => $this->session->userdata('user__'),
					'DATE_' => date('Y-m-d H:i:s'),
					);
			} else if($cv_path_ != 'no-file' && $photo_path_ == 'no-image.png'){
				$data = array(
					'NAME_' => $name,
					'EXPERT_AREA' => $expertArea,
					'EXPERIENCE' => $experience,
					'BRIEF_DESC_' => $brief,
					'CONTACT_DETAIL' => $contact,
					'EMAIL_' => $email,
					'CV_' => $cv_path_,
					'USERNAME_' => $this->session->userdata('user__'),
					'DATE_' => date('Y-m-d H:i:s'),
					);
			}
			$this->db->where('MID', $modify);
			$query = $this->db->update('members', $data);
			if($query == true){
				$data = array('res_'=>'edit', 'msg'=>'<span style="padding: 3px; color: #ffffff; background: #00AA00; border-radius: 5px">Updated Successfully.</span>');
			} else {
				$data = array('res_'=>'edit', 'msg'=>'<span style="padding: 3px; color: #ffffff; background: #ff0000; border-radius: 5px">Something goes wrong. Please try again.</span>');
			}
		}
		return $data;
	}

	function del_member($mid){
		$photo_ = FCPATH . 'assets/memberpics/';
		$cv_  = FCPATH . 'assets/membercv/';

		$this->db->where('MID', $mid);
		$query = $this->db->get('members');
		
		if($query->num_rows()!=0){
			$r = $query->row();
			
			$this->db->where('MID', $mid);
			$query = $this->db->delete('members');

			if($query = true){
				if($r->PHOTO_!='no-image.png'){
					$src_photo_ = $photo_ . $r->PHOTO_;
					@unlink($src_photo_);
				}
				if($r->CV_!='no-file'){
					$src_cv_ = $cv_ . $r->CV_;
		    		@unlink($src_cv_);
				}
				$data = array('res_'=>'del', 'msg'=>'<span style="padding: 3px; color: #ffffff; background: #ff0000; border-radius: 5px">Deleted Successfully.</span>');
			} else {
				$data = array('res_'=>'del', 'msg'=>'<span style="padding: 3px; color: #ffffff; background: #ff0000; border-radius: 5px">Somethin goes wrong. Please try again</span>');
			}
    	} else {
    		$data = array('res_'=>'del', 'msg'=>'<span style="padding: 3px; color: #ffffff; background: #ff0000; border-radius: 5px">Record not found.</span>');
    	}
    return $data;
	}

	function upload_member_photo($mid){
		//clearstatcache();
		$config = array(
            'upload_path' => './assets/memberpics',
            'allowed_types' => 'jpg|png',
            'overwrite' => TRUE,
            'max_size' => 500,
            'file_name' => 'member_'.$mid,
            'overwrite' => true
        );
        $file_element_name = 'txtPhoto';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload($file_element_name)) {
            $path_ji = $this->upload->data();
            $path_ = $path_ji['file_name'];
        } else {
            $path_ = 'no-image.png';
        }
        return $path_;
	}

	function upload_cv($mid){
		//clearstatcache();
		$config1 = array(
            'upload_path' => './assets/membercv',
            'allowed_types' => 'doc|docx|pdf',
            'overwrite' => TRUE,
            'max_size' => 1050,
            'file_name' => 'cv_'.$mid,
            'overwrite' => true
        );
        $file_element_name = 'txtCV_';
        $this->upload->initialize($config1);
        $this->load->library('upload', $config1);

        if ($this->upload->do_upload($file_element_name)) {
            $path_ji = $this->upload->data();
            $path_ = $path_ji['file_name'];
        } else {
        	//$path_ = $this->upload->display_errors();
            $path_ = 'no-file';
        }
        return $path_;
	}
}