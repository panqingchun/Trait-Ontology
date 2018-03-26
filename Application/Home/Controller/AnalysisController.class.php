<?php
namespace Home\Controller;
use Think\Controller;
class AnalysisController extends Controller {
      public function analysis(){
        $this->display();
      }
      
      public function module(){
          $trait_ge = array();    //根据输入基因查询到的基因
          $trait_gen = array();    //去键名
          $trait_gene = array();    //去重复值
          $network = M('network');
          $expression = M('maizenew_co_expression');
          $rice_expression = M('ricenew_co_expression');
          $rice_network = M('rice_network');
          $v4 = M('v3_v4');
          $result = array();
          $vresult = array();
          $co_gene = array();
          if(IS_AJAX){

              $genelist = I('post.gene','');
              $species = I('post.species','');
            if($species == "Maize") {
              foreach ($genelist as $key => $value) {
                if( strlen($value) <= 11) { $new_value = $value." "; }
                else { $new_value = $value; }
                $where['genelist'] = array('like','%'.$new_value.'%');
                $bool = $network->where($where)->field('moduleID')->select();
                if(  $bool ) {
                  $result = array_merge($result, $bool);
                }else {
                  $result[$key]['moudleID'] = null;
                }
                
                $con['V3'] = $value;
                $vres = $v4->where($con)->field('V4')->select();
                if(empty($vres))  $vres[$key]['v4'] = 'Non-existent';
                $vresult = array_merge($vresult,$vres);

                $map['gene1'] = $value;
                $co_gene[$key] = $expression->where($map)->select();          
              }
              $init_data = $network->select();
              //$this->assign('network_data',$data);
            }
            if($species =="Rice") {
              foreach ($genelist as $key => $value) {
                if( strlen($value) <= 11) { $new_value = $value." "; }
                else { $new_value = $value; }
                $where['genelist'] = array('like','%'.$new_value.'%');
                $bool = $rice_network->where($where)->field('moduleID')->select();
                if(  $bool ) {
                  $result = array_merge($result, $bool);
                }else {
                  $result[$key]['moudleID'] = null;
                }
                $map['gene1'] = $value;
                //$map['gene1'] = 'GRMZM5G899025';
                $co_gene[$key] = $rice_expression->where($map)->select();    
              // $co_gene = $expression->where($map)->select();         
              }
              $init_data = $rice_network->select();
              //$this->assign('network_data',$data);
            }  
            $data['gene'] = $genelist;
            $data['res'] = $result;
            $data['vres'] = $vresult;
            $data['co_gene'] = $co_gene;
            $data['init'] = $init_data;
            $this->ajaxReturn($data);
          }else{
             $this->error('非法请求');
          }
      }

      public function find_infor(){
        $species = $_POST['species'];
         if(IS_AJAX)
        {
        if($species=="Maize")
        {
             $maize=M('pqc_maize');
         }
         if($species=="Rice")
        {
             $maize=M('pqc_rice');
         }
             $tra = array();
             $tra_gen = array();
             $tra_gene = array();
             $tra=$maize->distinct(true)->field('Ref_infor')->select();
               foreach($tra as $row){
                 $tra_gen[] = array_values($row);
               }
               foreach ($tra_gen as $value){
                   $tra_gene = array_merge($tra_gene,$value);
               }
             $this->ajaxReturn($tra_gene,"json");
    }
     else{
       $this->ajaxReturn("返回错误");
     }
    
      }
      
      public function find_gene(){
        
          $trait =$_POST['gene'];
        if($_POST['species']=="Maize")
          {
            $ty=M('pqc_maize');
          }
          if($_POST['species']=="Rice")
          {
            $ty=M('pqc_rice');
          }
            $wherty['Trait']=$trait;                          
            $trait_ge['data'] = $ty->where($wherty)->field('Gene_refGene,ID_ref,Pvalue,Ref_infor')->select(); 
            $trait_ge['count'] = $ty->where($wherty)->distinct(true)->field('ID_ref')->select();
            // $count = count($count); 
            $this->ajaxreturn($trait_ge,"json");
    
      }

