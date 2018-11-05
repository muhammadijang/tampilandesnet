<?php 
    class M_data extends CI_Model{
        function tampil_data(){
            return $this->db->get('pelanggan');
        }

        public function get_count(){
            $sql = "SELECT count(id_pelanggan) as id_pelanggan FROM pelanggan";
            $result = $this->db->query($sql);
            return $result->row()->id_pelanggan;
        }
    }
    
?>