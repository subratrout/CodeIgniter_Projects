<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Post extends CI_Model {
  public function all()
  {
    return $this->db->query("SELECT * FROM posts")->result_array();
  }

  public function create($new_post)
  {
    $query = $this->db->query("INSERT INTO posts (description, created_at, updated_at) VALUES (?, NOW(), NOW())", array($new_post['description']));
    // var_dump($query);
    // die();
    return $query;
  }
}
?>
