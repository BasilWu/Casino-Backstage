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
            <li>
              <a href="javascript:void(0)">会员消息回复</a>
            </li>
            <li>
              <a href="Message_edit.php">会员消息回复</a>
            </li>
          </ul><!-- /.breadcrumb -->
        </div>
        <div class="page-content">
          <?php include "include/in_menu_set.php"?>
          <div class="row">
            <div class="col-xs-12">
              <!-- 主要内容 开始 -->
              <script type="text/javascript">
              $(window).ready(function() {
                var maxHeight = 200;
                if ($('#wordArea').height() > parseInt(maxHeight)) {
                  $('#wordArea').css('height', maxHeight + 'px');
                  $('#wordArea').css('overflow', 'auto');
                }
              });
              </script>
              <div class="col-sm-12">
                <form class="form-horizontal newoil-form" method="post" action="#">
                  <fieldset class="scheduler-border">
                    <legend class="scheduler-border">
                      <h2><i class="glyphicon glyphicon-edit"></i>会员消息回复</h2>
                    </legend>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">会员帐号</label>
                      <div class="col-sm-8">
                        <p class="form-control-static">
                          a123456 (123)
                        </p>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">类型</label>
                      <div class="col-sm-8">
                        <p class="form-control-static">Game Account</p>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">标题</label>
                      <div class="col-sm-8">
                        <p class="form-control-static">111</p>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">提问内容</label>
                      <div class="col-sm-8">
                        <div class="form-control" style="height:200px; overflow:auto" id="wordArea">
                          26555555555555555555555555555555555555555555555555555555555555555555 </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">客服回复</label>
                      <div class="col-sm-8">
                        <textarea name="re_word" class="form-control" rows="5"
                          placeholder="客服回复">265555555555555555555555555555555555555555555555555555555555555555552655555555555555555555555555555555555555555555555555555555555555555526555555555555555555555555555555555555555555555555555555555555555555265555555555555555555555555555555555555555555555555555555555555555552655555555555555555555555555555555555555555555555555555555555555555526555555555555555555555555555555555555555555555555555555555555555555265555555555555555555555555555555555555555555555555555555555555555552655555555555555555555555555555555555555555555555555555555555555555526555555555555555555555555555555555555555555555555555555555555555555265555555555555555555555555555555555555555555555555555555555555555552655555555555555555555555555555555555555555555555555555555555555555526555555555555555555555555555555555555555555555555555555555555555555265555555555555555555555555555555555555555555555555555555555555555552655555555555555555555555555555555555555555555555555555555555555555526555555555555555555555555555555555555555555555555555555555555555555265555555555555555555555555555555555555555555555555555555555555555552655555555555555555555555555555555555555555555555555555555555555555526555555555555555555555555555555555555555555555555555555555555555555265555555555555555555555555555555555555555555555555555555555555555552655555555555555555555555555555555555555555555555555555555555555555526555555555555555555555555555555555555555555555555555555555555555555265555555555555555555555555555555555555555555555555555555555555555552655555555555555555555555555555555555555555555555555555555555555555526555555555555555555555555555555555555555555555555555555555555555555</textarea>
                      </div>
                    </div>
                    <div class="form-group ">
                      <div class="col-sm-offset-2 col-sm-8">
                        <button type="submit" class="btn btn-primary">回复</button>
                        <a class='btn btn-danger' href='Message_index.php'>返回</a>
                      </div>
                    </div>
                  </fieldset>
                </form>
              </div> <!-- 主要内容 结束 -->
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
