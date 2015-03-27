<?php
class Author extends CI_Model {

  public function get_all_authors()
  {
    $query = $this->db->query("SELECT * from authors");
    return $query->result();
  }

   public function create_author($author)
   {
     $query = $this->db->query("INSERT INTO authors (name, created_at, updated_at) VALUES ('".$author."', NOW(),NOW())");
         return $query;
   }

   function get_author_by_name($name)
     {
          $query = $this->db->query("SELECT * FROM authors WHERE name = ?", array($name));
         return $query->result_array();
     }

     function get_author_by_id($id)
     {
          $query = $this->db->query("SELECT * FROM authors WHERE id = ?", array($id));
         return $query->result_array();
     }
}

?>