      public function ajax(){
       $species = $_POST['species'];
       $type = $_POST['ty'];
        if(IS_AJAX)
       {
       if($species=="Maize")
       {
            $maize=M('pqc_maize');
        }
        if($species=="Rice")
       {
            $maize=M('pqc_rice');
        }
            $tra = array();
            $tra_gen = array();
            $tra_gene = array();
            $tra=$maize->distinct(true)->field('Trait')->select();
              foreach($tra as $row){
                $tra_gen[] = array_values($row);
              }
              foreach ($tra_gen as $value){
                  $tra_gene = array_merge($tra_gene,$value);
              }
            $this->ajaxReturn($tra_gene,"json");
  }
    else{
      $this->ajaxReturn("返回错误");
    }
  }

  public function table2(){
    $trait_ge = array();    //根据输入基因查询到的基因
    $trait_gen = array();    //去键名
    $trait_gene = array();    //去重复值
    $a = array();
    $h = array();   //属于类中的基因数
    $t = array();    //所有基因中这种属于类中的基因数
    $hs = array();    
    $tr = array();
    $id = array();    //根据输入基因查询到的TO_ID
    $idi = array();   //去掉TO_ID的键名
    $arr =array();    //给idi降维
    $idd = array();   //去掉arr重复值
    $TO_a = array();
    $TO_an = array();
    $TO_ann = array();
    // $fiex =array();
    // $fi =array();
    // $find_exit =array();
    // $find_exi =array();
    // $find_ex =array();
    // dunp($_POST['ld'] == "10kb");
  //  $id = $_POST['ld'];
    
    if($_POST['ld'] == "10Kb"){
      $m=M('maizenew10kre_deletelevel');
    }
    if($_POST['ld']=="50Kb"){
      $m=M('ricenew50kre_deletelevel');
    }
    if($_POST['ld']=="25Kb" && $_POST['species']=="Maize"){
      $m=M('maizenew25kre_deletelevel');
    }
    if($_POST['ld']=="25Kb" && $_POST['species']=="Rice"){
      $m=M('ricenew25kre_deletelevel');
    }
    $a = $_POST['gene'];
    $s = 0;
    foreach ($a as $key=>$value){
      $where['Gene']=$value;
      if($m->where($where)->find())
      $s++;
    }
    foreach ($a as $key=>$value)
    {
      $where['Gene']=$value;
      $id = array_merge($id, $m->where($where)->field('TO_ID')->select());
    } 
    foreach($id as $row){
        $idi[] = array_values($row);
    }

    foreach ($idi as $value){
      $arr = array_merge($arr,$value);
    }
    $idd = array_unique($arr);
    $idd = array_merge($idd);

    //计算h/s*100
    // foreach($idd as $key => $value){
    //   $h[$key] = 0;
    //   foreach($a as $val){
    //     $wheh['Gene'] = $val;
    //     $wheh['TO_ID'] = $value;
    //     $fi = $m->where($wheh)->find();
    //     if($fi){
    //       $h[$key] +=1;
    //     }
    //   }
    // $hs[$key] = $h[$key]/$s*100;
    // } 
     foreach ($idd as $key => $value){
        $find_ex = array();
        $h[$key] = 0;
        $wheh['TO_ID'] = $value;
        $fiex[$key] = $m->where($wheh)->field('Gene')->select();

        foreach ($fiex[$key] as $value){
          array_push($find_ex,$value['gene']); 
       }

          // var_dump($find_ex);
        foreach($a as $val){
        if(in_array($val,$find_ex)){
          $h[$key] +=1;
        }
      }
    $hs[$key] = $h[$key]/$s*100;
    }
    //计算t/r*100
      $rc = $m->distinct(true)->field('Gene')->select();
      $r =count($rc);
    foreach($idd as $key => $value){
      $whet['TO_ID'] = $value;
      $tc = $m->where($whet)->distinct(true)->field('Gene')->select();
      $t[$key] =count($tc);
      $tr[$key] = $t[$key]/$r*100;
    }
    //查询横坐标
    foreach($idd as $key => $value){
      $whea['TO_ID'] = $value;
      $TO_a[$key] = $m->where($whea)->field('TO_annotation')->find();
      // var_dump($TO_an[$key]);
    }
    foreach($TO_a as $row){
        $TO_an[] = array_values($row);
    }
    foreach ($TO_an as $value){
      $TO_ann = array_merge($TO_ann,$value);
    }
      // var_dump($TO_an);
    // $z = array_merge($TO_ann,$hs,$tr);
    $z['s'] = $s;
    $z['h'] = $h;
    $z['t'] = $t;
    $z['r'] = $r;
    $z['TO_ID'] = $idd;
    $z['TO_annotation'] = $TO_ann;
    $this->ajaxReturn($z,"json"); 
}

public function table3(){
      $trait_ge = array();    //根据输入基因查询到的基因
      $trait_gen = array();    //去键名
      $trait_gene = array();    //去重复值
      $a = array();
    $h = array();   //属于类中的基因数
    $t = array();    //所有基因中这种属于类中的基因数
    $hs = array();    
    $tr = array();
    $id = array();    //根据输入基因查询到的GO_id
    $idi = array();   //去掉GO_id的键名
    $arr =array();    //给idi降维
    $idd = array();   //去掉arr重复值
    $TO_a = array();
    $TO_an = array();
    $TO_ann = array();
    $a =$_POST['gene'];
  if($_POST['species']=="Maize")
  {
    $m=M('maizedelete');
  }

  if($_POST['species']=="Rice"){
    $m=M('ricedelete');
  }
    // $s = count($a); 
    $s = 0;
    foreach ($a as $key=>$value){
      $where['gene']=$value;
      if($m->where($where)->find())
      $s++;
    }
    foreach ($a as $key=>$value)
    {
      $where['gene']=$value;
      $id = array_merge($id, $m->where($where)->field('GO_id')->select()); 
    } 
    foreach($id as $row){
        $idi[] = array_values($row);
    }

    foreach ($idi as $value){
      $arr = array_merge($arr,$value);
    }
    $idd = array_unique($arr);
    $idd = array_merge($idd);



     foreach ($idd as $key => $value){
       
        $find_ex = array();
        $h[$key] = 0;
        $wheh['GO_id'] = $value;
        $fiex[$key] = $m->where($wheh)->field('gene')->select();
     
           foreach ($fiex[$key] as $value){
             array_push($find_ex,$value['gene']); 
          }

          // var_dump($find_ex);
        foreach($a as $val){
        if(in_array($val,$find_ex)){
          $h[$key] +=1;
        }
      }
       $hs[$key] = $h[$key]/$s*100;


    }


    //计算t/r*100
      $rc = $m->distinct(true)->field('gene')->select();
      $r =count($rc);
    foreach($idd as $key => $value){
      $whet['GO_id'] = $value;
      $tc = $m->where($whet)->distinct(true)->field('gene')->select();
      $t[$key] =count($tc);
      $tr[$key] = $t[$key]/$r*100;
    }
    // //查询横坐标
    foreach($idd as $key => $value){
      $whea['GO_id'] = $value;
      $TO_a[$key] = M('term_infor')->where($whea)->field('Function')->find();

    }
    foreach($TO_a as $row){
        $TO_an[] = array_values($row);
    }
    foreach ($TO_an as $valu){
      $TO_ann = array_merge($TO_ann,$valu);
    }
    // $z = array_merge($TO_ann,$hs,$tr);
    $z['s'] = $s;
    $z['h'] = $h;
    $z['t'] = $t;
    $z['r'] = $r;
    $z['GO_ID'] = $idd;
    $z['Function'] = $TO_ann;
    $this->ajaxReturn($z,"json"); 
}
public function table4(){
      $trait_ge = array();    //根据输入基因查询到的基因
      $trait_gen = array();    //去键名
      $trait_gene = array();    //去重复值
      $a = array();
    $h = array();   //属于类中的基因数
    $t = array();    //所有基因中这种属于类中的基因数
    $hs = array();    
    $tr = array();
    $id = array();    //根据输入基因查询到的TO_ID
    $idi = array();   //去掉TO_ID的键名
    $arr =array();    //给idi降维
    $idd = array();   //去掉arr重复值
    $TO_a = array();
    $TO_an = array();
    $TO_ann = array();
        $a =$_POST['gene'];
  if($_POST['species']=="Maize")
  {
    $m=M('maizenew_pathway');
  }

  if($_POST['species']=="Rice"){
    $m=M('ricenew_pathway');
  }
  $s = 0;
  foreach ($a as $key=>$value){
    $where['gene']=$value;
    if($m->where($where)->find())
    $s++;
  }
    foreach ($a as $key=>$value)
    {
      $where['gene']=$value;
      $id = array_merge($id, $m->where($where)->field('pathway')->select()); 
    } 
    foreach($id as $row){
        $idi[] = array_values($row);
    }

    foreach ($idi as $value){
      $arr = array_merge($arr,$value);
    }
    $idd = array_unique($arr);
    $idd = array_merge($idd);

    // //计算h/s*100
    // foreach($idd as $key => $value){
    //   $h[$key] = 0;
    //   foreach($a as $val){
    //     $wheh['gene'] = $val;
    //     $wheh['pathway'] = $value;
    //     $fi = $m->where($wheh)->find();
    //     if($fi){
    //       $h[$key] +=1;
    //     }
    //   }
    // $hs[$key] = $h[$key]/$s*100;
    // } 
     // foreach($idd as $key => $value){
    //   $h[$key] = 0;
    //   foreach($a as $val){
    //     $wheh['Gene'] = $val;
    //     $wheh['TO_ID'] = $value;
    //     $fi = $m->where($wheh)->find();
    //     if($fi){
    //       $h[$key] +=1;
    //     }
    //   }
    // $hs[$key] = $h[$key]/$s*100;
    // } 
     foreach ($idd as $key => $value){
        $find_ex = array();
        $h[$key] = 0;
        $wheh['pathway'] = $value;
        $fiex[$key] = $m->where($wheh)->field('gene')->select();

        foreach ($fiex[$key] as $value){
          array_push($find_ex,$value['gene']); 
       }
          // var_dump($find_ex);
        foreach($a as $val){
        if(in_array($val,$find_ex)){
          $h[$key] +=1;
        }
      }
    $hs[$key] = $h[$key]/$s*100;
    }

    // //计算t/r*100
      $rc = $m->distinct(true)->field('gene')->select();
      $r =count($rc);
    foreach($idd as $key => $value){
      $whet['pathway'] = $value;
      $tc = $m->where($whet)->distinct(true)->field('gene')->select();
      $t[$key] =count($tc);
      $tr[$key] = $t[$key]/$r*100;
    }
    // //查询横坐标
    // foreach($idd as $key => $value){
    //   $whea['TO_ID'] = $value;
    //   $TO_a[$key] = $m->where($whea)->field('TO_annotation')->find();
    //   // var_dump($TO_an[$key]);
    // }
    // foreach($TO_a as $row){
    //     $TO_an[] = array_values($row);
    // }
    // foreach ($TO_an as $value){
    //   $TO_ann = array_merge($TO_ann,$value);
    // }
    //   // var_dump($TO_an);
    // $z = array_merge($idd,$hs,$tr);
    $z['s'] = $s;
    $z['h'] = $h;
    $z['t'] = $t;
    $z['r'] = $r;
    $z['TO_ID'] = $idd;
    $this->ajaxReturn($z,"json"); 
}

public function un_download(){
  if(IS_POST) {
    $data1 = $_POST['down1']; session('da1',$data1);
    $name = $_POST['name']; session('name',$name);
    $this->ajaxReturn($_POST['down1']);
  }
  else {
    $data1 =  $_SESSION['da1']; 
    $name =  $_SESSION['name']; 
  }
  import("Org.Util.PHPExcel");  //命名空间
  import("Org.Util.PHPExcel.Writer.Excel5", '', '.php');  
  import("Org.Util.PHPExcel.IOFactory", '', '.php'); 
  $objPHPExcel = new \PHPExcel();//实例化类文件 等同于在桌面新建一个excel表格
  $objPHPExcel->setactivesheetindex(0); 
  $objSheet = $objPHPExcel->getActiveSheet();//获得当前活动sheet操作对象
  $objSheet->setTitle($name);//给当前活动sheet修改名称
  $objSheet->getDefaultStyle()->getAlignment()->setVertical(\PHPExcel_Style_Alignment::VERTICAL_CENTER)->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);//设置单元格垂直居中、水平居中
  $objSheet->getStyle("A1:J1")->getFont()->setName("微软雅黑")->setSize(10)->setBold(true);//设置单元格范围的字体、字体大小、加粗
  $objSheet->getStyle("A1:J1")->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('#FFFFFF');//给单元格填充背景颜色
  //添加边框
  $styleArray = array(
      'borders' => array(
          'outline' => array(
              'style' => \PHPExcel_Style_Border::BORDER_THICK,
              'color' => array('argb' => '#F0F8FF'),
          ),
      ),
  );
  $objSheet->getStyle("A1")->applyFromArray($styleArray);
  $objSheet->getStyle("B1")->applyFromArray($styleArray);
  $objSheet->getStyle("C1")->applyFromArray($styleArray);
  $objSheet->getStyle("D1")->applyFromArray($styleArray);
  $objSheet->getStyle("E1")->applyFromArray($styleArray);
  $objSheet->getStyle("F1")->applyFromArray($styleArray);
  $objSheet->getStyle("G1")->applyFromArray($styleArray);
  $objSheet->getStyle("H1")->applyFromArray($styleArray);
  $objSheet->getStyle("I1")->applyFromArray($styleArray);
  $objSheet->getStyle("J1")->applyFromArray($styleArray);

