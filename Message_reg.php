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
              <a href="javascript:void(0)">客服消息添加</a>
            </li>
            <li>
              <a href="Message_reg.php">客服消息添加</a>
            </li>
          </ul><!-- /.breadcrumb -->
        </div>
        <div class="page-content">
          <?php include "include/in_menu_set.php"?>
          <div class="row">
            <div class="col-xs-12">
              <!-- 主要内容 开始 -->
              <div class="col-sm-12">
                <form class="form-horizontal newoil-form" method="post"
                  action="#">
                  <fieldset class="scheduler-border">
                    <legend class="scheduler-border">
                      <h2><i class=" glyphicon glyphicon-plus-sign"></i>客服消息添加</h2>
                    </legend>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">类型</label>
                      <div class="col-sm-8">
                        <select class="form-control selectpicker" name="kind" id="kind" data-live-search="true"
                          data-show-subtext="true" data-size="10" required>
                          <option value="">请选择</option>
                          <option value="1">活動</option>
                          <option value="2">公告</option>
                          <option value="3">客服</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">会员帐号</label>
                      <div class="col-sm-8">
                        <select class="form-control selectpicker" name="mem_num" id="mem_num" data-live-search="true"
                          data-show-subtext="true" data-size="10" required>
                          <option value="">请选择</option>
                          <optgroup label="bet99ch(Simplified Chinese URL)">
                          </optgroup>
                          <optgroup label="bet99en(English URL)">
                          </optgroup>
                          <optgroup label="bet99mm(Burmese URL)">
                          </optgroup>
                          <optgroup label="test03(代理)">
                          </optgroup>
                          <optgroup label="vip666one(Company main station agent line)">
                            <option value="4" data-subtext="123">
                              123456789z</option>
                            <option value="7" data-subtext="123">
                              a123456</option>
                            <option value="10" data-subtext="123">
                              a1234567</option>
                            <option value="11" data-subtext="123">
                              a123456789</option>
                            <option value="16" data-subtext="kokoaung">
                              aakk555</option>
                            <option value="3" data-subtext="Chen Xiaohua">
                              asdf</option>
                            <option value="12" data-subtext="b123">
                              b123456</option>
                            <option value="8" data-subtext="test">
                              C123456</option>
                            <option value="15" data-subtext="Chanthar">
                              Chtjjj</option>
                            <option value="1" data-subtext="meteor">
                              kc666</option>
                            <option value="17" data-subtext="kokoaung">
                              koanthtoo1</option>
                            <option value="19" data-subtext="朱司言">
                              mm6789</option>
                            <option value="18" data-subtext="陳詠輝">
                              qaz44633</option>
                            <option value="2" data-subtext="sdsm666">
                              sdsm666</option>
                            <option value="14" data-subtext="soenyinyi">
                              soenyi85</option>
                            <option value="5" data-subtext="test123">
                              test123</option>
                            <option value="9" data-subtext="test1234">
                              test1234</option>
                            <option value="6" data-subtext="中文中文">
                              test777</option>
                            <option value="13" data-subtext="z123456">
                              z123456</option>
                          </optgroup>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">标题</label>
                      <div class="col-sm-8">
                        <input type="text" name="subject" id="subject" class="form-control" placeholder="标题"
                          required="required" />
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">内容</label>
                      <div class="col-sm-8">
                        <textarea name="word" class="form-control" placeholder="内容" rows="5" required></textarea>
                      </div>
                    </div>
                    <div class="form-group ">
                      <div class="col-sm-offset-2 col-sm-8">
                        <button type="submit" class="btn btn-primary">添加</button>
                        <!-- <a class='btn btn-danger' href='Message_index.php' >返回</a>-->
                      </div>
                    </div>
                  </fieldset>
                </form>
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
