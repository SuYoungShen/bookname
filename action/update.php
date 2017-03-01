<?php
  include '../connect/connect.php';


  $id = (isset($_POST["id"]) && !empty($_POST["id"]))?$_POST["id"]:"";
  $bookname = (isset($_POST["BookName"]) && !empty($_POST["BookName"]))?$_POST["BookName"]:"";//書名
  $url = (isset($_POST["Url"]) && !empty($_POST["Url"]))?$_POST["Url"]:"";//網址

  if (empty($bookname) && empty($url)) {
    $true = $db->query(del($id));
    $Msg = "刪除";
  }else {
    $true = $db->query(update($id, $bookname, $url));
    $Msg = "更新";
  }

  if ($true) {
    echo $Msg."成功";
  }else {
    echo $Msg."失敗";
  }

  function update($id, $bookname, $url){
    $up = "UPDATE `bookname` SET `bookname`='".$bookname."',`url`='".$url."' WHERE `id`='".$id."'";
    return $up;
  }

  function del($id){
    $de = "DELETE  FROM `bookname` WHERE `id`='".$id."'";
    return $de;
  }

  $db = null;
 ?>
