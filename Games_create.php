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
              <a href="javascript:void(0)">游戏数据添加</a>
            </li>
            <li>
              <a href="Games_create.php">游戏数据添加</a>
            </li>
          </ul><!-- /.breadcrumb -->
        </div>
        <div class="page-content">
          <?php include "include/in_menu_set.php"?>
          <div class="row">
            <div class="col-xs-12">
              <!-- 主要内容 开始 -->
              <script type="text/javascript">
              function ajaxKind(makers_num, kindVal) {
                $.ajax({
                  type: "POST",
                  url: CI_URL + 'D3oadp5j/Games/ajaxKind',
                  cache: false,
                  data: {
                    makers_num: makers_num,
                    kindVal: kindVal
                  }
                }).done(function(msg) {
                  $('#kind').html(msg);
                  $('.select2').select2({
                    allowClear: true
                  });
                });
              }
              </script>
              <form class="form-horizontal newoil-form" method="post"
                action="#">
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <div class="widget-box widget-color-blue2">
                      <div class="widget-header">
                        <h4 class="widget-title lighter smaller">游戏数据添加</h4>
                      </div>
                      <div class="widget-body">
                        <div class="widget-main padding-8">
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">游戏厂商</label>
                            <div class="col-xs-12 col-sm-5">
                              <select class="form-control select2" name="makers_num" id="makers_num"
                                data-placeholder="请选择" onChange="ajaxKind(this.value,'')" required>
                                <option value="1">9KG</option>
                                <option value="2">VA</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">游戏分类</label>
                            <div class="col-xs-12 col-sm-5">
                              <select class="form-control select2" name="kind" id="kind" data-placeholder="请选择">
                              </select>
                            </div>
                          </div>
                          <script type="text/javascript">
                          $(function() {
                            ajaxKind($('#makers_num').val(), '');
                          });
                          </script>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">游戏名称->English</label>
                            <div class="col-xs-12 col-sm-5">
                              <input type="text" class="form-control" id="game_name_en_US" name="game_name_en_US"
                                value="" placeholder="游戏名称" required />
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">游戏名称->繁體中文</label>
                            <div class="col-xs-12 col-sm-5">
                              <input type="text" class="form-control" id="game_name_zh_TW" name="game_name_zh_TW"
                                value="" placeholder="游戏名称" required />
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">游戏名称->简体中文</label>
                            <div class="col-xs-12 col-sm-5">
                              <input type="text" class="form-control" id="game_name_zh_CN" name="game_name_zh_CN"
                                value="" placeholder="游戏名称" required />
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">游戏名称->မြန်မာ</label>
                            <div class="col-xs-12 col-sm-5">
                              <input type="text" class="form-control" id="game_name_my_MM" name="game_name_my_MM"
                                value="" placeholder="游戏名称" required />
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">游戏代码</label>
                            <div class="col-xs-12 col-sm-5">
                              <input type="text" class="form-control" id="game_code" name="game_code" value=""
                                placeholder="游戏代码" required />
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">支持设备</label>
                            <div class="col-xs-12 col-sm-5 radio">
                              <label><input type='radio' class='ace' id='device0' name='device' value='1' checked><span
                                  class='lbl'>通用</span></label> <label><input type='radio' class='ace' id='device1'
                                  name='device' value='2'><span class='lbl'>电脑版</span></label> <label><input
                                  type='radio' class='ace' id='device2' name='device' value='3'><span
                                  class='lbl'>手机板</span></label>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">状态</label>
                            <div class="col-xs-12 col-sm-5">
                              <select class="form-control select2" name="active" id="active" data-placeholder="请选择"
                                required>
                                <option value="Y">开放</option>
                                <option value="N">关闭</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">图片</label>
                            <div class="col-xs-12 col-sm-5">
                              <input class="form-control file" name="upload[]" id="upload" type="file" />
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning" class="col-sm-3 control-label no-padding-right"></label>
                            <div class="col-xs-12 col-sm-5">
                              <button type="submit" class="btn btn-primary">送出</button>
                              <a class='btn btn-danger'
                                href='Games_index.php'>取消</a>
                            </div>
                          </div>
                          <input type="hidden" id='find2' name='find2' value="">
                          <input type="hidden" id='find3' name='find3' value="">
                          <input type="hidden" id='per_page' name='per_page' value="">
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
