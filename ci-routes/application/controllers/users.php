<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->output->enable_profiler(TRUE);
  }

  public function index()
  {
    echo "Hello Users";
  }

  public function new_user()
  {
    echo "New User";
  }

}

//end of course controller
