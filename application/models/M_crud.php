<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class M_crud extends CI_Model
    {
        function insert($table, $data)
        {
            return $this->db->insert($table, $data); 
        }

        function update($table, $data, $where)
        {
            return $this->db->update($table, $data, $where);
        }

        function delete($table, $where)
        {
            return $this->db->delete($table, $where);
        }

        function truncate($table)
        {
            return $this->db->truncate($table);
        }

        function insert_batch($table, $data)
        {
            return $this->db->insert_batch($table, $data);
        }

        function loadPost()
    {
        return $this->db->get('post')->result();
    }
    }