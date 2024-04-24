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
              <a href="javascript:void(0)">VA报表查找</a>
            </li>
            <li>
              <a href="Report_rtg.php">VA报表查找</a>
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
        $('#toDay').click(function(){	//本日
            $('#find7').val($(this).attr('data-d1') + ' 00:00:00');
            $('#find8').val($(this).attr('data-d2') + ' 23:59:59');
        });

        $('#yeDay').click(function(){	//昨日
            $('#find7').val($(this).attr('data-d1') + ' 00:00:00');
            $('#find8').val($(this).attr('data-d2') + ' 23:59:59');
        });

        $('#toWeek').click(function(){	//本周
            $('#find7').val($(this).attr('data-d1') + ' 00:00:00');
            $('#find8').val($(this).attr('data-d2') + ' 23:59:59');
        });

        $('#yeWeek').click(function(){	//本周
            $('#find7').val($(this).attr('data-d1') + ' 00:00:00');
            $('#find8').val($(this).attr('data-d2') + ' 23:59:59');
        });
        $('#toMonth').click(function(){	//本月
            $('#find7').val($(this).attr('data-d1') + ' 00:00:00');
            $('#find8').val($(this).attr('data-d2') + ' 23:59:59');
        });
        $('#ymMonth').click(function(){	//上月
            $('#find7').val($(this).attr('data-d1') + ' 00:00:00');
            $('#find8').val($(this).attr('data-d2') + ' 23:59:59');
        });

        $('#auto_report').click(function(){

            if($('#find7').val()==''){
                modalMsg('请设置手动补帐日期');
                //$('#find7').focus();
                return false;
            }
            if($('#find8').val()==''){
                modalMsg('请设置手动补帐日期');
                //$('#find8').focus();
                return false;
            }
            if ($('#find7').val()!="" && $('#find8').val()!=""){
                if ( Date.parse($('#find8').val()) < Date.parse($('#find7').val())){
                    modalMsg("起迄日期错误！");
                    //$('#find7').focus();
                    return false;
                }
            }
            //86400000 1天的时间
            if(Date.parse($('#find8').val()) - Date.parse($('#find7').val()) > 86400001){
                modalMsg("补帐日期区间不得大于一天！");
                //$('#find8').focus();
                return false;
            }


            $.blockUI({ message: '<img src="//game99.demonsupervisor.com/images/www/images/009.gif" ><br><span class="purple">补帐中请稍候‧‧‧</span>',baseZ: 2000});
            $.ajax({
                type: "POST",
                url: CI_URL + "report/rtg_report/auto_report",
                cache: false,
                dataType:"json",
                data: { 'sTime' : $('#find7').val(),'eTime' : $('#find8').val() }
            }).done(function( htmlData ) {
                $.unblockUI();
                if(htmlData.RntCode=='Y'){
                    modalMsg(htmlData.Msg,location.href);
                    //location.href=location.href;
                }else{
                    alert(htmlData.Msg);
                }
            });

        });


    });
</script>
              <!-- PAGE CONTENT BEGINS -->
              <div class="row">
                <form method="get" action="">
                  <div class="col-xs-12 col-sm-5">
                    <div class="form-group">
                      <div class="input-daterange  input-group">
                        <input type="text" class="input-sm form-control jqdatetime" name="find7" id="find7" value=""
                          placeholder="开始日期" />
                        <span class="input-group-addon">
                          <i class="fa fa-exchange"></i>
                        </span>
                        <input type="text" class="input-sm form-control jqdatetime" name="find8" id="find8" value=""
                          placeholder="结束日期" />
                        <span class="input-group-addon">帐号</span>
                        <input type="text" class="input-sm form-control" name="find9" id="find9" value=""
                          placeholder="帐号(搭配日期)" />
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-5">
                    <div class="form-group">
                      <div class="btn-group">
                        <button type="sbumit" class="btn btn-white btn-sm btn-primary">搜寻</button>
                        <button type="sbumit" class="btn btn-white btn-sm btn-primary" id="toDay" data-d1="2024-01-22"
                          data-d2="2024-01-22">本日</button>
                        <button type="sbumit" class="btn btn-white btn-sm btn-primary" id="yeDay" data-d1="2024-01-21"
                          data-d2="2024-01-21">昨日</button>
                        <button type="sbumit" class="btn btn-white btn-sm btn-primary" id="toWeek" data-d1="2024-01-22"
                          data-d2="2024-01-28">本周</button>
                        <button type="sbumit" class="btn btn-white btn-sm btn-primary" id="yeWeek" data-d1="2024-01-15"
                          data-d2="2024-01-21">上周</button>
                        <button type="sbumit" class="btn btn-white btn-sm btn-primary" id="toMonth" data-d1="2024-01-01"
                          data-d2="2024-01-31">本月</button>
                        <button type="sbumit" class="btn btn-white btn-sm btn-primary" id="ymMonth" data-d1="2023-12-01"
                          data-d2="2023-12-31">上月</button>
                        <button type="button" class="btn btn-white btn-sm btn-pink" id="auto_report">手动补帐</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="page-header">
                <a class="btn btn-danger" href="Report_rtg.php">回上层</a>
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
                    <th class="text-center">身分</th>
                    <th class="text-center">帐号</th>
                    <th class="text-center">投注</th>
                    <th class="text-center">洗码</th>
                    <th class="text-center">输赢</th>
                    <th class="text-center">分润</th>
                  </tr>
                </thead>
                <tbody>
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
