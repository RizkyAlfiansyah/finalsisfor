<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_Model {
		function getall()
    {
         return $this->db->get('perpus')->result_array();
	}

	 function add($params)
    {
        $this->db->insert('perpus',$params);
        return $this->db->insert_id();
    }

    function update($no_buku,$params)
    {
        $this->db->where('no_buku',$no_buku);
        return $this->db->update('perpus',$params);
    }

    function delete($no_buku)
    {
        return $this->db->delete('perpus',array('no_buku'=>$no_buku));
    }
    
}