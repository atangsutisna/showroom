<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galery_model extends CI_Model 
{
    private $table_name = 'galery';

    public function find_all($kind = 'default') 
    {
        $this->db->where('kind', $kind);
        $query = $this->db->get($this->table_name);
        return $query->result();
	}

    public function insert($data) 
    {
				$this->db->insert($this->table_name, $data);
		}
	
		public function modify($id, $galery) 
		{
				$this->db->where('id', $id);
				$this->db->update($this->table_name, $galery);
		}
	
    public function delete ($id)
    {
				$this->db->where('id', $id);
				$this->db->delete($this->table_name);
		}

		public function find_one($id)
		{
				$query = $this->db->get_where($this->table_name, [
					'id' => $id
				]);

				return $query->row();
		}

}