<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model 
{
	private $table_name = 'users';

	public function __construct() 
	{
		parent::__construct();
		$this->load->database();
	}
	
	//Listing
	public function listing() {
		$this->db->select('*');
		$this->db->from('users');
		$this->db->order_by('id_user','DESC');
		$query = $this->db->get();
		return $query->result();
	}
	
	// detail peruser
	public function detail($id_user){
		$query = $this->db->get_where('users',array('id_user'  => $id_user));
		return $query->row();
	}
	
	public function insert($user) 
	{
		$this->db->insert($this->table_name, $user);
	}
	
	/**
	 * @deprecated
	 */
	public function edit ($data,$id_user) {
		$this->db->where('id_user',$id_user);
		$this->db->update('users',$data);
	}
	
	// Delete
	public function delete ($data){
		$this->db->where('id_user',$data['id_user']);
		$this->db->delete('users',$data);
	}

	public function modify($id_user, $user) 
	{
		$this->db->where('id_user', $id_user);
		$this->db->update('users', $user);
	}

	/**
	 * @param: $userame or $email
	 */
	public function find_by_username($username_or_email)
	{
		$this->db->where('username', $username_or_email);
		$this->db->or_where('email', $username_or_email);

		$query = $this->db->get('users');

		return $query->row();
	}

}