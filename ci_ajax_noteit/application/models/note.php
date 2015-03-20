<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Note extends CI_Model {
  public function all()
  {
    return $this->db->query("SELECT * FROM notes")->result_array();
  }

  public function create($new_note)
  {
    $query = $this->db->query("INSERT INTO notes (title, description, created_at, updated_at) VALUES (?,?, NOW(), NOW())", array($new_note['title'], $new_note['description']));
    // var_dump($query);
    // die();
    return $query;
  }

  public function get_note($id)
  {
    $query = $this->db->query("SELECT * FROM notes WHERE id= ?", array($id));
    return $query->row();
  }

  public function update($note)
  {
    $query = $this->db->query("UPDATE notes SET description=?, created_at=NOW(), updated_at= NOW() WHERE id=?", array($note['description'], $note['id']));
    return $query;
  }

  public function delete($note)
  {
    $query = $this->db->query("DELETE FROM notes WHERE id= ?", array($note['id']));
    return $query;
  }
}
?>
