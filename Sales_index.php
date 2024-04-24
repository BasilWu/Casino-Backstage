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
              <a href="javascript:void(0)">优惠活动查找</a>
            </li>
            <li>
              <a href="Sales_index.php">优惠活动查找</a>
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
                                  class="col-xs-12 col-sm-3 control-label no-padding-right">分类</label>
                                <div class="col-xs-12 col-sm-5">
                                  <select class="form-control selectpicker" name="find1" id="find1">
                                    <option value="">请选择</option>
                                    <option value="1">優惠訊息</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputWarning"
                                  class="col-xs-12 col-sm-3 control-label no-padding-right">主题</label>
                                <div class="col-xs-12 col-sm-5">
                                  <input type="text" class="form-control" id="find2" name="find2" value=""
                                    placeholder="主题" />
                                </div>
                              </div>
                              <div class="text-center">
                                <a href="Sales_index.php" class="btn btn-yellow btn-sm">
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
                    <th>分类</th>
                    <th>语系id</th>
                    <th>主题</th>
                    <th>开放时间</th>
                    <th>发布日期</th>
                    <th>管理</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>優惠訊息</td>
                    <td>0.English</td>
                    <td>Baccarat</td>
                    <td>
                    </td>
                    <td>2022-05-17</td>
                    <td>
                      <div class="hidden-sm hidden-xs btn-group">
                        <a href="Sales_edit.php" class="btn btn-xs btn-info" title="修改">
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
                              <a href="Sales_edit.php" class="tooltip-success" data-rel="tooltip" title="修改">
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
                    <td>優惠訊息</td>
                    <td>0.English</td>
                    <td>Bonus</td>
                    <td>
                    </td>
                    <td>2022-05-17</td>
                    <td>
                      <div class="hidden-sm hidden-xs btn-group">
                        <a href="Sales_edit.php" class="btn btn-xs btn-info" title="修改">
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
                              <a href="Sales_edit.php" class="tooltip-success" data-rel="tooltip" title="修改">
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
                    <td>優惠訊息</td>
                    <td>1.繁體中文</td>
                    <td>中文</td>
                    <td>
                    </td>
                    <td>2018-06-01</td>
                    <td>
                      <div class="hidden-sm hidden-xs btn-group">
                        <a href="Sales_edit.php" class="btn btn-xs btn-info" title="修改">
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
                              <a href="Sales_edit.php" class="tooltip-success" data-rel="tooltip" title="修改">
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
                    <td>優惠訊息</td>
                    <td>0.English</td>
                    <td>English</td>
                    <td>
                    </td>
                    <td>2018-05-31</td>
                    <td>
                      <div class="hidden-sm hidden-xs btn-group">
                        <a href="Sales_edit.php" class="btn btn-xs btn-info" title="修改">
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
                              <a href="Sales_edit.php" class="tooltip-success" data-rel="tooltip" title="修改">
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
                    <td>優惠訊息</td>
                    <td>3.မြန်မာ</td>
                    <td>မြန်မာ</td>
                    <td>
                    </td>
                    <td>2018-05-08</td>
                    <td>
                      <div class="hidden-sm hidden-xs btn-group">
                        <a href="Sales_edit.php" class="btn btn-xs btn-info" title="修改">
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
                              <a href="Sales_edit.php" class="tooltip-success" data-rel="tooltip" title="修改">
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
                    <td>優惠訊息</td>
                    <td>1.繁體中文</td>
                    <td>會員升等 up</td>
                    <td>
                      <div class="text-info">2018-05-01</div>
                    </td>
                    <td>2018-04-30</td>
                    <td>
                      <div class="hidden-sm hidden-xs btn-group">
                        <a href="Sales_edit.php" class="btn btn-xs btn-info" title="修改">
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
                              <a href="Sales_edit.php" class="tooltip-success" data-rel="tooltip" title="修改">
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
                    <td>優惠訊息</td>
                    <td>1.繁體中文</td>
                    <td>二次續儲回饋點數加碼送10%</td>
                    <td>
                      <div class="text-info">2018-05-07</div>
                    </td>
                    <td>2018-03-01</td>
                    <td>
                      <div class="hidden-sm hidden-xs btn-group">
                        <a href="Sales_edit.php" class="btn btn-xs btn-info" title="修改">
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
                              <a href="Sales_edit.php" class="tooltip-success" data-rel="tooltip" title="修改">
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
                    <td>優惠訊息</td>
                    <td>1.繁體中文</td>
                    <td>vip會員升等 uP</td>
                    <td>
                      <div class="text-info">2022-02-28</div>
                    </td>
                    <td>2018-02-13</td>
                    <td>
                      <div class="hidden-sm hidden-xs btn-group">
                        <a href="Sales_edit.php" class="btn btn-xs btn-info" title="修改">
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
                              <a href="Sales_edit.php" class="tooltip-success" data-rel="tooltip" title="修改">
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
                    <td>優惠訊息</td>
                    <td>1.繁體中文</td>
                    <td>6 6 6 十萬紅包立即送</td>
                    <td>
                      <div class="text-info">2022-02-28</div>
                    </td>
                    <td>2018-02-12</td>
                    <td>
                      <div class="hidden-sm hidden-xs btn-group">
                        <a href="Sales_edit.php" class="btn btn-xs btn-info" title="修改">
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
                              <a href="Sales_edit.php" class="tooltip-success" data-rel="tooltip" title="修改">
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
                    <td>優惠訊息</td>
                    <td>1.繁體中文</td>
                    <td>週週送 iphoneX</td>
                    <td>
                      <div class="text-info">2022-03-10</div>
                    </td>
                    <td>2017-11-23</td>
                    <td>
                      <div class="hidden-sm hidden-xs btn-group">
                        <a href="Sales_edit.php" class="btn btn-xs btn-info" title="修改">
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
                              <a href="Sales_edit.php" class="tooltip-success" data-rel="tooltip" title="修改">
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
