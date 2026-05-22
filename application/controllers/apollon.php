<?php

class Apollon extends Controller {

    function index() 
    {         
        $title['title'] = "Apollon: A Peer-Reviewed Undergraduate eJournal";       
        $footer['toolbar'] = false;
        $this->load->view('includes/docinfo', $title);
        $nav = $this->make_navigation();
        $this->load->view('includes/mission');
        $this->load->view('home', $nav);
        $this->load->view('includes/footer', $footer);
    }

  function about_pages()
  {
      $title['title'] = $this->about_model->get_title($this->uri->segment(3));
      $content = $this->about_model->get_page($this->uri->segment(3));
      $footer['toolbar'] = false;
      $this->load->view('includes/docinfo', $title);
      $this->make_navigation();
      $this->load->view('includes/mission');
      $this->load->view('about', $content);
      $this->load->view('includes/footer', $footer);
  }
    
	function bio()
	{
      $title['title'] = $this->profile_model->get_title($this->uri->segment(3));
      $contributors = $this->navigation_model->get_contributors();
      $records = $this->profile_model->get_contributor($this->uri->segment(3));
      $footer['toolbar'] = false;
      $this->load->view('includes/docinfo', $title);
      $this->make_navigation();
      $this->load->view('includes/mission');
	    $this->load->view('profile', $records);
      $this->load->view('includes/footer', $footer);
	}

  function contact()
  {
      $title['title'] = "Contact | Apollon";
      $footer['toolbar'] = false;
      $this->load->view('includes/docinfo', $title);
      $this->make_navigation();
      $this->load->view('includes/mission');
	    $this->load->view('contact');
      $this->load->view('includes/footer', $footer);
  }
  
  function article()
  {
      $title['title'] = $this->article_model->get_title($this->uri->segment(3));      
      $article = $this->article_model->get_article($this->uri->segment(3));  
      $footer['toolbar'] = true;
      $footer['article'] = $article;
      $this->load->view('includes/docinfo', $title);
      $this->make_navigation();
      $this->load->view('includes/mission');
      $this->load->view('article', $article);
      $this->load->view('includes/footer', $footer);
  }
  
  function submit()
  {
      $title['title'] = "Submit an Article | Apollon";
      $footer['toolbar'] = false;
      $this->load->view('includes/docinfo', $title);
      $this->make_navigation();
      $this->load->view('includes/mission');
      $this->load->view('submit');
      $this->load->view('includes/footer', $footer);
  }
  
  function success()
  {
      $title['title'] = "Submission Accepted | Apollon";
      $footer['toolbar'] = false;
      $this->load->view('includes/docinfo', $title);
      $this->make_navigation();
      $this->load->view('includes/mission');
      $this->load->view('submit');
      $this->load->view('includes/footer', $footer);
  }
  
  
  function upload()
  {
    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'pdf';
    $config['max_size'] = '10000000';
    $this->load->library('upload', $config);
    if (!$this->upload->do_upload())
    {
      $error = array('error' => $this->upload->display_errors());
      $this->load->view('submit', $error);
    } 
    else
    {
      send_email(OWNER_EMAIL, "Web site email", "New submission received.");
      $title['title'] = "Success! | Apollon";
      $data = array('upload_data' => $this->upload->data());
      $footer['toolbar'] = false;
      $this->load->view('includes/docinfo', $title);
      $this->make_navigation();
      $this->load->view('includes/mission');
      $this->load->view('success');
      $this->load->view('includes/footer', $footer);
    } 
  }
  
  function faculty()
  {
      $title['title'] = "Affiliated Faculty | Apollon";      
      $list['list'] = $this->profile_model->get_list_others(); 
      $footer['toolbar'] = false;
      $this->load->view('includes/docinfo', $title);
      $this->make_navigation();
      $this->load->view('includes/mission');
      $this->load->view('list', $list);
      $this->load->view('includes/footer', $footer);
  }
  
  
  function make_navigation()
  {
    $nav['contributors'] = $this->navigation_model->get_contributors();
    $nav['articles'] = $this->navigation_model->get_articles();     
    $nav['about_pages'] = $this->navigation_model->get_about_pages('main'); 
    $nav['submissions']= $this->navigation_model->get_about_pages('submissions'); 
    $nav['faq']= $this->navigation_model->get_about_pages('faq'); 
    $this->load->view('includes/header', $nav);
    return $nav;
  }
  
  function admin()
  {
    
    $this->load->model('admin_model');
    $data['records'] = $this->admin_model->get_data();
    $this->load->view('admin', $data);
    
  }
  
  
}
