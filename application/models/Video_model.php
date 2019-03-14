<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video_model extends CI_Model 
{
	private $table_name = 'video';

	public function __construct() 
	{
		parent::__construct();
		$this->load->database();
	}
	
	//Listing
	public function listing() {
		$this->db->select('*');
		$this->db->from('video');
		$this->db->order_by('id_video','DESC');
		$query = $this->db->get();
		return $query->result();
	}
	
	//Home video
	public function home() {
		$this->db->select('*');
		$this->db->from('video');
		$this->db->where('posisi','Homepage');
		$this->db->order_by('id_video','DESC');
		$this->db->limit(2);
		$query = $this->db->get();
		return $query->result();
	}
	
	// detail pervideo
	public function detail($id_video){
		$query = $this->db->get_where('video',array('id_video'  => $id_video));
		return $query->row();
	}
	
	// Tambah
	public function tambah ($data) {
		$this->db->insert('video',$data);
	}
	
	public function modify($id_video, $video)
	{
		$this->db->where('id_video', $id_video);
		$this->db->update($this->table_name, $video);
	}
	
	public function delete ($data)
	{
		$this->db->where('id_video',$data['id_video']);
		$this->db->delete('video',$data);
	}
}