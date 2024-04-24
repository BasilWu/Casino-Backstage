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
              <a href="javascript:void(0)">会员钱包管理</a>
            </li>
            <li>
              <a href="Member_wallet_list.php">会员钱包管理</a>
            </li>
          </ul><!-- /.breadcrumb -->
        </div>
        <div class="page-content">
          <?php include "include/in_menu_set.php"?>
          <div class="row">
            <div class="col-xs-12">
              <!-- 主要内容 开始 -->
              <script type="text/JavaScript">
                $(function(){
		$('#smsBTN').click(function(){
			if($('#pointsForm').valid()){
				$.blockUI({ message: '<img src="//game99.demonsupervisor.com/images/admin/images/loadingbar/009.gif" >',baseZ: 2000});
				$.ajax({
					type: "POST",
					url: CI_URL + "D3oadp5j/Member/ajaxWallet",
					cache: false,
					async:false,
					dataType:"json",
					data: {
							point_type : $('#point_type').val(),
							mem_num : $('#mem_num').val(),
							kind : $('#kind').val(),
							points : $('#points').val(),
							word : $('#word').val(),
							token: 'fcaf264e2df2a7d63ba6c7f5767bc7a4',
							ttt: $('select[name="kind"] :selected').attr('kind1'),//取得当前由"管理者输入"多少点
							tty: $('select[name="kind"] :selected').attr('kind1_point'),//取得"管理者输入"缺省点数
							ttp: $('select[name="kind"] :selected').attr('active'),//取得是否启动
						  }
				}).done(function( htmlData ) {
					$.unblockUI();
					$('#alrtTitle').text(htmlData.title);
					$('#alertBody').text(htmlData.Msg)
					if(htmlData.RntCode==1){
						$('#alrtMsg').removeClass('alert-danger').addClass('alert-success');
						$(".DelVal").prop('value','');
					}else{
						$('#alrtMsg').removeClass('alert-success').addClass('alert-danger');
					}
					$('#show_blance').html(htmlData.blance);
					$('#alrtMsg').show();
					//$('.selectpicker').selectpicker('refresh');//重新特效抓取
				});
			}
		});

		$('#member_sms').on('hidden.bs.modal', function (e) {	//关闭窗口促发事件
			location.href=location.href;
			//console.log('modal closed');
		});

		$('#show_modal').click(function(){
			$('#alrtMsg').hide();
			$(".DelVal").prop('value','');
			$('#member_sms').modal({ keyboard: false ,backdrop: 'static'});
			$('#member_sms').modal('show');
		});

	});

	function AjaxKind(){
		$.ajax({
			type: "POST",
			url: CI_URL + "D3oadp5j/Member/ajaxWalletKind",
			cache: false,
			data: {
					point_type: $('#point_type').val(),
					mem_num:1,
				  }
		}).done(function( htmlData ) {
			$('#kind').html(htmlData);
			//$('.selectpicker').selectpicker('refresh');//重新特效抓取
		});
	}

