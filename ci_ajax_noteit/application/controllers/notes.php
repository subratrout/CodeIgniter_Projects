<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Notes extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model("Note");
  }

  public function index()
  {
    $this->load->model("Note");
    $array["notes"] = $this->Note->all();
    $this->load->view('index.php', $array);
  }

  // public function index_html()
  // {
  //   $this->load->model("Note");
  //   $data['notes'] = $this->Note->all();
  //   $this->load->view("partials/notes", $data);
  // }

  public function create()
  {
    $new_note= $this->input->post();
    $this->Note->create($new_note);
    $data['notes'] = $this->Note->all();
    $this->load->view('partials/notes', $data);
  }

  public function edit($id)
  {
    $this->load->model('Note');
    $note = $this->Note->get_note($id);
    // var_dump($note);
    // die();
    $this->load->view("/partials/edit",array('note'=>$note));
  }

  public function update()
  {

    $this->load->model("Note");
    $note = $this->input->post();
    $this->Note->update($note);
    $data['notes'] = $this->Note->all();
    $this->load->view('partials/notes', $data);
  }

  public function delete()
  {
    $this->load->model("Note");
    $this->Note->delete($this->input->post());
    $data['notes'] = $this->Note->all();
    $this->load->view('partials/notes', $data);
  }

}

?>
