<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Notes extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model("Note");
  }

  public function index_json()
  {
    $this->load->model("Note");
    $data["notes"] = $this->Note->all();
    echo json_encode($data);
  }

  public function index_html()
  {
    $this->load->model("Note");
    $data['notes'] = $this->Note->all();
    $this->load->view("partials/notes", $data);
  }

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
    $this->Note->update($this->input->post());
  }

  public function destroy($id)
  {
    $this->load->model("Note");
    $this->Note->destroy($id);
    redirect('/');
  }

  public function index()
  {
    $this->load->view('index');
  }

}

?>
