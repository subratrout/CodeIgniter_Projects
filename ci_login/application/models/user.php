<?php
class User extends CI_Model {
   function get_user_by_email($email)
   {
       return $this->db->query("SELECT * FROM users WHERE email = ?", array($email))->row_array();
   }
}

?>
