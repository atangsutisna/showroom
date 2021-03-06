<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_model extends CI_Model {
	
	// Load database
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	//Listing
	public function listing() {
		$this->db->select('berita.*, kategori_berita.nama_kategori_berita, users.nama');
		$this->db->from('berita');
		// Join
		$this->db->join('kategori_berita','kategori_berita.id_kategori_berita = berita.id_kategori_berita', 'LEFT');
		$this->db->join('users','users.id_user = berita.id_user','LEFT');
		// End join
		$this->db->order_by('id_berita','DESC');
		$query = $this->db->get();
		return $query->result();
	}
	
	//Read
	public function read($slug_berita) {
		$this->db->select('berita.*, kategori_berita.nama_kategori_berita, users.nama AS author');
		$this->db->from('berita');
		// Join
		$this->db->join('kategori_berita','kategori_berita.id_kategori_berita = berita.id_kategori_berita', 'LEFT');
		$this->db->join('users','users.id_user = berita.id_user','LEFT');
		// End join
		$this->db->where('slug_berita',$slug_berita);
		$this->db->order_by('id_berita','DESC');
		$query = $this->db->get();
		return $query->row();
	}
	
	/**
	 * @deprecated
	 */
	public function kategori($cat_id) 
	{
		$this->db->select('berita.*, kategori_berita.nama_kategori_berita, users.nama');
		$this->db->from('berita');
		// Join
		$this->db->join('kategori_berita','kategori_berita.id_kategori_berita = berita.id_kategori_berita', 'LEFT');
		$this->db->join('users','users.id_user = berita.id_user','LEFT');
		// End join
		$this->db->where('berita.id_kategori_berita',$cat_id);
		$this->db->order_by('id_berita','DESC');
		$query = $this->db->get();
		return $query->result();
	}
	
	//Home
	public function home() {
		$this->db->select('berita.*, kategori_berita.nama_kategori_berita, users.nama');
		$this->db->from('berita');
		// Join
		$this->db->join('kategori_berita','kategori_berita.id_kategori_berita = berita.id_kategori_berita', 'LEFT');
		$this->db->join('users','users.id_user = berita.id_user','LEFT');
		// End join
		$this->db->where('berita.status','Publish');
		$this->db->order_by('id_berita','DESC');
		$this->db->limit(6);
		$query = $this->db->get();
		return $query->result();
	}
	
	// detail perberita
	public function detail($id_berita){
		$query = $this->db->get_where('berita',array('id_berita'  => $id_berita));
		return $query->row();
	}
	
	// Tambah
	public function tambah ($data) {
		$this->db->insert('berita',$data);
	}
	
	// Edit 
	public function modify($id_berita, $berita) 
	{
		$this->db->where('id_berita', $id_berita);
		$this->db->update('berita', $berita);
	}
	
	// Delete
	public function delete ($data){
		$this->db->where('id_berita',$data['id_berita']);
		$this->db->delete('berita',$data);
	}

	public function recent_posts($term= NULL, $first = 0, $count = 4, $order = 'id_berita', $order_direction = 'desc')
	{
		$this->db->select('berita.*,kategori_berita.nama_kategori_berita,
						  kategori_berita.slug_kategori_berita, users.nama AS author');
		$this->db->from('berita');
		$this->db->join('kategori_berita','kategori_berita.id_kategori_berita = berita.id_kategori_berita');
		$this->db->join('users', 'berita.id_user = users.id_user');
		$this->db->order_by($order, $order_direction);
		$query = $this->db->get();

		return $query->result();
	}

	public function find_by_cat_id($cat_id) 
	{
		$this->db->select('berita.*, kategori_berita.nama_kategori_berita, users.nama');
		$this->db->from('berita');
		// Join
		$this->db->join('kategori_berita','kategori_berita.id_kategori_berita = berita.id_kategori_berita', 'LEFT');
		$this->db->join('users','users.id_user = berita.id_user','LEFT');
		// End join
		$this->db->where('berita.id_kategori_berita',$cat_id);
		$this->db->order_by('id_berita','DESC');
		$query = $this->db->get();

		return $query->result();
	}

}