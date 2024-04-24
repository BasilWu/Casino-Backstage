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
              <a href="javascript:void(0)">维护设置修改</a>
            </li>
            <li>
              <a href="Service_edit.php">维护设置修改</a>
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
                $('.sTime').each(function() {
                  laydate.render({
                    elem: this,
                    type: 'time',
                    istime: true
                  });
                });
              });
              </script>
              <form class="form-horizontal newoil-form" method="post"
                action="#">
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <div class="widget-box widget-color-blue2">
                      <div class="widget-header">
                        <h4 class="widget-title lighter smaller">维护设置修改</h4>
                      </div>
                      <div class="widget-body">
                        <div class="widget-main padding-8">
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">厂商名称</label>
                            <div class="col-xs-12 col-sm-5">
                              <p class="form-control-static">9KG</p>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">维修时间</label>
                            <div class="col-xs-12 col-sm-5">
                              <div class="input-daterange  input-group">
                                <select class="form-control " name="sDate1" id="sDate1" data-placeholder="请选择">
                                  <option value="">请选择</option>
                                  <option value="1">星期一</option>
                                  <option value="2">星期二</option>
                                  <option value="3">星期三</option>
                                  <option value="4">星期四</option>
                                  <option value="5">星期五</option>
                                  <option value="6">星期六</option>
                                  <option value="0">星期日</option>
                                </select>
                                <span class="input-group-addon">
                                  <i class="fa fa-clock-o"></i>
                                </span>
                                <input type="text" class="form-control sTime" name="sTime1" id="sTime1" value="08:00:00"
                                  placeholder="结束时间" />
                                <span class="input-group-addon">
                                  <i class="fa fa-exchange"></i>
                                </span>
                                <select class="form-control " name="sDate2" id="sDate2" data-placeholder="请选择">
                                  <option value="">请选择</option>
                                  <option value="1">星期一</option>
                                  <option value="2">星期二</option>
                                  <option value="3">星期三</option>
                                  <option value="4">星期四</option>
                                  <option value="5">星期五</option>
                                  <option value="6">星期六</option>
                                  <option value="0">星期日</option>
                                </select>
                                <span class="input-group-addon">
                                  <i class="fa fa-clock-o"></i>
                                </span>
                                <input type="text" class="form-control sTime" name="sTime2" id="sTime2" value="08:00:00"
                                  placeholder="结束时间" />
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">状态</label>
                            <div class="col-xs-12 col-sm-5">
                              <select class="form-control select2" name="active" id="active" data-placeholder="请选择"
                                required>
                                <option value="Y" selected>开放</option>
                                <option value="N">关闭</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning" class="col-sm-3 control-label no-padding-right"></label>
                            <div class="col-xs-12 col-sm-5">
                              <button type="submit" class="btn btn-primary">送出</button>
                              <a class='btn btn-danger'
                                href='Service_index.php'>取消</a>
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
