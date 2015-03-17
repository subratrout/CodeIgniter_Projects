<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(TRUE);
	}

	public function index()
	{

	}

  public function p($num)
  {
    echo $num;
  }

  public function edit($num)
  {
    echo $num;
  }

}

//end of course controller
