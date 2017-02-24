<?php
  include '../connect/connect.php';
  date_default_timezone_set('Asia/Taipei');//設定時間為台北
  $datetime = date("Y/m/d/");//時間

  if (isset($_GET["detoday"]) && $_GET["detoday"] == "yes") {

    $DeT = "DELETE FROM bookname WHERE datetime='".$datetime."'";
    $TQ = $db->query($DeT);
    if ($TQ) {
      echo "刪除成功";
      header("refresh:1;url=../show.php");//一秒後轉到指定頁面
    }else {
      echo "刪除失敗";
      header("refresh:1;url=../show.php");//一秒後轉到指定頁面
    }
  }

 ?>
