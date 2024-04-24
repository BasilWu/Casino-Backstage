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
              <a href="javascript:void(0)">总代数据管理</a>
            </li>
            <li>
              <a href="Agents_agents2_list.php">总代数据管理</a>
            </li>
          </ul><!-- /.breadcrumb -->
        </div>
        <div class="page-content">
          <?php include "include/in_menu_set.php"?>
          <div class="row">
            <div class="col-xs-12">
              <div class="alert alert-danger fade in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                  <i class="ace-icon fa fa-times"></i>
                </button>
                <strong>权限错误！</strong>很抱歉...您无权检示页面
              </div>
              <!-- 主要内容 开始 -->
              <script type="text/JavaScript">
                $(function(){
		$('.activeSwitch').click(function(){
			$.ajax({
				type: "POST",
				url: "Agents_AjaxActive.php",
				cache: false,
				data: { num: $(this).val(), active: ($(this).prop('checked') ? 'Y' : 'N') }
			});
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
                                  class="col-xs-12 col-sm-3 control-label no-padding-right">上层帐号</label>
                                <div class="col-xs-12 col-sm-5">
                                  <select class="form-control selectpicker" name="find1" id="find1">
                                    <option value="">请选择</option>
                                    <option value="3" selected>vip(Company main station line)</option>
                                    <option value="9">test1689(Demo Account)</option>
                                    <option value="35">test01(01股東)</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputWarning"
                                  class="col-xs-12 col-sm-3 control-label no-padding-right">帐号</label>
                                <div class="col-xs-12 col-sm-5">
                                  <input type="text" class="form-control" id="find2" name="find2" value=""
                                    placeholder="帐号" />
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputWarning"
                                  class="col-xs-12 col-sm-3 control-label no-padding-right">姓名</label>
                                <div class="col-xs-12 col-sm-5">
                                  <input type="text" class="form-control" id="find3" name="find3" value=""
                                    placeholder="姓名" />
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputWarning"
                                  class="col-xs-12 col-sm-3 control-label no-padding-right">状态</label>
                                <div class="col-xs-12 col-sm-5">
                                  <select class="form-control selectpicker" name="find4" id="find4">
                                    <option value="">请选择</option>
                                    <option value="Y">激活</option>
                                    <option value="N">停权</option>
                                  </select>
                                </div>
                              </div>
                              <div class="text-center">
                                <a href="Agents_agents2_list.php" class="btn btn-yellow btn-sm">
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
                        <li><i class="ace-icon fa fa-search bigger-110 red"></i>上层帐号=【vip】</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="btn-group">
                  <a href="Agents_agents2_add.php" class="btn btn-primary">添加总代</a>
                  <a href="Agents_agents3_add.php" class="btn btn-primary">添加代理</a>
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
                    <th>上层帐号</th>
                    <th>身分</th>
                    <th>帐号</th>
                    <th class="hidden-480">姓名</th>
                    <th class="hidden-480">登录时间</th>
                    <th class="hidden-480">登录IP</th>
                    <th>状态</th>
                    <th>管理</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      vip <br>
                      (Company main station line)
                    </td>
                    <td>
                      <a href='Agents_agents3_list.php'>
                        General Agent <span class="badge badge-warning" data-rel="tooltip" title="(下线4人)">4</span>
                      </a>
                    </td>
                    <td>
                      <a href="Agents_agents3_list.php">vip666</a>
                      <div class="hidden-md hidden-lg text-danger">
                        Company's General Agent </div>
                      <div class="text-success">50%</div>
                    </td>
                    <td class="hidden-480"> <a href='Agents_agents3_list.php'>
                        Company's General Agent</a></td>
                    <td class="hidden-480">2023-09-15 07:13:26</td>
                    <td class="hidden-480">118.160.108.174</td>
                    <td>
                      <label>
                        <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox" value="4"
                          checked />
                        <span class="lbl"></span>
                      </label>
                    </td>
                    <td>
                      <div class="hidden-sm hidden-xs btn-group">
                        <a href="Agents_agents2_edit.php" class="btn btn-xs btn-info" title="修改">
                          <i class="ace-icon fa fa-pencil bigger-120"></i>
                        </a>
                      </div>
                      <div class="hidden-md hidden-lg">
                        <div class="inline pos-rel">
                          <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown"
                            data-position="auto">
                            <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                          </button>
                          <ul
                            class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                            <li>
                              <a href="Agents_agents2_edit.php" class="tooltip-success" data-rel="tooltip" title="修改">
                                <span class="green">
                                  <i class="ace-icon fa fa-pencil bigger-120"></i>
                                </span>
                              </a>
                            </li>
                          </ul>
                        </div>
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
