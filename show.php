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

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"> </script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"> </script>
    <!-- <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"> </script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"> </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"> </script>
    <script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"> </script>
    <script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"> </script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"> </script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"> </script> -->
    <script type="text/javascript" src="js/excellentexport.min.js">

    </script>

        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css">
        <script type="text/javascript">

        $(document).ready(function() {
          $('#datatable').DataTable();
        });
        </script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
    <?php
      // 查詢指令
      include 'action/select.php';
      // 查詢指令
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
                //$DisDate從action/select.php的檔案出來
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
        <!-- <table class="table table-hover table-bordered"> -->
          <table id="datatable" class="display nowrap table table-hover table-bordered" cellspacing="0" width="100%">
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
            <?php include 'action/show.php'; ?>
          </tbody>
        </table>
        <form class="form-horizontal" role="form">
          <a href="index.php"><button type="button" class="btn btn-default" name="button">返回</button></a>
          <button type="submit" name="action" value="excel" class="btn btn-default"><a download="somedata.xls" href="#" onclick="return ExcellentExport.excel(this, 'datatable', 'Sheet Name Here');">匯出EXCEL</a></button>
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
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
