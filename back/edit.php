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
    $all=$Repo->math('count',"id");
    // 每頁五筆資料
    $div=5;
    $pages=ceil($all/$div);//算頁數
                    $now=$_GET['p']??1;//取得當前頁面
                    $start=($now-1)*$div;//從哪裡開始計算
                    $rows=$Repo->all(" limit $start,$div");
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
            <?php
                    if(($now-1) > 0){//如果有上一頁的話 就顯示<的按鈕
                        $p=$now-1;
                        echo "<a href='?do=edit&p=$p' style='text-decoration:none;'> < </a>";
                    }
                    for($i=1;$i<=$pages;$i++){// 印頁碼
                        $fontsize=($now==$i)?'1.5rem':'';//當前頁數字體放大
                        echo "<a href='?do=edit&p=$i' style='text-decoration:none;font-size:$fontsize' > ";//?代表當前頁面
                        echo $i;
                        echo " </a>";
                    }
                    if(($now+1) <= $pages){//如果有下一頁的話 就顯示>的按鈕
                        $p=$now+1;
                        echo "<a href='?do=edit&p=$p' style='text-decoration:none;'> > </a>";
                    }
                ?>
  <div style="text-align:center">
                    <br>
    <input type="hidden" name="table" value="repository">
    <input type="submit" value="確定更改" style="margin-left:3rem">
    <input type="reset" value="重置" style="margin-left:3rem">
  </div>
  <input type="hidden" name="table" value="repository">
</form>