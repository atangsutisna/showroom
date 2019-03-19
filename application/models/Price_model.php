<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Price_model extends CI_Model 
{
    private $table_name = 'price_list';

	public function find_all($id)
	{
        $this->db->select("price_list.*, produk.id_produk, produk.nama_produk");
        $this->db->from($this->table_name);
        $this->db->join("produk", "price_list.product_id = produk.id_produk");
        $this->db->where("price_list.product_id", $id);
        $query = $this->db->get();

        return $query->result();
	}

	public function insert($data) 
	{
		$this->db->insert($this->table_name, $data);
	}

	public function modify($id, $data) 
	{
		$this->db->where('id', $id);
		$this->db->update($this->table_name, $data);
	}

	public function find_one($id)
	{
		$query = $this->db->get_where($this->table_name, [
            'id'  => $id
        ]);
		return $query->row();
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete($this->table_name);
	}

}