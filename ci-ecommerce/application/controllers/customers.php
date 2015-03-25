<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customers extends CI_Controller {

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
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[customers.email]');
    $this->form_validation->set_message('is_unique', 'This email is already exists.');
    $this->form_validation->set_error_delimiters('<div class="errors">', '</div>');

    if($this->form_validation->run()==FALSE)
    {
      $errors = validation_errors();
      $this->session->set_flashdata('errors', $errors);
      redirect('/customers/index');
    }
    else
    {
      $data = array(
        'first_name'=> $this->input->post('first_name'),
        'last_name' => $this->input->post('last_name'),
        'email'=> $this->input->post('email'),
        'password'=> md5($this->input->post('password')),
        'confirm_password'=> md5($this->input->post('confirm_password'))
        );

      $this->load->model('Customer');
      $this->Customer->create_customer($data);
      $success = "<p class='green'>Customer profile has been created!</p>";
      $this->session->set_flashdata("success", $success);
      redirect('/customers/index');
    }
  }

  public function login()
  {
    $email = $this->input->post('email');
    $password = md5($this->input->post('password'));
    $this->load->model("Customer");
    $user = $this->Customer->get_customer_by_email($email);

    if(!empty($email) && !empty($password) && $email == $user['email'] && $password == $user['password'])
    {
      $data = array(
        'user_id'=>$customer['id'],
        'first_name'=>$customer['first_name'],
        'last_name' =>$customer['last_name'],
        'user_email'=>$customer['email'],
        'user_name' => $customer['first_name']." ".$customer['last_name'],
        'is_logged_in'=> true
        );
      $this->session->set_userdata($data);
      redirect("/customers/show");
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

  public function show()
  {
    $this->load->view('/customers/show');
  }

  public function edit()
  {
    $this->load->view('/customers/edit');
  }
}
