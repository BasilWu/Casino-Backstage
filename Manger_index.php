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
              <a href="javascript:void(0)">后端帐号查找</a>
            </li>
            <li>
              <a href="Manger_index.php">后端帐号查找</a>
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
		$('.activeSwitch').click(function(){
			$.ajax({
				type: "POST",
				url: "Manger_AjaxActive.php",
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
                                  class="col-xs-12 col-sm-3 control-label no-padding-right">群组</label>
                                <div class="col-xs-12 col-sm-5">
                                  <select class="form-control selectpicker" name="find1" id="find1">
                                    <option value="">请选择</option>
                                    <option value="3">Webmaster Management</option>
                                    <option value="7">Customer support</option>
                                    <option value="8">Sub-Account Group</option>
                                    <option value="9">Auditor</option>
                                    <option value="888">CustomerServiceGroup</option>
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
                                <a href="Manger_index.php"
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
              <table id="simple-table" class="table table-bordered table-hover table-responsive">
                <thead>
                  <tr>
                    <!--<th class="center">
                <label class="pos-rel">
                    <input type="checkbox" class="ace" />
                    <span class="lbl"></span>
                </label>
            </th>-->
                    <th>群组</th>
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
                    <td>Customer support</td>
                    <td>
                      <a href="Manger_login_list.php" data-rel="tooltip" title="登录历程">v02</a>
                      <div class="hidden-md hidden-lg text-danger">
                        v02 </div>
                    </td>
                    <td class="hidden-480">v02</td>
                    <td class="hidden-480">2020-03-28 13:13:31</td>
                    <td class="hidden-480">110.30.105.217</td>
                    <td>
                      <label>
                        <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox" value="11" />
                        <span class="lbl"></span>
                      </label>
                    </td>
                    <td>
                      <div class="hidden-sm hidden-xs btn-group">
                        <a href="Manger_edit.php" class="btn btn-xs btn-info" title="修改">
                          <i class="ace-icon fa fa-pencil bigger-120"></i>
                        </a>
                        <button class="btn btn-xs btn-danger" data-toggle="modal" title="删除"
                          data-target="#dialog-confirm" data-action="#">
                          <i class="ace-icon fa fa-trash-o bigger-120"></i>
                        </button>
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
                              <a href="Manger_edit.php" class="tooltip-success" data-rel="tooltip" title="修改">
                                <span class="green">
                                  <i class="ace-icon fa fa-pencil bigger-120"></i>
                                </span>
                              </a>
                            </li>
                            <li>
                              <a href="#" class="tooltip-error" data-rel="tooltip" data-toggle="modal" title="删除"
                                data-target="#dialog-confirm" data-action="#">
                                <span class="red">
                                  <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                </span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Customer support</td>
                    <td>
                      <a href="Manger_login_list.php" data-rel="tooltip" title="登录历程">v03</a>
                      <div class="hidden-md hidden-lg text-danger">
                        v03 </div>
                    </td>
                    <td class="hidden-480">v03</td>
                    <td class="hidden-480">2020-06-05 14:02:15</td>
                    <td class="hidden-480">182.155.84.139</td>
                    <td>
                      <label>
                        <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox" value="12"
                          checked />
                        <span class="lbl"></span>
                      </label>
                    </td>
                    <td>
                      <div class="hidden-sm hidden-xs btn-group">
                        <a href="Manger_edit.php" class="btn btn-xs btn-info" title="修改">
                          <i class="ace-icon fa fa-pencil bigger-120"></i>
                        </a>
                        <button class="btn btn-xs btn-danger" data-toggle="modal" title="删除"
                          data-target="#dialog-confirm" data-action="#">
                          <i class="ace-icon fa fa-trash-o bigger-120"></i>
                        </button>
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
                              <a href="Manger_edit.php" class="tooltip-success" data-rel="tooltip" title="修改">
                                <span class="green">
                                  <i class="ace-icon fa fa-pencil bigger-120"></i>
                                </span>
                              </a>
                            </li>
                            <li>
                              <a href="#" class="tooltip-error" data-rel="tooltip" data-toggle="modal" title="删除"
                                data-target="#dialog-confirm" data-action="#">
                                <span class="red">
                                  <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                </span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Customer support</td>
                    <td>
                      <a href="Manger_login_list.php" data-rel="tooltip" title="登录历程">v05</a>
                      <div class="hidden-md hidden-lg text-danger">
                        v05 </div>
                    </td>
                    <td class="hidden-480">v05</td>
                    <td class="hidden-480">2018-08-06 11:57:07</td>
                    <td class="hidden-480">42.76.121.63</td>
                    <td>
                      <label>
                        <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox" value="13" />
                        <span class="lbl"></span>
                      </label>
                    </td>
                    <td>
                      <div class="hidden-sm hidden-xs btn-group">
                        <a href="Manger_edit.php" class="btn btn-xs btn-info" title="修改">
                          <i class="ace-icon fa fa-pencil bigger-120"></i>
                        </a>
                        <button class="btn btn-xs btn-danger" data-toggle="modal" title="删除"
                          data-target="#dialog-confirm" data-action="#">
                          <i class="ace-icon fa fa-trash-o bigger-120"></i>
                        </button>
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
                              <a href="Manger_edit.php" class="tooltip-success" data-rel="tooltip" title="修改">
                                <span class="green">
                                  <i class="ace-icon fa fa-pencil bigger-120"></i>
                                </span>
                              </a>
                            </li>
                            <li>
                              <a href="#" class="tooltip-error" data-rel="tooltip" data-toggle="modal" title="删除"
                                data-target="#dialog-confirm" data-action="#">
                                <span class="red">
                                  <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                </span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Customer support</td>
                    <td>
                      <a href="Manger_login_list.php" data-rel="tooltip" title="登录历程">v06</a>
                      <div class="hidden-md hidden-lg text-danger">
                        v06 </div>
                    </td>
                    <td class="hidden-480">v06</td>
                    <td class="hidden-480">2019-10-27 10:10:03</td>
                    <td class="hidden-480">42.76.98.128</td>
                    <td>
                      <label>
                        <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox" value="14" />
                        <span class="lbl"></span>
                      </label>
                    </td>
                    <td>
                      <div class="hidden-sm hidden-xs btn-group">
                        <a href="Manger_edit.php" class="btn btn-xs btn-info" title="修改">
                          <i class="ace-icon fa fa-pencil bigger-120"></i>
                        </a>
                        <button class="btn btn-xs btn-danger" data-toggle="modal" title="删除"
                          data-target="#dialog-confirm" data-action="#">
                          <i class="ace-icon fa fa-trash-o bigger-120"></i>
                        </button>
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
                              <a href="Manger_edit.php" class="tooltip-success" data-rel="tooltip" title="修改">
                                <span class="green">
                                  <i class="ace-icon fa fa-pencil bigger-120"></i>
                                </span>
                              </a>
                            </li>
                            <li>
                              <a href="#" class="tooltip-error" data-rel="tooltip" data-toggle="modal" title="删除"
                                data-target="#dialog-confirm" data-action="#">
                                <span class="red">
                                  <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                </span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Customer support</td>
                    <td>
                      <a href="Manger_login_list.php" data-rel="tooltip" title="登录历程">v07</a>
                      <div class="hidden-md hidden-lg text-danger">
                        v07 </div>
                    </td>
                    <td class="hidden-480">v07</td>
                    <td class="hidden-480">2020-03-28 01:00:06</td>
                    <td class="hidden-480">27.247.102.46</td>
                    <td>
                      <label>
                        <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox" value="15" />
                        <span class="lbl"></span>
                      </label>
                    </td>
                    <td>
                      <div class="hidden-sm hidden-xs btn-group">
                        <a href="Manger_edit.php" class="btn btn-xs btn-info" title="修改">
                          <i class="ace-icon fa fa-pencil bigger-120"></i>
                        </a>
                        <button class="btn btn-xs btn-danger" data-toggle="modal" title="删除"
                          data-target="#dialog-confirm" data-action="#">
                          <i class="ace-icon fa fa-trash-o bigger-120"></i>
                        </button>
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
                              <a href="Manger_edit.php" class="tooltip-success" data-rel="tooltip" title="修改">
                                <span class="green">
                                  <i class="ace-icon fa fa-pencil bigger-120"></i>
                                </span>
                              </a>
                            </li>
                            <li>
                              <a href="#" class="tooltip-error" data-rel="tooltip" data-toggle="modal" title="删除"
                                data-target="#dialog-confirm" data-action="#">
                                <span class="red">
                                  <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                </span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Customer support</td>
                    <td>
                      <a href="Manger_login_list.php" data-rel="tooltip" title="登录历程">v08</a>
                      <div class="hidden-md hidden-lg text-danger">
                        v08 </div>
                    </td>
                    <td class="hidden-480">v08</td>
                    <td class="hidden-480">2020-05-30 12:04:18</td>
                    <td class="hidden-480">27.52.98.224</td>
                    <td>
                      <label>
                        <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox" value="18"
                          checked />
                        <span class="lbl"></span>
                      </label>
                    </td>
                    <td>
                      <div class="hidden-sm hidden-xs btn-group">
                        <a href="Manger_edit.php" class="btn btn-xs btn-info" title="修改">
                          <i class="ace-icon fa fa-pencil bigger-120"></i>
                        </a>
                        <button class="btn btn-xs btn-danger" data-toggle="modal" title="删除"
                          data-target="#dialog-confirm" data-action="#">
                          <i class="ace-icon fa fa-trash-o bigger-120"></i>
                        </button>
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
                              <a href="Manger_edit.php" class="tooltip-success" data-rel="tooltip" title="修改">
                                <span class="green">
                                  <i class="ace-icon fa fa-pencil bigger-120"></i>
                                </span>
                              </a>
                            </li>
                            <li>
                              <a href="#" class="tooltip-error" data-rel="tooltip" data-toggle="modal" title="删除"
                                data-target="#dialog-confirm" data-action="#">
                                <span class="red">
                                  <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                </span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Customer support</td>
                    <td>
                      <a href="Manger_login_list.php" data-rel="tooltip" title="登录历程">v09</a>
                      <div class="hidden-md hidden-lg text-danger">
                        v09 </div>
                    </td>
                    <td class="hidden-480">v09</td>
                    <td class="hidden-480">2019-09-28 09:54:24</td>
                    <td class="hidden-480">27.246.136.74</td>
                    <td>
                      <label>
                        <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox" value="19" />
                        <span class="lbl"></span>
                      </label>
                    </td>
                    <td>
                      <div class="hidden-sm hidden-xs btn-group">
                        <a href="Manger_edit.php" class="btn btn-xs btn-info" title="修改">
                          <i class="ace-icon fa fa-pencil bigger-120"></i>
                        </a>
                        <button class="btn btn-xs btn-danger" data-toggle="modal" title="删除"
                          data-target="#dialog-confirm" data-action="#">
                          <i class="ace-icon fa fa-trash-o bigger-120"></i>
                        </button>
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
                              <a href="Manger_edit.php" class="tooltip-success" data-rel="tooltip" title="修改">
                                <span class="green">
                                  <i class="ace-icon fa fa-pencil bigger-120"></i>
                                </span>
                              </a>
                            </li>
                            <li>
                              <a href="#" class="tooltip-error" data-rel="tooltip" data-toggle="modal" title="删除"
                                data-target="#dialog-confirm" data-action="#">
                                <span class="red">
                                  <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                </span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Customer support</td>
                    <td>
                      <a href="Manger_login_list.php" data-rel="tooltip" title="登录历程">v10</a>
                      <div class="hidden-md hidden-lg text-danger">
                        v10 </div>
                    </td>
                    <td class="hidden-480">v10</td>
                    <td class="hidden-480">2018-01-09 10:52:12</td>
                    <td class="hidden-480">101.15.57.143</td>
                    <td>
                      <label>
                        <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox" value="20" />
                        <span class="lbl"></span>
                      </label>
                    </td>
                    <td>
                      <div class="hidden-sm hidden-xs btn-group">
                        <a href="Manger_edit.php" class="btn btn-xs btn-info" title="修改">
                          <i class="ace-icon fa fa-pencil bigger-120"></i>
                        </a>
                        <button class="btn btn-xs btn-danger" data-toggle="modal" title="删除"
                          data-target="#dialog-confirm" data-action="#">
                          <i class="ace-icon fa fa-trash-o bigger-120"></i>
                        </button>
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
                              <a href="Manger_edit.php" class="tooltip-success" data-rel="tooltip" title="修改">
                                <span class="green">
                                  <i class="ace-icon fa fa-pencil bigger-120"></i>
                                </span>
                              </a>
                            </li>
                            <li>
                              <a href="#" class="tooltip-error" data-rel="tooltip" data-toggle="modal" title="删除"
                                data-target="#dialog-confirm" data-action="#">
                                <span class="red">
                                  <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                </span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Customer support</td>
                    <td>
                      <a href="Manger_login_list.php" data-rel="tooltip" title="登录历程">v01</a>
                      <div class="hidden-md hidden-lg text-danger">
                        v01 </div>
                    </td>
                    <td class="hidden-480">v01</td>
                    <td class="hidden-480">2023-09-14 21:19:59</td>
                    <td class="hidden-480">220.136.204.11</td>
                    <td>
                      <label>
                        <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox" value="10"
                          checked />
                        <span class="lbl"></span>
                      </label>
                    </td>
                    <td>
                      <div class="hidden-sm hidden-xs btn-group">
                        <a href="Manger_edit.php" class="btn btn-xs btn-info" title="修改">
                          <i class="ace-icon fa fa-pencil bigger-120"></i>
                        </a>
                        <button class="btn btn-xs btn-danger" data-toggle="modal" title="删除"
                          data-target="#dialog-confirm" data-action="#">
                          <i class="ace-icon fa fa-trash-o bigger-120"></i>
                        </button>
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
                              <a href="Manger_edit.php" class="tooltip-success" data-rel="tooltip" title="修改">
                                <span class="green">
                                  <i class="ace-icon fa fa-pencil bigger-120"></i>
                                </span>
                              </a>
                            </li>
                            <li>
                              <a href="#" class="tooltip-error" data-rel="tooltip" data-toggle="modal" title="删除"
                                data-target="#dialog-confirm" data-action="#">
                                <span class="red">
                                  <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                </span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Sub-Account Group</td>
                    <td>
                      <a href="Manger_login_list.php" data-rel="tooltip" title="登录历程">vip10</a>
                      <div class="hidden-md hidden-lg text-danger">
                        vip10 </div>
                    </td>
                    <td class="hidden-480">vip10</td>
                    <td class="hidden-480"></td>
                    <td class="hidden-480"></td>
                    <td>
                      <label>
                        <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox" value="30" />
                        <span class="lbl"></span>
                      </label>
                    </td>
                    <td>
                      <div class="hidden-sm hidden-xs btn-group">
                        <a href="Manger_edit.php" class="btn btn-xs btn-info" title="修改">
                          <i class="ace-icon fa fa-pencil bigger-120"></i>
                        </a>
                        <button class="btn btn-xs btn-danger" data-toggle="modal" title="删除"
                          data-target="#dialog-confirm" data-action="#">
                          <i class="ace-icon fa fa-trash-o bigger-120"></i>
                        </button>
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
                              <a href="Manger_edit.php" class="tooltip-success" data-rel="tooltip" title="修改">
                                <span class="green">
                                  <i class="ace-icon fa fa-pencil bigger-120"></i>
                                </span>
                              </a>
                            </li>
                            <li>
                              <a href="#" class="tooltip-error" data-rel="tooltip" data-toggle="modal" title="删除"
                                data-target="#dialog-confirm" data-action="#">
                                <span class="red">
                                  <i class="ace-icon fa fa-trash-o bigger-120"></i>
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
