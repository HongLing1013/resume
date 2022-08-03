<?php
include_once "../base.php";

if(!empty($_POST['id'])){/* 判定有沒有id送過來
                            有才需要執行下面的迴圈
                            不然就回到本來的地方 */
  foreach ($_POST['id'] as $idx => $id){/* 因為post傳來的資料是id
                                         所以變數也是取名$id
                                         $idx則是它的索引值 */
    if(isset($_POST['del']) && in_array($id,$_POST['del'])){/* 判斷有沒有資料需要刪除
                                                               並用in_array判斷迴圈輪到的這個id是否有在POST裡面del的陣列中
                                                               如果有表示這筆資料需要刪除 */
      $My->del($id);
    }else{
      $row=$My->find($id);/* 先撈資料 */
      $row['img']=$_POST['img'][$idx];/* 更新文字欄位 */
      $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;/* POST的sh如果有勾選 (存在)
                                                                            並且$id也有在sh這個陣列中
                                                                            就將它設為1 否則為0 */
      $My->save($row);/* 更新後儲存 */
    }
  }
}


to("../back.php?do=ad");

?>