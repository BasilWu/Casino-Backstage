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
              <a href="javascript:void(0)">会员登录历程</a>
            </li>
            <li>
              <a href="Member_login_list.php">会员登录历程</a>
            </li>
          </ul><!-- /.breadcrumb -->
        </div>
        <div class="page-content">
          <?php include "include/in_menu_set.php"?>
          <div class="row">
            <div class="col-xs-12">
              <!-- 主要内容 开始 -->
              <!-- PAGE CONTENT BEGINS -->
              <div class="row">
                <div class="col-xs-12 col-sm-5">
                  <div class="form-group">
                    <div class="btn-group">
                      <button type="button" class="btn  btn-lg btn-info"
                        onClick="location.href='Member_index.php'">返回会员</button>
                    </div>
                  </div>
                  <h4 class="inline text-danger">
                    meteor【kc666】
                  </h4>
                </div>
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
                    <th>会员</th>
                    <th>IP</th>
                    <th>登录日期</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      kc666 <div class="text-danger">meteor</div>
                    </td>
                    <td>2001:b011:4013:d8d4:ecb9:2d1e:8576:49d0</td>
                    <td>
                      <div class="text-danger">
                        2023-12-19 17:02:44 </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      kc666 <div class="text-danger">meteor</div>
                    </td>
                    <td>220.136.204.11</td>
                    <td>
                      <div class="text-danger">
                        2023-09-15 23:00:12 </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      kc666 <div class="text-danger">meteor</div>
                    </td>
                    <td>2001:b011:300b:915a:e483:5825:b280:9f8f</td>
                    <td>
                      <div class="text-danger">
                        2023-09-15 08:50:59 </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      kc666 <div class="text-danger">meteor</div>
                    </td>
                    <td>2402:7500:478:3336:14b:bd33:14a2:53a7</td>
                    <td>
                      <div class="text-danger">
                        2023-06-28 11:01:31 </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      kc666 <div class="text-danger">meteor</div>
                    </td>
                    <td>116.241.127.228</td>
                    <td>
                      <div class="text-danger">
                        2023-06-06 17:20:17 </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      kc666 <div class="text-danger">meteor</div>
                    </td>
                    <td>2401:e180:8870:a8b2:a999:1019:15d2:ee30</td>
                    <td>
                      <div class="text-danger">
                        2023-06-03 13:14:53 </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      kc666 <div class="text-danger">meteor</div>
                    </td>
                    <td>156.59.29.252</td>
                    <td>
                      <div class="text-danger">
                        2023-03-04 22:46:28 </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      kc666 <div class="text-danger">meteor</div>
                    </td>
                    <td>220.136.184.151</td>
                    <td>
                      <div class="text-danger">
                        2023-02-06 16:04:48 </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      kc666 <div class="text-danger">meteor</div>
                    </td>
                    <td>220.136.184.151</td>
                    <td>
                      <div class="text-danger">
                        2023-02-06 16:04:16 </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      kc666 <div class="text-danger">meteor</div>
                    </td>
                    <td>35.191.19.67</td>
                    <td>
                      <div class="text-danger">
                        2022-05-13 18:05:52 </div>
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
