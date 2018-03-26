<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
      public function index(){
        $page = M('pageview');
        $count = $page->find();
        $count['count'] += 1;
        $data['count'] = $count['count'];
        $page->where('id = 0')->save($data);
        $this->assign('count',$count['count']);
        $this->display();
      }
}