<?php
class User_model extends CI_model{
    function create($formArray)
    {
        $this->db->insert("users",$formArray); // Insert INTO Users (name,email,created) values 
    }

    function all() { 
        return $users = $this->db->get('users')->result_array();
    }
    function getuser($userId){
        $this->db->where('user_id',$userId);
        return $user = $this->db->get('users')->row_array();
    }
    function updateUser($userId,$formArray){
        $this->db->where('user_id',$userId);
        $this->db->update('users',$formArray);
    }
    function deleteUser($userId){
        $this->db->where('user_id',$userId);
        $this->db->delete('users'); 
    }
}
?>