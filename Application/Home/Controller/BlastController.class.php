<?php
namespace Home\Controller;
use Think\Controller;
class BlastController extends Controller {
  public function Blast(){
        $this->display();
  }
  public function download(){
     $time = time();
     $select = $_POST["select"];
     $txt = $_POST["context"];
     $evalue = $_POST["evalue"];
     $degree = $_POST["degree"];
     if( $select == 'Rice') {
      $name = "/var/www/html/julei-0917/Public/txt/input_".$time.".txt";
      $outname = "/home/blast/rice/results_".$time.".txt";
      $myfile = fopen($name, "w") or die("Unable to open file!");
      $reg = '/(\w+)\t(LOC_Os\w{8})\t(\d{2,3})\.\d{3}/';
      fwrite($myfile, $txt);
      fclose($myfile);
      system("sudo /home/ncbi-blast-2.7.1+/bin/blastn -query ".$name." -db /home/blast/rice/blastdb -out ".$outname." -evalue ".$evalue." -outfmt 6", $result);
     }
     if( $select == 'Maize') {
      $name = "/var/www/html/julei-0917/Public/txt/input_".$time.".txt";
      $outname = "/home/blast/maize/results_".$time.".txt";
      $myfile = fopen($name, "w") or die("Unable to open file!");
      $reg = '/(\w+)\t(GRMZM\w{8})\t(\d{2,3})\.\d{3}/';
      fwrite($myfile, $txt);
      fclose($myfile);
      system("sudo /home/ncbi-blast-2.7.1+/bin/blastn -query ".$name." -db /home/blast/maize/blastdb -out ".$outname." -evalue ".$evalue." -outfmt 6", $result);
     }
      if( $result == 0) {
       $resultFile = fopen($outname, 'r')or die("Unable to open resultFile!");
       $resultText = fread($resultFile, filesize($outname))or die("Unable to read resultFile!");
       preg_match_all($reg, $resultText, $matches);
       fclose($resultFile);
       unlink($name);
       unlink($outname);
       $newMatches = array();
       foreach ($matches[3] as $key => $value) { 
        if(intval($value) >= intval($degree)) array_push($newMatches, array($matches[1][$key],$matches[2][$key]));
       }
       $this->ajaxReturn($newMatches,"json"); //$matches 为基因组
      } else {
        $this->ajaxReturn($result,"json");
      }   
  }
}

//system("sudo /home/ncbi-blast-2.7.1+/bin/blastn -query /home/blast/rice/input.txt -db /home/blast/rice/blastdb -out /home/blast/rice/results.txt -evalue 1e-5 -outfmt 6", $result);