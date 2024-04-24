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
              <a href="javascript:void(0)">代理数据添加</a>
            </li>
            <li>
              <a href="Agents_agents3_add.php">代理数据添加</a>
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
                $('#root').bind('change', ajax_percent);

                jQuery.validator.addMethod("checkUrl", function(value, element) {
                  var str = value;
                  var result = false;
                  if (value != '') {
                    $.ajax({
                      type: "POST",
                      url: CI_URL + "D3oadp5j/Agents/ajax_chk_url",
                      cache: false,
                      async: false,
                      data: {
                        cust_url: str,
                        num: $('#cust_url').attr('data-num')
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
                }, "代理网址已存在");
                $('#cust_url').addClass('checkUrl');


                ajax_percent();
              });

              function ajax_percent() {
                $.ajax({
                  type: "POST",
                  url: CI_URL + "D3oadp5j/Agents/Ajax_percent",
                  cache: false,
                  async: false,
                  dataType: "json",
                  data: {
                    'root': $('#root').val()
                  }
                }).done(function(msg) {
                  if (msg.RntCode == 'Y') {
                    $('#percent').attr('max', msg.percent);
                    if (msg.percent == '0') {
                      $('#percent').attr('range', '0,0');
                    } else {
                      $('#percent').removeAttr('range');
                    }
                  }
                });
              }
              </script>
              <form class="form-horizontal newoil-form" method="post" action="#">
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <div class="widget-box widget-color-blue2">
                      <div class="widget-header">
                        <h4 class="widget-title lighter smaller">代理数据添加</h4>
                      </div>
                      <div class="widget-body">
                        <div class="widget-main padding-8">
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">上层帐号</label>
                            <div class="col-xs-12 col-sm-5">
                              <select class="form-control select2" name="root" id="root" data-placeholder="请选择"
                                required>
                                <option value="4">vip666(Company's General Agent)</option>
                                <option value="36">test02(总代)</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">帐号</label>
                            <div class="col-xs-12 col-sm-5">
                              <input type="text" class="form-control checkMyuID" id="u_id" name="u_id" placeholder="帐号"
                                required />
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">密码</label>
                            <div class="col-xs-12 col-sm-5">
                              <input type="password" class="form-control" id="u_password" name="u_password"
                                placeholder="密码" required="required" />
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
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">姓名</label>
                            <div class="col-xs-12 col-sm-5">
                              <input type="text" class="form-control" id="u_name" name="u_name" value=""
                                placeholder="姓名" required />
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">代理网址</label>
                            <div class="col-xs-12 col-sm-5">
                              <textarea name="cust_url" rows="3" data-num="" class="form-control" id="cust_url"
                                placeholder="代理网址"></textarea>
                              <p class="form-control-static">输入格式：abc785.net多笔请用","隔开</p>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">分润设置</label>
                            <div class="col-xs-12 col-sm-5">
                              <!--
                            	<input type="text" class="form-control digits" id="percent" max="" name="percent" value="" placeholder="分润设置" required />
                                <p class="form-control-static text-danger">每月只能修改一次</p>
                                -->
                              <input type="text" class="form-control digits" id="percent" max="100" name="percent"
                                value="" placeholder="分润设置" required />
                              <p class="form-control-static text-danger">每月只能修改一次</p>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">状态</label>
                            <div class="col-xs-12 col-sm-5">
                              <select class="form-control select2" name="active" id="active" data-placeholder="请选择"
                                required>
                                <option value="">请选择</option>
                                <option value="Y">激活</option>
                                <option value="N">停权</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning" class="col-sm-3 control-label no-padding-right"></label>
                            <div class="col-xs-12 col-sm-5">
                              <button type="submit" class="btn btn-primary">送出</button>
                              <a class='btn btn-danger'
                                href='Agents_agents3_list.php'>取消</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <div class="page-header"></div>
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
