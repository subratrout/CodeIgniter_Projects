<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->helper(array('form', 'url'));
    $this->output->enable_profiler(TRUE);
  }

  public function index()
  {
   // $this->session->session_destroy(CI_session);
    $this->load->model('Product');
    $product = $this->Product->get_all();
    $this->load->view('/products/index', array('products'=>$product));
  }

  public function show($id)
  {
    $this->load->model('Product');
    $product = $this->Product->get_product($id);
    $this->load->view('show', array('product' => $product));

  }

  public function add()
  {
     $this->load->model('Product');
     $categories = $this->Product->get_all_categories();
     $this->load->view('/products/add', array('category'=>$categories));
  }

    public function upload_form()
  {
    echo 'hello';
     $this->load->view('/products/upload_form');
  }

  public function do_upload()
  {


    $config['upload_path'] = './assets/images';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '1000';
    $config['max_width']  = '1024';
    $config['max_height']  = '768';

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload())
    {
      $error = array('error' => $this->upload->display_errors());

      var_dump($error);

      $this->load->view('/products/add');
    }
    else
    {
      $data = array('upload_data' => $this->upload->data());

      $this->load->view('products/upload_success', $data);
    }
  }

  public function create()
  {
    $this->load->model('Product');
    $this->Product->create($this->input->post());

    $config['upload_path'] = './assets/images';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '1000';
    $config['max_width']  = '3324';
    $config['max_height']  = '3768';

    $this->load->library('upload', $config);
 
    if ( ! $this->upload->do_upload('userfile'))
    {
      $error = array('error' => $this->upload->display_errors());

      var_dump($error);

      $this->load->view('/products/add');
    }
    else
    {
      $data = array('upload_data' => $this->upload->data());
  
      $this->load->view('products/upload_success', $data);
    }

    
    //redirect('/products');
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

//end of Products controller
