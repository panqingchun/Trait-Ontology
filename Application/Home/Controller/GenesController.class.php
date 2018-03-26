<?php
namespace Home\Controller;
use Think\Controller;
session_start();
class GenesController extends Controller {
      public function genes(){
      $this->display();
      }

      public function v4tov3() {
        $genelist = $_POST['gene'];
        $v4 = M('v3_v4');
        $result = array();
        foreach ($genelist as $key => $value) {
          $con['V4'] = $value;
          $res = $v4->where($con)->field('V3')->find();
          if(!empty($res)) {
            $result = array_merge($result,Array($res['v3']));
          } 
        }
        $this->ajaxReturn($result);
      }
       public function printgene(){

        if(IS_AJAX)
       {
          $kww= $_POST['gene'];
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
        public function info(){
          if(IS_AJAX)
       {

              $id= $_POST['id'];
               $spe=$_POST['species'];
              if($spe=="Maize")
              {
                $maize=M('pqc_maize');
              }
              if($spe=="Rice")
              {
                $maize=M('pqc_rice');  
              }
              $where['ID']=$id;
              $mess=$maize->field('ID,ID_ref,Marker_name,chr_ref,Marker_location,Trait,allele,organ,Pvalue,indel_snp,MAF,Pop_type,Pop_size,Marker_set,Model,Genome_version,final_version,Chr,Position,Ref,note,Ref_name,Chr_gene,Start,Gene_refGene,New_gene,Annotation,Level1,Level2,Level3,Level4,Level5,Level6,GO_ID')->where($where)->select();
             foreach($mess as $key => $value){
               $mes=$value;

             }
              $this->ajaxReturn($mes);

        }
      }
           
             public function download(){
                //查询sql生成数组
                $data = $_SESSION['bb'];  
                import("Org.Util.PHPExcel");  //命名空间
                import("Org.Util.PHPExcel.Writer.Excel5", '', '.php');  
                import("Org.Util.PHPExcel.IOFactory", '', '.php'); 
                $objPHPExcel = new \PHPExcel();//实例化类文件 等同于在桌面新建一个excel表格
                $objSheet = $objPHPExcel->getActiveSheet();//获得当前活动sheet操作对象
                $objSheet->setTitle('loan_info');//给当前活动sheet修改名称
                $objSheet->getDefaultStyle()->getAlignment()->setVertical(\PHPExcel_Style_Alignment::VERTICAL_CENTER)->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);//设置单元格垂直居中、水平居中
                $objSheet->getStyle("A1:AH1")->getFont()->setName("微软雅黑")->setSize(10)->setBold(true);//设置单元格范围的字体、字体大小、加粗
                $objSheet->getStyle("A1:AH1")->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('#FFFFFF');//给单元格填充背景颜色
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
                $objSheet->getStyle("K1")->applyFromArray($styleArray);
                $objSheet->getStyle("L1")->applyFromArray($styleArray);
                $objSheet->getStyle("M1")->applyFromArray($styleArray);
                $objSheet->getStyle("N1")->applyFromArray($styleArray);
                $objSheet->getStyle("O1")->applyFromArray($styleArray);
                $objSheet->getStyle("P1")->applyFromArray($styleArray);
                $objSheet->getStyle("Q1")->applyFromArray($styleArray);
                $objSheet->getStyle("R1")->applyFromArray($styleArray);
                $objSheet->getStyle("S1")->applyFromArray($styleArray);
                $objSheet->getStyle("T1")->applyFromArray($styleArray);
                $objSheet->getStyle("U1")->applyFromArray($styleArray);
                $objSheet->getStyle("V1")->applyFromArray($styleArray);
                $objSheet->getStyle("W1")->applyFromArray($styleArray);
                $objSheet->getStyle("X1")->applyFromArray($styleArray);
                $objSheet->getStyle("Y1")->applyFromArray($styleArray);
                $objSheet->getStyle("Z1")->applyFromArray($styleArray);
                $objSheet->getStyle("AA1")->applyFromArray($styleArray);
                $objSheet->getStyle("AB1")->applyFromArray($styleArray);
                $objSheet->getStyle("AC1")->applyFromArray($styleArray);
                $objSheet->getStyle("AD1")->applyFromArray($styleArray);
                $objSheet->getStyle("AE1")->applyFromArray($styleArray);
                $objSheet->getStyle("AF1")->applyFromArray($styleArray);
                $objSheet->getStyle("AG1")->applyFromArray($styleArray);
                $objSheet->getStyle("AH1")->applyFromArray($styleArray);

                
                

                $objSheet->setCellValue("A1","ID")
                    ->setCellValue("B1","ID_ref")
                    ->setCellValue("C1","Maker_name")
                    ->setCellValue("D1","chr_ref")
                    ->setCellValue("E1","Marker_location")
                    ->setCellValue("F1","Trait")
                    ->setCellValue("G1","allele")
                    ->setCellValue("H1","organ")//给单元格填充相应的值
                    ->setCellValue("I1","Pvalue")
                    ->setCellValue("J1","indel/snp")
                    ->setCellValue("K1","MAF")
                    ->setCellValue("L1","Pop_type")
                    ->setCellValue("M1","Pop_size")
                    ->setCellValue("N1","Marker_set")
                    ->setCellValue("O1","Model")
                    ->setCellValue("P1","Genome_version")
                    ->setCellValue("Q1","Final_version")
                    ->setCellValue("R1","Chr")
                    ->setCellValue("S1","Position")
                    ->setCellValue("T1","Ref")
                    ->setCellValue("U1","note")
                    ->setCellValue("V1","Ref_name")
                    ->setCellValue("W1","chr_gene")
                    ->setCellValue("X1","start")
                    ->setCellValue("Y1","Gene_refGene")
                    ->setCellValue("Z1","New_gene")
                    ->setCellValue("AA1","Annotation")
                    ->setCellValue("AB1","Level1")
                    ->setCellValue("AC1","Level2")
                    ->setCellValue("AD1","Leevl3")
                    ->setCellValue("AE1","Level4")
                    ->setCellValue("AF1","Level5")
                    ->setCellValue("AG1","Level6")
                    ->setCellValue("AH1","GO_id");
                   



                //循环填充
                  $data_count=count($data);
                   $j = 2;
                  for($i=0;$i<$data_count;$i++){     
                        $objSheet->setCellValue("A".$j,$data[$i]['id'])
                        ->setCellValue("B".$j,$data[$i]['id_ref'])
                        ->setCellValue("C".$j,$data[$i]['marker_name'])
                        ->setCellValue("D".$j,$data[$i]['chr_ref'])
                        ->setCellValue("E".$j,$data[$i]['marker_location'])
                        ->setCellValue("F".$j,$data[$i]['trait'])
                        ->setCellValue("G".$j,$data[$i]['allele'])
                        ->setCellValue("H".$j,$data[$i]['organ'])
                        ->setCellValue("I".$j,$data[$i]['pvalue'])
                        ->setCellValue("J".$j,$data[$i]['indel_snp'])
                        ->setCellValue("K".$j,$data[$i]['maf'])
                        ->setCellValue("L".$j,$data[$i]['pop_type'])
                        ->setCellValue("M".$j,$data[$i]['pop_size'])
                        ->setCellValue("N".$j,$data[$i]['marker_set'])
                        ->setCellValue("O".$j,$data[$i]['model'])
                        ->setCellValue("P".$j,$data[$i]['genome_version'])
                        ->setCellValue("Q".$j,$data[$i]['final_version'])
                        ->setCellValue("R".$j,$data[$i]['chr'])
                        ->setCellValue("S".$j,$data[$i]['position'])
                        ->setCellValue("T".$j,$data[$i]['ref'])
                        ->setCellValue("U".$j,$data[$i]['note'])
                        ->setCellValue("V".$j,$data[$i]['ref_name'])
                        ->setCellValue("W".$j,$data[$i]['chr_gene'])
                        ->setCellValue("X".$j,$data[$i]['start'])
                        ->setCellValue("Y".$j,$data[$i]['gene_refgene'])
                        ->setCellValue("Z".$j,$data[$i]['new_gene'])
                        ->setCellValue("AA".$j,$data[$i]['annotation'])
                        ->setCellValue("AB".$j,$data[$i]['level1'])
                        ->setCellValue("AC".$j,$data[$i]['level2'])
                        ->setCellValue("AD".$j,$data[$i]['level3'])
                        ->setCellValue("AE".$j,$data[$i]['level4'])
                        ->setCellValue("AF".$j,$data[$i]['level5'])
                        ->setCellValue("AG".$j,$data[$i]['level6'])
                        ->setCellValue("AH".$j,$data[$i]['go_id']);
                        

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
                }
}
