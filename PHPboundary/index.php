<!doctype html>
<html>
<head>
<title>Welcom to Fuzhou University</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<link rel="stylesheet" type="text/css" href="css.css"/>
</head>

<body>
<div id="content">
       <div id="front"></div>
  <div id="main" >
<?php session_start();
header("Content-Type:text/html;charset=utf-8");
include("conn.php");
include("excel_in.php");
mysqli_query($conn,"set names utf8");
$sql="select * from 2015cs_course";
$query=mysqli_query($conn,$sql);
while($result=mysqli_fetch_array($query, MYSQLI_NUM))
{
    if($result==false){
?>
         <table width="100%" height="30"  border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="36" align="center">暂无报课信息！</td>
            </tr>
          </tabl
<?php
    }
    else{
?>
 <table width="100%"  border="0" cellspacing="0" cellpadding="0">
   <h1 style="font-size:30px;font-family:'Times New Roman', Times, serif;color:#E1C03C;" >2015&nbsp;&nbsp;教&nbsp;&nbsp;师&nbsp;&nbsp;开&nbsp;&nbsp;课&nbsp;&nbsp;计&nbsp;&nbsp;划</h1>
</table>

<table width="100%"  border="1" cellpadding="8" cellspacing="1" bordercolor="#FFFFFF" bordercolordark="#D2E3E6" bordercolorlight="#FFFFFF">
  <tr align="center" bgcolor="#D0E9F8">
    <td width="5%">年级</td>
    <td width="10%">专业</td>
    <td width="5%">专业人数</td>
    <td width="16%">课程名称</td>
    <td width="12%">选修类型</td>
    <td width="5%">学分</td>
    <td width="5%">学时</td>
    <td width="5%">实验学时</td>
    <td width="5%">上机学时</td>
    <td width="8%">起讫周序</td>
    <td width="10%">任课教师</td>
    <td width="10%">备注</td>
  </tr>
  <?php
    do{
  ?>
   <tr style="font-size:12px">
    <td width="5%",style="padding:5px;">&nbsp;<?php echo $result[1];?></td>
    <td width="10%",style="padding:5px;">&nbsp;<?php echo $result[2];?></td>
    <td width="5%",style="padding:5px;">&nbsp;<?php echo $result[3];?></td>
    <td width="16%",style="padding:5px;">&nbsp;<?php echo $result[4];?></td>
    <td width="12%",style="padding:5px;">&nbsp;<?php echo $result[5];?></td>
    <td width="5%",style="padding:5px;">&nbsp;<?php echo $result[6];?></td>
    <td width="5%",style="padding:5px;">&nbsp;<?php echo $result[7];?></td>
    <td width="5%",style="padding:5px;">&nbsp;<?php echo $result[8];?></td>
    <td width="5%",style="padding:5px;">&nbsp;<?php echo $result[9];?></td>
    <td width="8%",style="padding:5px;">&nbsp;<?php echo $result[10];?></td>
    <td width="10%",style="padding:5px;">&nbsp;<?php echo $result[11];?></td>
    <td width="10%",style="padding:5px;">&nbsp;<?php echo $result[12];?></td>
   </tr>
   <?php
	}while($result=mysqli_fetch_array($query, MYSQLI_NUM));
  }?>
  </table>
</div>
  </br>
  <div id="footer">
         <ul><li>Copyright &copy; 2015 Fuzhou University</li></ul>
      </div>
</div>
</body>
</html>
<?php
   exit;
}
?>