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
                            <a href="javascript:void(0)">会员数据查找</a>
                        </li>
                        <li>
                            <a href="Member_index.php">会员数据查找</a>
                        </li>
                    </ul><!-- /.breadcrumb -->
                </div>
                <div class="page-content">
                    <?php include "include/in_menu_set.php"?>
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- PAGE CONTENT BEGINS -->
                            <style type="text/css">
                            tr.border_bottom {
                                /*border: 2px solid #FEE188;*/
                                box-shadow: inset 0 0 5px red;
                            }
                            .mobile-submenu .btn {
                                color: black !important;
                                background: white !important;
                            }
                            </style>
<script type="text/JavaScript">
    $(function(){
        $('.activeSwitch').click(function(){
            $.ajax({
                type: "POST",
                url: "Member_keyChange.php",
                cache: false,
                data: { num: $(this).val(), value: ($(this).prop('checked') ? 'Y' : 'N') }
            });
        });

        $('#smsBTN').click(function(){
            $.blockUI({ message: '<img src="//game99.demonsupervisor.com/images/admin/images/loadingbar/009.gif" >', baseZ: 2000});
            $.ajax({
                type: "POST",
                url: CI_URL + "D3oadp5j/Member/member_sms",
                cache: false,
                async: false,
                dataType: "json",
                data: {
                    mem_num : $('#mem_num').val(),
                    sms_type : $('#sms_type').val(),
                    subject : $('#subject').val(),
                    sms_body : $('#sms_body').val(),
                }
            }).done(function(htmlData) {
                $.unblockUI();
                $('#alrtTitle').text(htmlData.title);
                $('#alertBody').text(htmlData.Msg);
                if(htmlData.RntCode == 1){
                    $('#alrtMsg').removeClass('alert-danger').addClass('alert-success');
                    $(".DelVal").prop('value', '');
                }else{
                    $('#alrtMsg').removeClass('alert-success').addClass('alert-danger');
                }
                $('#alrtMsg').show();
                // $('.selectpicker').selectpicker('refresh'); //重新特效抓取
            });
        });

        $('.show_modal').click(function(){
            $('#alrtMsg').hide();
            $(".DelVal").prop('value', '');
            $('#mem_num').attr('value', $(this).attr('data-num'));
            $('#show_id').html($(this).attr('data-name'));
            $('#member_sms').modal({ keyboard: false , backdrop: 'static' });
            $('#member_sms').modal('show');
        });
    });
</script>
<!-- PAGE CONTENT BEGINS -->
<div class="page-header">
  <form class="form-horizontal" method="post" action="#">
    <div class="row">
      <div class="col-xs-12 col-sm-12">
        <div id="accordion" class="accordion-style1 panel-group">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                  <i class="ace-icon fa fa-angle-down bigger-110" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
                  &nbsp;筛选条件
                </a>
              </h4>
            </div>
            <div class="panel-collapse collapse" id="collapseOne">
              <div class="panel-body">
                <div class="form-group">
                  <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">代理</label>
                  <div class="col-xs-12 col-sm-5">
                    <select class="form-control select2" name="find1" id="find1" data-placeholder="请选择">
                      <option value="">请选择</option>
                      <option value="5">vip666one(Company main station agent line)</option>
                      <option value="32">bet99mm(Burmese URL)</option>
                      <option value="33">bet99en(English URL)</option>
                      <option value="34">bet99ch(Simplified Chinese URL)</option>
                      <option value="37">test03(代理)</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">帐号</label>
                  <div class="col-xs-12 col-sm-5">
                    <input type="text" class="form-control" id="find2" name="find2" value="mm6789" placeholder="帐号" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">姓名</label>
                  <div class="col-xs-12 col-sm-5">
                    <input type="text" class="form-control" id="find3" name="find3" value="" placeholder="姓名" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">IP</label>
                  <div class="col-xs-12 col-sm-5">
                    <input type="text" class="form-control" id="find4" name="find4" value="" placeholder="IP" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">电话</label>
                  <div class="col-xs-12 col-sm-5">
                    <input type="text" class="form-control" id="find5" name="find5" value="" placeholder="电话" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">状态</label>
                  <div class="col-xs-12 col-sm-5">
                    <select class="form-control select2" name="find6" id="find6" data-placeholder="请选择">
                      <option value="">请选择</option>
                      <option value="Y">激活</option>
                      <option value="N">停权</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">登录日期</label>
                  <div class="col-xs-12 col-sm-5">
                    <div class="input-daterange  input-group">
                      <input type="text" class="input-sm form-control jqdatetime" name="find7" id="find7" value="" />
                      <span class="input-group-addon">
                        <i class="fa fa-exchange"></i>
                      </span>
                      <input type="text" class="input-sm form-control jqdatetime" name="find8" id="find8" value="" />
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">注册日期</label>
                  <div class="col-xs-12 col-sm-5">
                    <div class="input-daterange  input-group">
                      <input type="text" class="input-sm form-control jqdatetime" name="find9" id="find9" value="" />
                      <span class="input-group-addon">
                        <i class="fa fa-exchange"></i>
                      </span>
                      <input type="text" class="input-sm form-control jqdatetime" name="find10" id="find10" value="" />
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">储值状态</label>
                  <div class="col-xs-12 col-sm-5">
                    <select class="form-control select2" name="find11" id="find11" data-placeholder="请选择">
                      <option value="">请选择</option>
                      <option value="Y">7天内有储值</option>
                      <option value="N">7天内未储值</option>
                      <option value="W">未曾储值</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">排序</label>
                  <div class="col-xs-12 col-sm-5">
                    <select class="form-control select2" name="find12" id="find12" data-placeholder="请选择">
                      <option value="admin_num">代理</option>
                      <option value="u_id">帐号</option>
                      <option value="u_name">姓名</option>
                      <option value="AllSave">储值</option>
                      <option value="AllSell">抛售</option>
                      <option value="WeekSell">周抛售次数</option>
                      <option value="reg_time">注册时间</option>
                      <option value="login_time" selected="selected">登录时间</option>
                      <option value="login_ip">登录IP</option>
                    </select>
                    <select class="form-control select2" name="find13" id="find13" data-placeholder="请选择">
                      <option value="desc" selected="selected">▼</option>
                      <option value="asc">▲</option>
                    </select>
                  </div>
                </div>
                <div class="text-center">
                  <a href="Member_index.php" class="btn btn-yellow btn-sm">
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
  <div class="widget-box widget-color-green">
  <div class="widget-body">
    <div class="widget-main padding-8">
      <ul class="list-unstyled spaced">
        <li><i class="ace-icon fa fa-search bigger-110 red"></i>帐号=【mm6789】</li>
      </ul>
    </div>
  </div>
