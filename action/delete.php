<?php
  include '../connect/connect.php';
  date_default_timezone_set('Asia/Taipei');//設定時間為台北
  $datetime = date("Y");//時間
  $last_year = date("Y",strtotime("-1 year"));//去年的時間

  $Sql = new Sql();

  $SelHow = $Sql->Select($db, $last_year);//先搜尋資料庫看看有無去年的資料

  if ($SelHow == true) {
    $DeHow = $Sql->Delete($db, $last_year);
    if ($DeHow == true) {
      message("刪除成功","../show.php");
    }else {
      echo "s";
    }
  }

  class Sql{
    function Select($db, $last_year){
      $SelSql = "SELECT datetime FROM `bookname` WHERE datetime='".$last_year."'";
      $Que = $db->query($SelSql);
      if ($Que == true) {
        return true;
      }else {
        return false;
      }
    }
    function Delete($db, $last_year){
      $DeSql = "DELETE FROM `bookname` WHERE datetime = '".$last_year."'";
      $Que = $db->query($DeSql);
      if ($Que == true) {
        return true;
      }else{
        return false;
      }
    }
  }

  function message($message, $url){
    echo "
      <script>
        message = '$message';
        url = '$url';
        alert(message);
        document.location.href = url;
      </script>
    ";
  }

 $db = null;
 ?>
