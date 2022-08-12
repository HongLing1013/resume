<?php 
// $do=$_GET['do']??'add';

include_once "./base.php";?>

<h1 style="text-align:center;line-height:6rem">履歷管理</h1>
<hr>
<form action="./api/edit_about.php" method="post" enctype="multipart/form-data">
  <table width="100%">
    <tbody>
    <tr>
      <td width="10%">照片</td>
      <td width="80%">自我介紹</td>
      <td width="10%">上傳照片</td>
    </tr>
    <?php
    $rows=$About->all();
    foreach($rows as $row){
    ?>
    <tr>
      <td><img src="./img/<?=$row['img'];?>" style="width:100px;height:100px;"></td>
      <td><input type="text" name="text[]" value="<?=$row['text'];?>" style="width:100%;height:100%;"></td>
      <td><input type="file" name="img"></td>
    </tr>
    <input type="hidden" name="id[]" value="<?=$row['id'];?>">
    <?php
    }
    ?>
    </tbody>
  </table>
  <div style="text-align:center">
    <input type="hidden" name="table" value="about">
    <input type="submit" value="確定更改" style="margin-left:3rem">
    <input type="reset" value="重置" style="margin-left:3rem">
  </div>
  <input type="hidden" name="table" value="about">
</form>