<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "include/in_head.php"?>
</head>

<body class="skin-2">
  <?php include "include/in_navbar.php"?>
  <div class="main-container ace-save-state" id="main-container">
    <?php include "include/in_sidebar.php"?>
    <div class="main-content">
      <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state breadcrumbs-fixed" id="breadcrumbs">
          <ul class="breadcrumb">
            <li>
              <i class="ace-icon fa fa-home home-icon"></i>
              <a href="Char_index.php">首页</a>
            </li>
          </ul><!-- /.breadcrumb -->
        </div>
        <div class="page-content">
          <?php include "include/in_menu_set.php"?>
          <div class="row">
            <div class="col-xs-12">
              <!-- 主要内容 开始 -->
              <script type="text/javascript">
              $(function() {
                $('.activeSwitch').click(function() {
                  $.ajax({
                    type: "POST",
                    url: "Games_keyChange.php",
                    cache: false,
                    data: {
                      num: $(this).val(),
                      value: ($(this).prop('checked') ? 'Y' : 'N')
                    }
                  });
                });
              });
              </script>
              <!-- PAGE CONTENT BEGINS -->
              <form class="form-horizontal" method="post"
                action="#">
                <div class="form-group">
                  <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">游戏厂商</label>
                  <div class="col-xs-12 col-sm-5">
                    <select class="form-control select2" name="find2" id="find2" data-placeholder="请选择">
                      <option value="">请选择</option>
                      <option value="1">9KG</option>
                      <option value="2">VA</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">帐号</label>
                  <div class="col-xs-12 col-sm-5">
                    <input type="text" class="form-control" id="find1" name="find1" value="" placeholder="标题" />
                  </div>
                </div>
                <div class="form-group text-center">
                  <button name="submit" class="btn btn-sm btn-primary">查找</button>
                </div>
              </form>
              <table id="simple-table" class="table table-bordered table-hover table-responsive">
                <thead>
                  <tr>
                    <!--<th class="center">
                <label class="pos-rel">
                    <input type="checkbox" class="ace" />
                    <span class="lbl"></span>
                </label>
            </th>-->
                    <th>游戏厂商</th>
                    <th>用户名</th>
                    <th>余额</th>
                    <th>管理</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td colspan=3>
                    </td>
                    <td>
                    </td>
                  </tr>
                </tbody>
              </table>
              <?php include "include/in_pagebar.php"?>
              <script>
              $(document).ready(function() {
                $('#balAllReturnBtn').click(function() {
                  $("table#simple-table button[id!='balAllReturnBtn']").each(function(i) {
                    setTimeout(btnClick, i * 300, $(this));
                  });
                });

                function btnClick(obj) {
                  console.log(obj);
                  obj.click();
                }

                $.fn.account_withdraw = function(mem_num, gamemaker_num) {
                  //alert('hello world');
                  // alert (mem_num);
                  // alert (gamemaker_num);

                  $.ajax({
                    url: ' <
                    div style = "border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;" >

                    <
                    h4 > A PHP Error was encountered < /h4>

                    <
                    p > Severity: Warning < /p> <
                    p > Message: Undefined variable $s_balance < /p> <
                    p > Filename: admin / tools.php < /p> <
                    p > Line Number: 205 < /p>


                      <
                      p > Backtrace: < /p>






                      <
                      p style = "margin-left:10px" >
                      File: /home/wwwroot / 07 _demo / git_mmbet99 / application / views / admin / tools.php <
                      br / >
                      Line: 205 < br / >
                      Function: _error_handler < /p>








                      <
                      p style = "margin-left:10px" >
                      File: /home/wwwroot / 07 _demo / git_mmbet99 / application / controllers / D3oadp5j /
                      Tools.php < br / >
                      Line: 30 < br / >
                      Function: view < /p>






                      <
                      p style = "margin-left:10px" >
                      File: /home/wwwroot / 07 _demo / git_mmbet99 / index.php < br / >
                      Line: 315 < br / >
                      Function: require_once < /p>




                      <
                      /div>',
                    cache: false,
                    dataType: 'json',
                    type: 'POST',
                    data: {
                      action: 'withdraw',
                      mem_num: mem_num,
                      gamemaker_num: gamemaker_num
                    },
                    error: function(xhr) {
                      console.log(xhr.responseText);
                    },
                    success: function(response) {
                      $('#bal_' + mem_num + '_' + gamemaker_num).html(response);
                      $('#bal_' + mem_num + '_' + gamemaker_num).parent().parent().removeAttr('style');
                      // alert(response);

                    }
                  })

                };


              });
              </script>
              <!-- 主要内容 结束 -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div>
        <!-- /.page-content -->
      </div>
    </div><!-- /.main-content -->
    <?php include "include/in_footer.php"?>
  </div><!-- /.main-container -->
  <div id="sound"></div>
  <!-- ace scripts -->
  <script src="js/ace-elements.min.js"></script>
  <script src="js/ace.min.js"></script>
</body>

</html>
