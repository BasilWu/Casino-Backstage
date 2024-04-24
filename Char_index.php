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
              <a href="javascript:void(0)">营运周报查找</a>
            </li>
            <li>
              <a href="Char_index.php">营运周报查找</a>
            </li>
          </ul><!-- /.breadcrumb -->
        </div>
        <div class="page-content">
          <?php include "include/in_menu_set.php"?>
          <div class="row">
            <div class="col-xs-12">
              <!-- 主要内容 开始 -->
              <script src="js/highcharts.js"></script>
              <script type="text/JavaScript">
                $(function(){

		$('#toWeek').click(function(){	//本周
			$('#find7').val($(this).attr('data-d1'));
			$('#find8').val($(this).attr('data-d2'));
		});

		$('#yeWeek').click(function(){	//本周
			$('#find7').val($(this).attr('data-d1'));
			$('#find8').val($(this).attr('data-d2'));
		});
		$('#toMonth').click(function(){	//本月
			$('#find7').val($(this).attr('data-d1'));
			$('#find8').val($(this).attr('data-d2'));
		});
		$('#ymMonth').click(function(){	//上月
			$('#find7').val($(this).attr('data-d1'));
			$('#find8').val($(this).attr('data-d2'));
		});
    });
</script>
              <div class="col-xs-12">
                <div class="row">
                  <div class="infobox-container">
                    <div class="infobox infobox-red">
                      <div class="infobox-icon"><i class="ace-icon fa fa-usd"></i></div>
                      <div class="infobox-data">
                        <span class="infobox-data-number">0</span>
                        <div class="infobox-content">储值</div>
                      </div>
                    </div>
                    <div class="infobox infobox-green">
                      <div class="infobox-icon"><i class="ace-icon fa fa-gavel"></i></div>
                      <div class="infobox-data">
                        <span class="infobox-data-number">-0</span>
                        <div class="infobox-content">抛售</div>
                      </div>
                    </div>
                    <div class="infobox infobox-orange">
                      <div class="infobox-icon"><i class="ace-icon fa fa-random"></i></div>
                      <div class="infobox-data">
                        <span class="infobox-data-number">0</span>
                        <div class="infobox-content">小计</div>
                      </div>
                    </div>
                    <div class="infobox infobox-pink">
                      <div class="infobox-icon"><i class="ace-icon fa fa-heart"></i></div>
                      <div class="infobox-data">
                        <span class="infobox-data-number">0</span>
                        <div class="infobox-content">红利</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="hr hr32 hr-dotted"></div>
                <div class="row">
                  <div class="col-sm-9">
                    <div class="widget-box transparent">
                      <div class="widget-header">
                        <h4 class="widget-title lighter smaller">
                          <i class="ace-icon fa fa-bar-chart orange2"></i>营运表
                        </h4>
                        <div class="widget-toolbar no-border">
                          <form name="charform" method="post">
                            <input type="text" class="input-sm jqdate" name="find7" id="find7" value=""
                              placeholder="开始日期" />
                            <span class="">
                              <i class="fa fa-exchange"></i>
                            </span>
                            <input type="text" class="input-sm jqdate" name="find8" id="find8" value=""
                              placeholder="结束日期" />
                            <div class="btn-group">
                              <button type="sbumit" class="btn btn-white btn-sm btn-primary">搜寻</button>
                              <button type="submit" class="btn btn-white btn-sm btn-primary" id="toWeek"
                                data-d1="2024-01-22" data-d2="2024-01-28">本周</button>
                              <button type="submit" class="btn btn-white btn-sm btn-primary" id="yeWeek"
                                data-d1="2024-01-15" data-d2="2024-01-21">上周</button>
                              <button type="submit" class="btn btn-white btn-sm btn-primary" id="toMonth"
                                data-d1="2024-01-01" data-d2="2024-01-31">本月</button>
                              <button type="submit" class="btn btn-white btn-sm btn-primary" id="ymMonth"
                                data-d1="2023-12-01" data-d2="2023-12-31">上月</button>
                            </div>
                          </form>
                        </div>
                      </div>
                      <div class="widget-body">
                        <div class="widget-main padding-4">
                          <h4 class="smaller lighter red">2024-01-22 ~ 2024-01-28</h4>
                          <div id="container"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="widget-box transparent">
                      <div class="widget-header">
                        <h4 class="widget-title lighter smaller">
                          <i class="ace-icon fa fa-signal red"></i>储值排行
                        </h4>
                      </div>
                      <div class="widget-body">
                        <div class="widget-main padding-4">
                          <div class="comments">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-9">
                    <div class="widget-box transparent">
                      <div class="widget-header">
                        <h4 class="widget-title lighter smaller">
                          <i class="ace-icon fa fa-bar-chart orange2"></i>登录
                        </h4>
                      </div>
                      <div class="widget-body">
                        <div class="widget-main padding-4">
                          <h4 class="smaller lighter red">2024-01-22 ~ 2024-01-28</h4>
                          <div id="container2"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <script type="text/javascript">
              $(function() {


                $('#container2').highcharts({

                  chart: {
                    type: 'column'
                  },
                  xAxis: {
                    categories: [
                      '2024-01-22',
                      '2024-01-23',
                      '2024-01-24',
                      '2024-01-25',
                      '2024-01-26',
                      '2024-01-27',
                      '2024-01-28',


                    ],
                    crosshair: true
                  },
                  yAxis: {
                    min: 0,
                    title: {
                      text: '人次'
                    },
                    labels: {
                      formatter: function() {
                        return Highcharts.numberFormat(this.value, 0, null, ',') + '人';
                      }
                    }
                  },
                  tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormatter: function() {
                      return '<tr><td style="color:' + this.series.color + ';padding:0">' + this.series.name +
                        ': </td>' +
                        '<td style="padding:0"><b>' + Highcharts.numberFormat(this.y, 0, null, ',') +
                        ' 人</b></td></tr>'
                    },
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                  },
                  plotOptions: {
                    column: {
                      pointPadding: 0.2,
                      borderWidth: 0
                    }
                  },
                  title: {
                    text: '本周登录/注册/储值/汇款'
                  },
                  series: [{
                    name: '登录人数',
                    data: [
                      0,
                      0,
                      0,
                      0,
                      0,
                      0,
                      0,

                    ]
                  }, {
                    name: '注册人数',
                    data: [
                      0,
                      0,
                      0,
                      0,
                      0,
                      0,
                      0,

                    ]
                  }, {
                    name: '储值人数',
                    data: [0, 0, 0, 0, 0, 0, 0]
                  }, {
                    name: '汇款人数',
                    data: [0, 0, 0, 0, 0, 0, 0]
                  }]
                });






                $('#container').highcharts({
                  chart: {
                    type: 'column'
                  },
                  title: {
                    text: '营运报表'
                  },
                  // subtitle: {
                  // text: '本周营运'
                  // },
                  xAxis: {
                    categories: [
                      '2024-01-22',
                      '2024-01-23',
                      '2024-01-24',
                      '2024-01-25',
                      '2024-01-26',
                      '2024-01-27',
                      '2024-01-28',

                    ],
                    crosshair: true
                  },
                  yAxis: {
                    min: 0,
                    title: {
                      text: '金额(NTD)'
                    },
                    labels: {
                      formatter: function() {
                        return Highcharts.numberFormat(this.value, 0, null, ',') + '元';
                      }
                    }
                  },
                  tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormatter: function() {
                      return '<tr><td style="color:' + this.series.color + ';padding:0">' + this.series.name +
                        ': </td>' +
                        '<td style="padding:0"><b>$' + Highcharts.numberFormat(this.y, 0, null, ',') +
                        ' 元</b></td></tr>'
                    },
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                  },
                  plotOptions: {
                    column: {
                      pointPadding: 0.2,
                      borderWidth: 0
                    }
                  },
                  series: [{
                    name: '储值',
                    data: [0, 0, 0, 0, 0, 0, 0],
                  }, {
                    name: '汇款',
                    data: [0, 0, 0, 0, 0, 0, 0]
                  }, {
                    name: '抛售',
                    data: [0, 0, 0, 0, 0, 0, 0]
                  }, {
                    name: '红利',
                    data: [0, 0, 0, 0, 0, 0, 0]
                  }]
                });
              });
              $('#container').load(function() {
                var chart = $('#container').highcharts();
                chart.reflow();
              })
              </script> <!-- 主要内容 结束 -->
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
