<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php
      include 'action/select.php';

      if (isset($_GET['action']) && $_GET["action"] == 'excel') {
          header('Content-type:application/vnd.ms-excel');  //宣告網頁格式
          header('Content-Disposition: attachment; filename=myexcel.xls');  //設定檔案名稱
      }
     ?>
    <div class="container-fluid">
      <form class="form-horizontal" role="form" method="get">
        <div class="form-group">
          <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button"
                    id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
              選擇日期
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
              <?php
                foreach ($DisDate as $key => $value) {
                  $v = $value["datetime"];
                  if (!empty($v)) {
                    echo "
                    <li role='presentation'>
                      <a role='menuitem' tabindex='-1' href='show.php?datetime=$v'>$v</a>
                    </li>
                    ";
                  }
                }
               ?>
            </ul>
          </div>
        </div>
      </form>

      <div class="table-responsive">
        <table class="table table-hover table-bordered">
          <thead>
            <tr>
              <td><?php echo $datetime; ?></td>
              <td>語言學習類</td>
              <td>商業類、科技類</td>
              <td>旅遊、時尚流行類</td>
              <td>人文藝術、其它類</td>
            </tr>
          </thead>
          <tbody>
            <?php

            foreach ($Display as $key => $value) {

              $Types = $value["types"];//類型
              $BookName = $value["bookname"];//收件人
              $Url = $value["url"];//地址

                switch ($Types) {

                  case '語言學習類':
                  $Language = array($key=>$BookName)
                    array_push($Language,);//語言
                    break;

                  case '商業類、科技類':
                   $Technology = array($BookName);//Technology科技
                    break;

                  case '旅遊、時尚流行類':
                   $Tour = array($BookName);//Tour旅遊
                  break;

                  case '人文藝術、其它類':
                   $Other = array($BookName);//Other其他
                  break;

                  default:
                    # code...
                    break;
                }

              }
              // $result = array_unique($input);
              // print_r($result);


              var_dump($lan);
              foreach ($Language as $key => $value) {
                echo "
                <tr>
                  <td></td>
                  <td>$value[$key]</td>
                  <td>$Technology[0]</td>
                  <td>$Tour[0]</td>
                  <td>$Other[0]</td>
                </tr>
                ";
              }


             ?>
          </tbody>
        </table>
        <form class="form-horizontal" role="form">
          <a href="index.php"><button type="button" class="btn btn-default" name="button">返回</button></a>
          <button type="submit" name="action" value="excel" class="btn btn-default">匯出excel</button>
          <a href="action/delete.php?detoday=yes">
            <button type="button" class="pull-right btn btn-default" name="Detoday">刪除當天資料</button>
          </a>
        </form>
      </div>
    </div>

    <?php
      $db = null;
     ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
