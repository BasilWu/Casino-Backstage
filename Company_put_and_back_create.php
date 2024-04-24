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
              <a href="javascript:void(0)">放扣点名称添加</a>
            </li>
            <li>
              <a href="Company_put_and_back_create.php">放扣点名称添加</a>
            </li>
          </ul><!-- /.breadcrumb -->
        </div>
        <div class="page-content">
          <?php include "include/in_menu_set.php"?>
          <div class="row">
            <div class="col-xs-12">
              <!-- 主要内容 开始 -->
              <form class="form-horizontal newoil-form" method="post"
                action="#">
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <div class="widget-box widget-color-blue2">
                      <div class="widget-header">
                        <h4 class="widget-title lighter smaller">添加放点扣点名称</h4>
                      </div>
                      <div class="widget-body">
                        <div class="widget-main padding-8">
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">名称</label>
                            <div class="col-xs-12 col-sm-5">
                              <input type="text" class="form-control" id="kind" name="kind" value=""
                                placeholder="放点扣点名称" required="required" />
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">放点或扣点</label>
                            <div class="col-xs-12 col-sm-5">
                              <select class="form-control select2" name="type" id="type" required>
                                <option value="">请选择</option>
                                <option value=1>放点</option>
                                <option value=2>扣点</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">是否限制点数</label>
                            <div class="col-xs-12 col-sm-5 radio">
                              <label>
                                <input type="radio" class="ace" name="active" value="1" /><span class='lbl'>启动</span>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="active" value="2" /><span class='lbl'>关闭</span>
                              </label>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">是否计算红利</label>
                            <div class="col-xs-12 col-sm-5 radio">
                              <label>
                                <input type="radio" class="ace" name="profit_active" value="1" /><span
                                  class='lbl'>计算</span>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="profit_active" value="2" /><span
                                  class='lbl'>不计算</span>
                              </label>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">点数设置</label>
                            <div class="col-xs-12 col-sm-5">
                              <input type="text" class="form-control" id="point" name="point" value="" placeholder="点数"
                                required="required" />
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning" class="col-sm-3 control-label no-padding-right"></label>
                            <div class="col-xs-12 col-sm-5">
                              <button type="submit" class="btn btn-primary">送出</button>
                              <a class='btn btn-danger'
                                href='company_put_and_back.php'>取消</a>
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
