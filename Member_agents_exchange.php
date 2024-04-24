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
              <a href="javascript:void(0)">代理换线作业</a>
            </li>
            <li>
              <a href="Member_agents_exchange.php">代理换线作业</a>
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
                $('#points_exchange').click(function() {
                  if ($(this).prop('checked')) {
                    $('#points_div').show();
                  } else {
                    $('#points_div').hide();
                    $('#points_time1').val('');
                    $('#points_time2').val('');
                  }
                });

                $('#orders_exchange').click(function() {
                  if ($(this).prop('checked')) {
                    $('#orders_div').show();
                  } else {
                    $('#orders_div').hide();
                    $('#orders_time1').val('');
                    $('#orders_time2').val('');
                  }
                });

                $('#sell_exchange').click(function() {
                  if ($(this).prop('checked')) {
                    $('#sell_div').show();
                  } else {
                    $('#sell_div').hide();
                    $('#sell_time1').val('');
                    $('#sell_time2').val('');
                  }
                });
                $('#bank_exchange').click(function() {
                  if ($(this).prop('checked')) {
                    $('#bank_div').show();
                  } else {
                    $('#bank_div').hide();
                    $('#bank_time1').val('');
                    $('#bank_time2').val('');
                  }
                });
              });
              </script>
              <form class="form-horizontal newoil-form" method="post" action="Member_agents_exchange.php">
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <div class="widget-box widget-color-blue2">
                      <div class="widget-header">
                        <h4 class="widget-title lighter smaller">代理换线作业</h4>
                      </div>
                      <div class="widget-body">
                        <div class="widget-main padding-8">
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">上层代理</label>
                            <div class="col-xs-12 col-sm-5">
                              <input type="hidden" name="souce_agent" id="souce_agent" value="5" />
                              <select class="form-control select2" name="admin_num" id="admin_num"
                                data-placeholder="请选择" required>
                                <option value="">请选择</option>
                                <option value="5" selected>vip666one(Company main station agent line)</option>
                                <option value="32">bet99mm(Burmese URL)</option>
                                <option value="33">bet99en(English URL)</option>
                                <option value="34">bet99ch(Simplified Chinese URL)</option>
                                <option value="37">test03(代理)</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">帐号</label>
                            <div class="col-xs-12 col-sm-5">
                              <p class="form-control-static">kc666</p>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">姓名</label>
                            <div class="col-xs-12 col-sm-5">
                              <p class="form-control-static">meteor</p>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">红利</label>
                            <div class="col-xs-12 col-sm-2 checkbox">
                              <label>
                                <input type="checkbox" class="ace" name="points_exchange" id="points_exchange"
                                  value="Y" />
                                <span class="lbl">转换红利单据</span>
                              </label>
                            </div>
                          </div>
                          <div class="form-group" id="points_div" style="display:none;">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">红利时间</label>
                            <div class="col-xs-12 col-sm-5">
                              <div class="input-daterange  input-group">
                                <input type="text" class="form-control jqdatetime" name="points_time1" id="points_time1"
                                  placeholder="开始日期" />
                                <span class="input-group-addon">
                                  <i class="fa fa-exchange"></i>
                                </span>
                                <input type="text" class="form-control jqdatetime" name="points_time2" id="points_time2"
                                  placeholder="结束日期" />
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">储值</label>
                            <div class="col-xs-12 col-sm-2 checkbox">
                              <label>
                                <input type="checkbox" class="ace" name="orders_exchange" id="orders_exchange"
                                  value="Y" />
                                <span class="lbl">转换储值单据</span>
                              </label>
                            </div>
                          </div>
                          <div class="form-group" id="orders_div" style="display:none;">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">储值时间</label>
                            <div class="col-xs-12 col-sm-5">
                              <div class="input-daterange  input-group">
                                <input type="text" class="form-control jqdatetime" name="orders_time1" id="orders_time1"
                                  placeholder="开始日期" />
                                <span class="input-group-addon">
                                  <i class="fa fa-exchange"></i>
                                </span>
                                <input type="text" class="form-control jqdatetime" name="orders_time2" id="orders_time2"
                                  placeholder="结束日期" />
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">抛售</label>
                            <div class="col-xs-12 col-sm-2 checkbox">
                              <label>
                                <input type="checkbox" class="ace" name="sell_exchange" id="sell_exchange" value="Y" />
                                <span class="lbl">转换抛售单据</span>
                              </label>
                            </div>
                          </div>
                          <div class="form-group" id="sell_div" style="display:none;">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">抛售时间</label>
                            <div class="col-xs-12 col-sm-5">
                              <div class="input-daterange  input-group">
                                <input type="text" class="form-control jqdatetime" name="sell_time1" id="sell_time1"
                                  placeholder="开始日期" />
                                <span class="input-group-addon">
                                  <i class="fa fa-exchange"></i>
                                </span>
                                <input type="text" class="form-control jqdatetime" name="sell_time2" id="sell_time2"
                                  placeholder="结束日期" />
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">汇款</label>
                            <div class="col-xs-12 col-sm-2 checkbox">
                              <label>
                                <input type="checkbox" class="ace" name="bank_exchange" id="bank_exchange" value="Y" />
                                <span class="lbl">转换汇款单据</span>
                              </label>
                            </div>
                          </div>
                          <div class="form-group" id="bank_div" style="display:none;">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">汇款时间</label>
                            <div class="col-xs-12 col-sm-5">
                              <div class="input-daterange  input-group">
                                <input type="text" class="form-control jqdatetime" name="bank_time1" id="bank_time1"
                                  placeholder="开始日期" />
                                <span class="input-group-addon">
                                  <i class="fa fa-exchange"></i>
                                </span>
                                <input type="text" class="form-control jqdatetime" name="bank_time2" id="bank_time2"
                                  placeholder="结束日期" />
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning" class="col-sm-3 control-label no-padding-right"></label>
                            <div class="col-xs-12 col-sm-5">
                              <button type="submit" class="btn btn-primary">送出</button>
                              <a class='btn btn-danger' href='Member_index.php?'>返回</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <div class="page-header"></div>
              <table id="simple-table" class="table table-bordered table-hover table-responsive">
                <thead>
                  <tr>
                    <th>来源代理</th>
                    <th>目的代理</th>
                    <th>转换红利</th>
                    <th>转换储值</th>
                    <th>转换抛售</th>
                    <th>转换汇款</th>
                    <th>异动人员</th>
                    <th>异动时间</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
              <div class="text-center"></div> <!-- 主要内容 结束 -->
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
