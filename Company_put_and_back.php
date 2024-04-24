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
              <a href="javascript:void(0)">放扣点设置</a>
            </li>
            <li>
              <a href="Company_put_and_back.php">放扣点设置</a>
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
                        <h4 class="widget-title lighter smaller">放点扣点最大限额设置</h4>
                      </div>
                      <div class="widget-body">
                        <div class="widget-main padding-8">
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">管理者轉入</label>
                            <div class="col-xs-12 col-sm-5 radio">
                              <input type="hidden" name="num0" value="1">
                              <label>
                                <input type="text" class="form-control" id="com_name" name="wallet_kind_point0"
                                  value="200000" />
                              </label>
                              <label>
                                <input type="radio" class="ace" name="wallet_kind0" value="1" checked /><span
                                  class='lbl'>启动</span>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="wallet_kind0" value="2" /><span
                                  class='lbl'>关闭</span>
                              </label>
                              <label>
                              </label>
                              <label>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="profit_active0" value="1" /><span
                                  class='lbl'>计算红利</span>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="profit_active0" value="2" checked /><span
                                  class='lbl'>不计算红利</span>
                              </label>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">管理者轉出</label>
                            <div class="col-xs-12 col-sm-5 radio">
                              <input type="hidden" name="num1" value="2">
                              <label>
                                <input type="text" class="form-control" id="com_name" name="wallet_kind_point1"
                                  value="0" />
                              </label>
                              <label>
                                <input type="radio" class="ace" name="wallet_kind1" value="1" checked /><span
                                  class='lbl'>启动</span>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="wallet_kind1" value="2" /><span
                                  class='lbl'>关闭</span>
                              </label>
                              <label>
                              </label>
                              <label>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="profit_active1" value="1" checked /><span
                                  class='lbl'>计算红利</span>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="profit_active1" value="2" /><span
                                  class='lbl'>不计算红利</span>
                              </label>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">會員首儲</label>
                            <div class="col-xs-12 col-sm-5 radio">
                              <input type="hidden" name="num2" value="6">
                              <label>
                                <input type="text" class="form-control" id="com_name" name="wallet_kind_point2"
                                  value="1000" />
                              </label>
                              <label>
                                <input type="radio" class="ace" name="wallet_kind2" value="1" checked /><span
                                  class='lbl'>启动</span>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="wallet_kind2" value="2" /><span
                                  class='lbl'>关闭</span>
                              </label>
                              <label>
                              </label>
                              <label>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="profit_active2" value="1" checked /><span
                                  class='lbl'>计算红利</span>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="profit_active2" value="2" /><span
                                  class='lbl'>不计算红利</span>
                              </label>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">優惠活動</label>
                            <div class="col-xs-12 col-sm-5 radio">
                              <input type="hidden" name="num3" value="7">
                              <label>
                                <input type="text" class="form-control" id="com_name" name="wallet_kind_point3"
                                  value="0" />
                              </label>
                              <label>
                                <input type="radio" class="ace" name="wallet_kind3" value="1" /><span
                                  class='lbl'>启动</span>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="wallet_kind3" value="2" checked /><span
                                  class='lbl'>关闭</span>
                              </label>
                              <label>
                              </label>
                              <label>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="profit_active3" value="1" checked /><span
                                  class='lbl'>计算红利</span>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="profit_active3" value="2" /><span
                                  class='lbl'>不计算红利</span>
                              </label>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">會員註冊送</label>
                            <div class="col-xs-12 col-sm-5 radio">
                              <input type="hidden" name="num4" value="8">
                              <label>
                                <input type="text" class="form-control" id="com_name" name="wallet_kind_point4"
                                  value="0" />
                              </label>
                              <label>
                                <input type="radio" class="ace" name="wallet_kind4" value="1" /><span
                                  class='lbl'>启动</span>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="wallet_kind4" value="2" checked /><span
                                  class='lbl'>关闭</span>
                              </label>
                              <label>
                              </label>
                              <label>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="profit_active4" value="1" checked /><span
                                  class='lbl'>计算红利</span>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="profit_active4" value="2" /><span
                                  class='lbl'>不计算红利</span>
                              </label>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">推薦人優惠</label>
                            <div class="col-xs-12 col-sm-5 radio">
                              <input type="hidden" name="num5" value="13">
                              <label>
                                <input type="text" class="form-control" id="com_name" name="wallet_kind_point5"
                                  value="0" />
                              </label>
                              <label>
                                <input type="radio" class="ace" name="wallet_kind5" value="1" /><span
                                  class='lbl'>启动</span>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="wallet_kind5" value="2" checked /><span
                                  class='lbl'>关闭</span>
                              </label>
                              <label>
                              </label>
                              <label>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="profit_active5" value="1" checked /><span
                                  class='lbl'>计算红利</span>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="profit_active5" value="2" /><span
                                  class='lbl'>不计算红利</span>
                              </label>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">其他轉出</label>
                            <div class="col-xs-12 col-sm-5 radio">
                              <input type="hidden" name="num6" value="14">
                              <label>
                                <input type="text" class="form-control" id="com_name" name="wallet_kind_point6"
                                  value="0" />
                              </label>
                              <label>
                                <input type="radio" class="ace" name="wallet_kind6" value="1" /><span
                                  class='lbl'>启动</span>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="wallet_kind6" value="2" checked /><span
                                  class='lbl'>关闭</span>
                              </label>
                              <label>
                              </label>
                              <label>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="profit_active6" value="1" /><span
                                  class='lbl'>计算红利</span>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="profit_active6" value="2" checked /><span
                                  class='lbl'>不计算红利</span>
                              </label>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">二次續儲</label>
                            <div class="col-xs-12 col-sm-5 radio">
                              <input type="hidden" name="num7" value="16">
                              <label>
                                <input type="text" class="form-control" id="com_name" name="wallet_kind_point7"
                                  value="0" />
                              </label>
                              <label>
                                <input type="radio" class="ace" name="wallet_kind7" value="1" /><span
                                  class='lbl'>启动</span>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="wallet_kind7" value="2" checked /><span
                                  class='lbl'>关闭</span>
                              </label>
                              <label>
                              </label>
                              <label>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="profit_active7" value="1" checked /><span
                                  class='lbl'>计算红利</span>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="profit_active7" value="2" /><span
                                  class='lbl'>不计算红利</span>
                              </label>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">手動上分</label>
                            <div class="col-xs-12 col-sm-5 radio">
                              <input type="hidden" name="num8" value="19">
                              <label>
                                <input type="text" class="form-control" id="com_name" name="wallet_kind_point8"
                                  value="0" />
                              </label>
                              <label>
                                <input type="radio" class="ace" name="wallet_kind8" value="1" checked /><span
                                  class='lbl'>启动</span>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="wallet_kind8" value="2" /><span
                                  class='lbl'>关闭</span>
                              </label>
                              <label>
                              </label>
                              <label>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="profit_active8" value="1" /><span
                                  class='lbl'>计算红利</span>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="profit_active8" value="2" checked /><span
                                  class='lbl'>不计算红利</span>
                              </label>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">手動下分</label>
                            <div class="col-xs-12 col-sm-5 radio">
                              <input type="hidden" name="num9" value="20">
                              <label>
                                <input type="text" class="form-control" id="com_name" name="wallet_kind_point9"
                                  value="0" />
                              </label>
                              <label>
                                <input type="radio" class="ace" name="wallet_kind9" value="1" checked /><span
                                  class='lbl'>启动</span>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="wallet_kind9" value="2" /><span
                                  class='lbl'>关闭</span>
                              </label>
                              <label>
                              </label>
                              <label>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="profit_active9" value="1" /><span
                                  class='lbl'>计算红利</span>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="profit_active9" value="2" checked /><span
                                  class='lbl'>不计算红利</span>
                              </label>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">違規下分</label>
                            <div class="col-xs-12 col-sm-5 radio">
                              <input type="hidden" name="num10" value="21">
                              <label>
                                <input type="text" class="form-control" id="com_name" name="wallet_kind_point10"
                                  value="0" />
                              </label>
                              <label>
                                <input type="radio" class="ace" name="wallet_kind10" value="1" checked /><span
                                  class='lbl'>启动</span>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="wallet_kind10" value="2" /><span
                                  class='lbl'>关闭</span>
                              </label>
                              <label>
                              </label>
                              <label>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="profit_active10" value="1" /><span
                                  class='lbl'>计算红利</span>
                              </label>
                              <label>
                                <input type="radio" class="ace" name="profit_active10" value="2" checked /><span
                                  class='lbl'>不计算红利</span>
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
