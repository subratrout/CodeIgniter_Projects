<?php

class Book extends CI_Model {
    
     function get_all()
     {
         $query = $this->db->query("SELECT * FROM books");
         return $query->result();
     }
    
     function get_book($id)
     {
         $query = $this->db->query("SELECT * FROM books WHERE id = ?", array($id));
         return $query->row();
     }
    
     function create_book($book, $author_id)
     {
        
         $query = $this->db->query("INSERT INTO books (title, authors_id, created_at, updated_at) VALUES (?, ".$author_id[0]['id'].", NOW(),NOW())", array($book['title']));
         return $query;
     }

     function update($book)
     {
        
        $query = $this->db->query("UPDATE books SET name=?, description=?, price=?, created_at=NOW(), updated_at=NOW() WHERE id=?", array($book['name'], $book['description'], $book['price'], $book['id']));
         return $query;
     }

     function destroy($id)
     {
        $query = $this->db->query("DELETE FROM books WHERE id = ?", array($id));
        return $query;
     }
}

?>
