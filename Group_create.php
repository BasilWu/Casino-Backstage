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
              <a href="javascript:void(0)">群组数据登录</a>
            </li>
            <li>
              <a href="group_create.php">群组数据登录</a>
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
              <script src="js/jquery.nestable.min.js"></script>
              <script type="text/javascript">
              $(function() {
                countItem();
                $('.dd').nestable({
                  maxDepth: 0,
                  group: 0
                });
                $('.dd').nestable('collapseAll');
                $.validator.addMethod("checkGroup", function(value, element) {
                  var str = value;
                  var result = false;
                  $.ajax({
                    type: "POST",
                    url: CI_URL + "D3oadp5j/Group/ajax_chk_u_power",
                    cache: false,
                    async: false,
                    data: {
                      u_power: str
                    }
                  }).done(function(msg) {
                    if (msg.trim() == 'Y') {
                      result = true;
                    } else {
                      result = false;
                    }
                  });
                  return result;
                }, "此群组已经存在");
              });

              function chkbox_set(num, obj) { //自动勾选上一层
                if ($(obj).prop('checked')) {
                  $('.mainbox' + num).prop('checked', true);
                }
                var chile_len = $('.nodebox' + num + '[type="checkbox"]:checked').length;
                if (chile_len == 0) {
                  $('.mainbox' + num).prop('checked', false);
                }
                countItem();
              }

              function chkbox_set_sub(num) { //自动勾选下一层

                if ($('.mainbox' + num).prop('checked')) {
                  $('.nodebox' + num).prop('checked', true);
                } else {
                  $('.nodebox' + num).prop('checked', false);
                }
                //当主选项被选取 展开下层选单 取消选取 收和选单
                var par = $('.mainbox' + num).parents('.dd-item');
                if ($(par).hasClass('dd-collapsed')) {
                  $(par).find('[data-action="expand"]').trigger('click');
                } else {
                  $(par).find('[data-action="collapse"]').trigger('click');
                }
                countItem();
              }

              function countItem() {
                var ckList = '';
                $('.chkItem').each(function() {
                  if ($(this).prop('checked')) {
                    ckList += (ckList != "" ? "," : "") + $(this).val();
                  }
                });
                $('#power_list').prop('value', ckList);
                //console.log(ckList);
              }
              </script>
              <form class="form-horizontal newoil-form" method="post" action="#">
                <input name="power_list" id="power_list" type="hidden" />
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <div class="widget-box widget-color-blue2">
                      <div class="widget-header">
                        <h4 class="widget-title lighter smaller">群组数据登录</h4>
                      </div>
                      <div class="widget-body">
                        <div class="widget-main padding-8">
                          <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-4">
                              <div class="widget-box widget-color-green2">
                                <div class="widget-header">
                                  <h4 class="widget-title lighter smaller">权限设置</h4>
                                </div>
                                <div class="widget-body">
                                  <div class="widget-main padding-8">
                                    <div class="dd">
                                      <ol class="dd-list dd-nodrag">
                                        <li class="dd-item item-orange dd-nodrag">
                                          <div class="dd-handle dd-nodrag">
                                            <label class="pos-rel">
                                              <input type="checkbox" class="ace mainbox1 chkItem" value="1"
                                                onClick="chkbox_set_sub('1')" />
                                              <span class="lbl"></span>
                                            </label>
                                            权限管理系统
                                          </div>
                                          <ol class="dd-list dd-nodrag">
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox1 chkItem"
                                                    onClick="chkbox_set('1',this)" value="2" />
                                                  <span class="lbl"></span>
                                                </label>
                                                后端帐号登录
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox1 chkItem"
                                                    onClick="chkbox_set('1',this)" value="78" />
                                                  <span class="lbl"></span>
                                                </label>
                                                后端帐号修改
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox1 chkItem"
                                                    onClick="chkbox_set('1',this)" value="79" />
                                                  <span class="lbl"></span>
                                                </label>
                                                后端帐号删除
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox1 chkItem"
                                                    onClick="chkbox_set('1',this)" value="3" />
                                                  <span class="lbl"></span>
                                                </label>
                                                后端帐号查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox1 chkItem"
                                                    onClick="chkbox_set('1',this)" value="224" />
                                                  <span class="lbl"></span>
                                                </label>
                                                后端登录历程
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox1 chkItem"
                                                    onClick="chkbox_set('1',this)" value="4" />
                                                  <span class="lbl"></span>
                                                </label>
                                                群组数据登录
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox1 chkItem"
                                                    onClick="chkbox_set('1',this)" value="80" />
                                                  <span class="lbl"></span>
                                                </label>
                                                群组数据修改
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox1 chkItem"
                                                    onClick="chkbox_set('1',this)" value="81" />
                                                  <span class="lbl"></span>
                                                </label>
                                                群组数据删除
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox1 chkItem"
                                                    onClick="chkbox_set('1',this)" value="5" />
                                                  <span class="lbl"></span>
                                                </label>
                                                群组数据管理
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox1 chkItem"
                                                    onClick="chkbox_set('1',this)" value="27" />
                                                  <span class="lbl"></span>
                                                </label>
                                                后端帐号维护
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox1 chkItem"
                                                    onClick="chkbox_set('1',this)" value="6" />
                                                  <span class="lbl"></span>
                                                </label>
                                                网站设置管理
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox1 chkItem"
                                                    onClick="chkbox_set('1',this)" value="262" />
                                                  <span class="lbl"></span>
                                                </label>
                                                游戏维护设置
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox1 chkItem"
                                                    onClick="chkbox_set('1',this)" value="263" />
                                                  <span class="lbl"></span>
                                                </label>
                                                维护设置修改
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox1 chkItem"
                                                    onClick="chkbox_set('1',this)" value="284" />
                                                  <span class="lbl"></span>
                                                </label>
                                                放扣点设置
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox1 chkItem"
                                                    onClick="chkbox_set('1',this)" value="285" />
                                                  <span class="lbl"></span>
                                                </label>
                                                放扣点名称添加
                                              </div>
                                            </li>
                                          </ol>
                                        </li>
                                        <li class="dd-item item-orange dd-nodrag">
                                          <div class="dd-handle dd-nodrag">
                                            <label class="pos-rel">
                                              <input type="checkbox" class="ace mainbox129 chkItem" value="129"
                                                onClick="chkbox_set_sub('129')" />
                                              <span class="lbl"></span>
                                            </label>
                                            合营代理系统
                                          </div>
                                          <ol class="dd-list dd-nodrag">
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox129 chkItem"
                                                    onClick="chkbox_set('129',this)" value="133" />
                                                  <span class="lbl"></span>
                                                </label>
                                                添加股东数据
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox129 chkItem"
                                                    onClick="chkbox_set('129',this)" value="130" />
                                                  <span class="lbl"></span>
                                                </label>
                                                股东数据管理
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox129 chkItem"
                                                    onClick="chkbox_set('129',this)" value="134" />
                                                  <span class="lbl"></span>
                                                </label>
                                                股东数据修改
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox129 chkItem"
                                                    onClick="chkbox_set('129',this)" value="135" />
                                                  <span class="lbl"></span>
                                                </label>
                                                股东数据删除
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox129 chkItem"
                                                    onClick="chkbox_set('129',this)" value="137" />
                                                  <span class="lbl"></span>
                                                </label>
                                                添加总代数据
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox129 chkItem"
                                                    onClick="chkbox_set('129',this)" value="138" />
                                                  <span class="lbl"></span>
                                                </label>
                                                总代数据管理
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox129 chkItem"
                                                    onClick="chkbox_set('129',this)" value="139" />
                                                  <span class="lbl"></span>
                                                </label>
                                                总代数据修改
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox129 chkItem"
                                                    onClick="chkbox_set('129',this)" value="140" />
                                                  <span class="lbl"></span>
                                                </label>
                                                总代数据删除
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox129 chkItem"
                                                    onClick="chkbox_set('129',this)" value="142" />
                                                  <span class="lbl"></span>
                                                </label>
                                                代理数据添加
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox129 chkItem"
                                                    onClick="chkbox_set('129',this)" value="143" />
                                                  <span class="lbl"></span>
                                                </label>
                                                代理数据查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox129 chkItem"
                                                    onClick="chkbox_set('129',this)" value="144" />
                                                  <span class="lbl"></span>
                                                </label>
                                                代理数据修改
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox129 chkItem"
                                                    onClick="chkbox_set('129',this)" value="145" />
                                                  <span class="lbl"></span>
                                                </label>
                                                代理数据删除
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox129 chkItem"
                                                    onClick="chkbox_set('129',this)" value="182" />
                                                  <span class="lbl"></span>
                                                </label>
                                                代理申请查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox129 chkItem"
                                                    onClick="chkbox_set('129',this)" value="183" />
                                                  <span class="lbl"></span>
                                                </label>
                                                代理申请删除
                                              </div>
                                            </li>
                                          </ol>
                                        </li>
                                        <li class="dd-item item-orange dd-nodrag">
                                          <div class="dd-handle dd-nodrag">
                                            <label class="pos-rel">
                                              <input type="checkbox" class="ace mainbox32 chkItem" value="32"
                                                onClick="chkbox_set_sub('32')" />
                                              <span class="lbl"></span>
                                            </label>
                                            会员管理系统
                                          </div>
                                          <ol class="dd-list dd-nodrag">
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox32 chkItem"
                                                    onClick="chkbox_set('32',this)" value="116" />
                                                  <span class="lbl"></span>
                                                </label>
                                                会员数据登录
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox32 chkItem"
                                                    onClick="chkbox_set('32',this)" value="36" />
                                                  <span class="lbl"></span>
                                                </label>
                                                会员数据查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox32 chkItem"
                                                    onClick="chkbox_set('32',this)" value="117" />
                                                  <span class="lbl"></span>
                                                </label>
                                                会员数据修改
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox32 chkItem"
                                                    onClick="chkbox_set('32',this)" value="118" />
                                                  <span class="lbl"></span>
                                                </label>
                                                会员数据删除
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox32 chkItem"
                                                    onClick="chkbox_set('32',this)" value="237" />
                                                  <span class="lbl"></span>
                                                </label>
                                                会员数据浏览
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox32 chkItem"
                                                    onClick="chkbox_set('32',this)" value="153" />
                                                  <span class="lbl"></span>
                                                </label>
                                                会员钱包管理
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox32 chkItem"
                                                    onClick="chkbox_set('32',this)" value="243" />
                                                  <span class="lbl"></span>
                                                </label>
                                                会员转点纪录
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox32 chkItem"
                                                    onClick="chkbox_set('32',this)" value="218" />
                                                  <span class="lbl"></span>
                                                </label>
                                                会员消息发送
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox32 chkItem"
                                                    onClick="chkbox_set('32',this)" value="209" />
                                                  <span class="lbl"></span>
                                                </label>
                                                黑名单设置
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox32 chkItem"
                                                    onClick="chkbox_set('32',this)" value="210" />
                                                  <span class="lbl"></span>
                                                </label>
                                                添加黑名单
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox32 chkItem"
                                                    onClick="chkbox_set('32',this)" value="211" />
                                                  <span class="lbl"></span>
                                                </label>
                                                修改黑名单
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox32 chkItem"
                                                    onClick="chkbox_set('32',this)" value="212" />
                                                  <span class="lbl"></span>
                                                </label>
                                                删除黑名单
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox32 chkItem"
                                                    onClick="chkbox_set('32',this)" value="155" />
                                                  <span class="lbl"></span>
                                                </label>
                                                创建游戏帐号
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox32 chkItem"
                                                    onClick="chkbox_set('32',this)" value="66" />
                                                  <span class="lbl"></span>
                                                </label>
                                                会员需知设置
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox32 chkItem"
                                                    onClick="chkbox_set('32',this)" value="121" />
                                                  <span class="lbl"></span>
                                                </label>
                                                会员密码修改
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox32 chkItem"
                                                    onClick="chkbox_set('32',this)" value="154" />
                                                  <span class="lbl"></span>
                                                </label>
                                                查看游戏帐号
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox32 chkItem"
                                                    onClick="chkbox_set('32',this)" value="208" />
                                                  <span class="lbl"></span>
                                                </label>
                                                银行数据修改
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox32 chkItem"
                                                    onClick="chkbox_set('32',this)" value="219" />
                                                  <span class="lbl"></span>
                                                </label>
                                                代理换线作业
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox32 chkItem"
                                                    onClick="chkbox_set('32',this)" value="223" />
                                                  <span class="lbl"></span>
                                                </label>
                                                会员登录历程
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox32 chkItem"
                                                    onClick="chkbox_set('32',this)" value="261" />
                                                  <span class="lbl"></span>
                                                </label>
                                                汇出Excel
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox32 chkItem"
                                                    onClick="chkbox_set('32',this)" value="271" />
                                                  <span class="lbl"></span>
                                                </label>
                                                会员点数转回
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox32 chkItem"
                                                    onClick="chkbox_set('32',this)" value="293" />
                                                  <span class="lbl"></span>
                                                </label>
                                                会员返水设置
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox32 chkItem"
                                                    onClick="chkbox_set('32',this)" value="294" />
                                                  <span class="lbl"></span>
                                                </label>
                                                会员返水发放
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox32 chkItem"
                                                    onClick="chkbox_set('32',this)" value="286" />
                                                  <span class="lbl"></span>
                                                </label>
                                                会员点数放扣点
                                              </div>
                                            </li>
                                          </ol>
                                        </li>
                                        <li class="dd-item item-orange dd-nodrag">
                                          <div class="dd-handle dd-nodrag">
                                            <label class="pos-rel">
                                              <input type="checkbox" class="ace mainbox156 chkItem" value="156"
                                                onClick="chkbox_set_sub('156')" />
                                              <span class="lbl"></span>
                                            </label>
                                            报表管理系统
                                          </div>
                                          <ol class="dd-list dd-nodrag">
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="157" />
                                                  <span class="lbl"></span>
                                                </label>
                                                欧博报表查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="158" />
                                                  <span class="lbl"></span>
                                                </label>
                                                欧博会员明细
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="244" />
                                                  <span class="lbl"></span>
                                                </label>
                                                欧博电子查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="245" />
                                                  <span class="lbl"></span>
                                                </label>
                                                欧博电子明细
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="206" />
                                                  <span class="lbl"></span>
                                                </label>
                                                沙龙一馆报表查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="207" />
                                                  <span class="lbl"></span>
                                                </label>
                                                沙龙一馆会员详细
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="290" />
                                                  <span class="lbl"></span>
                                                </label>
                                                沙龙二馆会员详细
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="289" />
                                                  <span class="lbl"></span>
                                                </label>
                                                沙龙二馆报表查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="241" />
                                                  <span class="lbl"></span>
                                                </label>
                                                沙龙查找(快速)
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="221" />
                                                  <span class="lbl"></span>
                                                </label>
                                                英雄会员明细
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="220" />
                                                  <span class="lbl"></span>
                                                </label>
                                                英雄报表查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="222" />
                                                  <span class="lbl"></span>
                                                </label>
                                                捕鱼报表查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="225" />
                                                  <span class="lbl"></span>
                                                </label>
                                                QT电子报表
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="242" />
                                                  <span class="lbl"></span>
                                                </label>
                                                QT会员明细
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="226" />
                                                  <span class="lbl"></span>
                                                </label>
                                                DG报表查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="228" />
                                                  <span class="lbl"></span>
                                                </label>
                                                WM报表查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="268" />
                                                  <span class="lbl"></span>
                                                </label>
                                                WM会员明细
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="227" />
                                                  <span class="lbl"></span>
                                                </label>
                                                DG会员明细
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="229" />
                                                  <span class="lbl"></span>
                                                </label>
                                                鑫宝体育报表
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="230" />
                                                  <span class="lbl"></span>
                                                </label>
                                                鑫宝会员明细
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="231" />
                                                  <span class="lbl"></span>
                                                </label>
                                                7PK报表查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="233" />
                                                  <span class="lbl"></span>
                                                </label>
                                                宾果报表查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="234" />
                                                  <span class="lbl"></span>
                                                </label>
                                                宾果会员明细
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="239" />
                                                  <span class="lbl"></span>
                                                </label>
                                                Super六合彩
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="247" />
                                                  <span class="lbl"></span>
                                                </label>
                                                EB真人查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="248" />
                                                  <span class="lbl"></span>
                                                </label>
                                                EB会员明细
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="255" />
                                                  <span class="lbl"></span>
                                                </label>
                                                9K北京赛车查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="256" />
                                                  <span class="lbl"></span>
                                                </label>
                                                9K北京赛车明细
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="269" />
                                                  <span class="lbl"></span>
                                                </label>
                                                PN北京赛车查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="270" />
                                                  <span class="lbl"></span>
                                                </label>
                                                PN北京赛车明细
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="258" />
                                                  <span class="lbl"></span>
                                                </label>
                                                AMEBA电子查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="259" />
                                                  <span class="lbl"></span>
                                                </label>
                                                AMEBA报表明细查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="264" />
                                                  <span class="lbl"></span>
                                                </label>
                                                PG电子查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="265" />
                                                  <span class="lbl"></span>
                                                </label>
                                                PG电子会员明细
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="266" />
                                                  <span class="lbl"></span>
                                                </label>
                                                泛亚电竞查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="267" />
                                                  <span class="lbl"></span>
                                                </label>
                                                泛亚电竞会员明细
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="274" />
                                                  <span class="lbl"></span>
                                                </label>
                                                皇朝电竞查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="275" />
                                                  <span class="lbl"></span>
                                                </label>
                                                皇朝电竞会员明细
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="276" />
                                                  <span class="lbl"></span>
                                                </label>
                                                VG电子查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="277" />
                                                  <span class="lbl"></span>
                                                </label>
                                                VG电子会员查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="272" />
                                                  <span class="lbl"></span>
                                                </label>
                                                彩播报表查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="273" />
                                                  <span class="lbl"></span>
                                                </label>
                                                彩播报表明细查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="287" />
                                                  <span class="lbl"></span>
                                                </label>
                                                VA报表查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="291" />
                                                  <span class="lbl"></span>
                                                </label>
                                                EG捕鱼查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="298" />
                                                  <span class="lbl"></span>
                                                </label>
                                                9KG表查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="288" />
                                                  <span class="lbl"></span>
                                                </label>
                                                VA电子会员查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="292" />
                                                  <span class="lbl"></span>
                                                </label>
                                                EG捕鱼会员查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="299" />
                                                  <span class="lbl"></span>
                                                </label>
                                                YGG Slot会员明细
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="181" />
                                                  <span class="lbl"></span>
                                                </label>
                                                整合报表查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox156 chkItem"
                                                    onClick="chkbox_set('156',this)" value="260" />
                                                  <span class="lbl"></span>
                                                </label>
                                                太阳神宾果
                                              </div>
                                            </li>
                                          </ol>
                                        </li>
                                        <li class="dd-item item-orange dd-nodrag">
                                          <div class="dd-handle dd-nodrag">
                                            <label class="pos-rel">
                                              <input type="checkbox" class="ace mainbox34 chkItem" value="34"
                                                onClick="chkbox_set_sub('34')" />
                                              <span class="lbl"></span>
                                            </label>
                                            营运管理系统
                                          </div>
                                          <ol class="dd-list dd-nodrag">
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox34 chkItem"
                                                    onClick="chkbox_set('34',this)" value="175" />
                                                  <span class="lbl"></span>
                                                </label>
                                                交易管理查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox34 chkItem"
                                                    onClick="chkbox_set('34',this)" value="232" />
                                                  <span class="lbl"></span>
                                                </label>
                                                会员交易明细
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox34 chkItem"
                                                    onClick="chkbox_set('34',this)" value="217" />
                                                  <span class="lbl"></span>
                                                </label>
                                                营运周报查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox34 chkItem"
                                                    onClick="chkbox_set('34',this)" value="51" />
                                                  <span class="lbl"></span>
                                                </label>
                                                储值数据查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox34 chkItem"
                                                    onClick="chkbox_set('34',this)" value="159" />
                                                  <span class="lbl"></span>
                                                </label>
                                                宝物抛售查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox34 chkItem"
                                                    onClick="chkbox_set('34',this)" value="193" />
                                                  <span class="lbl"></span>
                                                </label>
                                                银行汇款查找
                                              </div>
                                            </li>
                                          </ol>
                                        </li>
                                        <li class="dd-item item-orange dd-nodrag">
                                          <div class="dd-handle dd-nodrag">
                                            <label class="pos-rel">
                                              <input type="checkbox" class="ace mainbox160 chkItem" value="160"
                                                onClick="chkbox_set_sub('160')" />
                                              <span class="lbl"></span>
                                            </label>
                                            客服消息管理
                                          </div>
                                          <ol class="dd-list dd-nodrag">
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox160 chkItem"
                                                    onClick="chkbox_set('160',this)" value="161" />
                                                  <span class="lbl"></span>
                                                </label>
                                                会员消息查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox160 chkItem"
                                                    onClick="chkbox_set('160',this)" value="162" />
                                                  <span class="lbl"></span>
                                                </label>
                                                会员消息回复
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox160 chkItem"
                                                    onClick="chkbox_set('160',this)" value="168" />
                                                  <span class="lbl"></span>
                                                </label>
                                                客服消息添加
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox160 chkItem"
                                                    onClick="chkbox_set('160',this)" value="169" />
                                                  <span class="lbl"></span>
                                                </label>
                                                客服消息查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox160 chkItem"
                                                    onClick="chkbox_set('160',this)" value="304" />
                                                  <span class="lbl"></span>
                                                </label>
                                                前台-客服链接设置
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox160 chkItem"
                                                    onClick="chkbox_set('160',this)" value="305" />
                                                  <span class="lbl"></span>
                                                </label>
                                                前台-客服链接修改送出
                                              </div>
                                            </li>
                                          </ol>
                                        </li>
                                        <li class="dd-item item-orange dd-nodrag">
                                          <div class="dd-handle dd-nodrag">
                                            <label class="pos-rel">
                                              <input type="checkbox" class="ace mainbox297 chkItem" value="297"
                                                onClick="chkbox_set_sub('297')" />
                                              <span class="lbl"></span>
                                            </label>
                                            独立报表管理
                                          </div>
                                          <ol class="dd-list dd-nodrag">
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox297 chkItem"
                                                    onClick="chkbox_set('297',this)" value="300" />
                                                  <span class="lbl"></span>
                                                </label>
                                                二元期权查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox297 chkItem"
                                                    onClick="chkbox_set('297',this)" value="301" />
                                                  <span class="lbl"></span>
                                                </label>
                                                二元期权会员明细
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox297 chkItem"
                                                    onClick="chkbox_set('297',this)" value="302" />
                                                  <span class="lbl"></span>
                                                </label>
                                                101彩报表
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox297 chkItem"
                                                    onClick="chkbox_set('297',this)" value="303" />
                                                  <span class="lbl"></span>
                                                </label>
                                                101彩会员明细
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox297 chkItem"
                                                    onClick="chkbox_set('297',this)" value="295" />
                                                  <span class="lbl"></span>
                                                </label>
                                                全家彩查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox297 chkItem"
                                                    onClick="chkbox_set('297',this)" value="296" />
                                                  <span class="lbl"></span>
                                                </label>
                                                全家彩会员查找
                                              </div>
                                            </li>
                                          </ol>
                                        </li>
                                        <li class="dd-item item-orange dd-nodrag">
                                          <div class="dd-handle dd-nodrag">
                                            <label class="pos-rel">
                                              <input type="checkbox" class="ace mainbox163 chkItem" value="163"
                                                onClick="chkbox_set_sub('163')" />
                                              <span class="lbl"></span>
                                            </label>
                                            优惠活动管理
                                          </div>
                                          <ol class="dd-list dd-nodrag">
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox163 chkItem"
                                                    onClick="chkbox_set('163',this)" value="164" />
                                                  <span class="lbl"></span>
                                                </label>
                                                优惠活动登录
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox163 chkItem"
                                                    onClick="chkbox_set('163',this)" value="165" />
                                                  <span class="lbl"></span>
                                                </label>
                                                优惠活动修改
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox163 chkItem"
                                                    onClick="chkbox_set('163',this)" value="166" />
                                                  <span class="lbl"></span>
                                                </label>
                                                优惠活动删除
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox163 chkItem"
                                                    onClick="chkbox_set('163',this)" value="167" />
                                                  <span class="lbl"></span>
                                                </label>
                                                优惠活动查找
                                              </div>
                                            </li>
                                          </ol>
                                        </li>
                                        <li class="dd-item item-orange dd-nodrag">
                                          <div class="dd-handle dd-nodrag">
                                            <label class="pos-rel">
                                              <input type="checkbox" class="ace mainbox19 chkItem" value="19"
                                                onClick="chkbox_set_sub('19')" />
                                              <span class="lbl"></span>
                                            </label>
                                            消息管理系统
                                          </div>
                                          <ol class="dd-list dd-nodrag">
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox19 chkItem"
                                                    onClick="chkbox_set('19',this)" value="20" />
                                                  <span class="lbl"></span>
                                                </label>
                                                消息数据登录
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox19 chkItem"
                                                    onClick="chkbox_set('19',this)" value="21" />
                                                  <span class="lbl"></span>
                                                </label>
                                                消息数据查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox19 chkItem"
                                                    onClick="chkbox_set('19',this)" value="82" />
                                                  <span class="lbl"></span>
                                                </label>
                                                消息数据删除
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox19 chkItem"
                                                    onClick="chkbox_set('19',this)" value="84" />
                                                  <span class="lbl"></span>
                                                </label>
                                                消息数据修改
                                              </div>
                                            </li>
                                          </ol>
                                        </li>
                                        <li class="dd-item item-orange dd-nodrag">
                                          <div class="dd-handle dd-nodrag">
                                            <label class="pos-rel">
                                              <input type="checkbox" class="ace mainbox46 chkItem" value="46"
                                                onClick="chkbox_set_sub('46')" />
                                              <span class="lbl"></span>
                                            </label>
                                            广告管理系统
                                          </div>
                                          <ol class="dd-list dd-nodrag">
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox46 chkItem"
                                                    onClick="chkbox_set('46',this)" value="47" />
                                                  <span class="lbl"></span>
                                                </label>
                                                广告数据登录
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox46 chkItem"
                                                    onClick="chkbox_set('46',this)" value="48" />
                                                  <span class="lbl"></span>
                                                </label>
                                                广告数据查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox46 chkItem"
                                                    onClick="chkbox_set('46',this)" value="85" />
                                                  <span class="lbl"></span>
                                                </label>
                                                广告数据修改
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox46 chkItem"
                                                    onClick="chkbox_set('46',this)" value="86" />
                                                  <span class="lbl"></span>
                                                </label>
                                                广告数据删除
                                              </div>
                                            </li>
                                          </ol>
                                        </li>
                                        <li class="dd-item item-orange dd-nodrag">
                                          <div class="dd-handle dd-nodrag">
                                            <label class="pos-rel">
                                              <input type="checkbox" class="ace mainbox184 chkItem" value="184"
                                                onClick="chkbox_set_sub('184')" />
                                              <span class="lbl"></span>
                                            </label>
                                            金流管理系统
                                          </div>
                                          <ol class="dd-list dd-nodrag">
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox184 chkItem"
                                                    onClick="chkbox_set('184',this)" value="278" />
                                                  <span class="lbl"></span>
                                                </label>
                                                会员金流设置
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox184 chkItem"
                                                    onClick="chkbox_set('184',this)" value="196" />
                                                  <span class="lbl"></span>
                                                </label>
                                                添加绿界帐户
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox184 chkItem"
                                                    onClick="chkbox_set('184',this)" value="197" />
                                                  <span class="lbl"></span>
                                                </label>
                                                绿界帐户查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox184 chkItem"
                                                    onClick="chkbox_set('184',this)" value="198" />
                                                  <span class="lbl"></span>
                                                </label>
                                                绿界帐户修改
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox184 chkItem"
                                                    onClick="chkbox_set('184',this)" value="199" />
                                                  <span class="lbl"></span>
                                                </label>
                                                绿界帐户删除
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox184 chkItem"
                                                    onClick="chkbox_set('184',this)" value="246" />
                                                  <span class="lbl"></span>
                                                </label>
                                                金流金额设置
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox184 chkItem"
                                                    onClick="chkbox_set('184',this)" value="189" />
                                                  <span class="lbl"></span>
                                                </label>
                                                公司帐户添加
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox184 chkItem"
                                                    onClick="chkbox_set('184',this)" value="190" />
                                                  <span class="lbl"></span>
                                                </label>
                                                公司帐户修改
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox184 chkItem"
                                                    onClick="chkbox_set('184',this)" value="191" />
                                                  <span class="lbl"></span>
                                                </label>
                                                公司帐户删除
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox184 chkItem"
                                                    onClick="chkbox_set('184',this)" value="192" />
                                                  <span class="lbl"></span>
                                                </label>
                                                公司帐户查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox184 chkItem"
                                                    onClick="chkbox_set('184',this)" value="280" />
                                                  <span class="lbl"></span>
                                                </label>
                                                会员金流添加
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox184 chkItem"
                                                    onClick="chkbox_set('184',this)" value="281" />
                                                  <span class="lbl"></span>
                                                </label>
                                                会员金流修改
                                              </div>
                                            </li>
                                          </ol>
                                        </li>
                                        <li class="dd-item item-orange dd-nodrag">
                                          <div class="dd-handle dd-nodrag">
                                            <label class="pos-rel">
                                              <input type="checkbox" class="ace mainbox148 chkItem" value="148"
                                                onClick="chkbox_set_sub('148')" />
                                              <span class="lbl"></span>
                                            </label>
                                            游戏数据管理
                                          </div>
                                          <ol class="dd-list dd-nodrag">
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox148 chkItem"
                                                    onClick="chkbox_set('148',this)" value="200" />
                                                  <span class="lbl"></span>
                                                </label>
                                                游戏数据添加
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox148 chkItem"
                                                    onClick="chkbox_set('148',this)" value="201" />
                                                  <span class="lbl"></span>
                                                </label>
                                                游戏数据查找
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox148 chkItem"
                                                    onClick="chkbox_set('148',this)" value="202" />
                                                  <span class="lbl"></span>
                                                </label>
                                                游戏数据修改
                                              </div>
                                            </li>
                                            <li class="dd-item item-red dd-nodrag">
                                              <div class="dd-handle dd-nodrag">
                                                <label class="pos-rel">
                                                  <input type="checkbox" class="ace nodebox148 chkItem"
                                                    onClick="chkbox_set('148',this)" value="203" />
                                                  <span class="lbl"></span>
                                                </label>
                                                游戏数据删除
                                              </div>
                                            </li>
                                          </ol>
                                        </li>
                                      </ol>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-group">
                                <label for="inputWarning" class="col-sm-3 control-label no-padding-right">群组代码</label>
                                <div class="col-xs-12 col-sm-5">
                                  <input type="text" class="form-control checkGroup digits" min="1" id="u_power"
                                    name="u_power" value="" placeholder="群组代码" required />
                                  <span class="help-block">数字越小权限越大</span>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputWarning" class="col-sm-3 control-label no-padding-right">群组名称</label>
                                <div class="col-xs-12 col-sm-5">
                                  <input type="text" class="form-control" id="power_name" name="power_name" value=""
                                    placeholder="群组名称" required="required">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputWarning" class="col-sm-3 control-label no-padding-right"></label>
                                <div class="col-xs-12 col-sm-5">
                                  <button type="submit" class="btn btn-primary">送出</button>
                                  <a class='btn btn-danger' href='Group_index.php'>取消</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form> <!-- 主要内容 结束 -->
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
