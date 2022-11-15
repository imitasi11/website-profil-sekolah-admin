<?php
class Videos extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
        $this->load->model('m_video');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_video->get_all_video();
		$this->load->view('admin/v_videos',$x);
	}
	
	function simpan_videos(){

	                        $judul=strip_tags($this->input->post('xjudul'));
							$link=strip_tags($this->input->post('xvideo'));
							$kode=$this->session->userdata('idadmin');
							$user=$this->m_pengguna->get_pengguna_login($kode);
							$p=$user->row_array();
							$user_id=$p['pengguna_id'];
							$user_nama=$p['pengguna_nama'];
							$this->m_video->simpan_video($judul,$link,$user_id,$user_nama);
							echo $this->session->set_flashdata('msg','success');
							
							redirect('admin/videos');
						}

	function update_video(){
				
	            $judul=strip_tags($this->input->post('xjudul'));
							$link=strip_tags($this->input->post('xvideo'));
							$video_id=strip_tags($this->input->post('kode'));
							$kode=$this->session->userdata('idadmin');
							$user=$this->m_pengguna->get_pengguna_login($kode);
							$p=$user->row_array();
							$user_id=$p['pengguna_id'];
							$user_nama=$p['pengguna_nama'];
							$this->m_video->update_video($video_id,$judul,$link,$user_id,$user_nama);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/videos');
	                    

	}

	function hapus_video(){
		$kode=$this->input->post('kode');
		$this->m_video->hapus_video($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/videos');
	}

}