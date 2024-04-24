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
              <a href="javascript:void(0)">网站设置管理</a>
            </li>
            <li>
              <a href="Company_index.php">网站设置管理</a>
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
                        <h4 class="widget-title lighter smaller">网站设置管理</h4>
                      </div>
                      <div class="widget-body">
                        <div class="widget-main padding-8">
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">网站名称</label>
                            <div class="col-xs-12 col-sm-5">
                              <input type="text" class="form-control" id="com_name" name="com_name" value="阿輝小懶覺"
                                placeholder="网站名称" required="required" />
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">网站标题</label>
                            <div class="col-xs-12 col-sm-5">
                              <input type="text" class="form-control" id="com_title" name="com_title" value="MMBet99"
                                placeholder="网站标题" required="required" />
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">网站关键字</label>
                            <div class="col-xs-12 col-sm-5">
                              <textarea id="com_keywords" name="com_keywords" class="form-control  autosize-transition"
                                placeholder="网页关键字">MMBet99</textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">网站描述</label>
                            <div class="col-xs-12 col-sm-5">
                              <textarea id="com_description" name="com_description"
                                class="form-control  autosize-transition" placeholder="网页关键字"></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">红利占成</label>
                            <div class="col-xs-12 col-sm-5">
                              <input type="text" class="form-control digits" min="20" max="150" id="point_percent"
                                name="point_percent" value="100" placeholder="红利占成" required="required" />
                            </div>
                          </div>
                          <!--                        <div class="form-group">
                            <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">金流设置</label>
                            <div class="col-xs-12 col-sm-5 radio">
                            	<label>
                                	<input type="radio" class="ace" name="pay_mode" value="1"  checked /><span class='lbl'>绿界</span>
                                </label>
                            	<label>
                                	<input type="radio" class="ace" name="pay_mode" value="2"  /><span class='lbl'>蓝星</span>
                                </label>
                            	<label>
                                	<input type="radio" class="ace" name="pay_mode" value="3"  /><span class='lbl'>红阳</span>
                                </label>
                                <p class="form-control-static text-danger">蓝星尚未开放</p>
                            </div>
                        </div>
-->
                          <div class="form-group">
                            <label for="inputWarning" class="col-sm-3 control-label no-padding-right"></label>
                            <div class="col-xs-12 col-sm-5">
                              <button type="submit" class="btn btn-primary">送出</button>
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
                action="#">
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <div class="widget-box widget-color-blue2">
                      <div class="widget-header">
                        <h4 class="widget-title lighter smaller">金流设置</h4>
                      </div>
                      <div class="widget-body">
                        <div class="widget-main padding-8">
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">一般会员</label>
                            <div class="col-xs-12 col-sm-5 radio">
                              <label>
                                <input type="radio" class="ace" name="pay_mode0" value="1" /><span class='lbl'>绿界</span>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="pay_mode0" value="2" checked /><span
                                  class='lbl'>金恒通</span>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="pay_mode0" value="3" /><span class='lbl'>红阳</span>
                              </label>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">黄金会员</label>
                            <div class="col-xs-12 col-sm-5 radio">
                              <label>
                                <input type="radio" class="ace" name="pay_mode1" value="1" /><span class='lbl'>绿界</span>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="pay_mode1" value="2" checked /><span
                                  class='lbl'>金恒通</span>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="pay_mode1" value="3" /><span class='lbl'>红阳</span>
                              </label>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">白金会员</label>
                            <div class="col-xs-12 col-sm-5 radio">
                              <label>
                                <input type="radio" class="ace" name="pay_mode2" value="1" /><span class='lbl'>绿界</span>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="pay_mode2" value="2" checked /><span
                                  class='lbl'>金恒通</span>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="pay_mode2" value="3" /><span class='lbl'>红阳</span>
                              </label>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">尊荣会员</label>
                            <div class="col-xs-12 col-sm-5 radio">
                              <label>
                                <input type="radio" class="ace" name="pay_mode3" value="1" /><span class='lbl'>绿界</span>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="pay_mode3" value="2" checked /><span
                                  class='lbl'>金恒通</span>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="pay_mode3" value="3" /><span class='lbl'>红阳</span>
                              </label>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">MVP会员</label>
                            <div class="col-xs-12 col-sm-5 radio">
                              <label>
                                <input type="radio" class="ace" name="pay_mode4" value="1" /><span class='lbl'>绿界</span>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="pay_mode4" value="2" checked /><span
                                  class='lbl'>金恒通</span>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="pay_mode4" value="3" /><span class='lbl'>红阳</span>
                              </label>
                            </div>
                          </div>
                          <!-- <div class="form-group">
                            <label for="inputWarning" class="col-sm-3 control-label no-padding-right"></label>
                            <div class="col-xs-12 col-sm-5">
                            	<p class="form-control-static text-danger">蓝星尚未开放</p>
                            </div>
                        </div> -->
                          <div class="form-group">
                            <label for="inputWarning" class="col-sm-3 control-label no-padding-right"></label>
                            <div class="col-xs-12 col-sm-5">
                              <button type="submit" class="btn btn-primary">送出</button>
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
