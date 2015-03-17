<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->output->enable_profiler();
  }

  public function index()
  {
    $this->load->view('index');
  }

  public function show()
  {
    $this->load->view('/users/show');
  }

  public function edit()
  {
    $this->load->view('/users/edit');
  }
}
