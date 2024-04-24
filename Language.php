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
              <form class="form-horizontal newoil-form" method="post" action="123456">
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <div class="widget-box widget-color-blue2">
                      <div class="widget-header">
                        <h4 class="widget-title lighter smaller">前台語言切換</h4>
                      </div>
                      <div class="widget-body">
                        <div class="widget-main padding-8">
                          <ul class="nav ace-nav">
                            <li class="light-blue dropdown-modal"><a href="javascript:void();"
                                onclick="$.cookie('lang','en_US',{expires:7,path:'/'});location.reload();">English</a>
                            </li>
                            <li class="green dropdown-modal"><a href="javascript:void();"
                                onclick="$.cookie('lang','zh_TW',{expires:7,path:'/'});location.reload();">繁體中文</a></li>
                            <li class="light-blue dropdown-modal"><a href="javascript:void();"
                                onclick="$.cookie('lang','zh_CN',{expires:7,path:'/'});location.reload();">简体中文</a></li>
                            <li class="light-blue dropdown-modal"><a href="javascript:void();"
                                onclick="$.cookie('lang','my_MM',{expires:7,path:'/'});location.reload();">မြန်မာ</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <br><br>
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <div class="widget-box widget-color-blue2">
                      <div class="widget-header">
                        <h4 class="widget-title lighter smaller">後台選單語言切換</h4>
                      </div>
                      <div class="widget-body">
                        <div class="widget-main padding-8">
                          <ul class="nav ace-nav">
                            <li class="light-blue dropdown-modal"><a href="javascript:void();"
                                onclick="$.cookie('langadmin','en_US',{expires:7,path:'/'});location.reload();">English</a>
                            </li>
                            <li class="light-blue dropdown-modal"><a href="javascript:void();"
                                onclick="$.cookie('langadmin','zh_CN',{expires:7,path:'/'});location.reload();">简体中文</a>
                            </li>
                            <li class="light-blue dropdown-modal"><a href="javascript:void();"
                                onclick="$.cookie('langadmin','zh_TW',{expires:7,path:'/'});location.reload();">繁體中文</a>
                            </li>
                          </ul>
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
