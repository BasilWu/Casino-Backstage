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
              <a href="javascript:void(0)">银行汇款查找</a>
            </li>
            <li>
              <a href="Order_bank_0.php">银行汇款查找</a>
            </li>
          </ul><!-- /.breadcrumb -->
        </div>
        <div class="page-content">
          <?php include "include/in_menu_set.php"?>
          <div class="row">
            <div class="col-xs-12">
              <!-- 主要内容 开始 -->
              <script type="text/javascript">
              function keyChange(number, value) {
                $.ajax({
                  type: "POST",
                  url: CI_URL + 'D3oadp5j/order/bank_keyChange',
                  cache: false,
                  data: {
                    order_no: number,
                    value: value
                  }
                }).done(function(msg) {
                  $('#tr' + number).remove();
                });
              }

              function toCloseSound(tb, column, value) {
                $.ajax({
                  type: "POST",
                  url: CI_URL + 'D3oadp5j/Order/ajaxCloseSound',
                  cache: false,
                  data: {
                    tb: tb,
                    column: column,
                    value: value
                  }
                }).done(function(msg) {
                  $('#soundBTN').hide();
                });
              }
              </script>
              <!-- PAGE CONTENT BEGINS -->
              <div class="page-header">
                <form class="form-horizontal" method="post" action="#">
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div id="accordion" class="accordion-style1 panel-group">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title ">
                              <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion"
                                href="#collapseOne">
                                <i class="ace-icon fa fa-angle-down bigger-110"
                                  data-icon-hide="ace-icon fa fa-angle-down"
                                  data-icon-show="ace-icon fa fa-angle-right"></i>
                                &nbsp;筛选条件
                              </a>
                            </h4>
                          </div>
                          <div class="panel-collapse collapse" id="collapseOne">
                            <div class="panel-body">
                              <div class="form-group">
                                <label for="inputWarning"
                                  class="col-xs-12 col-sm-3 control-label no-padding-right">订单编号</label>
                                <div class="col-xs-12 col-sm-5">
                                  <input type="text" class="form-control" id="find1" name="find1" value=""
                                    placeholder="订单编号" />
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputWarning"
                                  class="col-xs-12 col-sm-3 control-label no-padding-right">会员帐号</label>
                                <div class="col-xs-12 col-sm-5">
                                  <input type="text" class="form-control" id="find4" name="find4" value=""
                                    placeholder="会员帐号" />
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputWarning"
                                  class="col-xs-12 col-sm-3 control-label no-padding-right">日期区间</label>
                                <div class="col-xs-12 col-sm-5">
                                  <div class="input-daterange  input-group">
                                    <input type="text" class="input-sm form-control jqdatetime" name="find7" id="find7"
                                      value="" />
                                    <span class="input-group-addon">
                                      <i class="fa fa-exchange"></i>
                                    </span>
                                    <input type="text" class="input-sm form-control jqdatetime" name="find8" id="find8"
                                      value="" />
                                  </div>
                                </div>
                              </div>
                              <div class="text-center">
                                <a href="Order_bank_0.php" class="btn btn-yellow btn-sm">
                                  <span class="ace-icon fa fa-times icon-on-right bigger-110"></span>
                                  清除筛选
                                </a>
                                <button type="submit" class="btn btn-purple btn-sm">
                                  <span class="ace-icon fa fa-search icon-on-right bigger-110"></span>
                                  条件筛选
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="tabbable">
                <ul class="nav nav-tabs" id="myTab">
                  <li class=" ">
                    <a href="Order_bank_0.php">
                      未收款
                    </a>
                  </li>
                  <li class="">
                    <a href="Order_bank_1.php">
                      已收款
                    </a>
                  </li>
                  <li class=" active">
                    <a href="Order_bank_2.php">
                      已放弃
                    </a>
                  </li>
                </ul>
                <div class="tab-content">
                  <div id="home" class="tab-pane fade in active">
                    <table id="simple-table" class="table table-bordered table-hover table-responsive">
                      <thead>
                        <tr>
                          <!--<th class="center">
                            <label class="pos-rel">
                                <input type="checkbox" class="ace" />
                                <span class="lbl"></span>
                            </label>
                        </th>-->
                          <th>代理</th>
                          <th>订单编号/日期</th>
                          <th>汇款会员</th>
                          <th>汇款金额</th>
                          <th>公司帐户</th>
                          <th>处理人员</th>
                          <th>异动时间</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr id="trAH165233699179">
                          <td>
                            vip666one <div class="text-danger">Company main station agent line</div>
                          </td>
                          <td>
                            <div class="text-info">AH165233699179</div>
                            <div class="text-danger">2022-05-12 14:29:51</div>
                          </td>
                          <td>
                            <a href="Member_index.php">
                              a123456 </a>
                            <div class="text-danger">123</div>
                          </td>
                          <td>
                            500 </td>
                          <td>
                            <div class="text-success">004臺灣銀行</div>
                            <div class="text-success">帐号：請聯繫客服索取帳號</div>
                            <div class="text-success">户名：請聯繫客服索取帳號</div>
                          </td>
                          <td>
                            666vip<br>(網站管理者) </td>
                          <td>
                            <div class="text-danger">2022-05-12 14:31:19</div>
                          </td>
                        </tr>
                        <tr id="trAH164973412657">
                          <td>
                            vip666one <div class="text-danger">Company main station agent line</div>
                          </td>
                          <td>
                            <div class="text-info">AH164973412657</div>
                            <div class="text-danger">2022-04-12 11:28:46</div>
                          </td>
                          <td>
                            <a href="Member_index.php">
                              a123456 </a>
                            <div class="text-danger">123</div>
                          </td>
                          <td>
                            500 </td>
                          <td>
                            <div class="text-success">004臺灣銀行</div>
                            <div class="text-success">帐号：請聯繫客服索取帳號</div>
                            <div class="text-success">户名：請聯繫客服索取帳號</div>
                          </td>
                          <td>
                            666vip<br>(網站管理者) </td>
                          <td>
                            <div class="text-danger">2022-04-12 11:29:03</div>
                          </td>
                        </tr>
                        <tr id="trAH164748734043">
                          <td>
                            vip666one <div class="text-danger">Company main station agent line</div>
                          </td>
                          <td>
                            <div class="text-info">AH164748734043</div>
                            <div class="text-danger">2022-03-17 11:22:20</div>
                          </td>
                          <td>
                            <a href="Member_index.php">
                              sdsm666 </a>
                            <div class="text-danger">sdsm666</div>
                          </td>
                          <td>
                            500 </td>
                          <td>
                            <div class="text-success">004臺灣銀行</div>
                            <div class="text-success">帐号：請聯繫客服索取帳號</div>
                            <div class="text-success">户名：請聯繫客服索取帳號</div>
                          </td>
                          <td>
                            666vip<br>(網站管理者) </td>
                          <td>
                            <div class="text-danger">2022-03-17 11:24:55</div>
                          </td>
                        </tr>
                        <tr id="trAH164748720442">
                          <td>
                            vip666one <div class="text-danger">Company main station agent line</div>
                          </td>
                          <td>
                            <div class="text-info">AH164748720442</div>
                            <div class="text-danger">2022-03-17 11:20:04</div>
                          </td>
                          <td>
                            <a href="Member_index.php">
                              sdsm666 </a>
                            <div class="text-danger">sdsm666</div>
                          </td>
                          <td>
                            500 </td>
                          <td>
                            <div class="text-success">004臺灣銀行</div>
                            <div class="text-success">帐号：請聯繫客服索取帳號</div>
                            <div class="text-success">户名：請聯繫客服索取帳號</div>
                          </td>
                          <td>
                            666vip<br>(網站管理者) </td>
                          <td>
                            <div class="text-danger">2022-03-17 11:24:56</div>
                          </td>
                        </tr>
                        <tr id="trAH164748673741">
                          <td>
                            vip666one <div class="text-danger">Company main station agent line</div>
                          </td>
                          <td>
                            <div class="text-info">AH164748673741</div>
                            <div class="text-danger">2022-03-17 11:12:17</div>
                          </td>
                          <td>
                            <a href="Member_index.php">
                              sdsm666 </a>
                            <div class="text-danger">sdsm666</div>
                          </td>
                          <td>
                            500 </td>
                          <td>
                            <div class="text-success">004臺灣銀行</div>
                            <div class="text-success">帐号：請聯繫客服索取帳號</div>
                            <div class="text-success">户名：請聯繫客服索取帳號</div>
                          </td>
                          <td>
                            666vip<br>(網站管理者) </td>
                          <td>
                            <div class="text-danger">2022-03-17 11:24:57</div>
                          </td>
                        </tr>
                        <tr id="trAH164748671940">
                          <td>
                            vip666one <div class="text-danger">Company main station agent line</div>
                          </td>
                          <td>
                            <div class="text-info">AH164748671940</div>
                            <div class="text-danger">2022-03-17 11:11:59</div>
                          </td>
                          <td>
                            <a href="Member_index.php">
                              sdsm666 </a>
                            <div class="text-danger">sdsm666</div>
                          </td>
                          <td>
                            500 </td>
                          <td>
                            <div class="text-success">004臺灣銀行</div>
                            <div class="text-success">帐号：請聯繫客服索取帳號</div>
                            <div class="text-success">户名：請聯繫客服索取帳號</div>
                          </td>
                          <td>
                            666vip<br>(網站管理者) </td>
                          <td>
                            <div class="text-danger">2022-03-17 11:24:58</div>
                          </td>
                        </tr>
                        <tr id="trAH164630307936">
                          <td>
                            vip666one <div class="text-danger">Company main station agent line</div>
                          </td>
                          <td>
                            <div class="text-info">AH164630307936</div>
                            <div class="text-danger">2022-03-03 18:24:39</div>
                          </td>
                          <td>
                            <a href="Member_index.php">
                              asdf </a>
                            <div class="text-danger">Chen Xiaohua</div>
                          </td>
                          <td>
                            500 </td>
                          <td>
                            <div class="text-success">004臺灣銀行</div>
                            <div class="text-success">帐号：請聯繫客服索取帳號</div>
                            <div class="text-success">户名：請聯繫客服索取帳號</div>
                          </td>
                          <td>
                            666vip<br>(網站管理者) </td>
                          <td>
                            <div class="text-danger">2022-03-17 11:25:05</div>
                          </td>
                        </tr>
                        <tr id="trAH164630304135">
                          <td>
                            vip666one <div class="text-danger">Company main station agent line</div>
                          </td>
                          <td>
                            <div class="text-info">AH164630304135</div>
                            <div class="text-danger">2022-03-03 18:24:01</div>
                          </td>
                          <td>
                            <a href="Member_index.php">
                              asdf </a>
                            <div class="text-danger">Chen Xiaohua</div>
                          </td>
                          <td>
                            500 </td>
                          <td>
                            <div class="text-success">004臺灣銀行</div>
                            <div class="text-success">帐号：請聯繫客服索取帳號</div>
                            <div class="text-success">户名：請聯繫客服索取帳號</div>
                          </td>
                          <td>
                            666vip<br>(網站管理者) </td>
                          <td>
                            <div class="text-danger">2022-03-17 11:25:07</div>
                          </td>
                        </tr>
                        <tr id="trAH164630299334">
                          <td>
                            vip666one <div class="text-danger">Company main station agent line</div>
                          </td>
                          <td>
                            <div class="text-info">AH164630299334</div>
                            <div class="text-danger">2022-03-03 18:23:13</div>
                          </td>
                          <td>
                            <a href="Member_index.php">
                              asdf </a>
                            <div class="text-danger">Chen Xiaohua</div>
                          </td>
                          <td>
                            500 </td>
                          <td>
                            <div class="text-success">004臺灣銀行</div>
                            <div class="text-success">帐号：請聯繫客服索取帳號</div>
                            <div class="text-success">户名：請聯繫客服索取帳號</div>
                          </td>
                          <td>
                            666vip<br>(網站管理者) </td>
                          <td>
                            <div class="text-danger">2022-03-17 11:25:09</div>
                          </td>
                        </tr>
                        <tr id="trAH164630251130">
                          <td>
                            vip666one <div class="text-danger">Company main station agent line</div>
                          </td>
                          <td>
                            <div class="text-info">AH164630251130</div>
                            <div class="text-danger">2022-03-03 18:15:11</div>
                          </td>
                          <td>
                            <a href="Member_index.php">
                              asdf </a>
                            <div class="text-danger">Chen Xiaohua</div>
                          </td>
                          <td>
                            500 </td>
                          <td>
                            <div class="text-success">004臺灣銀行</div>
                            <div class="text-success">帐号：請聯繫客服索取帳號</div>
                            <div class="text-success">户名：請聯繫客服索取帳號</div>
                          </td>
                          <td>
                            666vip<br>(網站管理者) </td>
                          <td>
                            <div class="text-danger">2022-03-17 11:25:10</div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <?php include "include/in_pagebar.php"?>
                  </div>
                </div>
              </div>
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
