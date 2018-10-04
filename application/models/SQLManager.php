<?php

class SQLManager extends CI_Model{
    
    public function login($username, $password)
    {
        $sql = "SELECT username, password FROM users WHERE username = '$username'";
        $result_array = $this->db->query($sql)->result_array();
        $user_info = array();
        
        foreach ($result_array as $row){
            if (password_verify($password, $row['password']))
            {
                $name = $row['username'];
            
                $user_info[0] = $name;
                return $user_info;  
            }
        }
        return $user_info;
    }
}