  $objSheet->setCellValue("A1","queryitem")
  ->setCellValue("B1","no-queryitem")
  ->setCellValue("C1","querytotal")
  ->setCellValue("D1","bgitem")
  ->setCellValue("E1","no-bgitem")
  ->setCellValue("F1","bgtotal")
  ->setCellValue("G1","term")
  ->setCellValue("H1","Pvalue")
  ->setCellValue("I1","queryitem-rate")
  ->setCellValue("J1","bgitem-rate");
//循环填充
  $data1_count=count($data1[0])+1;
    $j = 2;
  for($i=0;$i<$data1_count;$i++){     
        $objSheet ->setCellValue("A".$j,$data1[0][$i])
        ->setCellValue("B".$j,$data1[1][$i])
        ->setCellValue("C".$j,$data1[2][$i])
        ->setCellValue("D".$j,$data1[3][$i])
        ->setCellValue("E".$j,$data1[4][$i])
        ->setCellValue("F".$j,$data1[5][$i])
        ->setCellValue("G".$j,$data1[6][$i])
        ->setCellValue("H".$j,$data1[7][$i])
        ->setCellValue("I".$j,$data1[8][$i])
        ->setCellValue("J".$j,$data1[9][$i]);
      $j++;
  }
      //设置文件保存的命名、编码、以及开放保存路径权限
      $fn= $name.time().".xls";
      header('Content-Type: application/vnd.ms-excel; charset=utf-8');
      header("Content-Disposition: attachment;filename=$fn");//告诉浏览器将要输出的名称
      header('Cache-Control: max-age=0');//禁止缓存
      $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel5');//生成excel文件
      $objWriter->save('php://output');//彻底开放保存路径
      exit;

}

