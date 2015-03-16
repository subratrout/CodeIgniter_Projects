<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view('index');
	}

  public function register()
  {
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');


    if($this->form_validation->run()==FALSE)
    {
      $this->load->view('index');
    }
    else
    {
      $this->load->view('success');
    }
  }

  public function login()
  {
    // $this->session->sess_destroy();
    // die();
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $this->load->model("User");
    $user = $this->User->get_user_by_email($email);
    if($user && $user['password'] = $password)
    {
      $data = array(
        'user_id'=>$user['id'],
        'first_name'=>$user['first_name'],
        'last_name' =>$user['last_name'],
        'user_email'=>$user['email'],
        'user_name' => $user['first_name']." ".$user['last_name'],
        'is_logged_in'=> true
        );
      $this->session->set_userdata($data);
      redirect("/users/success");
    }

    else
    {
      $this->session-set_flashdata("login_error", "Invalid email or password!");
      redirect('/index');
    }
  }

  public function success()
  {
    if($this->session->userdata('is_logged_in')== TRUE)
    {
      $this->load->view('welcome');
    }
    else
    {

      redirect('index');
    }
  }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect('index');
  }

}

//end of main controller
