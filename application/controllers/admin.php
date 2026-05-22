<?php

class Admin extends Controller {

  function Admin()
  {
    parent::Controller();
    $this->load->model('admin_model');
    
    //$this->load->library('session');
    //$this->login();
  } 

  function index()
  {
  if ($this->admin_model->valid_credentials("MEOW", "word"))
      echo "HELLO WORLD";
    
    
    if ($this->session->userdata('is_logged_in'))
    {
      $this->view();
    }
    else {
      $this->load->view('login');
    }
  } 
  
  function login()u
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    if ($this->admin_model->valid_credentials($username, $password))
    {
      // Create user session
      $data = array
      (
        'username' => $this->input->post($username),
        'is_logged_in' => true
      );
      $this->session->set_userdata($data);
      $this->view();
    }
    else 
    {
      //$data['success'] = false;
      //$this->load->view('login', $data);
      $this->index(); 
    }
  }

  function logout()
  {
    $this->session->sess_destroy();
    $this->index();
  }
  
  
  function view() 
  {
    if ($this->session->userdata('is_logged_in'))
    {
      $data['records'] = $this->admin_model->get_data();
      $this->load->view('admin', $data);
    }
    else {
      $this->index();
    }
  }
  
  function add() 
  {
    $data['fields'] = $this->admin_model->get_fields($this->uri->segment(3));
    $data['table'] = $this->uri->segment(3);
    $this->load->view('create', $data);
  }
  
  function insert()
  {
    unset($_POST['submit']);
    if ($this->admin_model->insert($this->uri->segment(3), $_POST))
      $this->load->view('delete_success'); 
  }
  
  function edit()
  {
    $data['page'] = $this->admin_model->get_all($this->uri->segment(3), $this->uri->segment(4));
    $data['table'] = $this->uri->segment(3);
    $this->load->view('edit', $data);
  }
  
  function make_change()
  {
    unset($_POST['submit']);
    if ($this->admin_model->change($this->uri->segment(3), $_POST))
      $this->load->view('delete_success');
  }
  
  function delete()
  {
    if ($this->admin_model->delete($this->uri->segment(3), $this->uri->segment(4)))
      $this->load->view('delete_success');
  }

}   