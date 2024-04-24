<script type="text/javascript">
try {
  ace.settings.loadState('main-container')
} catch (e) {}
</script>
<div id="sidebar" class="sidebar responsive ace-save-state sidebar-fixed">
  <script type="text/javascript">
  try {
    ace.settings.loadState('sidebar')
  } catch (e) {}
  $(function() {
    $('.submenu .active').parents('li').addClass('active').addClass('open');

    //分辨率小于768 改变选单样式
    if (window.screen.width <= 768) {
      $('#sidebar-collapse').trigger('click'); //触发JS改变选单样式
    }
  });
  </script>
  <div class="sidebar-shortcuts" id="sidebar-shortcuts" style="display:none;">
    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
      <button class="btn btn-success">
        <i class="ace-icon fa fa-signal"></i>
      </button>
      <button class="btn btn-info">
        <i class="ace-icon fa fa-pencil"></i>
      </button>
      <button class="btn btn-warning">
        <i class="ace-icon fa fa-users"></i>
      </button>
      <button class="btn btn-danger">
        <i class="ace-icon fa fa-cogs"></i>
      </button>
    </div>
    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
      <span class="btn btn-success"></span>
      <span class="btn btn-info"></span>
      <span class="btn btn-warning"></span>
      <span class="btn btn-danger"></span>
    </div>
  </div>
  <!-- /.sidebar-shortcuts -->
  <ul class="nav nav-list">
    <li class="">
      <a href="javascript:vold(0)" class="dropdown-toggle">
        <i class="menu-icon fa fa-unlock-alt"></i>
        <span class="menu-text">权限管理系统</span>
        <b class="arrow fa fa-angle-down"></b>
      </a>
      <b class="arrow"></b>
      <ul class="submenu">
        <li class=" active" style="display:">
          <a href="Manger_create.php">
            <i class="menu-icon fa fa-caret-right"></i>
            后端帐号登录 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Manger_edit.php">
            <i class="menu-icon fa fa-caret-right"></i>
            后端帐号修改 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Manger_delete.php">
            <i class="menu-icon fa fa-caret-right"></i>
            后端帐号删除 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:">
          <a href="Manger_index.php">
            <i class="menu-icon fa fa-caret-right"></i>
            后端帐号查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Manger_login_list.php">
            <i class="menu-icon fa fa-caret-right"></i>
            后端登录历程 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:">
          <a href="Group_create.php">
            <i class="menu-icon fa fa-caret-right"></i>
            群组数据登录 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Group_edit.php">
            <i class="menu-icon fa fa-caret-right"></i>
            群组数据修改 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Group_delete.php">
            <i class="menu-icon fa fa-caret-right"></i>
            群组数据删除 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:">
          <a href="Group_index.php">
            <i class="menu-icon fa fa-caret-right"></i>
            群组数据管理 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:">
          <a href="Manger_user.php">
            <i class="menu-icon fa fa-caret-right"></i>
            后端帐号维护 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:">
          <a href="Company_index.php">
            <i class="menu-icon fa fa-caret-right"></i>
            网站设置管理 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:">
          <a href="Service_index.php">
            <i class="menu-icon fa fa-caret-right"></i>
            游戏维护设置 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Service_edit.php">
            <i class="menu-icon fa fa-caret-right"></i>
            维护设置修改 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:">
          <a href="Company_put_and_back.php">
            <i class="menu-icon fa fa-caret-right"></i>
            放扣点设置 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:">
          <a href="Company_put_and_back_create.php">
            <i class="menu-icon fa fa-caret-right"></i>
            放扣点名称添加 </a>
          <b class="arrow"></b>
        </li>
      </ul>
    </li>
    <li class="">
      <a href="javascript:vold(0)" class="dropdown-toggle">
        <i class="menu-icon fa fa-user-circle-o red"></i>
        <span class="menu-text">合营代理系统</span>
        <b class="arrow fa fa-angle-down"></b>
      </a>
      <b class="arrow"></b>
      <ul class="submenu">
        <li class="" style="display:none">
          <a href="Agents_agents1_add.php">
            <i class="menu-icon fa fa-caret-right"></i>
            添加股东数据 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:">
          <a href="Agents_agents1_list.php">
            <i class="menu-icon fa fa-caret-right"></i>
            股东数据管理 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Agents_agents1_edit.php">
            <i class="menu-icon fa fa-caret-right"></i>
            股东数据修改 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Agents_agents1_delete.php">
            <i class="menu-icon fa fa-caret-right"></i>
            股东数据删除 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Agents_agents2_add.php">
            <i class="menu-icon fa fa-caret-right"></i>
            添加总代数据 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:">
          <a href="Agents_agents2_list.php">
            <i class="menu-icon fa fa-caret-right"></i>
            总代数据管理 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Agents_agents2_edit.php">
            <i class="menu-icon fa fa-caret-right"></i>
            总代数据修改 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Agents_agents2_delete.php">
            <i class="menu-icon fa fa-caret-right"></i>
            总代数据删除 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Agents_agents3_add.php">
            <i class="menu-icon fa fa-caret-right"></i>
            代理数据添加 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:">
          <a href="Agents_agents3_list.php">
            <i class="menu-icon fa fa-caret-right"></i>
            代理数据查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Agents_agents3_edit.php">
            <i class="menu-icon fa fa-caret-right"></i>
            代理数据修改 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Agents_agents3_delete.php">
            <i class="menu-icon fa fa-caret-right"></i>
            代理数据删除 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:">
          <a href="Agents_index.php">
            <i class="menu-icon fa fa-caret-right"></i>
            代理申请查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Agents_delete.php">
            <i class="menu-icon fa fa-caret-right"></i>
            代理申请删除 </a>
          <b class="arrow"></b>
        </li>
      </ul>
    </li>
    <li class="">
      <a href="javascript:vold(0)" class="dropdown-toggle">
        <i class="menu-icon fa fa-user-circle-o blue"></i>
        <span class="menu-text">会员管理系统</span>
        <b class="arrow fa fa-angle-down"></b>
      </a>
      <b class="arrow"></b>
      <ul class="submenu">
        <li class="" style="display:">
          <a href="Member_create.php">
            <i class="menu-icon fa fa-caret-right"></i>
            会员数据登录 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:">
          <a href="Member_index.php">
            <i class="menu-icon fa fa-caret-right"></i>
            会员数据查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Member_edit.php">
            <i class="menu-icon fa fa-caret-right"></i>
            会员数据修改 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="member_delete.php">
            <i class="menu-icon fa fa-caret-right"></i>
            会员数据删除 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Member_view.php">
            <i class="menu-icon fa fa-caret-right"></i>
            会员数据浏览 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:">
          <a href="Member_wallet_list.php">
            <i class="menu-icon fa fa-caret-right"></i>
            会员钱包管理 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:">
          <a href="Walletlog_index.php">
            <i class="menu-icon fa fa-caret-right"></i>
            会员转点纪录 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Member_member_sms.php">
            <i class="menu-icon fa fa-caret-right"></i>
            会员消息发送 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:">
          <a href="Member_block.php">
            <i class="menu-icon fa fa-caret-right"></i>
            黑名单设置 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Member_add_block.php">
            <i class="menu-icon fa fa-caret-right"></i>
            添加黑名单 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Member_block_edit.php">
            <i class="menu-icon fa fa-caret-right"></i>
            修改黑名单 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Member_delete_block.php">
            <i class="menu-icon fa fa-caret-right"></i>
            删除黑名单 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:">
          <a href="Member_reg.php">
            <i class="menu-icon fa fa-caret-right"></i>
            创建游戏帐号 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:">
          <a href="member_method.php">
            <i class="menu-icon fa fa-caret-right"></i>
            会员需知设置 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="member_changepws.php">
            <i class="menu-icon fa fa-caret-right"></i>
            会员密码修改 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Member_games_account.php">
            <i class="menu-icon fa fa-caret-right"></i>
            查看游戏帐号 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Member_bank.php">
            <i class="menu-icon fa fa-caret-right"></i>
            银行数据修改 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Member_agents_exchange.php">
            <i class="menu-icon fa fa-caret-right"></i>
            代理换线作业 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Member_login_list.php">
            <i class="menu-icon fa fa-caret-right"></i>
            会员登录历程 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Member_excel.php">
            <i class="menu-icon fa fa-caret-right"></i>
            汇出Excel </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:">
          <a href="tools.php">
            <i class="menu-icon fa fa-caret-right"></i>
            会员点数转回 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:">
          <a href="Rake_rake_config.php">
            <i class="menu-icon fa fa-caret-right"></i>
            会员返水设置 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:">
          <a href="Rake_index_0.php">
            <i class="menu-icon fa fa-caret-right"></i>
            会员返水发放 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Member_ajaxWallet.php">
            <i class="menu-icon fa fa-caret-right"></i>
            会员点数放扣点 </a>
          <b class="arrow"></b>
        </li>
      </ul>
    </li>
    <li class="">
      <a href="javascript:vold(0)" class="dropdown-toggle">
        <i class="menu-icon fa fa-bar-chart"></i>
        <span class="menu-text">报表管理系统</span>
        <b class="arrow fa fa-angle-down"></b>
      </a>
      <b class="arrow"></b>
      <ul class="submenu">
        <li class="" style="display:none">
          <a href="Report_index.php">
            <i class="menu-icon fa fa-caret-right"></i>
            欧博报表查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_allbet_details.php">
            <i class="menu-icon fa fa-caret-right"></i>
            欧博会员明细 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_allbet_egame.php">
            <i class="menu-icon fa fa-caret-right"></i>
            欧博电子查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_allbet_egame_details.php">
            <i class="menu-icon fa fa-caret-right"></i>
            欧博电子明细 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_ssagame92.php">
            <i class="menu-icon fa fa-caret-right"></i>
            沙龙一馆报表查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_ssagame92_details.php">
            <i class="menu-icon fa fa-caret-right"></i>
            沙龙一馆会员详细 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_sagame_details.php">
            <i class="menu-icon fa fa-caret-right"></i>
            沙龙二馆会员详细 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_sagame.php">
            <i class="menu-icon fa fa-caret-right"></i>
            沙龙二馆报表查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report2_sagame.php">
            <i class="menu-icon fa fa-caret-right"></i>
            沙龙查找(快速) </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_super_details.php">
            <i class="menu-icon fa fa-caret-right"></i>
            英雄会员明细 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_super.php">
            <i class="menu-icon fa fa-caret-right"></i>
            英雄报表查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_fish.php">
            <i class="menu-icon fa fa-caret-right"></i>
            捕鱼报表查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_qt.php">
            <i class="menu-icon fa fa-caret-right"></i>
            QT电子报表 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_qt_details.php">
            <i class="menu-icon fa fa-caret-right"></i>
            QT会员明细 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_dreamgame.php">
            <i class="menu-icon fa fa-caret-right"></i>
            DG报表查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_wm.php">
            <i class="menu-icon fa fa-caret-right"></i>
            WM报表查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_WM_details.php">
            <i class="menu-icon fa fa-caret-right"></i>
            WM会员明细 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_dreamgame_details.php">
            <i class="menu-icon fa fa-caret-right"></i>
            DG会员明细 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_ssb.php">
            <i class="menu-icon fa fa-caret-right"></i>
            鑫宝体育报表 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_ssb_details.php">
            <i class="menu-icon fa fa-caret-right"></i>
            鑫宝会员明细 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_s7pk.php">
            <i class="menu-icon fa fa-caret-right"></i>
            7PK报表查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_bingo.php">
            <i class="menu-icon fa fa-caret-right"></i>
            宾果报表查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_bingo_details.php">
            <i class="menu-icon fa fa-caret-right"></i>
            宾果会员明细 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_slottery.php">
            <i class="menu-icon fa fa-caret-right"></i>
            Super六合彩 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_ebet.php">
            <i class="menu-icon fa fa-caret-right"></i>
            EB真人查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_ebet_details.php">
            <i class="menu-icon fa fa-caret-right"></i>
            EB会员明细 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_s9k168.php">
            <i class="menu-icon fa fa-caret-right"></i>
            9K北京赛车查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_s9k168_details.php">
            <i class="menu-icon fa fa-caret-right"></i>
            9K北京赛车明细 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_pk10.php">
            <i class="menu-icon fa fa-caret-right"></i>
            PN北京赛车查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_pk10_details.php">
            <i class="menu-icon fa fa-caret-right"></i>
            PN北京赛车明细 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_ameba.php">
            <i class="menu-icon fa fa-caret-right"></i>
            AMEBA电子查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_ameba_details.php">
            <i class="menu-icon fa fa-caret-right"></i>
            AMEBA报表明细查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_grand.php">
            <i class="menu-icon fa fa-caret-right"></i>
            PG电子查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_grand_details.php">
            <i class="menu-icon fa fa-caret-right"></i>
            PG电子会员明细 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_avia.php">
            <i class="menu-icon fa fa-caret-right"></i>
            泛亚电竞查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_avia_details.php">
            <i class="menu-icon fa fa-caret-right"></i>
            泛亚电竞会员明细 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_hces888.php">
            <i class="menu-icon fa fa-caret-right"></i>
            皇朝电竞查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_hces888_details.php">
            <i class="menu-icon fa fa-caret-right"></i>
            皇朝电竞会员明细 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_vg.php">
            <i class="menu-icon fa fa-caret-right"></i>
            VG电子查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_vg_details.php">
            <i class="menu-icon fa fa-caret-right"></i>
            VG电子会员查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_htpg.php">
            <i class="menu-icon fa fa-caret-right"></i>
            彩播报表查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_htpg_details.php">
            <i class="menu-icon fa fa-caret-right"></i>
            彩播报表明细查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:">
          <a href="Report_rtg.php">
            <i class="menu-icon fa fa-caret-right"></i>
            VA报表查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_eg.php">
            <i class="menu-icon fa fa-caret-right"></i>
            EG捕鱼查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:">
          <a href="Report_ygg.php">
            <i class="menu-icon fa fa-caret-right"></i>
            9KG表查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_rtg_details.php">
            <i class="menu-icon fa fa-caret-right"></i>
            VA电子会员查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_eg_details.php">
            <i class="menu-icon fa fa-caret-right"></i>
            EG捕鱼会员查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_ygg_details.php">
            <i class="menu-icon fa fa-caret-right"></i>
            YGG Slot会员明细 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:">
          <a href="Report_report_all.php">
            <i class="menu-icon fa fa-caret-right"></i>
            整合报表查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Report_sun_bingo.php">
            <i class="menu-icon fa fa-caret-right"></i>
            太阳神宾果 </a>
          <b class="arrow"></b>
        </li>
      </ul>
    </li>
    <li class="">
      <a href="javascript:vold(0)" class="dropdown-toggle">
        <i class="menu-icon fa fa-exchange"></i>
        <span class="menu-text">营运管理系统</span>
        <b class="arrow fa fa-angle-down"></b>
      </a>
      <b class="arrow"></b>
      <ul class="submenu">
        <li class="" style="display:">
          <a href="Trade_index.php">
            <i class="menu-icon fa fa-caret-right"></i>
            交易管理查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Trade_show_member.php">
            <i class="menu-icon fa fa-caret-right"></i>
            会员交易明细 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:">
          <a href="Char_index.php">
            <i class="menu-icon fa fa-caret-right"></i>
            营运周报查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:">
          <a href="order_index.php">
            <i class="menu-icon fa fa-caret-right"></i>
            储值数据查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:">
          <a href="Order_sell_0.php">
            <i class="menu-icon fa fa-caret-right"></i>
            宝物抛售查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:">
          <a href="Order_bank_0.php">
            <i class="menu-icon fa fa-caret-right"></i>
            银行汇款查找 </a>
          <b class="arrow"></b>
        </li>
      </ul>
    </li>
    <li class="">
      <a href="javascript:vold(0)" class="dropdown-toggle">
        <i class="menu-icon fa fa-microphone"></i>
        <span class="menu-text">客服消息管理</span>
        <b class="arrow fa fa-angle-down"></b>
      </a>
      <b class="arrow"></b>
      <ul class="submenu">
        <li class="" style="display:">
          <a href="Message_index.php">
            <i class="menu-icon fa fa-caret-right"></i>
            会员消息查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Message_edit.php">
            <i class="menu-icon fa fa-caret-right"></i>
            会员消息回复 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:">
          <a href="Message_reg.php">
            <i class="menu-icon fa fa-caret-right"></i>
            客服消息添加 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:">
          <a href="Message_service_list.php">
            <i class="menu-icon fa fa-caret-right"></i>
            客服消息查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:">
          <a href="Message_config.php">
            <i class="menu-icon fa fa-caret-right"></i>
            前台-客服链接设置 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Message_configok.php">
            <i class="menu-icon fa fa-caret-right"></i>
            前台-客服链接修改送出 </a>
          <b class="arrow"></b>
        </li>
      </ul>
    </li>
    <li class="">
      <a href="javascript:vold(0)" class="dropdown-toggle">
        <i class="menu-icon fa fa-gift"></i>
        <span class="menu-text">优惠活动管理</span>
        <b class="arrow fa fa-angle-down"></b>
      </a>
      <b class="arrow"></b>
      <ul class="submenu">
        <li class="" style="display:">
          <a href="Sales_create.php">
            <i class="menu-icon fa fa-caret-right"></i>
            优惠活动登录 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Sales_edit.php">
            <i class="menu-icon fa fa-caret-right"></i>
            优惠活动修改 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Sales_delete.php">
            <i class="menu-icon fa fa-caret-right"></i>
            优惠活动删除 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:">
          <a href="Sales_index.php">
            <i class="menu-icon fa fa-caret-right"></i>
            优惠活动查找 </a>
          <b class="arrow"></b>
        </li>
      </ul>
    </li>
    <li class="">
      <a href="javascript:vold(0)" class="dropdown-toggle">
        <i class="menu-icon fa fa-pencil-square"></i>
        <span class="menu-text">消息管理系统</span>
        <b class="arrow fa fa-angle-down"></b>
      </a>
      <b class="arrow"></b>
      <ul class="submenu">
        <li class="" style="display:">
          <a href="News_create.php">
            <i class="menu-icon fa fa-caret-right"></i>
            消息数据登录 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:">
          <a href="News_index.php">
            <i class="menu-icon fa fa-caret-right"></i>
            消息数据查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="News_delete.php">
            <i class="menu-icon fa fa-caret-right"></i>
            消息数据删除 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="News_edit.php">
            <i class="menu-icon fa fa-caret-right"></i>
            消息数据修改 </a>
          <b class="arrow"></b>
        </li>
      </ul>
    </li>
    <li class="">
      <a href="javascript:vold(0)" class="dropdown-toggle">
        <i class="menu-icon fa fa-audio-description"></i>
        <span class="menu-text">广告管理系统</span>
        <b class="arrow fa fa-angle-down"></b>
      </a>
      <b class="arrow"></b>
      <ul class="submenu">
        <li class="" style="display:">
          <a href="Ad_create.php">
            <i class="menu-icon fa fa-caret-right"></i>
            广告数据登录 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:">
          <a href="Ad_index.php">
            <i class="menu-icon fa fa-caret-right"></i>
            广告数据查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Ad_edit.php">
            <i class="menu-icon fa fa-caret-right"></i>
            广告数据修改 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Ad_delete.php">
            <i class="menu-icon fa fa-caret-right"></i>
            广告数据删除 </a>
          <b class="arrow"></b>
        </li>
      </ul>
    </li>
    <li class="">
      <a href="javascript:vold(0)" class="dropdown-toggle">
        <i class="menu-icon fa fa-usd"></i>
        <span class="menu-text">金流管理系统</span>
        <b class="arrow fa fa-angle-down"></b>
      </a>
      <b class="arrow"></b>
      <ul class="submenu">
        <li class="" style="display:">
          <a href="Payment_index.php">
            <i class="menu-icon fa fa-caret-right"></i>
            会员金流设置 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Allpay_create.php">
            <i class="menu-icon fa fa-caret-right"></i>
            添加绿界帐户 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Allpay_index.php">
            <i class="menu-icon fa fa-caret-right"></i>
            绿界帐户查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Allpay_edit.php">
            <i class="menu-icon fa fa-caret-right"></i>
            绿界帐户修改 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Allpay_delete.php">
            <i class="menu-icon fa fa-caret-right"></i>
            绿界帐户删除 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:">
          <a href="Allpay_settings.php">
            <i class="menu-icon fa fa-caret-right"></i>
            金流金额设置 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:">
          <a href="Bank_create.php">
            <i class="menu-icon fa fa-caret-right"></i>
            公司帐户添加 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Bank_edit.php">
            <i class="menu-icon fa fa-caret-right"></i>
            公司帐户修改 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Bank_delete.php">
            <i class="menu-icon fa fa-caret-right"></i>
            公司帐户删除 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:">
          <a href="Bank_index.php">
            <i class="menu-icon fa fa-caret-right"></i>
            公司帐户查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Payment_create.php">
            <i class="menu-icon fa fa-caret-right"></i>
            会员金流添加 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Payment_edit.php">
            <i class="menu-icon fa fa-caret-right"></i>
            会员金流修改 </a>
          <b class="arrow"></b>
        </li>
      </ul>
    </li>
    <li class="">
      <a href="javascript:vold(0)" class="dropdown-toggle">
        <i class="menu-icon fa fa-gamepad"></i>
        <span class="menu-text">游戏数据管理</span>
        <b class="arrow fa fa-angle-down"></b>
      </a>
      <b class="arrow"></b>
      <ul class="submenu">
        <li class="" style="display:">
          <a href="Games_create.php">
            <i class="menu-icon fa fa-caret-right"></i>
            游戏数据添加 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:">
          <a href="Games_index.php">
            <i class="menu-icon fa fa-caret-right"></i>
            游戏数据查找 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Games_edit.php">
            <i class="menu-icon fa fa-caret-right"></i>
            游戏数据修改 </a>
          <b class="arrow"></b>
        </li>
        <li class="" style="display:none">
          <a href="Games_delete.php">
            <i class="menu-icon fa fa-caret-right"></i>
            游戏数据删除 </a>
          <b class="arrow"></b>
        </li>
      </ul>
    </li>
  </ul>
  <!-- /.nav-list -->
  <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
    <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state"
      data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
  </div>
</div>
