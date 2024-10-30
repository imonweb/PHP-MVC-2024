<?php 

Class Home extends Controller
{
  public function index($a = '', $b = '', $c = '')
  {
    $model = new Model;
    // $model->test();

    // $arr['id'] = 2;
    // $arr2['date'] = date("Y");
    // where
    $arr['name'] = 'john';
    $result = $model->where($arr);
    show($result);
    
    // insert
    $arr['name'] = 'john';
    $arr['age'] = 25;
    // $arr['date'] = date("Y-m-d");
    $insert = $model->insert($arr);
    show($insert);



    $this->view('home');
  }
}

