<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(TRUE);
	}

	public function index()
	{
   // $this->session->session_destroy(CI_session);
    $this->load->model('course');
    $course = $this->course->get_all();
    $this->load->view('index', array('courses'=>$course));
	}

  public function add()
  {
    $this->load->model('course');
    $input =$this->input->post('name');
    if(strlen($input) <15)
    {
      redirect('courses');
    }
    else
    {
      $this ->course->create($this->input->post());
      redirect('courses');
    }
  }

  public function destroy($id)
  {
    $this->load->model('course');
    $course = $this->course->get_course($id);
    // var_dump($course);
    // die();
    $this->load->view('destroy', array('course'=>$course));
  }

  public function delete($id)
  {
    $this->load->model('course');
  //  $course = $this->course->get_course($id);
    $this->course->delete($id);
    redirect('/courses');
  }
}

//end of course controller
