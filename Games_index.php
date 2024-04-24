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
              <a href="javascript:void(0)">游戏数据查找</a>
            </li>
            <li>
              <a href="Games_index.php">游戏数据查找</a>
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
                    url: "Games_keyChange.php",
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
                                  class="col-xs-12 col-sm-3 control-label no-padding-right">游戏厂商</label>
                                <div class="col-xs-12 col-sm-5">
                                  <select class="form-control select2" name="find2" id="find2" data-placeholder="请选择">
                                    <option value="">请选择</option>
                                    <option value="1">9KG </option>
                                    <option value="1">9KG </option>
                                    <option value="1">9KG </option>
                                    <option value="1">9KG </option>
                                    <option value="2">VA </option>
                                    <option value="2">VA </option>
                                    <option value="2">VA </option>
                                    <option value="2">VA </option>
                                    <option value="2">VA </option>
                                    <option value="2">VA </option>
                                    <option value="2">VA </option>
                                    <option value="2">VA </option>
                                    <option value="2">VA </option>
                                    <option value="2">VA </option>
                                    <option value="2">VA </option>
                                    <option value="2">VA </option>
                                    <option value="2">VA </option>
                                    <option value="2">VA </option>
                                    <option value="2">VA </option>
                                    <option value="2">VA </option>
                                    <option value="1">9KG </option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputWarning"
                                  class="col-xs-12 col-sm-3 control-label no-padding-right">游戏名称</label>
                                <div class="col-xs-12 col-sm-5">
                                  <input type="text" class="form-control" id="find3" name="find3" value=""
                                    placeholder="标题" />
                                </div>
                              </div>
                              <div class="text-center">
                                <a href="Games_index.php" class="btn btn-yellow btn-sm">
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
              <H2>游戏数量:21</h2>
              <table id="simple-table" class="table table-bordered table-hover table-responsive">
                <thead>
                  <tr>
                    <!--<th class="center">
                <label class="pos-rel">
                    <input type="checkbox" class="ace" />
                    <span class="lbl"></span>
                </label>
            </th>-->
                    <th>游戏厂商</th>
                    <th>游戏名称EN</th>
                    <th>游戏名称TW</th>
                    <th>游戏名称CH</th>
                    <th>游戏名称MM</th>
                    <th>支持设备</th>
                    <th>图片上传</th>
                    <th>状态</th>
                    <th>管理</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>9KG </td>
                    <td>Paikang</td>
                    <td>Paikang</td>
                    <td>Paikang</td>
                    <td>Paikang</td>
                    <td>通用 </td>
                    <td>
                      <a href="//game99.demonsupervisor.com/upload/games/games_20220225104200_0.png" data-rel="colorbox"
                        class="btn btn-xs btn-info">
                        <i class="ace-icon fa fa-search icon-on-right bigger-110"></i>
                      </a>
                    </td>
                    <td>
                      <label>
                        <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox" value="23"
                          checked />
                        <span class="lbl"></span>
                      </label>
                    </td>
                    <td>
                      <div class="hidden-sm hidden-xs btn-group">
                        <a href="Games_edit.php" class="btn btn-xs btn-info" title="修改">
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
                              <a href="Games_edit.php" <div
                                style=" border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">
                                <h4>A PHP Error was encountered</h4>
                                <p>Severity: Warning</p>
                                <p>Message: Undefined array key "per_page"</p>
                                <p>Filename: game/index.php</p>
                                <p>Line Number: 211</p>
                                <p>Backtrace:</p>
                                <p style="margin-left:10px">
                                  File: /home/wwwroot/07_demo/git_mmbet99/application/views/admin/game/index.php<br />
                                  Line: 211<br />
                                  Function: _error_handler </p>
                                <p style="margin-left:10px">
                                  File:
                                  /home/wwwroot/07_demo/git_mmbet99/application/controllers/D3oadp5j/Games.php<br />
                                  Line: 101<br />
                                  Function: view </p>
                                <p style="margin-left:10px">
                                  File: /home/wwwroot/07_demo/git_mmbet99/index.php<br />
                                  Line: 315<br />
                                  Function: require_once </p>
                        </div>"
                        class="tooltip-success" data-rel="tooltip" title="修改">
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
              <td>9KG </td>
              <td>Blackjack</td>
              <td>廿一點</td>
              <td>廿一点</td>
              <td>blackjack</td>
              <td>通用 </td>
              <td>
                <a href="//game99.demonsupervisor.com/upload/games/games_20220207011100_0.png" data-rel="colorbox"
                  class="btn btn-xs btn-info">
                  <i class="ace-icon fa fa-search icon-on-right bigger-110"></i>
                </a>
              </td>
              <td>
                <label>
                  <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox" value="4" checked />
                  <span class="lbl"></span>
                </label>
              </td>
              <td>
                <div class="hidden-sm hidden-xs btn-group">
                  <a href="Games_edit.php" class="btn btn-xs btn-info" title="修改">
                    <i class="ace-icon fa fa-pencil bigger-120"></i>
                  </a>
                  <button class="btn btn-xs btn-danger" data-toggle="modal" title="删除" data-target="#dialog-confirm"
                    data-action="#">
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
                        <a href="Games_edit.php" <div
                          style=" border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">
                          <h4>A PHP Error was encountered</h4>
                          <p>Severity: Warning</p>
                          <p>Message: Undefined array key "per_page"</p>
                          <p>Filename: game/index.php</p>
                          <p>Line Number: 211</p>
                          <p>Backtrace:</p>
                          <p style="margin-left:10px">
                            File: /home/wwwroot/07_demo/git_mmbet99/application/views/admin/game/index.php<br />
                            Line: 211<br />
                            Function: _error_handler </p>
                          <p style="margin-left:10px">
                            File: /home/wwwroot/07_demo/git_mmbet99/application/controllers/D3oadp5j/Games.php<br />
                            Line: 101<br />
                            Function: view </p>
                          <p style="margin-left:10px">
                            File: /home/wwwroot/07_demo/git_mmbet99/index.php<br />
                            Line: 315<br />
                            Function: require_once </p>
                  </div>"
                  class="tooltip-success" data-rel="tooltip" title="修改">
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
            <td>9KG </td>
            <td>Fish,Shrimp and Crab</td>
            <td>魚蝦蟹</td>
            <td>鱼虾蟹</td>
            <td>ငါး ပုဇွန် နဲ့ ဂဏန်း</td>
            <td>通用 </td>
            <td>
              <a href="//game99.demonsupervisor.com/upload/games/games_20220207011154_0.png" data-rel="colorbox"
                class="btn btn-xs btn-info">
                <i class="ace-icon fa fa-search icon-on-right bigger-110"></i>
              </a>
            </td>
            <td>
              <label>
                <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox" value="3" checked />
                <span class="lbl"></span>
              </label>
            </td>
            <td>
              <div class="hidden-sm hidden-xs btn-group">
                <a href="Games_edit.php" class="btn btn-xs btn-info" title="修改">
                  <i class="ace-icon fa fa-pencil bigger-120"></i>
                </a>
                <button class="btn btn-xs btn-danger" data-toggle="modal" title="删除" data-target="#dialog-confirm"
                  data-action="#">
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
                      <a href="Games_edit.php" <div
                        style=" border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">
                        <h4>A PHP Error was encountered</h4>
                        <p>Severity: Warning</p>
                        <p>Message: Undefined array key "per_page"</p>
                        <p>Filename: game/index.php</p>
                        <p>Line Number: 211</p>
                        <p>Backtrace:</p>
                        <p style="margin-left:10px">
                          File: /home/wwwroot/07_demo/git_mmbet99/application/views/admin/game/index.php<br />
                          Line: 211<br />
                          Function: _error_handler </p>
                        <p style="margin-left:10px">
                          File: /home/wwwroot/07_demo/git_mmbet99/application/controllers/D3oadp5j/Games.php<br />
                          Line: 101<br />
                          Function: view </p>
                        <p style="margin-left:10px">
                          File: /home/wwwroot/07_demo/git_mmbet99/index.php<br />
                          Line: 315<br />
                          Function: require_once </p>
                </div>"
                class="tooltip-success" data-rel="tooltip" title="修改">
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
          <td>9KG </td>
          <td>GaoGae</td>
          <td>GaoGae</td>
          <td>GaoGae</td>
          <td>GaoGae</td>
          <td>通用 </td>
          <td>
            <a href="//game99.demonsupervisor.com/upload/games/games_20220207011140_0.png" data-rel="colorbox"
              class="btn btn-xs btn-info">
              <i class="ace-icon fa fa-search icon-on-right bigger-110"></i>
            </a>
          </td>
          <td>
            <label>
              <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox" value="2" checked />
              <span class="lbl"></span>
            </label>
          </td>
          <td>
            <div class="hidden-sm hidden-xs btn-group">
              <a href="Games_edit.php" class="btn btn-xs btn-info" title="修改">
                <i class="ace-icon fa fa-pencil bigger-120"></i>
              </a>
              <button class="btn btn-xs btn-danger" data-toggle="modal" title="删除" data-target="#dialog-confirm"
                data-action="#">
                <i class="ace-icon fa fa-trash-o bigger-120"></i>
              </button>
            </div>
            <div class="hidden-md hidden-lg">
              <div class="inline pos-rel">
                <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                  <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                </button>
                <ul
                  class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                  <li>
                    <a href="Games_edit.php" <div
                      style=" border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">
                      <h4>A PHP Error was encountered</h4>
                      <p>Severity: Warning</p>
                      <p>Message: Undefined array key "per_page"</p>
                      <p>Filename: game/index.php</p>
                      <p>Line Number: 211</p>
                      <p>Backtrace:</p>
                      <p style="margin-left:10px">
                        File: /home/wwwroot/07_demo/git_mmbet99/application/views/admin/game/index.php<br />
                        Line: 211<br />
                        Function: _error_handler </p>
                      <p style="margin-left:10px">
                        File: /home/wwwroot/07_demo/git_mmbet99/application/controllers/D3oadp5j/Games.php<br />
                        Line: 101<br />
                        Function: view </p>
                      <p style="margin-left:10px">
                        File: /home/wwwroot/07_demo/git_mmbet99/index.php<br />
                        Line: 315<br />
                        Function: require_once </p>
              </div>"
              class="tooltip-success" data-rel="tooltip" title="修改">
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
        <td>9KG </td>
        <td>Shan Koe Mee</td>
        <td>博八博九</td>
        <td>博八博九</td>
        <td>ဘိုရှစ် ဘိုကိုး</td>
        <td>通用 </td>
        <td>
          <a href="//game99.demonsupervisor.com/upload/games/games_20220207011120_0.png" data-rel="colorbox"
            class="btn btn-xs btn-info">
            <i class="ace-icon fa fa-search icon-on-right bigger-110"></i>
          </a>
        </td>
        <td>
          <label>
            <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox" value="1" checked />
            <span class="lbl"></span>
          </label>
        </td>
        <td>
          <div class="hidden-sm hidden-xs btn-group">
            <a href="Games_edit.php" class="btn btn-xs btn-info" title="修改">
              <i class="ace-icon fa fa-pencil bigger-120"></i>
            </a>
            <button class="btn btn-xs btn-danger" data-toggle="modal" title="删除" data-target="#dialog-confirm"
              data-action="#">
              <i class="ace-icon fa fa-trash-o bigger-120"></i>
            </button>
          </div>
          <div class="hidden-md hidden-lg">
            <div class="inline pos-rel">
              <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
              </button>
              <ul
                class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                <li>
                  <a href="Games_edit.php" <div style=" border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">
                    <h4>A PHP Error was encountered</h4>
                    <p>Severity: Warning</p>
                    <p>Message: Undefined array key "per_page"</p>
                    <p>Filename: game/index.php</p>
                    <p>Line Number: 211</p>
                    <p>Backtrace:</p>
                    <p style="margin-left:10px">
                      File: /home/wwwroot/07_demo/git_mmbet99/application/views/admin/game/index.php<br />
                      Line: 211<br />
                      Function: _error_handler </p>
                    <p style="margin-left:10px">
                      File: /home/wwwroot/07_demo/git_mmbet99/application/controllers/D3oadp5j/Games.php<br />
                      Line: 101<br />
                      Function: view </p>
                    <p style="margin-left:10px">
                      File: /home/wwwroot/07_demo/git_mmbet99/index.php<br />
                      Line: 315<br />
                      Function: require_once </p>
            </div>"
            class="tooltip-success" data-rel="tooltip" title="修改">
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
      <td>VA </td>
      <td>Fighting the Landlord</td>
      <td>鬥地主</td>
      <td>斗地主</td>
      <td>အိမ်ရှင်ကို တိုက်ခိုက်ခြင်း။</td>
      <td>通用 </td>
      <td>
        <a href="//game99.demonsupervisor.com/upload/games/games_20220210110844_0.png" data-rel="colorbox"
          class="btn btn-xs btn-info">
          <i class="ace-icon fa fa-search icon-on-right bigger-110"></i>
        </a>
      </td>
      <td>
        <label>
          <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox" value="5" checked />
          <span class="lbl"></span>
        </label>
      </td>
      <td>
        <div class="hidden-sm hidden-xs btn-group">
          <a href="Games_edit.php" class="btn btn-xs btn-info" title="修改">
            <i class="ace-icon fa fa-pencil bigger-120"></i>
          </a>
          <button class="btn btn-xs btn-danger" data-toggle="modal" title="删除" data-target="#dialog-confirm"
            data-action="#">
            <i class="ace-icon fa fa-trash-o bigger-120"></i>
          </button>
        </div>
        <div class="hidden-md hidden-lg">
          <div class="inline pos-rel">
            <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
              <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
            </button>
            <ul
              class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
              <li>
                <a href="Games_edit.php" <div style=" border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">
                  <h4>A PHP Error was encountered</h4>
                  <p>Severity: Warning</p>
                  <p>Message: Undefined array key "per_page"</p>
                  <p>Filename: game/index.php</p>
                  <p>Line Number: 211</p>
                  <p>Backtrace:</p>
                  <p style="margin-left:10px">
                    File: /home/wwwroot/07_demo/git_mmbet99/application/views/admin/game/index.php<br />
                    Line: 211<br />
                    Function: _error_handler </p>
                  <p style="margin-left:10px">
                    File: /home/wwwroot/07_demo/git_mmbet99/application/controllers/D3oadp5j/Games.php<br />
                    Line: 101<br />
                    Function: view </p>
                  <p style="margin-left:10px">
                    File: /home/wwwroot/07_demo/git_mmbet99/index.php<br />
                    Line: 315<br />
                    Function: require_once </p>
          </div>"
          class="tooltip-success" data-rel="tooltip" title="修改">
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
    <td>VA </td>
    <td>fried golden flower</td>
    <td>炸金花</td>
    <td>炸金花</td>
    <td>ရွှေပန်းကြော်</td>
    <td>通用 </td>
    <td>
      <a href="//game99.demonsupervisor.com/upload/games/games_20220210110901_0.png" data-rel="colorbox"
        class="btn btn-xs btn-info">
        <i class="ace-icon fa fa-search icon-on-right bigger-110"></i>
      </a>
    </td>
    <td>
      <label>
        <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox" value="6" checked />
        <span class="lbl"></span>
      </label>
    </td>
    <td>
      <div class="hidden-sm hidden-xs btn-group">
        <a href="Games_edit.php" class="btn btn-xs btn-info" title="修改">
          <i class="ace-icon fa fa-pencil bigger-120"></i>
        </a>
        <button class="btn btn-xs btn-danger" data-toggle="modal" title="删除" data-target="#dialog-confirm"
          data-action="#">
          <i class="ace-icon fa fa-trash-o bigger-120"></i>
        </button>
      </div>
      <div class="hidden-md hidden-lg">
        <div class="inline pos-rel">
          <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
            <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
          </button>
          <ul
            class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
            <li>
              <a href="Games_edit.php" <div style=" border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">
                <h4>A PHP Error was encountered</h4>
                <p>Severity: Warning</p>
                <p>Message: Undefined array key "per_page"</p>
                <p>Filename: game/index.php</p>
                <p>Line Number: 211</p>
                <p>Backtrace:</p>
                <p style="margin-left:10px">
                  File: /home/wwwroot/07_demo/git_mmbet99/application/views/admin/game/index.php<br />
                  Line: 211<br />
                  Function: _error_handler </p>
                <p style="margin-left:10px">
                  File: /home/wwwroot/07_demo/git_mmbet99/application/controllers/D3oadp5j/Games.php<br />
                  Line: 101<br />
                  Function: view </p>
                <p style="margin-left:10px">
                  File: /home/wwwroot/07_demo/git_mmbet99/index.php<br />
                  Line: 315<br />
                  Function: require_once </p>
        </div>"
        class="tooltip-success" data-rel="tooltip" title="修改">
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
    <td>VA </td>
    <td>Stud</td>
    <td>梭哈</td>
    <td>梭哈</td>
    <td>စတုတ်</td>
    <td>通用 </td>
    <td>
      <a href="//game99.demonsupervisor.com/upload/games/games_20220210110932_0.png" data-rel="colorbox"
        class="btn btn-xs btn-info">
        <i class="ace-icon fa fa-search icon-on-right bigger-110"></i>
      </a>
    </td>
    <td>
      <label>
        <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox" value="7" checked />
        <span class="lbl"></span>
      </label>
    </td>
    <td>
      <div class="hidden-sm hidden-xs btn-group">
        <a href="Games_edit.php" class="btn btn-xs btn-info" title="修改">
          <i class="ace-icon fa fa-pencil bigger-120"></i>
        </a>
        <button class="btn btn-xs btn-danger" data-toggle="modal" title="删除" data-target="#dialog-confirm"
          data-action="#">
          <i class="ace-icon fa fa-trash-o bigger-120"></i>
        </button>
      </div>
      <div class="hidden-md hidden-lg">
        <div class="inline pos-rel">
          <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
            <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
          </button>
          <ul
            class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
            <li>
              <a href="Games_edit.php" <div style=" border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">
                <h4>A PHP Error was encountered</h4>
                <p>Severity: Warning</p>
                <p>Message: Undefined array key "per_page"</p>
                <p>Filename: game/index.php</p>
                <p>Line Number: 211</p>
                <p>Backtrace:</p>
                <p style="margin-left:10px">
                  File: /home/wwwroot/07_demo/git_mmbet99/application/views/admin/game/index.php<br />
                  Line: 211<br />
                  Function: _error_handler </p>
                <p style="margin-left:10px">
                  File: /home/wwwroot/07_demo/git_mmbet99/application/controllers/D3oadp5j/Games.php<br />
                  Line: 101<br />
                  Function: view </p>
                <p style="margin-left:10px">
                  File: /home/wwwroot/07_demo/git_mmbet99/index.php<br />
                  Line: 315<br />
                  Function: require_once </p>
        </div>"
        class="tooltip-success" data-rel="tooltip" title="修改">
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
    <td>VA </td>
    <td>28 bars</td>
    <td>二八杠</td>
    <td>二八杠</td>
    <td>၂၈ ဘား</td>
    <td>通用 </td>
    <td>
      <a href="//game99.demonsupervisor.com/upload/games/games_20220210110945_0.png" data-rel="colorbox"
        class="btn btn-xs btn-info">
        <i class="ace-icon fa fa-search icon-on-right bigger-110"></i>
      </a>
    </td>
    <td>
      <label>
        <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox" value="8" checked />
        <span class="lbl"></span>
      </label>
    </td>
    <td>
      <div class="hidden-sm hidden-xs btn-group">
        <a href="Games_edit.php" class="btn btn-xs btn-info" title="修改">
          <i class="ace-icon fa fa-pencil bigger-120"></i>
        </a>
        <button class="btn btn-xs btn-danger" data-toggle="modal" title="删除" data-target="#dialog-confirm"
          data-action="#">
          <i class="ace-icon fa fa-trash-o bigger-120"></i>
        </button>
      </div>
      <div class="hidden-md hidden-lg">
        <div class="inline pos-rel">
          <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
            <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
          </button>
          <ul
            class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
            <li>
              <a href="Games_edit.php" <div style=" border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">
                <h4>A PHP Error was encountered</h4>
                <p>Severity: Warning</p>
                <p>Message: Undefined array key "per_page"</p>
                <p>Filename: game/index.php</p>
                <p>Line Number: 211</p>
                <p>Backtrace:</p>
                <p style="margin-left:10px">
                  File: /home/wwwroot/07_demo/git_mmbet99/application/views/admin/game/index.php<br />
                  Line: 211<br />
                  Function: _error_handler </p>
                <p style="margin-left:10px">
                  File: /home/wwwroot/07_demo/git_mmbet99/application/controllers/D3oadp5j/Games.php<br />
                  Line: 101<br />
                  Function: view </p>
                <p style="margin-left:10px">
                  File: /home/wwwroot/07_demo/git_mmbet99/index.php<br />
                  Line: 315<br />
                  Function: require_once </p>
        </div>"
        class="tooltip-success" data-rel="tooltip" title="修改">
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
    <td>VA </td>
    <td>Dragon and Tiger Fight</td>
    <td>龍虎鬥</td>
    <td>龙虎斗</td>
    <td>နဂါးနှင့်ကျားတိုက်ပွဲ</td>
    <td>通用 </td>
    <td>
      <a href="//game99.demonsupervisor.com/upload/games/games_20220210111004_0.png" data-rel="colorbox"
        class="btn btn-xs btn-info">
        <i class="ace-icon fa fa-search icon-on-right bigger-110"></i>
      </a>
    </td>
    <td>
      <label>
        <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox" value="9" checked />
        <span class="lbl"></span>
      </label>
    </td>
    <td>
      <div class="hidden-sm hidden-xs btn-group">
        <a href="Games_edit.php" class="btn btn-xs btn-info" title="修改">
          <i class="ace-icon fa fa-pencil bigger-120"></i>
        </a>
        <button class="btn btn-xs btn-danger" data-toggle="modal" title="删除" data-target="#dialog-confirm"
          data-action="#">
          <i class="ace-icon fa fa-trash-o bigger-120"></i>
        </button>
      </div>
      <div class="hidden-md hidden-lg">
        <div class="inline pos-rel">
          <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
            <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
          </button>
          <ul
            class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
            <li>
              <a href="Games_edit.php" <div style=" border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">
                <h4>A PHP Error was encountered</h4>
                <p>Severity: Warning</p>
                <p>Message: Undefined array key "per_page"</p>
                <p>Filename: game/index.php</p>
                <p>Line Number: 211</p>
                <p>Backtrace:</p>
                <p style="margin-left:10px">
                  File: /home/wwwroot/07_demo/git_mmbet99/application/views/admin/game/index.php<br />
                  Line: 211<br />
                  Function: _error_handler </p>
                <p style="margin-left:10px">
                  File: /home/wwwroot/07_demo/git_mmbet99/application/controllers/D3oadp5j/Games.php<br />
                  Line: 101<br />
                  Function: view </p>
                <p style="margin-left:10px">
                  File: /home/wwwroot/07_demo/git_mmbet99/index.php<br />
                  Line: 315<br />
                  Function: require_once </p>
        </div>"
        class="tooltip-success" data-rel="tooltip" title="修改">
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
  </div> <!-- 主要内容 结束 -->
  </div><!-- /.col -->
  </div><!-- /.row -->
  </div>
  <!-- /.page-content -->
  </div>
  </div><!-- /.main-content -->
  <div class="footer">
    <div class="footer-inner">
      <div class="footer-content">
        <span class="bigger-120">
          <span class="blue bolder">管理平台</span>
          Application &copy; 2022
        </span>
        &nbsp; &nbsp;
      </div>
    </div>
  </div>
  <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
    <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
  </a>
  </div><!-- /.main-container -->
  <div id="sound"></div>
  <!-- ace scripts -->
  <script src="js/ace-elements.min.js"></script>
  <script src="js/ace.min.js"></script>
</body>

</html>
