<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->output->enable_profiler();
  }

  public function index()
  {
    $this->load->view('admin.php');
  }

  public function signin()
  {
    $this->load->view('signin');
  }

  public function register()
  {
    $this->load->view('register');
  }
}
