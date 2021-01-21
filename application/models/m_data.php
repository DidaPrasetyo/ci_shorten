<?php 

class M_data extends CI_Model{
    function input_data($data,$table){
        $this->db->insert($table,$data);
    }

    function is_tim_available($link_nama)  
    {
        $this->db->where('shorten', $link_nama);  
        $query = $this->db->get("link");  
        if($query->num_rows() > 0){
            return true;
        } else {
            return false;  
        }
    }

    function get_all(){
        return $this->db->get('link');
    }

    function get_link($shorten){
        $this->db->where('shorten', $shorten);
        return $this->db->get('link');
    }
}

?>