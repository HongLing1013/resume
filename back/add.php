<?php 
// $do=$_GET['do']??'add';

include_once "./base.php";?>

<h1 style="text-align:center;line-height:6rem">新增作品</h1>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
  <table>
    <tr>
      <td style="line-height:3rem">作品圖片：</td>
      <td><input type="file" name="img"></td>
    </tr>
    <tr>
      <td style="line-height:3rem">作品連結網址：</td>
      <td><input type="text" name="href"></td>
    </tr>
  </table>
  <div style="text-align:center">
    <input type="hidden" name="table" value="repository">
    <input type="submit" value="新增" style="margin-left:3rem">
    <input type="reset" value="重置" style="margin-left:3rem">
  </div>
</form>