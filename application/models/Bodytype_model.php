<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bodytype_model extends CI_Model 
{
    private $table_name = 'body_type';

    public function find_all($term = NULL, $first = 0, 
    $count = 20, $order = 'updated_at', $direction = 'DESC')
    {
        if ($term != NULL && $term !== '') {
            $this->db->group_start();
            $this->db->like('name', $term);
            $this->db->group_end();
        }

        $this->db->limit(
            isset($count) ? $count : 20, 
            isset($first) ? $first : 0
        );
        $this->db->order_by($order, $direction);
        $query = $this->db->get($this->table_name);

        return $query->result();
    }

    public function count_all($term = NULL)
    {
        if ($term != NULL && $term !== '') {
            $this->db->group_start();
            $this->db->like('name', $term);
            $this->db->group_end();
        }

        $this->db->from($this->table_name);
        return $this->db->count_all_results();
    }

}