</script>
              <!-- PAGE CONTENT BEGINS -->
              <div class="page-header">
                <form class="form-horizontal" method="post"
                  action="Member_wallet_list.php">
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
                                  class="col-xs-12 col-sm-3 control-label no-padding-right">类型</label>
                                <div class="col-xs-12 col-sm-5">
                                  <select class="form-control select2" name="sfind1" id="sfind1" data-placeholder="请选择">
                                    <option value="">请选择</option>
                                    <option value="21">違規下分</option>
                                    <option value="20">手動下分</option>
                                    <option value="19">手動上分</option>
                                    <option value="16">二次續儲</option>
                                    <option value="1">管理者轉入</option>
                                    <option value="2">管理者轉出</option>
                                    <option value="3">轉入遊戲</option>
                                    <option value="4">遊戲轉出</option>
                                    <option value="5">會員儲值</option>
                                    <option value="6">會員首儲</option>
                                    <option value="7">優惠活動</option>
                                    <option value="8">會員註冊送</option>
                                    <option value="9">會員提領</option>
                                    <option value="10">取消提領</option>
                                    <option value="11">取消轉移</option>
                                    <option value="12">銀行匯款</option>
                                    <option value="13">推薦人優惠</option>
                                    <option value="14">其他轉出</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputWarning"
                                  class="col-xs-12 col-sm-3 control-label no-padding-right">代理</label>
                                <div class="col-xs-12 col-sm-5">
                                  <select class="form-control select2" name="sfind3" id="find3" data-placeholder="请选择">
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
                                <label for="inputWarning"
                                  class="col-xs-12 col-sm-3 control-label no-padding-right">帐号</label>
                                <div class="col-xs-12 col-sm-5">
                                  <input type="text" class="form-control" id="sfind2" name="sfind2" value=""
                                    placeholder="帐号" />
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputWarning"
                                  class="col-xs-12 col-sm-3 control-label no-padding-right">发放日期</label>
                                <div class="col-xs-12 col-sm-5">
                                  <div class="input-daterange  input-group">
                                    <input type="text" class="input-sm form-control jqdate" name="sfind7" id="sfind7"
                                      value="" />
                                    <span class="input-group-addon">
                                      <i class="fa fa-exchange"></i>
                                    </span>
                                    <input type="text" class="input-sm form-control jqdate" name="sfind8" id="sfind8"
                                      value="" />
                                  </div>
                                </div>
                              </div>
                              <div class="text-center">
                                <a href="Member/wallet_list_1.php"
                                  class="btn btn-yellow btn-sm">
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
              <div class="row">
                <div class="col-xs-12 col-sm-5">
                  <div class="form-group">
                    <div class="btn-group">
                      <button type="button" class="btn  btn-lg btn-info"
                        onClick="location.href='Member_index.php?'">返回会员</button>
                      <button type="button" class="btn  btn-lg btn-danger" id="show_modal">点数管理</button>
                    </div>
                  </div>
                  <h4 class="inline text-danger">
                    meteor【kc666】
                    ，钱包总点数【99999】点
                  </h4>
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
                    <th>会员</th>
                    <th>类型</th>
                    <th>转入/转出</th>
                    <th>备注</th>
                    <th>异动管理者 / 日期</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      vip666one <div class="text-danger">Company main station agent line</div>
                    </td>
                    <td>
                      kc666 <div class="text-danger">meteor</div>
                    </td>
                    <td>
                      <div>手動上分</div>
                    </td>
                    <td>
                      <div class="text-success">99,999</div>
                      <div class="pink">异动前：0.00</div>
                      <div class="purple">异动後：99,999.00</div>
                    </td>
                    <td>
                      - </td>
                    <td>
                      <div class="text-info">
                        [666vip] </div>
                      <div class="text-danger">
                        2023-02-06 16:12:22 </div>
                    </td>
                  </tr>
                </tbody>
              </table>
              <?php include "include/in_pagebar.php"?>
              <!--会员消息 -->
              <div class="modal fade  in" tabindex="-1" role="dialog" id="member_sms">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <!--<button type="button" class="bootbox-close-button close" data-dismiss="modal" aria-hidden="true">×</button>-->
                      <h4 class='smaller'><i class='ace-icon fa fa-credit-card red'></i> 点数管理</h4>
                    </div>
                    <div class="modal-body">
                      <div class="alert alert-danger fade in" id="alrtMsg" style="display:none;">
                        <strong id="alrtTitle">请求失败！</strong>&nbsp;&nbsp;<span id="alertBody">XXXX</span>
                      </div>
                      <form class="form-horizontal newoil-form" id="pointsForm" method="post">
                        <input type="hidden" name="mem_num" id="mem_num" value="1" />
                        <div class="form-group">
                          <label for="inputWarning" class="col-xs-12 col-sm-2 control-label">会员</label>
                          <div class="col-xs-12 col-sm-10">
                            <p class="form-control-static" id="show_id">kc666</p>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputWarning" class="col-xs-12 col-sm-2 control-label">点数</label>
                          <div class="col-xs-12 col-sm-10">
                            <p class="form-control-static" id="show_blance">99999</p>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputWarning" class="col-xs-12 col-sm-2 control-label">动作</label>
                          <div class="col-xs-12 col-sm-10">
                            <select class="form-control DelVal" name="point_type" id="point_type" data-placeholder="请选择"
                              onchange="AjaxKind()" required>
                              <option value="">请选择</option>
                              <option value="1">放点</option>
                              <option value="2">扣点</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputWarning" class="col-xs-12 col-sm-2 control-label">类型</label>
                          <div class="col-xs-12 col-sm-10">
                            <select class="form-control DelVal" name="kind" id="kind" data-placeholder="请选择" required>
                              <option value="">请选择</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputWarning" class="col-xs-12 col-sm-2 control-label">点数</label>
                          <div class="col-xs-12 col-sm-10">
                            <input name="points" id="points" class="form-control DelVal number" placeholder="点数"
                              required />
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputWarning" class="col-xs-12 col-sm-2 control-label">事由</label>
                          <div class="col-xs-12 col-sm-10">
                            <textarea id="word" name="word" class="form-control limited autosize-transition DelVal"
                              maxlength="70" placeholder="内容"></textarea>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer center">
                      <button type="button" id="smsBTN" class="btn btn-lg btn-white btn-pink btn-round"><i
                          class="ace-icon fa fa-check bigger-110"></i>&nbsp;送出</button>
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
