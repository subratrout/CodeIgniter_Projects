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
    // $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');
    $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
    $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'required|matches[confirm_password]');
    $this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
    $this->form_validation->set_message('is_unique', 'This email is already exists.');
    $this->form_validation->set_error_delimiters('<div class="errors">', '</div>');

    if($this->form_validation->run()==FALSE)
    {
      $errors = validation_errors();
      $this->session->set_flashdata('errors', $errors);
      redirect('/users/index');
    }
    else
    {
      $data = array(
        'first_name'=> $this->input->post('first_name'),
        'last_name' => $this->input->post('last_name'),
        'email'=> $this->input->post('email'),
        'password'=> md5($this->input->post('password'))
        );

      $this->load->model('User');
      $this->User->create_user($data);
      $success = "<p class='green'>User has been created!</p>";
      $this->session->set_flashdata("success", $success);
      redirect('/users/index');
    }
  }

  public function login()
  {
    $email = $this->input->post('email');
    $password = md5($this->input->post('password'));
    $this->load->model("User");
    $user = $this->User->get_user_by_email($email);

    if(!empty($email) && !empty($password) && $email == $user['email'] && $password == $user['password'])
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
      $this->session->set_flashdata("login_error", "Invalid email or password!");
      redirect('/');
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

  public function show($id)
  {

  }

}

//end of main controller
