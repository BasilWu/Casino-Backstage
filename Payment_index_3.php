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
              <a href="javascript:void(0)">会员金流设置</a>
            </li>
            <li>
              <a href="Payment_index.php">会员金流设置</a>
            </li>
          </ul><!-- /.breadcrumb -->
        </div>
        <div class="page-content">
          <?php include "include/in_menu_set.php"?>
          <div class="row">
            <div class="col-xs-12">
              <!-- 主要内容 开始 -->
              <script type="text/JavaScript">
                $(function () {
        $('.activeSwitch').click(function () {
            $.ajax({
                type: "POST",
                url: "payment_enableChange.php",
                cache: false,
                data: {uid: $(this).val(), enable: ($(this).prop('checked') ? 1 : 0)}
            });
        });

    });
</script>
              <div class="row">
                <div class="col-xs-12 col-sm-12">
                  <div class="page-header">
                    <a href="Payment_create_atmncvs.php" class="btn btn-primary">添加CVS & ATM</a>
                    <a href="Payment_create_credit.php" class="btn btn-warning">添加信用卡</a>
                    <a href="Payment_create_exchange.php" class="btn btn-info">添加交易所</a>
                    <a href="Payment_create_atm.php" class="btn btn-success">添加ATM</a>
                    <a href="Payment_create_cvs.php" class="btn btn-danger">添加CVS</a>
                    <a href="Payment_create_atmncvs.php" class="btn btn-primary">批次添加CVS & ATM</a>
                    <a href="Payment_create_credit.php" class="btn btn-warning">批次添加信用卡</a>
                    <a href="Payment_create_exchange.php" class="btn btn-info">批次添加交易所</a>
                    <a href="Payment_create_atm.php" class="btn btn-success">批次添加ATM</a>
                    <a href="Payment_create_cvs.php" class="btn btn-danger">批次添加CVS</a>
                  </div>
                  <ul class="nav nav-tabs">
                    <li role="presentation" class=""><a href="Payment_index.php">General Member</a></li>
                    <li role="presentation" class=""><a href="Payment_index_1.php">Gold Member</a></li>
                    <li role="presentation" class=""><a href="Payment_index_2.php">Platinum Member</a></li>
                    <li role="presentation" class="active"><a href="Payment_index_3.php">Distinguished Member</a>
                    </li>
                    <li role="presentation" class=""><a href="Payment_index_4.php">MVP Member</a></li>
                  </ul>
                  <table id="simple-table" class="table table-bordered table-hover table-responsive">
                    <thead>
                      <tr>
                        <td>金流名称</td>
                        <td>项目</td>
                        <td>商家代号</td>
                        <td>HashKey / 交易密码</td>
                        <td>累计金额</td>
                        <td>使用状态</td>
                        <td></td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>幣安</td>
                        <td>信用卡</td>
                        <td>AB</td>
                        <td></td>
                        <td class="text-right">$333,000</td>
                        <td>
                          <label>
                            <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox" value="5"
                              checked />
                            <span class="lbl"></span>
                          </label>
                        </td>
                        <td>
                          <div class="hidden-sm hidden-xs btn-group">
                            <a href="Payment_edit.php" class="btn btn-xs btn-info" data-rel="tooltip" title="修改">
                              <i class="ace-icon fa fa-pencil bigger-120"></i>
                            </a>
                            <button class="btn btn-xs btn-danger" data-toggle="modal" title="删除"
                              data-target="#dialog-confirm" data-action="#">
                              <i class="ace-icon fa fa-trash-o bigger-120"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>金恆通</td>
                        <td>CVS & ATM</td>
                        <td>DB</td>
                        <td></td>
                        <td class="text-right">$20,426,500</td>
                        <td>
                          <label>
                            <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox"
                              value="9" />
                            <span class="lbl"></span>
                          </label>
                        </td>
                        <td>
                          <div class="hidden-sm hidden-xs btn-group">
                            <a href="Payment_edit.php" class="btn btn-xs btn-info" data-rel="tooltip" title="修改">
                              <i class="ace-icon fa fa-pencil bigger-120"></i>
                            </a>
                            <button class="btn btn-xs btn-danger" data-toggle="modal" title="删除"
                              data-target="#dialog-confirm" data-action="#">
                              <i class="ace-icon fa fa-trash-o bigger-120"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Bitcom</td>
                        <td>CVS & ATM</td>
                        <td>BD</td>
                        <td></td>
                        <td class="text-right">$4,441,000</td>
                        <td>
                          <label>
                            <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox"
                              value="15" />
                            <span class="lbl"></span>
                          </label>
                        </td>
                        <td>
                          <div class="hidden-sm hidden-xs btn-group">
                            <a href="Payment_edit.php" class="btn btn-xs btn-info" data-rel="tooltip" title="修改">
                              <i class="ace-icon fa fa-pencil bigger-120"></i>
                            </a>
                            <button class="btn btn-xs btn-danger" data-toggle="modal" title="删除"
                              data-target="#dialog-confirm" data-action="#">
                              <i class="ace-icon fa fa-trash-o bigger-120"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Bitcom</td>
                        <td>信用卡</td>
                        <td>BD</td>
                        <td></td>
                        <td class="text-right">$0</td>
                        <td>
                          <label>
                            <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox"
                              value="20" />
                            <span class="lbl"></span>
                          </label>
                        </td>
                        <td>
                          <div class="hidden-sm hidden-xs btn-group">
                            <a href="Payment_edit.php" class="btn btn-xs btn-info" data-rel="tooltip" title="修改">
                              <i class="ace-icon fa fa-pencil bigger-120"></i>
                            </a>
                            <button class="btn btn-xs btn-danger" data-toggle="modal" title="删除"
                              data-target="#dialog-confirm" data-action="#">
                              <i class="ace-icon fa fa-trash-o bigger-120"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Okwepay</td>
                        <td>CVS & ATM</td>
                        <td>BD</td>
                        <td></td>
                        <td class="text-right">$43,938,000</td>
                        <td>
                          <label>
                            <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox"
                              value="25" />
                            <span class="lbl"></span>
                          </label>
                        </td>
                        <td>
                          <div class="hidden-sm hidden-xs btn-group">
                            <a href="Payment_edit.php" class="btn btn-xs btn-info" data-rel="tooltip" title="修改">
                              <i class="ace-icon fa fa-pencil bigger-120"></i>
                            </a>
                            <button class="btn btn-xs btn-danger" data-toggle="modal" title="删除"
                              data-target="#dialog-confirm" data-action="#">
                              <i class="ace-icon fa fa-trash-o bigger-120"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Wecashpay</td>
                        <td>CVS & ATM</td>
                        <td>611201</td>
                        <td>H4NBAQUWRTPGNPL388K75M4YJV</td>
                        <td class="text-right">$2,983,632</td>
                        <td>
                          <label>
                            <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox"
                              value="32" />
                            <span class="lbl"></span>
                          </label>
                        </td>
                        <td>
                          <div class="hidden-sm hidden-xs btn-group">
                            <a href="Payment_edit.php" class="btn btn-xs btn-info" data-rel="tooltip" title="修改">
                              <i class="ace-icon fa fa-pencil bigger-120"></i>
                            </a>
                            <button class="btn btn-xs btn-danger" data-toggle="modal" title="删除"
                              data-target="#dialog-confirm" data-action="#">
                              <i class="ace-icon fa fa-trash-o bigger-120"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Wecashpay</td>
                        <td>信用卡</td>
                        <td>611201</td>
                        <td>H4NBAQUWRTPGNPL388K75M4YJV</td>
                        <td class="text-right">$0</td>
                        <td>
                          <label>
                            <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox"
                              value="37" />
                            <span class="lbl"></span>
                          </label>
                        </td>
                        <td>
                          <div class="hidden-sm hidden-xs btn-group">
                            <a href="Payment_edit.php" class="btn btn-xs btn-info" data-rel="tooltip" title="修改">
                              <i class="ace-icon fa fa-pencil bigger-120"></i>
                            </a>
                            <button class="btn btn-xs btn-danger" data-toggle="modal" title="删除"
                              data-target="#dialog-confirm" data-action="#">
                              <i class="ace-icon fa fa-trash-o bigger-120"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Bitcom</td>
                        <td>CVS & ATM</td>
                        <td>CF</td>
                        <td></td>
                        <td class="text-right">$0</td>
                        <td>
                          <label>
                            <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox"
                              value="44" />
                            <span class="lbl"></span>
                          </label>
                        </td>
                        <td>
                          <div class="hidden-sm hidden-xs btn-group">
                            <a href="Payment_edit.php" class="btn btn-xs btn-info" data-rel="tooltip" title="修改">
                              <i class="ace-icon fa fa-pencil bigger-120"></i>
                            </a>
                            <button class="btn btn-xs btn-danger" data-toggle="modal" title="删除"
                              data-target="#dialog-confirm" data-action="#">
                              <i class="ace-icon fa fa-trash-o bigger-120"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Bitcom</td>
                        <td>信用卡</td>
                        <td>CF</td>
                        <td></td>
                        <td class="text-right">$0</td>
                        <td>
                          <label>
                            <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox"
                              value="49" />
                            <span class="lbl"></span>
                          </label>
                        </td>
                        <td>
                          <div class="hidden-sm hidden-xs btn-group">
                            <a href="Payment_edit.php" class="btn btn-xs btn-info" data-rel="tooltip" title="修改">
                              <i class="ace-icon fa fa-pencil bigger-120"></i>
                            </a>
                            <button class="btn btn-xs btn-danger" data-toggle="modal" title="删除"
                              data-target="#dialog-confirm" data-action="#">
                              <i class="ace-icon fa fa-trash-o bigger-120"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Ccking</td>
                        <td>CVS & ATM</td>
                        <td>GZ</td>
                        <td></td>
                        <td class="text-right">$29,972,661</td>
                        <td>
                          <label>
                            <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox"
                              value="54" />
                            <span class="lbl"></span>
                          </label>
                        </td>
                        <td>
                          <div class="hidden-sm hidden-xs btn-group">
                            <a href="Payment_edit.php" class="btn btn-xs btn-info" data-rel="tooltip" title="修改">
                              <i class="ace-icon fa fa-pencil bigger-120"></i>
                            </a>
                            <button class="btn btn-xs btn-danger" data-toggle="modal" title="删除"
                              data-target="#dialog-confirm" data-action="#">
                              <i class="ace-icon fa fa-trash-o bigger-120"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Ccking</td>
                        <td>信用卡</td>
                        <td>GZ</td>
                        <td></td>
                        <td class="text-right">$1,834,239</td>
                        <td>
                          <label>
                            <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox"
                              value="59" />
                            <span class="lbl"></span>
                          </label>
                        </td>
                        <td>
                          <div class="hidden-sm hidden-xs btn-group">
                            <a href="Payment_edit.php" class="btn btn-xs btn-info" data-rel="tooltip" title="修改">
                              <i class="ace-icon fa fa-pencil bigger-120"></i>
                            </a>
                            <button class="btn btn-xs btn-danger" data-toggle="modal" title="删除"
                              data-target="#dialog-confirm" data-action="#">
                              <i class="ace-icon fa fa-trash-o bigger-120"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>幣安交易所</td>
                        <td>EXCHANGE</td>
                        <td>dr</td>
                        <td>gj23wK9southGvt</td>
                        <td class="text-right">$0</td>
                        <td>
                          <label>
                            <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox"
                              value="74" />
                            <span class="lbl"></span>
                          </label>
                        </td>
                        <td>
                          <div class="hidden-sm hidden-xs btn-group">
                            <a href="Payment_edit.php" class="btn btn-xs btn-info" data-rel="tooltip" title="修改">
                              <i class="ace-icon fa fa-pencil bigger-120"></i>
                            </a>
                            <button class="btn btn-xs btn-danger" data-toggle="modal" title="删除"
                              data-target="#dialog-confirm" data-action="#">
                              <i class="ace-icon fa fa-trash-o bigger-120"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>PayWare</td>
                        <td>ATM</td>
                        <td>AI</td>
                        <td>ai01</td>
                        <td class="text-right">$4,328,868</td>
                        <td>
                          <label>
                            <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox"
                              value="109" />
                            <span class="lbl"></span>
                          </label>
                        </td>
                        <td>
                          <div class="hidden-sm hidden-xs btn-group">
                            <a href="Payment_edit.php" class="btn btn-xs btn-info" data-rel="tooltip" title="修改">
                              <i class="ace-icon fa fa-pencil bigger-120"></i>
                            </a>
                            <button class="btn btn-xs btn-danger" data-toggle="modal" title="删除"
                              data-target="#dialog-confirm" data-action="#">
                              <i class="ace-icon fa fa-trash-o bigger-120"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>PayWare</td>
                        <td>超商代碼</td>
                        <td>AI</td>
                        <td>ai01</td>
                        <td class="text-right">$2,025,135</td>
                        <td>
                          <label>
                            <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox"
                              value="114" />
                            <span class="lbl"></span>
                          </label>
                        </td>
                        <td>
                          <div class="hidden-sm hidden-xs btn-group">
                            <a href="Payment_edit.php" class="btn btn-xs btn-info" data-rel="tooltip" title="修改">
                              <i class="ace-icon fa fa-pencil bigger-120"></i>
                            </a>
                            <button class="btn btn-xs btn-danger" data-toggle="modal" title="删除"
                              data-target="#dialog-confirm" data-action="#">
                              <i class="ace-icon fa fa-trash-o bigger-120"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>FA幣安</td>
                        <td>CVS & ATM</td>
                        <td>eb</td>
                        <td>7352609f4edff7d32c0db359c92d3201</td>
                        <td class="text-right">$2,229,396</td>
                        <td>
                          <label>
                            <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox"
                              value="119" />
                            <span class="lbl"></span>
                          </label>
                        </td>
                        <td>
                          <div class="hidden-sm hidden-xs btn-group">
                            <a href="Payment_edit.php" class="btn btn-xs btn-info" data-rel="tooltip" title="修改">
                              <i class="ace-icon fa fa-pencil bigger-120"></i>
                            </a>
                            <button class="btn btn-xs btn-danger" data-toggle="modal" title="删除"
                              data-target="#dialog-confirm" data-action="#">
                              <i class="ace-icon fa fa-trash-o bigger-120"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>代付購</td>
                        <td>ATM</td>
                        <td>game666</td>
                        <td>9239113AFF7E4CDCFD1F30C71A8D52F3</td>
                        <td class="text-right">$0</td>
                        <td>
                          <label>
                            <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox"
                              value="124" />
                            <span class="lbl"></span>
                          </label>
                        </td>
                        <td>
                          <div class="hidden-sm hidden-xs btn-group">
                            <a href="Payment_edit.php" class="btn btn-xs btn-info" data-rel="tooltip" title="修改">
                              <i class="ace-icon fa fa-pencil bigger-120"></i>
                            </a>
                            <button class="btn btn-xs btn-danger" data-toggle="modal" title="删除"
                              data-target="#dialog-confirm" data-action="#">
                              <i class="ace-icon fa fa-trash-o bigger-120"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>代付購</td>
                        <td>超商代碼</td>
                        <td>game666</td>
                        <td>9239113AFF7E4CDCFD1F30C71A8D52F3</td>
                        <td class="text-right">$0</td>
                        <td>
                          <label>
                            <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox"
                              value="129" />
                            <span class="lbl"></span>
                          </label>
                        </td>
                        <td>
                          <div class="hidden-sm hidden-xs btn-group">
                            <a href="Payment_edit.php" class="btn btn-xs btn-info" data-rel="tooltip" title="修改">
                              <i class="ace-icon fa fa-pencil bigger-120"></i>
                            </a>
                            <button class="btn btn-xs btn-danger" data-toggle="modal" title="删除"
                              data-target="#dialog-confirm" data-action="#">
                              <i class="ace-icon fa fa-trash-o bigger-120"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>DIY</td>
                        <td>ATM</td>
                        <td>MMBet99</td>
                        <td></td>
                        <td class="text-right">$0</td>
                        <td>
                          <label>
                            <input name="switch-field-1" class="ace ace-switch  activeSwitch" type="checkbox"
                              value="134" />
                            <span class="lbl"></span>
                          </label>
                        </td>
                        <td>
                          <div class="hidden-sm hidden-xs btn-group">
                            <a href="Payment_edit.php" class="btn btn-xs btn-info" data-rel="tooltip" title="修改">
                              <i class="ace-icon fa fa-pencil bigger-120"></i>
                            </a>
                            <button class="btn btn-xs btn-danger" data-toggle="modal" title="删除"
                              data-target="#dialog-confirm" data-action="#">
                              <i class="ace-icon fa fa-trash-o bigger-120"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              </form>
              <div class="page-header"></div> <!-- 主要内容 结束 -->
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
