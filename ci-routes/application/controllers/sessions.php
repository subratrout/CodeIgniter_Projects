<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sessions extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->output->enable_profiler(TRUE);
  }

  public function index()
  {
    echo "Hello Sessions!";
  }

  public function new_session()
  {
    echo "This is a new session";
  }

  public function destroy_session()
  {
    echo "This will destroy the existing session";
  }

}

//end of course controller