public function co_download () {
  if(IS_POST) {
    $data = $_POST['networkData']; session('network',$data);
    $data1 = $_POST['down1']; session('da1',$data1);
    $data2 = $_POST['down2']; session('da2',$data2);
    $data3 = $_POST['down3']; session('da3',$data3);
    $this->ajaxReturn($_POST['down3']);
  }
  else {
    $data =  $_SESSION['network'];
    $data1 =  $_SESSION['da1']; 
    $data2 =  $_SESSION['da2']; 
    $data3 =  $_SESSION['da3']; 
  }
  import("Org.Util.PHPExcel");  //命名空间
  import("Org.Util.PHPExcel.Writer.Excel5", '', '.php');  
  import("Org.Util.PHPExcel.IOFactory", '', '.php'); 
  $objPHPExcel = new \PHPExcel();//实例化类文件 等同于在桌面新建一个excel表格
  $objPHPExcel->setactivesheetindex(0); 
  $objSheet = $objPHPExcel->getActiveSheet();//获得当前活动sheet操作对象
  $objSheet->setTitle('module');//给当前活动sheet修改名称
  $objSheet->getDefaultStyle()->getAlignment()->setVertical(\PHPExcel_Style_Alignment::VERTICAL_CENTER)->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);//设置单元格垂直居中、水平居中
  $objSheet->getStyle("A1:C1")->getFont()->setName("微软雅黑")->setSize(10)->setBold(true);//设置单元格范围的字体、字体大小、加粗
  $objSheet->getStyle("A1:C1")->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('#FFFFFF');//给单元格填充背景颜色
  //添加边框
  $styleArray = array(
      'borders' => array(
          'outline' => array(
              'style' => \PHPExcel_Style_Border::BORDER_THICK,
              'color' => array('argb' => '#F0F8FF'),
          ),
      ),
  );
  
  $objSheet->getStyle("A1")->applyFromArray($styleArray);
  $objSheet->getStyle("B1")->applyFromArray($styleArray);
  $objSheet->getStyle("C1")->applyFromArray($styleArray);   
  
  $objSheet->setCellValue("A1","moduleID")
      ->setCellValue("B1","gene")
      ->setCellValue("C1","v4");

  //循环填充
    $data_count=count($data['module']);
     $j = 2;
    for($i=0;$i<$data_count;$i++){     
          $objSheet->setCellValue("A".$j,$data['module'][$i][0])
          ->setCellValue("B".$j,$data['module'][$i][1])
          ->setCellValue("C".$j,$data['module'][$i][2]);
           $j++;
    }

    $objPHPExcel->createSheet();  
    $objPHPExcel->setactivesheetindex(1); 
    $objSheet1 = $objPHPExcel->getActiveSheet();//获得当前活动sheet操作对象
    $objSheet1->setTitle('co_expression');//给当前活动sheet修改名称
    $objSheet1->getDefaultStyle()->getAlignment()->setVertical(\PHPExcel_Style_Alignment::VERTICAL_CENTER)->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);//设置单元格垂直居中、水平居中
    $objSheet1->getStyle("A1:D1")->getFont()->setName("微软雅黑")->setSize(10)->setBold(true);//设置单元格范围的字体、字体大小、加粗
    $objSheet1->getStyle("A1:D1")->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('#FFFFFF');//给单元格填充背景颜色

    $objSheet1->getStyle("A1")->applyFromArray($styleArray);
    $objSheet1->getStyle("B1")->applyFromArray($styleArray);
    $objSheet1->getStyle("C1")->applyFromArray($styleArray);
    $objSheet1->getStyle("D1")->applyFromArray($styleArray);

    $objSheet1->setCellValue("A1","moduleID")
    ->setCellValue("B1","gene1")
    ->setCellValue("C1","gene2")
    ->setCellValue("D1","value");
  //循环填充
    $data_count=count($data['co']);
      $j = 2;
    for($i=0;$i<$data_count;$i++){     
          $objSheet1->setCellValue("A".$j,$data['co'][$i][0])
          ->setCellValue("B".$j,$data['co'][$i][1])
          ->setCellValue("C".$j,$data['co'][$i][2])
          ->setCellValue("D".$j,$data['co'][$i][3]);
        $j++;
    }

      //设置文件保存的命名、编码、以及开放保存路径权限
      $fn= "download_".time().".xls";
      header('Content-Type: application/vnd.ms-excel; charset=utf-8');
      header("Content-Disposition: attachment;filename=$fn");//告诉浏览器将要输出的名称
      header('Cache-Control: max-age=0');//禁止缓存
      $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel5');//生成excel文件
      $objWriter->save('php://output');//彻底开放保存路径
      exit;
} //function co_download

