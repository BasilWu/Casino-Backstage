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
              <a href="javascript:void(0)">会员金流添加</a>
            </li>
            <li>
              <a href="Payment_create.php">会员金流添加</a>
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
                        <h4 class="widget-title lighter smaller">会员金流添加</h4>
                      </div>
                      <div class="widget-body">
                        <div class="widget-main padding-8">
                          <div class="form-group">
                            <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">
                              General Member </label>
                            <label class="col-xs-12 col-sm-5 control-label" style="text-align: left;">EXCHANGE</label>
                            <input type="hidden" name="m_group" value="0" />
                            <input type="hidden" name="paymentType" value="exchange" />
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">金流</label>
                            <div class="col-xs-12 col-sm-5">
                              <select class="form-control" id="libs" name="libs">
                                <option value="bitsaifu">幣安交易所</option>
                                <option value="payware">PayWare</option>
                                <option value="fagopay">FA幣安</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">状态</label>
                            <div class="col-xs-12 col-sm-5">
                              <label class="radio-inline">
                                <input type="radio" name="enable" id="enable0" value="0" checked>停用 </label>
                              <label class="radio-inline">
                                <input type="radio" name="enable" id="enable1" value="1">激活 </label>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">商家代号</label>
                            <div class="col-xs-12 col-sm-5">
                              <input type="text" class="form-control" id="merchant" name="merchant" value=""
                                placeholder="Merchant / web / Customer_no" />
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">HashKey
                              / 交易密码</label>
                            <div class="col-xs-12 col-sm-5">
                              <input type="text" class="form-control" id="HashKey" name="HashKey" value=""
                                placeholder="HashKey / code / 交易密码" />
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">HashIV</label>
                            <div class="col-xs-12 col-sm-5">
                              <input type="text" class="form-control" id="HashKey" name="HashIV" value=""
                                placeholder="HashIV" />
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">验证码</label>
                            <div class="col-xs-12 col-sm-5">
                              <input type="text" class="form-control" id="validate" name="validate" value=""
                                placeholder="validate" />
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">收款截止金额</label>
                            <div class="col-xs-12 col-sm-5">
                              <input type="text" class="form-control" id="amount" name="amount" value=""
                                placeholder="收款截止金额" />
                              <div class="text-danger">*金额设为0表示持续收款</div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning" class="col-sm-3 control-label no-padding-right"></label>
                            <div class="col-xs-12 col-sm-5">
                              <button type="submit" class="btn btn-primary">送出</button>
                              <a class='btn btn-danger'
                                href='Payment_index.php'>取消</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
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
