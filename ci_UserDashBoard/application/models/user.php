<?php
class User extends CI_Model {


   public function get_user_by_email($email)
   {
       return $this->db->query("SELECT * FROM users WHERE email = ?", array($email))->row_array();
   }

   public function create_user($user)
   {
     $query = $this->db->query("INSERT INTO users (first_name, last_name, email, password, created_at, updated_at) VALUES (?,?,?,?, NOW(),NOW())", array($user['first_name'], $user['last_name'], $user['email'], $user['password']));
         return $query;
   }
}

?>