public function printgene(){
  
          if(IS_AJAX)
         {
            $kww= $_POST['gene'];
            $type= $_POST['type'];
            $tra = $_POST['tra'];
             // $this->ajaxReturn($kww);
            $spe=$_POST['select'];
                  $res=array();
                  $gene=array();
                  $gene_count=0;
                  if($kww==""){ 
                     }
              else{
                    
                    $gene=$kww;
                    $gene_count =count($gene);
                  for($i=0;$i<$gene_count;$i++){   //处理一个基因
                        $per=$gene[$i];
                        if($spe=="Maize")
                        {
                        $maize=M('pqc_maize');
                        }
                        if($spe=="Rice"){
                        $maize=M('pqc_rice');  
                        }
                        $where['Gene_refGene']=$per;
                        if($type=="Trait"){
                          $where['Trait']=$tra;
                        }
                        $mess=$maize->distinct(true)->field('ID,ID_ref,Marker_name,chr_ref,Marker_location,Trait,allele,organ,Pvalue,indel_snp,MAF,Pop_type,Pop_size,Marker_set,Model,Genome_version,final_version,Chr,Position,Ref,note,Ref_name,Chr_gene,Start,Gene_refGene,New_gene,Annotation,Level1,Level2,Level3,Level4,Level5,Level6,GO_ID')->where($where)->select();
                        $a=count($mess);
                        $res=array_merge($res,$mess);
                     }
                     session('bb',null);
                     session('bb',$res);
  
                     $this->ajaxReturn($res);
                   }
            }
          }

}