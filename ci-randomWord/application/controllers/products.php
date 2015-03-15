<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function index()
	{
    $this->load->model('product');
    $data = $this->product->show_all_products();

		$this->load->view('show',array('data'=>$data));
	}

  public function hello()
  {
    echo 'hello Subrat';
  }
}

//end of main controller
