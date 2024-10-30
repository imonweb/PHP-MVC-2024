<?php 

Class Home extends Controller
{
  public function index($a = '', $b = '', $c = '')
  {
    $user = new User;

    $result = $user->where(['id' => 2]);
    show($result);
    $this->view('home');
  }
}

