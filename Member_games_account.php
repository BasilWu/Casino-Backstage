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
              <a href="javascript:void(0)">查看游戏帐号</a>
            </li>
            <li>
              <a href="Member_games_account.php">查看游戏帐号</a>
            </li>
          </ul><!-- /.breadcrumb -->
        </div>
        <div class="page-content">
          <?php include "include/in_menu_set.php"?>
          <div class="row">
            <div class="col-xs-12">
              <!-- 主要内容 开始 -->
              <script type="text/JavaScript">
                var pass_reg=/^(?!([^a-zA-Z]+|\D+)$)[a-zA-Z0-9]{6,13}$/;	//6~13英文数字混合
	$(function(){

		var balance_length=$('.balance_span').length;

		for(i=0;i < balance_length;i++){
			var mekers_num=$('.balance_span').eq(i).attr('data-makersnum');
			var mem_num=$('.balance_span').eq(i).attr('data-memnum');
			ajax_balance(mem_num,mekers_num);
		}


		//

		jQuery.validator.addMethod("PasswordFormat", function( value, element ) {
		  var str = value;
		  var result = false;
		  return (pass_reg.test(value));
		}, '密码请输入6~13码英文数字混合');
	   $('#u_password').addClass('PasswordFormat');

		$('.refresh-btn').click(function(){
			var balanceSpan=$(this).parent().find('.balance_span');
			var mekers_num=$(balanceSpan).attr('data-makersnum');
			var mem_num=$(balanceSpan).attr('data-memnum');
			ajax_balance(mem_num,mekers_num);
		});

		$('.show_modal').click(function(){
			$('#alrtMsg').hide();
			$(".DelVal").prop('value','');
			$('#num').attr('value',$(this).attr('data-num'));
			$('#show_makers').html($(this).attr('data-makers'));
			$('#show_id').html($(this).attr('data-id'));
			$('#member_sms').modal({ keyboard: false ,backdrop: 'static'});
			$('#member_sms').modal('show');
		});


		$('#member_sms').on('hidden.bs.modal', function (e) {	//关闭窗口促发事件
			location.href=location.href;
			//console.log('modal closed');
		});

		$('#smsBTN').click(function(){
			if($('#pointsForm').valid()){
				$.blockUI({ message: '<img src="//game99.demonsupervisor.com/images/admin/images/loadingbar/009.gif" >',baseZ: 2000});
				$.ajax({
					type: "POST",
					url: CI_URL + "D3oadp5j/Member/ajaxGameAccount",
					cache:false,
					async:false,
					dataType:"json",
					data:{
						num : $('#num').val(),
						u_password : $('#u_password').val(),
						u_password2 : $('#u_password2').val()
					}
				}).done(function( htmlData ) {
					$.unblockUI();
					$('#alrtTitle').text(htmlData.title);
					$('#alertBody').text(htmlData.Msg);
					if(htmlData.RntCode==1){
						$('#alrtMsg').removeClass('alert-danger').addClass('alert-success');
						$(".DelVal").prop('value','');
					}else{
						$('#alrtMsg').removeClass('alert-success').addClass('alert-danger');
					}
					$('#alrtMsg').show();
				});
			}
		});




	});

	function ajax_balance(mem_num,makersnum){
		var balanceSpan=$('[data-makersnum=' + makersnum + ']');
		var icon=$(balanceSpan).parent().find('.fa-refresh');
		$(icon).addClass('fa-spin');
		balanceSpan.html('<i class="ace-icon fa fa-spinner fa-spin red"></i>');
		$.ajax({
			type: "POST",
			url:  CI_URL + "D3oadp5j/Member/ajax_balance",
			cache: false,
			dataType:"json",
			data:{'mem_num':mem_num,'makersnum':makersnum}
		}).done(function( msg ) {
			$(icon).removeClass('fa-spin');
			$(balanceSpan).html(msg.balance);
		});
	}

	function refreshall(){
		$('.refresh-btn').click();
	}
</script>
              <div class="page-header">
                <h4 class="inline text-danger">meteor【kc666】</h4>
                <a href="javascript:refreshall()" class="btn btn-primary btn-sm">一键查找游戏点数</a>
                <a href="Member_index.php" class="btn btn-info btn-sm">返回会员</a>
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
                    <th class="text-center">游戏厂商</th>
                    <th class="text-center">游戏余额</th>
                    <th class="text-center">游戏帐号</th>
                    <th class="text-center">游戏密码</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">9KG</td>
                    <td class="text-center">
                      <div style="width:85px;" class="text-success balance_span inline" data-makersnum="1"
                        data-memnum="1"></div>
                      <button class="refresh-btn btn btn-xs btn-white btn-primary" data-rel="tooltip" title="更新余额"><i
                          class="ace-icon fa fa-refresh"></i></button>
                    </td>
                    <td class="text-center">kc666</td>
                    <td class="text-center">
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">VA</td>
                    <td class="text-center">
                      <div style="width:85px;" class="text-success balance_span inline" data-makersnum="2"
                        data-memnum="1"></div>
                      <button class="refresh-btn btn btn-xs btn-white btn-primary" data-rel="tooltip" title="更新余额"><i
                          class="ace-icon fa fa-refresh"></i></button>
                    </td>
                    <td class="text-center">kc666</td>
                    <td class="text-center">
                    </td>
                  </tr>
                </tbody>
              </table>
              <?php include "include/in_pagebar.php"?>
              <!--修改窗口 -->
              <div class="modal fade  in" tabindex="-1" role="dialog" id="member_sms">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <!--<button type="button" class="bootbox-close-button close" data-dismiss="modal" aria-hidden="true">×</button>-->
                      <h4 class='smaller'>修改游戏密码</h4>
                    </div>
                    <div class="modal-body">
                      <div class="alert alert-danger fade in" id="alrtMsg" style="display:none;">
                        <strong id="alrtTitle">请求失败！</strong>&nbsp;&nbsp;<span id="alertBody">XXXX</span>
                      </div>
                      <form class="form-horizontal newoil-form" id="pointsForm" method="post">
                        <input type="hidden" name="num" id="num" />
                        <div class="form-group">
                          <label for="inputWarning" class="col-xs-12 col-sm-2 control-label">游戏厂商</label>
                          <div class="col-xs-12 col-sm-10">
                            <p class="form-control-static" id="show_makers"></p>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputWarning" class="col-xs-12 col-sm-2 control-label">游戏帐号</label>
                          <div class="col-xs-12 col-sm-10">
                            <p class="form-control-static" id="show_id"></p>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputWarning" class="col-xs-12 col-sm-2 control-label">游戏密码</label>
                          <div class="col-xs-12 col-sm-10">
                            <input name="u_password" id="u_password" type="password" class="form-control DelVal"
                              placeholder="游戏密码" required />
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputWarning" class="col-xs-12 col-sm-2 control-label">确认密码</label>
                          <div class="col-xs-12 col-sm-10">
                            <input name="u_password2" id="u_password2" type="password" equalTo="#u_password"
                              class="form-control DelVal" placeholder="确认密码" required />
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
              <!--修改窗口 -->
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
