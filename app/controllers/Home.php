<?php 

class Home extends Controller
{
  public function index () # Method Default
  {
    $data['judul'] = 'Home';
    
    $this->view('templates/header', $data);
    $this->view('home/index');
    $this->view('templates/footer');
  }
}