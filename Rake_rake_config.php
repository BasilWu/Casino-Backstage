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
              <a href="javascript:void(0)">会员返水设置</a>
            </li>
            <li>
              <a href="Rake_rake_config.php">会员返水设置</a>
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
                $('#m_group').change(function() {
                  console.log(CI_URL + 'D3oadp5j/Rake/rake_config/' + $(this).val());
                  location.href = CI_URL + 'D3oadp5j/Rake/rake_config/' + $(this).val();
                });
              });
              </script>
              <form class="form-horizontal newoil-form" method="post"
                action="#">
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <div class="widget-box widget-color-blue2">
                      <div class="widget-header">
                        <h4 class="widget-title lighter smaller">会员返水设置</h4>
                      </div>
                      <div class="widget-body">
                        <div class="widget-main padding-8">
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">会员群组</label>
                            <div class="col-xs-12 col-sm-5">
                              <select class="form-control select2" name="m_group" id="m_group" data-placeholder="请选择"
                                required>
                                <option value="0" selected>一般会员</option>
                                <option value="1">黄金会员</option>
                                <option value="2">白金会员</option>
                                <option value="3">蓝钻会员</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">真人返水</label>
                            <div class="col-xs-12 col-sm-5">
                              <input type="text" class="form-control number" id="live_rake" name="live_rake"
                                value="0.00" placeholder="真人返水" required="required" />
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">体育返水</label>
                            <div class="col-xs-12 col-sm-5">
                              <input type="text" class="form-control number" id="sport_rake" name="sport_rake"
                                value="0.00" placeholder="体育返水" required="required" />
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">电子返水</label>
                            <div class="col-xs-12 col-sm-5">
                              <input type="text" class="form-control number" id="egame_rake" name="egame_rake"
                                value="0.00" placeholder="电子返水" required="required" />
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">彩票返水</label>
                            <div class="col-xs-12 col-sm-5">
                              <input type="text" class="form-control number" id="lottery_rake" name="lottery_rake"
                                value="0.00" placeholder="彩票返水" required="required" />
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">电竞返水</label>
                            <div class="col-xs-12 col-sm-5">
                              <input type="text" class="form-control number" id="esport_rake" name="esport_rake"
                                value="0.00" placeholder="电竞返水" required="required" />
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning" class="col-sm-3 control-label no-padding-right"></label>
                            <div class="col-xs-12 col-sm-5">
                              <button type="submit" class="btn btn-primary">更新</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
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
