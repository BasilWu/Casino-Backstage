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
              <a href="javascript:void(0)">会员数据修改</a>
            </li>
            <li>
              <a href="Member_edit.php">会员数据修改</a>
            </li>
          </ul><!-- /.breadcrumb -->
        </div>
        <div class="page-content">
          <?php include "include/in_menu_set.php"?>
          <div class="row">
            <div class="col-xs-12">
              <!-- 主要内容 开始 -->
              <script type="text/javascript">
              var pass_reg = /^(?!([^a-zA-Z]+|\D+)$)[a-zA-Z0-9]{6,13}$/;
              $(function() {
                jQuery.validator.addMethod("checkMyuID", function(value, element) {
                  var str = value;
                  var result = false;
                  $.ajax({
                    type: "POST",
                    url: CI_URL + "D3oadp5j/Member/ajax_chk_id",
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

                  return result;
                }, "此帐号已存在");

                jQuery.validator.addMethod("checkFormat", function(value, element) {
                  var reg = /^[a-zA-Z0-9]{4,12}$/;
                  return reg.test(value);
                }, "帐号格式为4~12码英文或数字混合");

                jQuery.validator.addMethod("PasswordFormat", function(value, element) {
                  var str = value;
                  var result = false;
                  return (pass_reg.test(value));
                }, '密码请输入6~13码英文数字混合');
                $('#u_password').addClass('PasswordFormat');

              });
              </script>
              <form class="form-horizontal newoil-form" method="post"
                action="Member_edit.php">
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <div class="widget-box widget-color-blue2">
                      <div class="widget-header">
                        <h4 class="widget-title lighter smaller">会员数据修改</h4>
                      </div>
                      <div class="widget-body">
                        <div class="widget-main padding-8">
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">帐号</label>
                            <div class="col-xs-12 col-sm-5">
                              <p class="form-control-static">kc666</p>
                              <input name="nation" id="nation" type="hidden" value="" />
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">密码</label>
                            <div class="col-xs-12 col-sm-5">
                              <p class="form-control-static text-danger">big45678</p>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">会员等级</label>
                            <div class="col-xs-12 col-sm-5">
                              <select class="form-control select2" name="m_group" id="m_group" data-placeholder="请选择"
                                required>
                                <option value="0">一般会员</option>
                                <option value="1">黄金会员</option>
                                <option value="2">白金会员</option>
                                <option value="3">尊荣会员</option>
                                <option value="4" selected>MVP会员</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">姓名</label>
                            <div class="col-xs-12 col-sm-5">
                              <input type="text" class="form-control" id="u_name" name="u_name" value="meteor"
                                placeholder="姓名" required />
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">手机</label>
                            <div class="col-xs-12 col-sm-5">
                              <input type="text" class="form-control" id="phone" name="phone" value="0986888888"
                                placeholder="手机" required />
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">LINE
                              ID</label>
                            <div class="col-xs-12 col-sm-5">
                              <input type="text" class="form-control" id="line" name="line" value="wwwbkk"
                                placeholder="LINE ID" required />
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
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">验证</label>
                            <div class="col-xs-12 col-sm-5 radio">
                              <label>
                                <input type="radio" class="ace" name="is_vaid" value="0" /><span class='lbl'>未验证</span>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="is_vaid" value="1" checked /><span
                                  class='lbl'>已验证</span>
                              </label>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">备注</label>
                            <div class="col-xs-12 col-sm-5">
                              <textarea id="demo" name="demo" class="form-control  autosize-transition"
                                placeholder="备注"></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning" class="col-sm-3 control-label no-padding-right"></label>
                            <div class="col-xs-12 col-sm-5">
                              <button type="submit" class="btn btn-primary">送出</button>
                              <a class='btn btn-danger'
                                href='Member_index.php?'>取消</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <div class="page-header"></div>
              <form class="form-horizontal newoil-form" method="post"
                action="Member_changepws.php">
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
                              <input type="password" class="form-control PasswordFormat" id="u_password"
                                name="u_password" placeholder="新密码" required="required" />
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
