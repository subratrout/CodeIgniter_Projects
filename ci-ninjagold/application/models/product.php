<?php

class Product extends CI_Model {
     function show_all_products()
     {
         return $this->db->query("SELECT * FROM products")->result_array();
     }
     function product_by_id($product_id)
     {
         return $this->db->query("SELECT * FROM products WHERE id = ?", array($product_id))->row_array();
     }
     function add_product($product)
     {
         $query = "INSERT INTO products (name, description, price, created_at, updated_at) VALUES (?,?,?,?,?)";
         $values = array($product['name'], $product['description'], $product['price'], date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s"));
         return $this->db->query($query, $values);
     }
}

?>
