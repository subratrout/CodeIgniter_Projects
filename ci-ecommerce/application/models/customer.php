<?php
class Customer extends CI_Model {


   public function get_customer_by_email($email)
   {
       return $this->db->query("SELECT * FROM customers WHERE email = ?", array($email))->row_array();
   }

   public function create_customer($customer)
   {
     $query = $this->db->query("INSERT INTO customers (first_name, last_name, email, password, created_at, updated_at) VALUES (?,?,?,?, NOW(),NOW())", array($customer['first_name'], $customer['last_name'], $customer['email'], $customer['password']));
         return $query;
   }
}

?>
