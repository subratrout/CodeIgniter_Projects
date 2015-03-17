<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function index()
	{
		if(!$this->session->userdata('total_gold'))
    {
      $this->session->set_userdata('total_gold', 0);
    }

      $this->load->view('index', array("results" => $this->session->userdata("actitivites")));
  }

  public function start()
  {
    $this->session->sess_destroy();
    redirect('/');
  }

  public function process_money()
  {

    if($this->input->post('building') == 'farm')
    {
      $gold = rand(10, 20);
      $total = $this->session->userdata('total_gold') + $gold;
      $this->session->set_userdata('total_gold', $total);
      //redirect('/');
    }

    elseif($this->input->post('building')=='cave')
    {
      $gold = rand(5, 10);
      $total = $this->session->userdata('total_gold') + $gold;
      $this->session->set_userdata('total_gold', $total);
     // redirect('/');
    }

      elseif($this->input->post('building')=='house')
    {
      $gold = rand(2, 5);
      $total = $this->session->userdata('total_gold') + $gold;
      $this->session->set_userdata('total_gold', $total);
     // redirect('/');
    }


      elseif($this->input->post('building')=='casino')
    {
      $gold = rand(-50, 50);
      $total = $this->session->userdata('total_gold') + $gold;
      $this->session->set_userdata('total_gold', $total);
     // redirect('/');
    }





    if(!$this->session->userdata('actitivites'))
    {
      $actitivites = array();
    }
    else
    {
      $actitivites = $this->session->userdata('actitivites');
    }

    $building = $this->input->post('building');
    if($gold>=0)
    {
      $actitivites[] ="<p class='green'> You have entered ".$building." and got ".$gold." golds.</p>";
      $this->session->set_userdata("actitivites", $actitivites);
    }

    elseif($gold<0)
    {
      $actitivites[ ] ="<p class='red'> You have entered ".$building." and lost ".($gold*-1)." golds.</p>";
      $this->session->set_userdata("actitivites", $actitivites);
    }
      redirect('/');
  }
}

//end of main controller
