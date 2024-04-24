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
                            <a href="javascript:void(0)">会员数据登录</a>
                        </li>
                        <li>
                            <a href="Member_create.php">会员数据登录</a>
                        </li>
                    </ul>
                </div>
                <div class="page-content">
                    <?php include "include/in_menu_set.php"?>
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- 主要内容 开始 -->
                            <form class="form-horizontal newoil-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="widget-box widget-color-blue2">
                                            <div class="widget-header">
                                                <h4 class="widget-title lighter smaller">会员数据登录</h4>
                                            </div>
                                            <div class="widget-body">
                                                <div class="widget-main padding-8">
                                                    <div class="form-group">
                                                        <label class="col-xs-12 col-sm-3 control-label no-padding-right" for="u_id">帐号</label>
                                                        <div class="col-xs-12 col-sm-5">
                                                            <input type="text" class="form-control" id="u_id" name="u_id" placeholder="帐号" required />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-xs-12 col-sm-3 control-label no-padding-right" for="u_password">密码</label>
                                                        <div class="col-xs-12 col-sm-5">
                                                            <input type="password" class="form-control" id="u_password" name="u_password" placeholder="密码" required />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-xs-12 col-sm-3 control-label no-padding-right" for="u_name">姓名</label>
                                                        <div class="col-xs-12 col-sm-5">
                                                            <input type="text" class="form-control" id="u_name" name="u_name" placeholder="姓名" required />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-xs-12 col-sm-3 control-label no-padding-right" for="phone">手机</label>
                                                        <div class="col-xs-12 col-sm-5">
                                                            <input type="text" class="form-control" id="phone" name="phone" placeholder="手机" required />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-xs-12 col-sm-3 control-label no-padding-right" for="line">LINE ID</label>
                                                        <div class="col-xs-12 col-sm-5">
                                                            <input type="text" class="form-control" id="line" name="line" placeholder="LINE ID" required />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-xs-12 col-sm-3 control-label no-padding-right" for="m_group">会员等级</label>
                                                        <div class="col-xs-12 col-sm-5">
                                                            <select class="form-control" id="m_group" name="m_group" required>
                                                                <option value="0">一般会员</option>
                                                                <option value="1">黄金会员</option>
                                                                <option value="2">白金会员</option>
                                                                <option value="3">尊荣会员</option>
                                                                <option value="4">MVP会员</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-xs-12 col-sm-3 control-label no-padding-right">状态</label>
                                                        <div class="col-xs-12 col-sm-5">
                                                            <select class="form-control" name="is_valid" id="is_valid" required>
                                                                <option value="1">激活</option>
                                                                <option value="0">停权</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-xs-12 col-sm-3 control-label no-padding-right" for="demo">备注</label>
                                                        <div class="col-xs-12 col-sm-5">
                                                            <textarea id="demo" name="demo" class="form-control autosize-transition" placeholder="备注"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-xs-12 col-sm-5 col-sm-offset-3">
                                                            <button type="submit" class="btn btn-primary">送出</button>
                                                            <a class='btn btn-danger' href='Member_index.php'>取消</a>
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
                </div><!-- /.page-content -->
            </div>
        </div><!-- /.main-content -->
        <?php include "include/in_footer.php"; ?>
    </div><!-- /.main-container -->
    <div id="sound"></div>
    <!-- ace scripts -->
    <script src="js/ace-elements.min.js"></script>
    <script src="js/ace.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('.newoil-form');
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = {
                Username: document.getElementById('u_id').value,
                Password: document.getElementById('u_password').value,
                FullName: document.getElementById('u_name').value,
                Phone: document.getElementById('phone').value,
                LineId: document.getElementById('line').value,
                MemberLevel: document.getElementById('m_group').value,
                IsValid: document.getElementById('is_valid').value === '1',
                Memo: document.getElementById('demo').value
            };

            axios.post('http://localhost:3000/members', formData)
                .then(function(response) {
                    console.log(response);
                    alert('會員創建成功！');
                })
                .catch(function(error) {
                    console.error(error);
                    alert('創建會員時發生錯誤。');
                });
        });
    });
</script>

</body>
</html>
