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
              <a href="javascript:void(0)">股东数据修改</a>
            </li>
            <li>
              <a href="Agents_agents1_edit.php">股东数据修改</a>
            </li>
          </ul><!-- /.breadcrumb -->
        </div>
        <div class="page-content">
          <?php include "include/in_menu_set.php"?>
          <div class="row">
            <div class="col-xs-12">
              <div class="alert alert-danger fade in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                  <i class="ace-icon fa fa-times"></i>
                </button>
                <strong>权限错误！</strong>很抱歉...您无权检示页面
              </div>
              <!-- 主要内容 开始 -->
              <script type="text/javascript">
              $(function() {
                jQuery.validator.addMethod("checkMyuID", function(value, element) {
                  var str = value;
                  var result = false;
                  if (value.toLowerCase() != 'www') {
                    $.ajax({
                      type: "POST",
                      url: CI_URL + "D3oadp5j/Agents/ajax_chk_id",
                      cache: false,
                      async: false,
                      data: {
                        u_id: str
                      }
                    }).done(function(msg) {
                      if (msg.trim() == 'Y') {
                        result = true;
                      } else {
                        result = false;
                      }
                    });
                  }

                  return result;
                }, "此帐号已存在");

                $(".down-alert").hide();
                $("#percent").on('input', function(e) {
                  $(".down-alert").hide();
                  if ($(this).val() < 50) {
                    $(".down-alert").html("<b>有总代或代理的分润高于您的设置值，保存後将会下压。<br />请於设置完成后，手动“补帐”各游戏报表。</b>")
                      .fadeToggle();
                  }
                });

              });
              </script>
              <form class="form-horizontal newoil-form" method="post" action="#">
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <div class="widget-box widget-color-blue2">
                      <div class="widget-header">
                        <h4 class="widget-title lighter smaller">股东数据修改</h4>
                      </div>
                      <div class="widget-body">
                        <div class="widget-main padding-8">
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">帐号</label>
                            <div class="col-xs-12 col-sm-5">
                              <p class="form-control-static">vip</p>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">姓名</label>
                            <div class="col-xs-12 col-sm-5">
                              <input type="text" class="form-control" id="u_name" name="u_name"
                                value="Company main station line" placeholder="姓名" required />
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">分润设置</label>
                            <div class="col-xs-12 col-sm-5">
                              <!--
                            	<input type="text" class="form-control digits" id="percent" max="100" name="percent" value="65" placeholder="分润设置" required />
                                <p class="form-control-static text-danger">每月只能修改一次</p>
                                <div class="down-alert text-danger"></div>
                                -->
                              <input type="hidden" id="percent" name="percent" value="65" />
                              <p class="form-control-static">65%</p>
                              <p class="form-control-static text-danger">可修改日期：每个月1号 00:00:00 ~ 12:00:00</p>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">状态</label>
                            <div class="col-xs-12 col-sm-5">
                              <select class="form-control select2" name="active" id="active" data-placeholder="请选择"
                                required>
                                <option value="">请选择</option>
                                <option value="Y" selected>激活</option>
                                <option value="N">停权</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning" class="col-sm-3 control-label no-padding-right"></label>
                            <div class="col-xs-12 col-sm-5">
                              <button type="submit" class="btn btn-primary">送出</button>
                              <a class='btn btn-danger' href='Agents_agents1_list.php'>取消</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <div class="page-header"></div>
              <form class="form-horizontal newoil-form" method="post" action="#">
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <div class="widget-box widget-color-blue2">
                      <div class="widget-header">
                        <h4 class="widget-title lighter smaller">修改密码</h4>
                      </div>
                      <div class="widget-body">
                        <div class="widget-main padding-8">
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">新密码</label>
                            <div class="col-xs-12 col-sm-5">
                              <input type="password" class="form-control" id="u_password" name="u_password"
                                placeholder="新密码" required="required" />
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">确认密码</label>
                            <div class="col-xs-12 col-sm-5">
                              <input type="password" class="form-control" equalTo="#u_password" id="u_password2"
                                name="u_password2" placeholder="确认密码" required="required" />
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning" class="col-sm-3 control-label no-padding-right"></label>
                            <div class="col-xs-12 col-sm-5">
                              <button type="submit" class="btn btn-primary">修改密码</button>
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
