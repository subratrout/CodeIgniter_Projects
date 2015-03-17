<?php

class Course extends CI_Model {
     function get_all()
     {
         $query = $this->db->query("SELECT * FROM courses");
         return $query->result();
     }
     function get_course($id)
     {
         $query = $this->db->query("SELECT * FROM courses WHERE id = ?", array($id));
         return $query->row();
     }
     function create($course)
     {
         $query = $this->db->query("INSERT INTO courses (name, description, created_at, updated_at) VALUES (?,?,NOW(),NOW())", array($course['name'], $course['description']));
         return $query;
     }

     function delete($id)
     {
        $query = $this->db->query("DELETE FROM courses WHERE id = ?", array($id));
        return $query;
     }
}

?>
