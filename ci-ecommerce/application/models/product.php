<?php

class Product extends CI_Model {
     function get_all()
     {
         $query = $this->db->query("SELECT * FROM products");
         return $query->result();
     }

     function get_all_categories()
     {
        $query = $this->db->query("SELECT * FROM categories");
        return $query->result();
     }
     function get_product($id)
     {
         $query = $this->db->query("SELECT * FROM products WHERE id = ?", array($id));
         return $query->row();
     }
     function create($product)
     {
         $this->db->query("INSERT INTO products (name, description, price, categories_id, created_at, updated_at) VALUES (?,?,?,?, NOW(),NOW())", array(ucfirst($product['name']), ucfirst($product['description']), $product['price'], $product['category']));
         $product_id = mysql_insert_id();
         $this->db->query("INSERT INTO images (products_id, created_at, updated_at) VALUES (".$product_id.", NOW(), NOW())");
         
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
