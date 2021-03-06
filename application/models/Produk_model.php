<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model 
{
	private $table_name = 'produk';

	public function __construct() 
	{
		parent::__construct();
		$this->load->database();
	}
	
	//Listing
	public function listing() {
		$this->db->select('produk.*, kategori_produk.nama_kategori_produk, users.nama');
		$this->db->from('produk');
		// Join
		$this->db->join('kategori_produk','kategori_produk.id_kategori_produk = produk.id_kategori_produk', 'LEFT');
		$this->db->join('users','users.id_user = produk.id_user','LEFT');
		// End join
		$this->db->order_by('id_produk','DESC');
		$query = $this->db->get();
		return $query->result();
	}
	
	//Home
	/** 
	public function find_all($first = 0, $limit = 20, $sort = 'id_product', $sort_order = 'DESC') {
		$this->db->select('produk.*, kategori_produk.nama_kategori_produk, users.nama');
		$this->db->from('produk');
		// Join
		$this->db->join('kategori_produk','kategori_produk.id_kategori_produk = produk.id_kategori_produk', 'LEFT');
		$this->db->join('users','users.id_user = produk.id_user','LEFT');
		// End join
		$this->db->where('produk.status_produk','Publish');
		$this->db->order_by($sort, $sort_order);
        $this->db->limit($count, $limit);

		$query = $this->db->get();
		return $query->result();
	} **/
	
	//Kategori
	public function kategori($id_kategori_produk) {
		$this->db->select('produk.*, kategori_produk.nama_kategori_produk, users.nama');
		$this->db->from('produk');
		// Join
		$this->db->join('kategori_produk','kategori_produk.id_kategori_produk = produk.id_kategori_produk', 'LEFT');
		$this->db->join('users','users.id_user = produk.id_user','LEFT');
		// End join
		$this->db->where('produk.status_produk','Publish');
		$this->db->where('produk.id_kategori_produk',$id_kategori_produk);
		$this->db->order_by('id_produk','DESC');
		$this->db->limit(6);
		$query = $this->db->get();
		return $query->result();
	}
	
	//Read
	public function read($slug_produk) {
		$this->db->select('produk.*, kategori_produk.nama_kategori_produk, users.nama');
		$this->db->from('produk');
		// Join
		$this->db->join('kategori_produk','kategori_produk.id_kategori_produk = produk.id_kategori_produk', 'LEFT');
		$this->db->join('users','users.id_user = produk.id_user','LEFT');
		// End join
		$this->db->where('produk.slug_produk',$slug_produk);
		$this->db->order_by('id_produk','DESC');
		$query = $this->db->get();
		return $query->row();
	}
	
	// detail perproduk
	public function detail($id_produk){
		$query = $this->db->get_where('produk',array('id_produk'  => $id_produk));
		return $query->row();
	}
	
	public function insert($data) 
	{
		$this->db->insert($this->table_name, $data);
	}
	
	/**
	 * @deprecated 
	 * use modify method
	 */
	public function edit ($data) {
		$this->db->where('id_produk',$data['id_produk']);
		$this->db->update('produk',$data);
	}

	/**
	 * @deprecated 
	 * use modify method
	 */	
	public function delete($id)
	{
		$this->db->where('id_produk', $id);
		$this->db->delete($this->table_name);
	}

	public function find_all($criterion = [], $first = 0, $count = 20, $sort = 'id_produk', $sort_dir = 'DESC') 
	{
		$this->db->select('produk.*, kategori_produk.nama_kategori_produk, users.nama');
		$this->db->from('produk');
		$this->db->join('kategori_produk','kategori_produk.id_kategori_produk = produk.id_kategori_produk', 'LEFT');
		$this->db->join('users','users.id_user = produk.id_user','LEFT');
		$this->db->where($criterion);
		$this->db->order_by($sort, $sort_dir);
		$this->db->limit($count, $first);

		$query = $this->db->get();

		return $query->result();
	}

	public function modify($id, $data) 
	{
		$this->db->where('id_produk', $id);
		$this->db->update('produk', $data);
	}

	public function find_one($id_produk)
	{
		$query = $this->db->get_where('produk',array('id_produk'  => $id_produk));
		return $query->row();
	}


}