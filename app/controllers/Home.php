<?php 

Class Home extends Controller
{
  public function index($a = '', $b = '', $c = '')
  {
    $model = new Model;
    // $model->test();

    // $arr['id'] = 2;
    $arr['name'] = 'john';
    // $arr2['date'] = date("Y");
    $result = $model->where($arr);

    show($result);

    $this->view('home');
  }
}

