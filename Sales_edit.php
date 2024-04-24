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
              <a href="javascript:void(0)">优惠活动修改</a>
            </li>
            <li>
              <a href="Sales_edit.php">优惠活动修改</a>
            </li>
          </ul><!-- /.breadcrumb -->
        </div>
        <div class="page-content">
          <?php include "include/in_menu_set.php"?>
          <div class="row">
            <div class="col-xs-12">
              <!-- 主要内容 开始 -->
              <form class="form-horizontal newoil-form" method="post"
                action="#">
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <div class="widget-box widget-color-blue2">
                      <div class="widget-header">
                        <h4 class="widget-title lighter smaller">优惠活动修改</h4>
                      </div>
                      <div class="widget-body">
                        <div class="widget-main padding-8">
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">分类</label>
                            <div class="col-xs-12 col-sm-5">
                              <select class="form-control select2" name="kind" id="kind" data-placeholder="请选择"
                                required>
                                <option value="1" selected>
                                  優惠訊息</option>
                              </select>
                            </div>
                          </div>
                          <!-- 语系選擇 -->
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">语系</label>
                            <div class="col-xs-12 col-sm-5">
                              <select class="form-control select2" name="language_id" id="language_id"
                                data-placeholder="请选择">
                                <option value="0" selected>
                                  0.English</option>
                                <option value="1">
                                  1.繁體中文</option>
                                <option value="2">
                                  2.简体中文</option>
                                <option value="3">
                                  3.မြန်မာ</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">主题</label>
                            <div class="col-xs-12 col-sm-5">
                              <input type="text" class="form-control" id="subject" name="subject" value="Baccarat"
                                placeholder="主题" required />
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">发布日期</label>
                            <div class="col-xs-12 col-sm-1">
                              <input type="text" class="form-control jqdate" id="buildtime" name="buildtime"
                                value="2022-05-17" placeholder="发布日期" required />
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">开放时间</label>
                            <div class="col-xs-12 col-sm-4">
                              <div class="input-daterange  input-group">
                                <input type="text" class="form-control jqdate" name="selltime1" id="selltime1" value=""
                                  placeholder="开始日期" />
                                <span class="input-group-addon">
                                  <i class="fa fa-exchange"></i>
                                </span>
                                <input type="text" class="form-control jqdate" name="selltime2" id="selltime2" value=""
                                  placeholder="结束日期" />
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">内容</label>
                            <div class="col-xs-12 col-sm-6">
                              <textarea class="ckeditor" name="word">&lt;ol&gt;
	&lt;li&gt;&lt;span style=&quot;color:#ffffff;&quot;&gt;此活動不得與其他優惠同時並用(例如:首儲贈點)&lt;/span&gt;&lt;/li&gt;
	&lt;li&gt;&lt;span style=&quot;color:#ffffff;&quot;&gt;獎金計算以參賽本金1倍為上限&lt;/span&gt;&lt;/li&gt;
	&lt;li&gt;&lt;span style=&quot;color:#ffffff;&quot;&gt;本活動僅開放投注DG、歐博、SA、WM、OB真人百家樂遊戲，且限於同一系統內完成，不得跨系統計算&lt;/span&gt;&lt;/li&gt;
	&lt;li&gt;&lt;span style=&quot;color:#ffffff;&quot;&gt;同一帳戶/電話號碼/IP位置/共享電腦/網路環境，僅限使用一個帳號申請活動&lt;/span&gt;&lt;/li&gt;
	&lt;li&gt;&lt;span style=&quot;color:#ffffff;&quot;&gt;為保證該活動的正常進行，會員不得使用任何非正規形式的投注跟無風險投注達有效投注量，或非正規存提及聯合其他娛樂城對押等等行為，一經發現將取消活動資格&lt;/span&gt;&lt;/li&gt;
	&lt;li&gt;&lt;span style=&quot;color:#ffffff;&quot;&gt;申請資料的姓名/電話/信箱/銀行帳戶/IP須為真實且唯一，如有發現虛假資料公司有權取消或收回會員優惠獎金的權利&lt;/span&gt;&lt;/li&gt;
	&lt;li&gt;&lt;span style=&quot;color:#ffffff;&quot;&gt;本活動嚴禁任何進行集體投注及其他方式惡意套利之行為，本公司有權沒收盈利及獎金並凍結帳戶終止合作&lt;/span&gt;&lt;/li&gt;
	&lt;li&gt;&lt;span style=&quot;color:#ffffff;&quot;&gt;活動內容及獎項如有異動，太陽城娛樂城保有修改、暫停或取消活動之權利&lt;/span&gt;&lt;/li&gt;
	&lt;li&gt;&lt;span style=&quot;color:#ffffff;&quot;&gt;避免文字理解差異當活動有爭議時，太陽城娛樂城有權在任何時間修改暫停或是取消優惠活動&lt;/span&gt;&lt;/li&gt;
&lt;/ol&gt;</textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">图片</label>
                            <div class="col-xs-12 col-sm-6">
                              <input class="form-control file" name="upload[]" id="upload" type="file" />
                              <span class="help-block">
                                <a class='btn btn-info btn-white'
                                  href="//game99.demonsupervisor.com/upload/active/news_20220517025815_0.png"
                                  data-rel="colorbox" data-geo="">浏览已上传图片</a>
                                <div class="checkbox-inline text-danger">
                                  <label>
                                    <input type="checkbox" class="ace" name="delpic0" value="Y">
                                    <span class="lbl">删除此张图片</span>
                                  </label>
                                </div>
                              </span>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning" class="col-sm-3 control-label no-padding-right"></label>
                            <div class="col-xs-12 col-sm-5">
                              <button type="submit" class="btn btn-primary">送出</button>
                              <a class='btn btn-danger'
                                href='Sales_index.php'>取消</a>
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
