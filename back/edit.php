<?php 
// $do=$_GET['do']??'add';

include_once "./base.php";?>

<h1 style="text-align:center;line-height:6rem">管理作品</h1>
<hr>
<form action="./api/edit.php" method="post" enctype="multipart/form-data">
  <table width="100%">
    <tbody>
    <tr>
      <td width="20%">作品圖片</td>
      <td width="60%">網址</td>
      <td width="10%">顯示</td>
      <td width="10%">刪除</td>
    </tr>
    <?php
    $rows=$Repo->all();
    foreach($rows as $row){
    ?>
    <tr>
      <td><img src="./img/<?=$row['img'];?>" style="width:150px;height:70px;"></td>
      <td><input type="text" name="href[]" value="<?=$row['href'];?>"></td>
      <td><input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=($row['sh']==1)?'checked':'';?>></td>
      <td><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
    </tr>
    <input type="hidden" name="id[]" value="<?=$row['id'];?>">
    <?php
    }
    ?>
    </tbody>
  </table>
  <div style="text-align:center">
    <input type="hidden" name="table" value="repository">
    <input type="submit" value="確定更改" style="margin-left:3rem">
    <input type="reset" value="重置" style="margin-left:3rem">
  </div>
  <input type="hidden" name="table" value="repository">
</form>