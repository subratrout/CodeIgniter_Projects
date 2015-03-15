<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Times extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->output->enable_profiler();
  }

  // public function index()
  // {
  //   echo "Welcome to CodeIgniter. The default Controller is Main.php";
  // }

  public function main()
  {
    $time = date("F j, Y, g:i a");
    $current_time = array('time' =>$time);

    $this->load->view('times/main', $current_time);
  }
}
