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
                  <li class=" active">
                    <a href="Order_bank_1.php">
                      已收款
                    </a>
                  </li>
                  <li class="">
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
                        <tr id="trAH165233701580">
                          <td>
                            vip666one <div class="text-danger">Company main station agent line</div>
                          </td>
                          <td>
                            <div class="text-info">AH165233701580</div>
                            <div class="text-danger">2022-05-12 14:30:15</div>
                          </td>
                          <td>
                            <a href="Member_index.php">
                              a123456 </a>
                            <div class="text-danger">123</div>
                          </td>
                          <td>
                            2,000 </td>
                          <td>
                            <div class="text-success">004臺灣銀行</div>
                            <div class="text-success">帐号：請聯繫客服索取帳號</div>
                            <div class="text-success">户名：請聯繫客服索取帳號</div>
                          </td>
                          <td>
                            666vip<br>(網站管理者) </td>
                          <td>
                            <div class="text-danger">2022-05-12 14:31:17</div>
                          </td>
                        </tr>
                        <tr id="trAH165180593376">
                          <td>
                            vip666one <div class="text-danger">Company main station agent line</div>
                          </td>
                          <td>
                            <div class="text-info">AH165180593376</div>
                            <div class="text-danger">2022-05-06 10:58:53</div>
                          </td>
                          <td>
                            <a href="Member_index.php">
                              kc666 </a>
                            <div class="text-danger">meteor</div>
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
                            <div class="text-danger">2022-05-18 10:41:25</div>
                          </td>
                        </tr>
                        <tr id="trAH165061539574">
                          <td>
                            vip666one <div class="text-danger">Company main station agent line</div>
                          </td>
                          <td>
                            <div class="text-info">AH165061539574</div>
                            <div class="text-danger">2022-04-22 16:16:35</div>
                          </td>
                          <td>
                            <a href="Member_index.php">
                              a123456 </a>
                            <div class="text-danger">123</div>
                          </td>
                          <td>
                            20,000 </td>
                          <td>
                            <div class="text-success">004臺灣銀行</div>
                            <div class="text-success">帐号：請聯繫客服索取帳號</div>
                            <div class="text-success">户名：請聯繫客服索取帳號</div>
                          </td>
                          <td>
                            666vip<br>(網站管理者) </td>
                          <td>
                            <div class="text-danger">2022-04-22 16:17:33</div>
                          </td>
                        </tr>
                        <tr id="trAH165035370972">
                          <td>
                            vip666one <div class="text-danger">Company main station agent line</div>
                          </td>
                          <td>
                            <div class="text-info">AH165035370972</div>
                            <div class="text-danger">2022-04-19 15:35:09</div>
                          </td>
                          <td>
                            <a href="Member_index.php">
                              a123456 </a>
                            <div class="text-danger">123</div>
                          </td>
                          <td>
                            20,000 </td>
                          <td>
                            <div class="text-success">004臺灣銀行</div>
                            <div class="text-success">帐号：請聯繫客服索取帳號</div>
                            <div class="text-success">户名：請聯繫客服索取帳號</div>
                          </td>
                          <td>
                            666vip<br>(網站管理者) </td>
                          <td>
                            <div class="text-danger">2022-04-19 15:35:27</div>
                          </td>
                        </tr>
                        <tr id="trAH165035366171">
                          <td>
                            vip666one <div class="text-danger">Company main station agent line</div>
                          </td>
                          <td>
                            <div class="text-info">AH165035366171</div>
                            <div class="text-danger">2022-04-19 15:34:21</div>
                          </td>
                          <td>
                            <a href="Member_index.php">
                              a123456 </a>
                            <div class="text-danger">123</div>
                          </td>
                          <td>
                            2,000 </td>
                          <td>
                            <div class="text-success">004臺灣銀行</div>
                            <div class="text-success">帐号：請聯繫客服索取帳號</div>
                            <div class="text-success">户名：請聯繫客服索取帳號</div>
                          </td>
                          <td>
                            666vip<br>(網站管理者) </td>
                          <td>
                            <div class="text-danger">2022-04-19 15:34:51</div>
                          </td>
                        </tr>
                        <tr id="trAH164973413058">
                          <td>
                            vip666one <div class="text-danger">Company main station agent line</div>
                          </td>
                          <td>
                            <div class="text-info">AH164973413058</div>
                            <div class="text-danger">2022-04-12 11:28:50</div>
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
                            <div class="text-danger">2022-04-13 18:02:01</div>
                          </td>
                        </tr>
                        <tr id="trAH164967376756">
                          <td>
                            vip666one <div class="text-danger">Company main station agent line</div>
                          </td>
                          <td>
                            <div class="text-info">AH164967376756</div>
                            <div class="text-danger">2022-04-11 18:42:47</div>
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
                            <div class="text-danger">2022-04-11 18:42:54</div>
                          </td>
                        </tr>
                        <tr id="trAH164966891547">
                          <td>
                            vip666one <div class="text-danger">Company main station agent line</div>
                          </td>
                          <td>
                            <div class="text-info">AH164966891547</div>
                            <div class="text-danger">2022-04-11 17:21:55</div>
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
                            <div class="text-danger">2022-04-13 18:02:00</div>
                          </td>
                        </tr>
                        <tr id="trAH164966719546">
                          <td>
                            vip666one <div class="text-danger">Company main station agent line</div>
                          </td>
                          <td>
                            <div class="text-info">AH164966719546</div>
                            <div class="text-danger">2022-04-11 16:53:15</div>
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
                            <div class="text-danger">2022-04-13 18:01:59</div>
                          </td>
                        </tr>
                        <tr id="trAH164966459745">
                          <td>
                            vip666one <div class="text-danger">Company main station agent line</div>
                          </td>
                          <td>
                            <div class="text-info">AH164966459745</div>
                            <div class="text-danger">2022-04-11 16:09:57</div>
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
                            <div class="text-danger">2022-04-13 18:01:58</div>
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
