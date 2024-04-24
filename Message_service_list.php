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
              <a href="javascript:void(0)">客服消息查找</a>
            </li>
            <li>
              <a href="Message_service_list.php">客服消息查找</a>
            </li>
          </ul><!-- /.breadcrumb -->
        </div>
        <div class="page-content">
          <?php include "include/in_menu_set.php"?>
          <div class="row">
            <div class="col-xs-12">
              <!-- 主要内容 开始 -->
              <!--UI、日期组件-->
              <script type="text/javascript" src="https://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>

              <!--end-->
              <div class="col-sm-12">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist" style="display:none">
                  <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                      data-toggle="tab">内容</a></li>
                  <li role="presentation"><a href="#search" aria-controls="search" role="tab" data-toggle="tab">条件搜寻</a>
                  </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane" id="search"><br>
                    <form class="form-horizontal" method="post" action="#">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">订单编号</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="find1" name="find1" value="" placeholder="订单编号">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">收款情况</label>
                        <div class="col-sm-8">
                          <select class="form-control selectpicker" name="find2" id="find2" data-live-search="true">
                            <option value="">请选择</option>
                            <div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">
                              <h4>A PHP Error was encountered</h4>
                              <p>Severity: Warning</p>
                              <p>Message: Undefined variable $orderKeyin2</p>
                              <p>Filename: message/service_list.php</p>
                              <p>Line Number: 35</p>
                              <p>Backtrace:</p>
                              <p style="margin-left:10px">
                                File:
                                /home/wwwroot/07_demo/git_mmbet99/application/views/admin/message/service_list.php<br />
                                Line: 35<br />
                                Function: _error_handler </p>
                              <p style="margin-left:10px">
                                File:
                                /home/wwwroot/07_demo/git_mmbet99/application/controllers/D3oadp5j/Message.php<br />
                                Line: 218<br />
                                Function: view </p>
                              <p style="margin-left:10px">
                                File: /home/wwwroot/07_demo/git_mmbet99/index.php<br />
                                Line: 315<br />
                                Function: require_once </p>
                            </div>非正規陣列資料
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">缴费方式</label>
                        <div class="col-sm-8">
                          <select class="form-control selectpicker" name="find3" id="find3" data-live-search="true">
                            <option value="">请选择</option>
                            <div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">
                              <h4>A PHP Error was encountered</h4>
                              <p>Severity: Warning</p>
                              <p>Message: Undefined variable $paymentType</p>
                              <p>Filename: message/service_list.php</p>
                              <p>Line Number: 47</p>
                              <p>Backtrace:</p>
                              <p style="margin-left:10px">
                                File:
                                /home/wwwroot/07_demo/git_mmbet99/application/views/admin/message/service_list.php<br />
                                Line: 47<br />
                                Function: _error_handler </p>
                              <p style="margin-left:10px">
                                File:
                                /home/wwwroot/07_demo/git_mmbet99/application/controllers/D3oadp5j/Message.php<br />
                                Line: 218<br />
                                Function: view </p>
                              <p style="margin-left:10px">
                                File: /home/wwwroot/07_demo/git_mmbet99/index.php<br />
                                Line: 315<br />
                                Function: require_once </p>
                            </div>非正規陣列資料
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">会员帐号</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="find4" name="find4" value="" placeholder="会员帐号">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">日期区间</label>
                        <div class="col-sm-8">
                          <input class="form-control jqdate" name="find8" type="text" value="" placeholder="开始日期"
                            style="float:left; margin-right:30px;" />
                          <input class="form-control jqdate" name="find9" type="text" value="" placeholder="结束日期"
                            style="float:left;" />
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                          <a class='btn btn-default' href='/index.php/D3oadp5j/Message/service_list.php'>查找全部数据</a>
                          <button type="submit" class="btn btn-primary">依上列条件搜寻</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div role="tabpanel" class="tab-pane active" id="home"><br>
                    <!-- 表格 无搜寻功能 开始-->
                    <table class="table table-striped table-bordered bootstrap-datatable responsive" width="100%">
                      <thead>
                        <tr>
                          <!-- 表格 标题名称 开始 -->
                          <th width="9%">消息类型</th>
                          <th width="15%">会员帐号</th>
                          <th width="24%">标题</th>
                          <th width="9%">已读取</th>
                          <th width="13%">创建时间</th>
                          <th width="15%">更新时间</th>
                          <th width="15%">经手人</th>
                          <!-- 表格 标题名称 结束 -->
                        </tr>
                      </thead>
                      <tbody>
                        <!-- 表格 内容 开始-->
                        <tr>
                          <td>客服</td>
                          <td>
                            <div class="text-success">sdsm666</div>
                            <div class="text-danger">sdsm666</div>
                          </td>
                          <td>today is monday, i dont want work</td>
                          <td>
                            <div class="text-success">
                              是 </div>
                          </td>
                          <td>2022-05-09 10:54:59</td>
                          <td>2022-05-10 14:16:32</td>
                          <td>
                            666vip<br>(網站管理者) </td>
                        </tr>
                        <tr>
                          <td>活動</td>
                          <td>
                            <div class="text-success">a123456</div>
                            <div class="text-danger">123</div>
                          </td>
                          <td>
                            測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試
                          </td>
                          <td>
                            <div class="text-success">
                              是 </div>
                          </td>
                          <td>2022-05-09 10:51:26</td>
                          <td>2022-05-13 10:27:26</td>
                          <td>
                            666vip<br>(網站管理者) </td>
                        </tr>
                        <tr>
                          <td>公告</td>
                          <td>
                            <div class="text-success">kc666</div>
                            <div class="text-danger">meteor</div>
                          </td>
                          <td>我來測試問題123456</td>
                          <td>
                            <div class="text-success">
                              是 </div>
                          </td>
                          <td>2022-04-21 16:29:32</td>
                          <td>2022-05-12 17:21:37</td>
                          <td>
                            suffixbig<br>(工程師) </td>
                        </tr>
                        <tr>
                          <td>活動</td>
                          <td>
                            <div class="text-success">a123456</div>
                            <div class="text-danger">123</div>
                          </td>
                          <td>111</td>
                          <td>
                            <div class="text-success">
                              是 </div>
                          </td>
                          <td>2022-04-12 12:04:33</td>
                          <td>2022-05-13 10:27:26</td>
                          <td>
                            666vip<br>(網站管理者) </td>
                        </tr>
                        <tr>
                          <td>活動</td>
                          <td>
                            <div class="text-success">sdsm666</div>
                            <div class="text-danger">sdsm666</div>
                          </td>
                          <td>
                            測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試測試
                          </td>
                          <td>
                            <div class="text-success">
                              是 </div>
                          </td>
                          <td>2022-03-17 16:46:28</td>
                          <td>2022-05-10 14:16:32</td>
                          <td>
                            666vip<br>(網站管理者) </td>
                        </tr>
                        <tr>
                          <td>客服</td>
                          <td>
                            <div class="text-success">sdsm666</div>
                            <div class="text-danger">sdsm666</div>
                          </td>
                          <td>
                            1111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111
                          </td>
                          <td>
                            <div class="text-success">
                              是 </div>
                          </td>
                          <td>2022-03-17 16:12:18</td>
                          <td>2022-05-10 14:16:32</td>
                          <td>
                            666vip<br>(網站管理者) </td>
                        </tr>
                        <tr>
                          <td>客服</td>
                          <td>
                            <div class="text-success">sdsm666</div>
                            <div class="text-danger">sdsm666</div>
                          </td>
                          <td>
                            lujmkco;j,ko;cl;fgsrcf.;palsirp;vfui,oufgjvisjgkljs;dlkjgflidshgoiuhwgoi;hrj;ghjlks;gjl;jghjrelk;hgj
                          </td>
                          <td>
                            <div class="text-success">
                              是 </div>
                          </td>
                          <td>2022-03-17 16:11:18</td>
                          <td>2022-05-10 14:16:32</td>
                          <td>
                            666vip<br>(網站管理者) </td>
                        </tr>
                        <tr>
                          <td>公告</td>
                          <td>
                            <div class="text-success">sdsm666</div>
                            <div class="text-danger">sdsm666</div>
                          </td>
                          <td>62</td>
                          <td>
                            <div class="text-success">
                              是 </div>
                          </td>
                          <td>2022-03-17 11:15:04</td>
                          <td>2022-05-10 14:16:32</td>
                          <td>
                            666vip<br>(網站管理者) </td>
                        </tr>
                        <tr>
                          <td>活動</td>
                          <td>
                            <div class="text-success">sdsm666</div>
                            <div class="text-danger">sdsm666</div>
                          </td>
                          <td>232</td>
                          <td>
                            <div class="text-success">
                              是 </div>
                          </td>
                          <td>2022-03-17 11:13:51</td>
                          <td>2022-05-10 14:16:32</td>
                          <td>
                            666vip<br>(網站管理者) </td>
                        </tr>
                        <tr>
                          <td>公告</td>
                          <td>
                            <div class="text-success">sdsm666</div>
                            <div class="text-danger">sdsm666</div>
                          </td>
                          <td>1</td>
                          <td>
                            <div class="text-success">
                              是 </div>
                          </td>
                          <td>2022-03-15 11:54:21</td>
                          <td>2022-05-10 14:16:32</td>
                          <td>
                            666vip<br>(網站管理者) </td>
                        </tr>
                        <!-- 表格 内容 结束-->
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
