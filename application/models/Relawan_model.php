<?php
/*
class relawan_model extends CI_Model
{
    public function getrelawan()
    {
        return $this->db->get('relawan')->result_array();
    }

}
*/

class Relawan_model extends CI_Model
{
    public function getRelawan($id = null) 
    {
        if ( $id === null ) {
            return $this->db->get('Relawan')->result_array();
        } else {
            return $this->db->get_where('relawan',['id' => $id])->result_array();
        }
        
    }
}