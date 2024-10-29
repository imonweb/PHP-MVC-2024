<?php 

Class Home extends Controller
{
  public function index($a = '', $b = '', $c = '')
  {
    echo "This is the home controller";
  }
}

// $home = new Home;
// call_user_func_array([$home, 'index'], ['a' => 'somethis', 'b' => 'b something', 'c' => 'c something']);