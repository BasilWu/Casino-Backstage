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
              <a href="javascript:void(0)">宝物抛售查找</a>
            </li>
            <li>
              <a href="Order_sell_0.php">宝物抛售查找</a>
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
                $('#feeBTN').click(function() {
                  if ($('#feeForm').valid()) {
                    $.blockUI({
                      message: '<img src="//game99.demonsupervisor.com/images/admin/images/loadingbar/009.gif" >',
                      baseZ: 2000
                    });
                    $.ajax({
                      type: "POST",
                      url: CI_URL + "D3oadp5j/Order/ajaxFee",
                      cache: false,
                      async: false,
                      dataType: "json",
                      data: {
                        order_no: $('#order_no').val(),
                        fee: $('#fee').val()
                      }
                    }).done(function(htmlData) {
                      $.unblockUI();
                      $('#alrtTitle').text(htmlData.title);
                      $('#alertBody').text(htmlData.Msg)
                      if (htmlData.RntCode == 1) {
                        $('#alrtMsg').removeClass('alert-danger').addClass('alert-success');
                        //$(".DelVal").prop('value','');
                      } else {
                        $('#alrtMsg').removeClass('alert-success').addClass('alert-danger');
                      }
                      $('#alrtMsg').show();
                      //$('.selectpicker').selectpicker('refresh');//重新特效抓取
                    });
                  }
                });



                $('#fee_modal').on('hidden.bs.modal', function(e) { //关闭窗口促发事件
                  location.href = location.href;
                  //console.log('modal closed');
                });

                $('.show_fee').click(function() {
                  $('#alrtMsg').hide();
                  $(".DelVal").prop('value', '');
                  $('#show_order_no').html($(this).attr('data-orderno'));
                  $('#order_no').prop('value', $(this).attr('data-orderno'));
                  $('#fee').prop('value', $(this).attr('data-fee'));
                  $('#fee_modal').modal({
                    keyboard: false,
                    backdrop: 'static'
                  });
                  $('#fee_modal').modal('show');
                });


              });


              function keyChange(number, value) {
                $.ajax({
                  type: "POST",
                  url: CI_URL + 'D3oadp5j/order/keyChange',
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
                  $('#soundBTN' + value).hide();
                });
              }

              function showReport(orderDate, mem_num) {
                $('#mem_num').val(mem_num);
                $.blockUI({
                  message: '<img src="//game99.demonsupervisor.com/images/admin/images/loadingbar/009.gif" >',
                  baseZ: 2000
                });
                $.ajax({
                  type: "POST",
                  url: CI_URL + 'D3oadp5j/Order/sellReport',
                  cache: false,
                  dataType: "json",
                  data: {
                    orderDate: orderDate,
                    mem_num: mem_num
                  }
                }).done(function(msg) {
                  build_json(msg.data, msg.prefix);
                  $.unblockUI();
                  $('#report_info').modal('show');
                });
              }



              function upDateReport() {
                $.blockUI({
                  message: '<img src="//game99.demonsupervisor.com/images/admin/images/loadingbar/009.gif" >',
                  baseZ: 2000
                });
                $.ajax({
                  type: "POST",
                  url: CI_URL + 'D3oadp5j/Order/sellReport',
                  cache: false,
                  dataType: "json",
                  data: {
                    sTime: $('#sDate').val(),
                    eTime: $('#eDate').val(),
                    mem_num: $('#mem_num').val()
                  }
                }).done(function(msg) {
                  build_json(msg.data, msg.prefix);
                  $.unblockUI();
                  $('#report_info').modal('show');
                });
              }


              function build_json(msg, tb) {

                $('#report_info_header').html(msg.u_id + '(' + msg.u_name + ')');
                $('#sDate').val(msg.sDate);
                $('#eDate').val(msg.eDate);

                var tb_values = Object.values(tb);

                var array_keys = Object.keys(msg);
                var array_values = Object.values(msg);
                $('#report_body').html('');
                for (i = 0; i < tb_values.length; i++) {
                  var tb_txt = '<tr>';
                  tb_txt += '<td class="text-center">' + tb_values[i][1] + '</td>';
                  tb_txt += '<td class="text-center formatNumber" id="' + tb_values[i][0] + '_betAmount"></td>';
                  tb_txt += '<td class="text-center formatNumber" id="' + tb_values[i][0] + '_validAmount"></td>';
                  tb_txt += '<td class="text-center number-info" id="' + tb_values[i][0] + '_winOrLoss"></td>';
                  tb_txt += '</tr>';
                  $('#report_body').append(tb_txt);
                }


                for (i = 5; i < array_keys.length; i++) {
                  $('#' + array_keys[i]).html(array_values[i]);
                  //console.log(tb[i]);
                }


                number_info();
              }

              function number_info() {
                $('.number-info').each(function() {
                  var txt = parseFloat($(this).html());
                  //console.log(txt);
                  if (txt < 0) {
                    $(this).removeClass('text-success').addClass('text-danger');
                    spanClass = '';
                  } else if (txt > 0) {
                    $(this).removeClass('text-danger').addClass('text-success');
                  } else {
                    $(this).removeClass('text-danger').removeClass('text-success');
                  }
                  $(this).html(formatNumber(txt));
                });

                $('.formatNumber').each(function() {
                  var txt = parseFloat($(this).html());
                  $(this).html(formatNumber(txt));
                });

              }

              function formatNumber(number) {
                number = number.toFixed(2) + '';
                x = number.split('.');
                x1 = x[0];
                x2 = x.length > 1 ? '.' + x[1] : '';
                var rgx = /(\d+)(\d{3})/;
                while (rgx.test(x1)) {
                  x1 = x1.replace(rgx, '$1' + ',' + '$2');
                }
                return x1 + x2;
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
                                <a href="Order_sell_0.php" class="btn btn-yellow btn-sm">
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
                    <a href="Order_sell_0.php">
                      等待处理
                    </a>
                  </li>
                  <li class="">
                    <a href="Order_sell_1.php">
                      处理完毕
                    </a>
                  </li>
                  <li class=" active">
                    <a href="Order_sell_2.php">
                      放弃提领
                    </a>
                  </li>
                  <li class="">
                    <a href="Order_sell_3.php">
                      拒绝出款
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
                          <th>出售会员</th>
                          <th>出售金额</th>
                          <th>手续费用</th>
                          <th>目的信息</th>
                          <th>处理人员</th>
                          <th>异动时间</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr id="trAH165206338777">
                          <td>
                            vip666one <div class="text-danger">Company main station agent line</div>
                          </td>
                          <td>
                            <div class="text-info">AH165206338777</div>
                            <div class="text-danger">2022-05-09 10:29:47</div>
                          </td>
                          <td>
                            <a href="Member_index.php">
                              a123456 </a>
                            <div class="text-danger">
                              <a href="javascript:void(0)" class="text-danger"
                                onclick="showReport('2022-05-09 10:29:47','7')">123</a>
                            </div>
                          </td>
                          <td>1,000</td>
                          <td>
                            20 </td>
                          <td>
                            <div class="text-success">004臺灣銀行</div>
                            <div class="text-success">分行：1</div>
                            <div class="text-success">帐号：1</div>
                            <div class="text-success">户名：1</div>
                            <div class="text-danger">实际金额：980</div>
                          </td>
                          <td>
                            666vip<br>(網站管理者) </td>
                          <td>
                            <div class="text-danger">2022-05-12 14:32:45</div>
                          </td>
                        </tr>
                        <tr id="trAH165163023075">
                          <td>
                            vip666one <div class="text-danger">Company main station agent line</div>
                          </td>
                          <td>
                            <div class="text-info">AH165163023075</div>
                            <div class="text-danger">2022-05-04 10:10:30</div>
                          </td>
                          <td>
                            <a href="Member_index.php">
                              a123456 </a>
                            <div class="text-danger">
                              <a href="javascript:void(0)" class="text-danger"
                                onclick="showReport('2022-05-04 10:10:30','7')">123</a>
                            </div>
                          </td>
                          <td>1,000</td>
                          <td>
                            20 </td>
                          <td>
                            <div class="text-success">004臺灣銀行</div>
                            <div class="text-success">分行：1</div>
                            <div class="text-success">帐号：1</div>
                            <div class="text-success">户名：1</div>
                            <div class="text-danger">实际金额：980</div>
                          </td>
                          <td>
                            666vip<br>(網站管理者) </td>
                          <td>
                            <div class="text-danger">2022-05-12 14:32:35</div>
                          </td>
                        </tr>
                        <tr id="trAH165034855668">
                          <td>
                            vip666one <div class="text-danger">Company main station agent line</div>
                          </td>
                          <td>
                            <div class="text-info">AH165034855668</div>
                            <div class="text-danger">2022-04-19 14:09:16</div>
                          </td>
                          <td>
                            <a href="Member_index.php">
                              a123456 </a>
                            <div class="text-danger">
                              <a href="javascript:void(0)" class="text-danger"
                                onclick="showReport('2022-04-19 14:09:16','7')">123</a>
                            </div>
                          </td>
                          <td>1,000</td>
                          <td>
                            20 </td>
                          <td>
                            <div class="text-success">004臺灣銀行</div>
                            <div class="text-success">分行：1</div>
                            <div class="text-success">帐号：1</div>
                            <div class="text-success">户名：1</div>
                            <div class="text-danger">实际金额：980</div>
                          </td>
                          <td>
                            666vip<br>(網站管理者) </td>
                          <td>
                            <div class="text-danger">2022-05-12 14:32:38</div>
                          </td>
                        </tr>
                        <tr id="trAH165027535764">
                          <td>
                            vip666one <div class="text-danger">Company main station agent line</div>
                          </td>
                          <td>
                            <div class="text-info">AH165027535764</div>
                            <div class="text-danger">2022-04-18 17:49:17</div>
                          </td>
                          <td>
                            <a href="Member_index.php">
                              a123456 </a>
                            <div class="text-danger">
                              <a href="javascript:void(0)" class="text-danger"
                                onclick="showReport('2022-04-18 17:49:17','7')">123</a>
                            </div>
                          </td>
                          <td>1,000</td>
                          <td>
                            20 </td>
                          <td>
                            <div class="text-success">004臺灣銀行</div>
                            <div class="text-success">分行：1</div>
                            <div class="text-success">帐号：1</div>
                            <div class="text-success">户名：1</div>
                            <div class="text-danger">实际金额：980</div>
                          </td>
                          <td>
                            666vip<br>(網站管理者) </td>
                          <td>
                            <div class="text-danger">2022-05-12 14:32:52</div>
                          </td>
                        </tr>
                        <tr id="trAH164967165549">
                          <td>
                            vip666one <div class="text-danger">Company main station agent line</div>
                          </td>
                          <td>
                            <div class="text-info">AH164967165549</div>
                            <div class="text-danger">2022-04-11 18:07:35</div>
                          </td>
                          <td>
                            <a href="Member_index.php">
                              a123456 </a>
                            <div class="text-danger">
                              <a href="javascript:void(0)" class="text-danger"
                                onclick="showReport('2022-04-11 18:07:35','7')">123</a>
                            </div>
                          </td>
                          <td>1,000</td>
                          <td>
                            20 </td>
                          <td>
                            <div class="text-success">004臺灣銀行</div>
                            <div class="text-success">分行：a</div>
                            <div class="text-success">帐号：xxx</div>
                            <div class="text-success">户名：x</div>
                            <div class="text-danger">实际金额：980</div>
                          </td>
                          <td>
                            666vip<br>(網站管理者) </td>
                          <td>
                            <div class="text-danger">2022-04-11 18:07:51</div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <?php include "include/in_pagebar.php"?>
                  </div>
                </div>
              </div>
              <div class="modal fade in" tabindex="-1" role="dialog" id="report_info">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header center h4 red" id="report_info_header">
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <input type="hidden" id="mem_num" />
                        <div class="col-xs-12 col-sm-8">
                          <div class="form-group">
                            <div class="input-daterange  input-group">
                              <input type="text" class="input-sm form-control jqdatetime" name="sDate" id="sDate"
                                placeholder="开始日期" />
                              <span class="input-group-addon">
                                <i class="fa fa-exchange"></i>
                              </span>
                              <input type="text" class="input-sm form-control jqdatetime" name="eDate" id="eDate"
                                placeholder="结束日期" />
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-3">
                          <div class="form-group">
                            <div class="btn-group">
                              <button type="button" class="btn btn-white btn-sm btn-primary"
                                onClick="upDateReport()">更新日期</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <table class="table table-bordered table-hover">
                        <tr>
                          <th class="text-center">厂商</th>
                          <th class="text-center">投注</th>
                          <th class="text-center">洗码</th>
                          <th class="text-center">输赢</th>
                        </tr>
                        <tbody id="report_body">
                        </tbody>
                        <tr>
                          <td class="text-center red">总计</td>
                          <td class="text-center formatNumber" id="total_betAmount"></td>
                          <td class="text-center formatNumber" id="total_validAmount"></td>
                          <td class="text-center number-info" id="total_winOrLoss"></td>
                        </tr>
                      </table>
                    </div>
                    <div class="modal-footer center">
                      <button data-dismiss="modal" type="button" class=" btn-white btn-lg btn btn-default btn-round">
                        <i class='ace-icon fa fa-times bigger-110'></i>&nbsp; 关闭
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!--修改手续费 -->
              <div class="modal fade  in" tabindex="-1" role="dialog" id="fee_modal">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <!--<button type="button" class="bootbox-close-button close" data-dismiss="modal" aria-hidden="true">×</button>-->
                      <h4 class='smaller'> 修改手续费</h4>
                    </div>
                    <div class="modal-body">
                      <div class="alert alert-danger fade in" id="alrtMsg" style="display:none;">
                        <strong id="alrtTitle">请求失败！</strong>&nbsp;&nbsp;<span id="alertBody">XXXX</span>
                      </div>
                      <form class="form-horizontal newoil-form" id="feeForm" method="post">
                        <input type="hidden" class="DelVal" id="order_no" />
                        <div class="form-group">
                          <label for="inputWarning" class="col-xs-12 col-sm-2 control-label">订单编号</label>
                          <div class="col-xs-12 col-sm-10">
                            <p class="form-control-static" id="show_order_no"></p>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputWarning" class="col-xs-12 col-sm-2 control-label">手续费</label>
                          <div class="col-xs-12 col-sm-10">
                            <input name="fee" id="fee" class="form-control DelVal digits" placeholder="点数" required />
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer center">
                      <button type="button" id="feeBTN" class="btn btn-lg btn-white btn-pink btn-round"><i
                          class="ace-icon fa fa-check bigger-110"></i>&nbsp;送出</button>
                      <button data-dismiss="modal" type="button" class=" btn-white btn-lg btn btn-default btn-round">
                        <i class='ace-icon fa fa-times bigger-110'></i>&nbsp; 关闭
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!--修改手续费 -->
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
