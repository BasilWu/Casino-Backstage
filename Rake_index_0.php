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
              <a href="javascript:void(0)">会员返水发放</a>
            </li>
            <li>
              <a href="Rake_index_0.php">会员返水发放</a>
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
                  url: CI_URL + 'D3oadp5j/Rake/keyChange',
                  cache: false,
                  data: {
                    order_no: number,
                    value: value
                  }
                }).done(function(msg) {
                  $('#tr' + number).remove();
                });
              }

              function AllChange(value) {
                $.blockUI({
                  message: '<img src="//game99.demonsupervisor.com/images/admin/images/loadingbar/009.gif" >',
                  baseZ: 2000
                });
                $.ajax({
                  type: "POST",
                  url: CI_URL + 'D3oadp5j/Rake/AllChange',
                  cache: false,
                  data: {
                    value: value
                  }
                }).done(function(msg) {
                  $.unblockUI();
                  $('#simple-table tbody tr').remove();
                  modalMsg('处理完毕');
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
                              <div class="form-group" style="display:none">
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
                                    <input type="text" class="input-sm form-control jqdate" name="find7" id="find7"
                                      value="" />
                                    <span class="input-group-addon">
                                      <i class="fa fa-exchange"></i>
                                    </span>
                                    <input type="text" class="input-sm form-control jqdate" name="find8" id="find8"
                                      value="" />
                                  </div>
                                </div>
                              </div>
                              <div class="text-center">
                                <a href="Rake_index_0.php" class="btn btn-yellow btn-sm">
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
                  <li class=" active">
                    <a href="Rake_index_0.php">
                      等待处理
                    </a>
                  </li>
                  <li class="">
                    <a href="Rake_index_1.php">
                      处理完毕
                    </a>
                  </li>
                  <li class="">
                    <a href="Rake_index_2.php">
                      拒绝发放
                    </a>
                  </li>
                </ul>
                <div class="tab-content">
                  <div id="home" class="tab-pane fade in active">
                    <div class="row">
                      <div class="col-xs-12 col-sm-5">
                        <div class="form-group">
                          <div class="btn-group">
                            <button type="button" class="btn  btn-info" onClick="AllChange(1)">一键发放</button>
                            <button type="button" class="btn  btn-danger" onClick="AllChange(2)">一键拒绝</button>
                          </div>
                        </div>
                      </div>
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
                          <th>日期</th>
                          <th>会员</th>
                          <th>点数</th>
                          <th>处理情况</th>
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                    <div class="text-center">总共有：0笔</div>
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
