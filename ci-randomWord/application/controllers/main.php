<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function index()
	{
		if($this->session->userdata('counter'))
    {
      $counter = $this->session->userdata('counter');
      $this->session->set_userdata('counter', $counter+1);

    }

  else
  {
    $this->session->set_userdata('counter', 1);
  }

   $word = substr(md5(rand()), 0, 14);
  //$data=array('attempt'=>$counter,'word'=>$word);
 // $this->load->view('index', array('counter'=> $this->session->userdata('counter')));
 // $this->load->view('index', $data);
    $this->load->view('index', array('word'=> $word));
	}


}

//end of main controller
