<?php
namespace Home\Controller;
use Think\Controller;
class PlayController extends Controller {
// 	 public function play(){
//       $mess=M('maize');

//       $where['gene']=$_POST['gene'];
//       echo $where['gene'];
//       $id=$mess->where($where)->field('GO_id')->select();
//       //dump($id);
//       $res = [];
//       foreach ($id as $key => $value) {
//       	foreach ($value as $key => $val) {
//       		$tern=M('tern_infor');
//       		$whe['GO_id']=$val;
//       		$data=$tern->field('function')->where($whe)->select(); 
//       		$res=array_merge($res, $data);	 
//      		 }
// }
   
// }
public function play(){
      if( isset($_POST['select']))
       {
            $select = $_POST['select'];
            $kw = $_GET['gene'];

            if($select=="Maize")
            {
              echo $select;
                    $mess=M('maize');
                    $where['gene']=$_POST['gene'];
                    $id=$mess->where($where)->field('GO_id')->select();
                    $res = array();
                    foreach ($id as $key => $value) {
                     foreach ($value as $key => $val) {
                     $tern=M('tern_infor');
                     $whe['GO_id']=$val;
                  $data=$tern->field('function')->where($whe)->select(); 
                  $res=array_merge($res, $data);   
                    }
                    }
          $this->assign('box',$res);
          $this->redirect('Analysis/analysis');
              }   
            if($select == "Rice")
             {
              echo $select;
                    $mess=M('rice');
                    $where['gene']=$_POST['gene'];
                    $id=$mess->where($where)->field('GO_id')->select();
                    $res = array();
                    foreach ($id as $key => $value) {
                       foreach ($value as $key => $val) {
                    $tern=M('tern_infor');
                    $whe['GO_id']=$val;
                    $data=$tern->field('function')->where($whe)->select(); 
                    $res=array_merge($res, $data);   
                      }
                       }
          $this->assign('box',$res);
          $this->redirect('Analysis/analysis');
          }
        }
}
}