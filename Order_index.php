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
              <a href="javascript:void(0)">储值数据查找</a>
            </li>
            <li>
              <a href="order_index.php">储值数据查找</a>
            </li>
          </ul><!-- /.breadcrumb -->
        </div>
        <div class="page-content">
          <?php include "include/in_menu_set.php"?>
          <div class="row">
            <div class="col-xs-12">
              <!-- 主要内容 开始 -->
              <script type="text/javascript">
              function checkPay(order_no) {
                $.blockUI({
                  message: '<img src="//game99.demonsupervisor.com/images/admin/images/loadingbar/009.gif" >',
                  baseZ: 2000
                });
                $.ajax({
                  type: "POST",
                  url: CI_URL + '/module/Checkpay/ajaxCheck',
                  cache: false,
                  dataType: "json",
                  data: {
                    order_no: order_no
                  }
                }).done(function(msg) {
                  $.unblockUI();
                  if (msg.RntCode == 'Y') {
                    modalMsg(msg.Msg, location.href);
                  } else {
                    modalMsg(msg.Msg);
                  }
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
                                  class="col-xs-12 col-sm-3 control-label no-padding-right">收款情况</label>
                                <div class="col-xs-12 col-sm-5">
                                  <select class="form-control select2" name="find2" id="find2" data-placeholder="请选择">
                                    <option value="">请选择</option>
                                    <option value="0">未收款</option>
                                    <option value="1">已收款</option>
                                    <option value="2">已放棄</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputWarning"
                                  class="col-xs-12 col-sm-3 control-label no-padding-right">缴费方式</label>
                                <div class="col-xs-12 col-sm-5">
                                  <select class="form-control select2" name="find3" id="find3" data-placeholder="请选择">
                                    <option value="">请选择</option>
                                    <option value="ATM">ATM</option>
                                    <option value="CVS">超商代码</option>
                                    <option value="Credit">信用卡</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputWarning"
                                  class="col-xs-12 col-sm-3 control-label no-padding-right">缴费代码</label>
                                <div class="col-xs-12 col-sm-5">
                                  <input type="text" class="form-control" id="find9" name="find9" value=""
                                    placeholder="缴费帐号" />
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
                                <a href="order_index.php" class="btn btn-yellow btn-sm">
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
                    <th>储值会员</th>
                    <th>储值方式/金额</th>
                    <th>收款情况</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      vip666one <div class="text-danger">Company main station agent line</div>
                    </td>
                    <td>
                      <div class="text-info">AH170070604691</div>
                      <div class="text-danger">2023-11-23 10:20:46</div>
                    </td>
                    <td>
                      <a href="Member_index.php">
                        mm6789 </a>
                      <div class="text-danger">朱司言</div>
                    </td>
                    <td>
                      <div class="text-success">信用卡</div>
                      <div class="text-info">
                      </div>
                      <div class="text-danger">$500</div>
                    </td>
                    <td>
                      <div class="text-danger">
                        未收款
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      vip666one <div class="text-danger">Company main station agent line</div>
                    </td>
                    <td>
                      <div class="text-info">AH164967285655</div>
                      <div class="text-danger">2022-04-11 18:27:36</div>
                    </td>
                    <td>
                      <a href="Member_index.php">
                        a123456 </a>
                      <div class="text-danger">123</div>
                    </td>
                    <td>
                      <div class="text-success">ATM</div>
                      <div class="text-info">
                        822- </div>
                      <div class="text-danger">$500</div>
                    </td>
                    <td>
                      <div class="text-danger">
                        未收款
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      vip666one <div class="text-danger">Company main station agent line</div>
                    </td>
                    <td>
                      <div class="text-info">AH164967251253</div>
                      <div class="text-danger">2022-04-11 18:21:52</div>
                    </td>
                    <td>
                      <a href="Member_index.php">
                        a123456 </a>
                      <div class="text-danger">123</div>
                    </td>
                    <td>
                      <div class="text-success">ATM</div>
                      <div class="text-info">
                        822- </div>
                      <div class="text-danger">$500</div>
                    </td>
                    <td>
                      <div class="text-danger">
                        未收款
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      vip666one <div class="text-danger">Company main station agent line</div>
                    </td>
                    <td>
                      <div class="text-info">AH164967248852</div>
                      <div class="text-danger">2022-04-11 18:21:28</div>
                    </td>
                    <td>
                      <a href="Member_index.php">
                        a123456 </a>
                      <div class="text-danger">123</div>
                    </td>
                    <td>
                      <div class="text-success">ATM</div>
                      <div class="text-info">
                        822- </div>
                      <div class="text-danger">$500</div>
                    </td>
                    <td>
                      <div class="text-danger">
                        未收款
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      vip666one <div class="text-danger">Company main station agent line</div>
                    </td>
                    <td>
                      <div class="text-info">AH164630291132</div>
                      <div class="text-danger">2022-03-03 18:21:51</div>
                    </td>
                    <td>
                      <a href="Member_index.php">
                        asdf </a>
                      <div class="text-danger">Chen Xiaohua</div>
                    </td>
                    <td>
                      <div class="text-success">ATM</div>
                      <div class="text-info">
                        822- </div>
                      <div class="text-danger">$500</div>
                    </td>
                    <td>
                      <div class="text-danger">
                        未收款
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      vip666one <div class="text-danger">Company main station agent line</div>
                    </td>
                    <td>
                      <div class="text-info">AH164630251431</div>
                      <div class="text-danger">2022-03-03 18:15:14</div>
                    </td>
                    <td>
                      <a href="Member_index.php">
                        asdf </a>
                      <div class="text-danger">Chen Xiaohua</div>
                    </td>
                    <td>
                      <div class="text-success">ATM</div>
                      <div class="text-info">
                        822- </div>
                      <div class="text-danger">$500</div>
                    </td>
                    <td>
                      <div class="text-danger">
                        未收款
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      vip666one <div class="text-danger">Company main station agent line</div>
                    </td>
                    <td>
                      <div class="text-info">AH164630236728</div>
                      <div class="text-danger">2022-03-03 18:12:47</div>
                    </td>
                    <td>
                      <a href="Member_index.php">
                        asdf </a>
                      <div class="text-danger">Chen Xiaohua</div>
                    </td>
                    <td>
                      <div class="text-success">ATM</div>
                      <div class="text-info">
                        822- </div>
                      <div class="text-danger">$500</div>
                    </td>
                    <td>
                      <div class="text-danger">
                        未收款
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      vip666one <div class="text-danger">Company main station agent line</div>
                    </td>
                    <td>
                      <div class="text-info">AH164627691225</div>
                      <div class="text-danger">2022-03-03 11:08:32</div>
                    </td>
                    <td>
                      <a href="Member_index.php">
                        test123 </a>
                      <div class="text-danger">test123</div>
                    </td>
                    <td>
                      <div class="text-success">ATM</div>
                      <div class="text-info">
                        822- </div>
                      <div class="text-danger">$1,000</div>
                    </td>
                    <td>
                      <div class="text-danger">
                        未收款
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      vip666one <div class="text-danger">Company main station agent line</div>
                    </td>
                    <td>
                      <div class="text-info">AH164612908724</div>
                      <div class="text-danger">2022-03-01 18:04:47</div>
                    </td>
                    <td>
                      <a href="Member_index.php">
                        a123456 </a>
                      <div class="text-danger">123</div>
                    </td>
                    <td>
                      <div class="text-success">ATM</div>
                      <div class="text-info">
                        822- </div>
                      <div class="text-danger">$500</div>
                    </td>
                    <td>
                      <div class="text-danger">
                        未收款
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      vip666one <div class="text-danger">Company main station agent line</div>
                    </td>
                    <td>
                      <div class="text-info">AH164577834823</div>
                      <div class="text-danger">2022-02-25 16:39:08</div>
                    </td>
                    <td>
                      <a href="Member_index.php">
                        C123456 </a>
                      <div class="text-danger">test</div>
                    </td>
                    <td>
                      <div class="text-success">ATM</div>
                      <div class="text-info">
                        822- </div>
                      <div class="text-danger">$500</div>
                    </td>
                    <td>
                      <div class="text-danger">
                        未收款
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
              <?php include "include/in_pagebar.php"?>
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
