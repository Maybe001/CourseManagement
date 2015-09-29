<?php
  header("Content-Type:text/html;charset=utf-8");//确定编码方式
  include("conn.php");
  mysqli_query($conn,"set names utf8");//确保数据库、PHP、HTML的utf8编码
  /*$result=mysqli_query($conn,"SELECT * FROM `table_course`");
  $row=mysqli_fetch_row($result);
  echo $row[0],$row[1],$row[2];*/
  require_once('PHPExcel.php');
  require_once ('PHPExcel/IOFactory.php');
  require_once ('PHPExcel/Reader/Excel5.php');
      
$objReader = new PHPExcel_Reader_Excel5(); //use excel
$objPHPExcel = $objReader->load('cs_course.xls'); //指定的文件
$sheet = $objPHPExcel->getSheet(0); //第一个工作薄
$highestRow = $sheet->getHighestRow(); // 取得总行数
$highestColumn = $sheet->getHighestColumn(); // 取得总列数

 
$id=201501;//数据库的主键
for($j=4;$j<=$highestRow;$j++)//循环读取excel表格存入变量中
{
$course_id=$id++;
$level= $objPHPExcel->getActiveSheet()->getCell("A".$j)->getValue();
$major= $objPHPExcel->getActiveSheet()->getCell("B".$j)->getValue();
$number= $objPHPExcel->getActiveSheet()->getCell("C".$j)->getValue();
$course_name= $objPHPExcel->getActiveSheet()->getCell("D".$j)->getValue();
$choise_type= $objPHPExcel->getActiveSheet()->getCell("E".$j)->getValue();
$credit= $objPHPExcel->getActiveSheet()->getCell("F".$j)->getValue();
$class_hour= $objPHPExcel->getActiveSheet()->getCell("G".$j)->getValue();
$sy_hour= $objPHPExcel->getActiveSheet()->getCell("H".$j)->getValue();
$sj_hour= $objPHPExcel->getActiveSheet()->getCell("I".$j)->getValue();
$from_to= $objPHPExcel->getActiveSheet()->getCell("J".$j)->getValue();
$teacher_name= $objPHPExcel->getActiveSheet()->getCell("K".$j)->getValue();
$remark= $objPHPExcel->getActiveSheet()->getCell("L".$j)->getValue();

$qurry=mysqli_query($conn,"INSERT INTO 2015cs_course VALUES ('$course_id','$level','$major','$number','$course_name','$choise_type','$credit','$class_hour','$sy_hour','$sj_hour','$from_to','$teacher_name','$remark')");//插入数据到数据库

}

?>

