<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Surveys extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->output->enable_profiler();
  }

  public function index()
  {
    $this->load->view('survey');
  }

  public function process_form()
  {
    if($this->session->userdata('counter'))
    {
      $counter = $this->session->userdata('counter');
      $this->session->set_userdata('counter', $counter+1);
      $this->session->set_userdata('name', $this->input->post('name'));
      $this->session->set_userdata('location', $this->input->post('location'));
      $this->session->set_userdata('language', $this->input->post('language'));
      $this->session->set_userdata('comment', $this->input->post('comment'));
      redirect('/surveys/result');
    }
    else
    {
      $this->session->set_userdata('counter', 1);
      $this->session->set_userdata('name', $this->input->post('name'));
      $this->session->set_userdata('location', $this->input->post('location'));
      $this->session->set_userdata('language', $this->input->post('language'));
      $this->session->set_userdata('comment', $this->input->post('comment'));
      redirect('/surveys/result');
    }
   // $this->session->set_userdata('post', $this->input->post());

  }

  public function result()
  {
   // $array['posts']-> this->session->userdata['post'];
    $this->load->view('result');
  }

}
