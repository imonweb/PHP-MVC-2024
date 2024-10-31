<?php 

Class Home extends Controller
{
  public function index($a = '', $b = '', $c = '')
  {
    $user = new User;

    $result = $user->findAll();
    show($result);
    $this->view('home');
  }
}