</div>
</div>
<table id="simple-table" class="table table-bordered table-hover table-responsive">
  <thead>
    <tr>
      <th>代理</th>
      <th>帐号</th>
      <th class="hidden-480">姓名</th>
      <th>储值/抛售</th>
      <th class="hidden-480">周抛售次数</th>
      <th class="hidden-480">登录/注册时间</th>
      <th class="hidden-480">登录IP</th>
      <th>状态</th>
      <th>管理</th>
    </tr>
  </thead>
  <tbody>
    <!-- 从数据库获取数据并在此处循环显示 -->
    <!-- 假设已经从数据库获取到了数据并存储在 $users 变量中 -->
    <?php
    // 假设 $users 是从数据库获取的数据数组
    foreach ($users as $user) {
        echo "<tr>";
        echo "<td>" . $user['agent'] . "</td>";
        echo "<td>" . $user['account'] . "</td>";
        echo "<td class="hidden-480">" . $user['name'] . "</td>";
        echo "<td>" . $user['deposit'] . "/" . $user['withdrawal'] . "</td>";
        echo "<td class="hidden-480">" . $user['weekly_withdrawal_count'] . "</td>";
        echo "<td class="hidden-480">" . $user['login_time'] . "/" . $user['register_time'] . "</td>";
        echo "<td class="hidden-480">" . $user['login_ip'] . "</td>";
        echo "<td>";
        echo "<label>";
        echo "<input name="switch-field-1" class="ace ace-switch activeSwitch" type="checkbox" value=" . $user['id'] . "" . ($user['status'] ? ' checked' : '') . " />";
        echo "<span class="lbl"></span>";
        echo "</label>";
        echo "</td>";
        echo "<td>";
        // 管理按钮等
        echo "</td>";
        echo "</tr>";
    }
    ?>
  </tbody>
</table>
<div class="text-center">
  <a href="Member_excel.php" class="btn btn-minier btn-primary" target="_blank">汇出Excel</a>
</div>
<div class="text-center">
  查找数据共有 <span class="text-danger">1</span> 笔 <br />
</div>
<!--会员消息 -->
<div class="modal fade  in" tabindex="-1" role="dialog" id="member_sms">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class='smaller'><i class='ace-icon fa fa-envelope red'></i> 消息发送</h4>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger fade in" id="alrtMsg" style="display:none;">
          <strong id="alrtTitle">请求失败！</strong>&nbsp;&nbsp;<span id="alertBody">XXXX</span>
        </div>
        <form class="form-horizontal newoil-form" method="post">
          <input type="hidden" class="DelVal" id="mem_num" name="mem_num" />
          <div class="form-group">
            <label for="inputWarning" class="col-xs-12 col-sm-2 control-label">会员</label>
            <div class="col-xs-12 col-sm-10">
              <p class="form-control-static" id="show_id"></p>
            </div>
          </div>
          <div class="form-group">
            <label for="inputWarning" class="col-xs-12 col-sm-2 control-label">类型</label>
            <div class="col-xs-12 col-sm-10">
              <select class="form-control select2" name="sms_type" id="sms_type" data-placeholder="请选择">
                <option value="2">短信</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="inputWarning" class="col-xs-12 col-sm-2 control-label">标题</label>
            <div class="col-xs-12 col-sm-10">
              <input name="subject" id="subject" class="form-control DelVal" placeholder="标题" />
            </div>
          </div>
          <div class="form-group">
            <label for="inputWarning" class="col-xs-12 col-sm-2 control-label">内容</label>
            <div class="col-xs-12 col-sm-10">
              <textarea id="sms_body" name="sms_body" class="form-control limited autosize-transition DelVal" maxlength="70" placeholder="内容"></textarea>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer center">
        <button type="button" id="smsBTN" class="btn btn-lg btn-white btn-pink btn-round"><i class="ace-icon fa fa-check bigger-110"></i>&nbsp;送出</button>
        <button data-dismiss="modal" type="button" class=" btn-white btn-lg btn btn-default btn-round">
          <i class='ace-icon fa fa-times bigger-110'></i>&nbsp; 关闭
        </button>
      </div>
    </div>
  </div>
</div>
<!--会员消息 -->
<!-- 主要内容 结束 -->
</div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.page-content -->
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
