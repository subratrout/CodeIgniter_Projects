<?php

class Product extends CI_Model {
     function get_all()
     {
         $query = $this->db->query("SELECT * FROM products");
         return $query->result();
     }
     function get_product($id)
     {
         $query = $this->db->query("SELECT * FROM products WHERE id = ?", array($id));
         return $query->row();
     }
     function create($product)
     {
         $query = $this->db->query("INSERT INTO products (name, description, price, created_at, updated_at) VALUES (?,?,?, NOW(),NOW())", array($product['name'], $product['description'], $product['price']));
         return $query;
     }

     function update($product)
     {
        $query = $this->db->query("UPDATE products SET name=?, description=?, price=?, created_at=NOW(), updated_at=NOW() WHERE id=?", array($product['name'], $product['description'], $product['price'], $product['id']));
         return $query;
     }

     function destroy($id)
     {
        $query = $this->db->query("DELETE FROM products WHERE id = ?", array($id));
        return $query;
     }
}

?>
