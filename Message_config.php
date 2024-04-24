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
              <a href="javascript:void(0)">前台-客服链接设置</a>
            </li>
            <li>
              <a href="Message_config.php">前台-客服链接设置</a>
            </li>
          </ul><!-- /.breadcrumb -->
        </div>
        <div class="page-content">
          <?php include "include/in_menu_set.php"?>
          <div class="row">
            <div class="col-xs-12">
              <!-- 主要内容 开始 -->
              <!--UI、日期组件-->
              <script type="text/javascript" src="https://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>
              <!--end-->
              <div class="col-sm-12">
                <!-- Tab panes -->
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active"><br>
                    <p class="text-info">可以使用清空网址内容的方式，让前台该客服按钮不出现</a>
                      <!-- 表格 无搜寻功能 开始-->
                    <table class="table table-striped table-bordered bootstrap-datatable responsive" width="100%">
                      <thead>
                        <tr>
                          <!-- 表格 标题名称 开始 -->
                          <th width="20%">客服种类</th>
                          <th width="10%">网站语言</th>
                          <th width="60%">链接网址</th>
                          <th width="10%">编辑</th>
                          <!-- 表格 标题名称 结束 -->
                        </tr>
                      </thead>
                      <tbody>
                        <!-- 表格 内容 开始-->
                        <tr>
                          <td>前台下方区域，按钮1</td>
                          <td>English</td>
                          <td>https://www.facebook.com/</td>
                          <td><a href="Message_configok.php" title="修改">修改</a></td>
                        </tr>
                        <tr>
                          <td>前台下方区域，按钮1</td>
                          <td>繁體中文</td>
                          <td>https://www.facebook.com/</td>
                          <td><a href="Message_configok.php" title="修改">修改</a></td>
                        </tr>
                        <tr>
                          <td>前台下方区域，按钮1</td>
                          <td>简体中文</td>
                          <td>https://www.facebook.com/</td>
                          <td><a href="Message_configok.php" title="修改">修改</a></td>
                        </tr>
                        <tr>
                          <td>前台下方区域，按钮1</td>
                          <td>မြန်မာ</td>
                          <td>https://www.facebook.com/</td>
                          <td><a href="Message_configok.php" title="修改">修改</a></td>
                        </tr>
                        <tr>
                          <td>前台下方区域，按钮2</td>
                          <td>English</td>
                          <td>https://www.facebook.com/</td>
                          <td><a href="Message_configok.php" title="修改">修改</a></td>
                        </tr>
                        <tr>
                          <td>前台下方区域，按钮2</td>
                          <td>繁體中文</td>
                          <td>https://www.facebook.com/</td>
                          <td><a href="Message_configok.php" title="修改">修改</a></td>
                        </tr>
                        <tr>
                          <td>前台下方区域，按钮2</td>
                          <td>简体中文</td>
                          <td>https://www.facebook.com/</td>
                          <td><a href="Message_configok.php" title="修改">修改</a></td>
                        </tr>
                        <tr>
                          <td>前台下方区域，按钮2</td>
                          <td>မြန်မာ</td>
                          <td>https://www.facebook.com/</td>
                          <td><a href="Message_configok.php" title="修改">修改</a></td>
                        </tr>
                        <tr>
                          <td>前台下方区域，按钮3</td>
                          <td>English</td>
                          <td>https://www.facebook.com/</td>
                          <td><a href="Message_configok.php" title="修改">修改</a></td>
                        </tr>
                        <tr>
                          <td>前台下方区域，按钮3</td>
                          <td>繁體中文</td>
                          <td>https://www.facebook.com/</td>
                          <td><a href="Message_configok.php" title="修改">修改</a></td>
                        </tr>
                        <tr>
                          <td>前台下方区域，按钮3</td>
                          <td>简体中文</td>
                          <td>https://www.facebook.com/</td>
                          <td><a href="Message_configok.php" title="修改">修改</a></td>
                        </tr>
                        <tr>
                          <td>前台下方区域，按钮3</td>
                          <td>မြန်မာ</td>
                          <td>https://www.facebook.com/</td>
                          <td><a href="Message_configok.php" title="修改">修改</a></td>
                        </tr>
                        <!-- 表格 内容 结束-->
                      </tbody>
                    </table>
                    <div class="text-right">
                      数据共有 12 笔<br>
                    </div>
                  </div>
                </div>
              </div> <!-- 主要内容 结束 -->
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
