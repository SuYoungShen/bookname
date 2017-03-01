<?php
  include 'bubble_sort.php';

  $Language = array();// 語言
  $LanUrl = array();// 語言網址
  $Technology = array();// 科技
  $TecUrl = array();// 科技網址
  $Tour = array();// 旅遊
  $TourUrl = array();// 旅遊網址
  $Other = array();// 其他
  $OtherUrl = array();// 其他網址

foreach ($Display as $key => $value) {

  $Types = $value["types"];//類型
  $BookName = $value["bookname"];//收件人
  $Url = $value["url"];//地址

    switch ($Types) {

      case '語言學習類':
        array_push($Language, $BookName);//新的書名加在陣列後面
        array_push($LanUrl,$Url);//新的網址加在陣列後面
        break;

      case '商業類、科技類':
        array_push($Technology, $BookName);
        array_push($TecUrl,$Url);//新的網址加在陣列後面
        break;

      case '旅遊、時尚流行類':
        array_push($Tour, $BookName);
        array_push($TourUrl,$Url);//新的網址加在陣列後面
      break;

      case '人文藝術、其它類':
        array_push($Other, $BookName);
        array_push($OtherUrl,$Url);//新的網址加在陣列後面
      break;

      default:
        # code...
        break;
    }
  }//foreach

  //各類書籍的總數
  $LanCount = count($Language);//語言
  $TecCount = count($Technology);//科技
  $TourCount = count($Tour);//旅遊
  $OtherCount = count($Other);//其他
  //各類書籍的總數

  //把書籍總數以陣列儲存,準備排序
  $Data = array($LanCount, $TecCount, $TourCount, $OtherCount);
 //把書籍總數以陣列儲存,準備排序

 //把Data丟到compare函示去排序,desc由大到小
 $Sort = compare($Data, 'desc');
 //把Data丟到compare函示去排序,desc由大到小

  for ($i=0; $i < $Sort[0] ; $i++) {
    echo "
    <tr>
      <td></td>
      <td data-toggle='modal' data-target='#exampleModal' data-whatever='@mdo' onclick='test(\"$Language[$i]\", \"$LanUrl[$i]\")'>
        <a href='$LanUrl[$i]'>$Language[$i]</a>
        </td>
      <td><a href='$TecUrl[$i]'>$Technology[$i]</a></td>
      <td><a href='$TourUrl[$i]'>$Tour[$i]</a></td>
      <td><a href='$OtherUrl[$i]'>$Other[$i]</a></td>
    </tr>
    ";
  }


 ?>
 <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@twbootstrap">Open modal for @twbootstrap</button>
...more buttons... -->
<script type="text/javascript">
  function test(test, url){
    document.getElementById("recipient-name").value = test;
    document.getElementById("message-text").value = url;
  }
</script>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="exampleModalLabel">New message</h4>
      </div>
      <div class="modal-body">
        <form role="form" action="t.php" method="post">
          <div class="form-group">
            <label for="recipient-name" class="control-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name" name="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Message:</label>
            <input type="text" class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
