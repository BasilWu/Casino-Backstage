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
              <a href="javascript:void(0)">群组数据管理</a>
            </li>
            <li>
              <a href="Group_index.php">群组数据管理</a>
            </li>
          </ul><!-- /.breadcrumb -->
        </div>
        <div class="page-content">
          <?php include "include/in_menu_set.php"?>
          <div class="row">
            <div class="col-xs-12">
              <!-- 主要内容 开始 -->
              <!-- PAGE CONTENT BEGINS -->
              <div class="page-header">
                <form class="form-horizontal" method="post"
                  action="#">
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
                                  class="col-xs-12 col-sm-3 control-label no-padding-right">群组名称</label>
                                <div class="col-xs-12 col-sm-5">
                                  <input type="text" class="form-control" id="find1" name="find1" value=""
                                    placeholder="群组名称" />
                                </div>
                              </div>
                              <div class="text-center">
                                <a href="Group_index.php" class="btn btn-yellow btn-sm">
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
                    <th>群组名称</th>
                    <th>群组权限(数字越小权限越高)</th>
                    <th>管理</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Webmaster Management</td>
                    <td>3</td>
                    <td>
                      <div class="hidden-sm hidden-xs btn-group">
                        <a href="Group_edit.php" class="btn btn-xs btn-info" title="修改">
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
                              <a href="Group_edit.php" class="tooltip-success" data-rel="tooltip" title="修改">
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
                    <td>Shareholder</td>
                    <td>4</td>
                    <td>
                      <div class="hidden-sm hidden-xs btn-group">
                        <a href="Group_edit.php" class="btn btn-xs btn-info" title="修改">
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
                              <a href="Group_edit.php" class="tooltip-success" data-rel="tooltip" title="修改">
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
                  <tr>
                    <td>General Agent</td>
                    <td>5</td>
                    <td>
                      <div class="hidden-sm hidden-xs btn-group">
                        <a href="Group_edit.php" class="btn btn-xs btn-info" title="修改">
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
                              <a href="Group_edit.php" class="tooltip-success" data-rel="tooltip" title="修改">
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
                  <tr>
                    <td>agent</td>
                    <td>6</td>
                    <td>
                      <div class="hidden-sm hidden-xs btn-group">
                        <a href="Group_edit.php" class="btn btn-xs btn-info" title="修改">
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
                              <a href="Group_edit.php" class="tooltip-success" data-rel="tooltip" title="修改">
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
                  <tr>
                    <td>Customer support</td>
                    <td>7</td>
                    <td>
                      <div class="hidden-sm hidden-xs btn-group">
                        <a href="Group_edit.php" class="btn btn-xs btn-info" title="修改">
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
                              <a href="Group_edit.php" class="tooltip-success" data-rel="tooltip" title="修改">
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
                    <td>8</td>
                    <td>
                      <div class="hidden-sm hidden-xs btn-group">
                        <a href="Group_edit.php" class="btn btn-xs btn-info" title="修改">
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
                              <a href="Group_edit.php" class="tooltip-success" data-rel="tooltip" title="修改">
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
                    <td>Auditor</td>
                    <td>9</td>
                    <td>
                      <div class="hidden-sm hidden-xs btn-group">
                        <a href="Group_edit.php" class="btn btn-xs btn-info" title="修改">
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
                              <a href="Group_edit.php" class="tooltip-success" data-rel="tooltip" title="修改">
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
                    <td>CustomerServiceGroup</td>
                    <td>888</td>
                    <td>
                      <div class="hidden-sm hidden-xs btn-group">
                        <a href="Group_edit.php" class="btn btn-xs btn-info" title="修改">
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
                              <a href="Group_edit.php" class="tooltip-success" data-rel="tooltip" title="修改">
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
