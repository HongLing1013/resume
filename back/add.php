<?php 
// $do=$_GET['do']??'add';

include_once "./base.php";?>

<h3 style="text-align:center;">新增作品</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
  <table>
    <tr>
      <td>作品圖片：</td>
      <td><input type="file" name="img"></td>
    </tr>
    <tr>
      <td>作品連結網址：</td>
      <td><input type="text" name="href"></td>
    </tr>
  </table>
  <div>
    <input type="hidden" name="table" value="repository">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
  </div>
</form>