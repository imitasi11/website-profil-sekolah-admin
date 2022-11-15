<?php
class M_video extends CI_Model{

	function get_all_video(){
		$hsl=$this->db->query("SELECT *,DATE_FORMAT(video_tanggal,'%d/%m/%Y') FROM tbl_video ORDER BY video_id DESC");
		return $hsl;
	}
	function simpan_video($judul,$link,$user_id,$user_nama){
		$this->db->trans_start();
            $this->db->query("insert into tbl_video(video_judul,video_pengguna_id,video_author,video_link) values ('$judul','$user_id','$user_nama','$link')");
            $this->db->query("update tbl_album set album_count=album_count+1 where album_id='$album'");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
        return true;
        else
        return false;
	}
	
	function update_video($video_id,$judul,$album,$user_id,$user_nama,$link){
		$hsl=$this->db->query("update tbl_video set video_judul='$judul',video_link='$link', video_pengguna_id='$user_id',video_author='$user_nama' where video_id='$video_id'");
		return $hsl;
	}
	
	function hapus_video($kode){
		$this->db->trans_start();
            $this->db->query("delete from tbl_video where video_id='$kode'");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
        return true;
        else
        return false;
	}

	//Front-End
	function get_video_home(){
		$hsl=$this->db->query("SELECT tbl_video.*,DATE_FORMAT(video_tanggal,'%d/%m/%Y') AS tanggal,album_nama FROM tbl_video join tbl_album on video_album_id=album_id ORDER BY video_id DESC limit 4");
		return $hsl;
	}

	function get_video_by_album_id($idalbum){
		$hsl=$this->db->query("SELECT tbl_video.*,DATE_FORMAT(video_tanggal,'%d/%m/%Y') AS tanggal,album_nama FROM tbl_video join tbl_album on video_album_id=album_id where video_album_id='$idalbum' ORDER BY video_id DESC");
		return $hsl;
	}
	

}