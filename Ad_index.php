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
              <a href="javascript:void(0)">广告数据查找</a>
            </li>
            <li>
              <a href="Ad_index.php">广告数据查找</a>
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
                $('.activeSwitch').click(function() {
                  $.ajax({
                    type: "POST",
                    url: "Ad_keyChange.php",
                    cache: false,
                    data: {
                      num: $(this).val(),
                      value: ($(this).prop('checked') ? 'Y' : 'N')
                    }
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
                                  class="col-xs-12 col-sm-3 control-label no-padding-right">显示位置</label>
                                <div class="col-xs-12 col-sm-5">
                                  <select class="form-control select2" name="find2" id="find2" data-placeholder="请选择">
                                    <option value="">请选择</option>
                                    <option value="1">Banner輪播</option>
                                    <option value="2">內頁Banner</option>
                                    <option value="3">QT電子Banner</option>
                                    <option value="4">BS電子Banner</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputWarning"
                                  class="col-xs-12 col-sm-3 control-label no-padding-right">标题</label>
                                <div class="col-xs-12 col-sm-5">
                                  <input type="text" class="form-control" id="find3" name="find3" value=""
                                    placeholder="标题" />
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputWarning"
                                  class="col-xs-12 col-sm-3 control-label no-padding-right">显示</label>
                                <div class="col-xs-12 col-sm-5">
                                  <select class="form-control select2" name="find4" id="find4" data-placeholder="请选择">
                                    <option value="">请选择</option>
                                    <option value="Y">显示</option>
                                    <option value="N">关闭</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputWarning"
                                  class="col-xs-12 col-sm-3 control-label no-padding-right">日期区间</label>
                                <div class="col-xs-12 col-sm-5">
                                  <div class="input-daterange  input-group">
                                    <input type="text" class="input-sm form-control jqdate" name="find5" id="find5"
                                      value="" />
                                    <span class="input-group-addon">
                                      <i class="fa fa-exchange"></i>
                                    </span>
                                    <input type="text" class="input-sm form-control jqdate" name="find6" id="find6"
                                      value="" />
                                  </div>
                                </div>
                              </div>
                              <div class="text-center">
                                <a href="Ad_index.php" class="btn btn-yellow btn-sm">
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
                    <th>显示位置</th>
                    <th>语系id</th>
                    <th>标题</th>
                    <th>开放时间</th>
                    <th>发布日期</th>
                    <th>图片上传</th>
                    <th>是否显示</th>
                    <th>管理</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Banner輪播</td>
                    <td>2.简体中文</td>
                    <td>test4</td>
                    <td>
                    </td>
                    <td>2022-04-22 09:59:01</td>
                    <td>
                      <a href="//game99.demonsupervisor.com/upload/banner/banner_20220422095957_.png"
                        data-rel="colorbox" class="btn btn-xs btn-info" title="test4">
                        <i class="ace-icon fa fa-search icon-on-right bigger-110"></i>
                      </a>
                    </td>
                    <td>
                      <label>
                        <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox" value="6"
                          checked />
                        <span class="lbl"></span>
                      </label>
                    </td>
                    <td>
                      <div class="hidden-sm hidden-xs btn-group">
                        <a href="Ad_edit.php" class="btn btn-xs btn-info" title="修改">
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
                              <a href="Ad_edit.php" class="tooltip-success" data-rel="tooltip" title="修改">
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
                    <td>Banner輪播</td>
                    <td>0.English</td>
                    <td>test1</td>
                    <td>
                    </td>
                    <td>2022-04-20 15:23:26</td>
                    <td>
                      <a href="//game99.demonsupervisor.com/upload/banner/banner_20220421102730_.png"
                        data-rel="colorbox" class="btn btn-xs btn-info" title="test1">
                        <i class="ace-icon fa fa-search icon-on-right bigger-110"></i>
                      </a>
                    </td>
                    <td>
                      <label>
                        <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox" value="5"
                          checked />
                        <span class="lbl"></span>
                      </label>
                    </td>
                    <td>
                      <div class="hidden-sm hidden-xs btn-group">
                        <a href="Ad_edit.php" class="btn btn-xs btn-info" title="修改">
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
                              <a href="Ad_edit.php" class="tooltip-success" data-rel="tooltip" title="修改">
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
                    <td>Banner輪播</td>
                    <td>3.မြန်မာ</td>
                    <td>test3</td>
                    <td>
                    </td>
                    <td>2018-05-08 15:25:34</td>
                    <td>
                      <a href="//game99.demonsupervisor.com/upload/banner/banner_20220421105009_.png"
                        data-rel="colorbox" class="btn btn-xs btn-info" title="test3">
                        <i class="ace-icon fa fa-search icon-on-right bigger-110"></i>
                      </a>
                    </td>
                    <td>
                      <label>
                        <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox" value="1"
                          checked />
                        <span class="lbl"></span>
                      </label>
                    </td>
                    <td>
                      <div class="hidden-sm hidden-xs btn-group">
                        <a href="Ad_edit.php" class="btn btn-xs btn-info" title="修改">
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
                              <a href="Ad_edit.php" class="tooltip-success" data-rel="tooltip" title="修改">
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
                    <td>Banner輪播</td>
                    <td>1.繁體中文</td>
                    <td>test2</td>
                    <td>
                    </td>
                    <td>2017-11-24 17:23:21</td>
                    <td>
                      <a href="//game99.demonsupervisor.com/upload/banner/banner_20220421104123_.png"
                        data-rel="colorbox" class="btn btn-xs btn-info" title="test2">
                        <i class="ace-icon fa fa-search icon-on-right bigger-110"></i>
                      </a>
                    </td>
                    <td>
                      <label>
                        <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox" value="3"
                          checked />
                        <span class="lbl"></span>
                      </label>
                    </td>
                    <td>
                      <div class="hidden-sm hidden-xs btn-group">
                        <a href="Ad_edit.php" class="btn btn-xs btn-info" title="修改">
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
                              <a href="Ad_edit.php" class="tooltip-success" data-rel="tooltip" title="修改">
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
