<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(TRUE);
	}

	public function index()
	{
   // $this->session->session_destroy(CI_session);
    $this->load->model('Product');
    $product = $this->Product->get_all();
    $this->load->view('index', array('products'=>$product));
	}

  public function show($id)
  {
    $this->load->model('Product');
    $product = $this->Product->get_product($id);
    $this->load->view('show', array('product' => $product));

  }

  public function add()
  {
     $this->load->view('/add');
  }

  public function create()
  {
    $this->load->model('Product');
    $this->Product->create($this->input->post());
    redirect('/products');
  }

  public function destroy($id)
  {
    $this->load->model('Product');
    $this->Product->destroy($id);
    redirect('/Products');
  }

  public function edit($id)
  {
    $this->load->model('Product');
    $product= $this->Product->get_product($id);
    $this->load->view('/edit', array('product'=>$product));
  }

  public function update()
  {
    $this->load->model('Product');
    $this->Product->update($this->input->post());
    redirect("/products/show/{$this->input->post('id')}");
  }
}

//end of course controller
