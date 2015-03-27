<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Books extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(TRUE);
	}

	public function index()
	{
   // $this->session->session_destroy(CI_session);
    $this->load->model('Book');
    $book = $this->Book->get_all();
    $this->load->view('/books/index', array('books'=>$book));
	}

  public function show($id)
  {
    $this->load->model('Book');
    $this->load->model('Author');
    $book = $this->Book->get_book($id);
    $this->load->view('/books/show', array('book' => $book));

  }

  public function add()
  {
     $this->load->model('Book');
     $this->load->model('Author');
     $authors= $this->Author->get_all_authors();

     $this->load->view('/books/add', array('author'=>$authors));
  }

  public function create_book()
  {
    $this->load->model('Book');
    $this->load->model('Author');
    // $thepost = array();
    // var_dump($this->input->post());

     if(empty($this->input->post('author_name')))
     {
      $author_id = $this->Author->get_author_by_id($this->input->post('author'));
      // var_dump($author_id);
      // die();
       $this->Book->create_book($this->input->post(), $author_id);
     }

     else
     {
      // var_dump($this->input->post());
      // die();
      $this->Author->create_author($this->input->post('author_name'));
      $author_id = $this->Author->get_author_by_name($this->input->post('author_name'));
      $this->Book->create_book($this->input->post(), $author_id);
      //$this->Book->create_book($this->input->post(), $this->Book->create_book($this->input->post('name')));
      
     }
    
    redirect('/Books');
  }

  public function destroy($id)
  {
    $this->load->model('Book');
    $this->Book->destroy($id);
    redirect('/Books');
  }

  public function edit($id)
  {
    $this->load->model('Book');
    $Book= $this->Book->get_Book($id);
    $this->load->view('/edit', array('Book'=>$Book));
  }

  public function update()
  {
    $this->load->model('Book');
    $this->Book->update($this->input->post());
    redirect("/Books/show/{$this->input->post('id')}");
  }
}

//end of course controller
