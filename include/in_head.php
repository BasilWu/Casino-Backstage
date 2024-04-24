<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta charset="utf-8" />
<title>後台管理系統</title>
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<!-- bootstrap & fontawesome -->
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/font-awesome.css" />
<!-- page specific plugin styles -->
<link rel="stylesheet" href="css/jquery-ui.min.css" />
<link rel="stylesheet" href="css/select2.min.css" />
<link rel="stylesheet" href="css/colorbox.min.css" />
<link rel="stylesheet" href="css/bootstrap-select.css" />
<link rel='stylesheet' href='css/bootstrap-datepicker.css'>
<link rel='stylesheet' href='css/bootstrap-datetimepicker.css'>
<link rel='stylesheet' href='css/bootstrap-treeview.min.css'>
<link rel='stylesheet' href='css/fileinput.css'>
<!-- text fonts -->
<link rel="stylesheet" href="css/fonts.googleapis.com.css" />
<!-- ace styles -->
<link rel="stylesheet" href="css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
<!--[if lte IE 9]>
			<link rel="stylesheet" href="css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
<link rel="stylesheet" href="css/ace-skins.min.css" />
<link rel="stylesheet" href="css/ace-rtl.min.css" />
<!--[if lte IE 9]>
		  <link rel="stylesheet" href="css/ace-ie.min.css" />
		<![endif]-->
<script type="text/javascript">
var CI_URL = "http://localhost/";
var ASSETS_URL = "http://localhost/images";
</script>
<!-- ace settings handler -->
<script src="js/ace-extra.min.js"></script>
<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->
<!--[if lte IE 8]>
		<script src="js/html5shiv.min.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/jquery.cookie.js"></script>
<script type="text/javascript">
if ('ontouchstart' in document.documentElement) document.write(
  "<script src='js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
</script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/bootstrap-select.js"></script>
<script src="js/defaults-zh_TW.js"></script>
<script src="js/bootstrap-treeview.min.js"></script>
<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="js/bootstrap-datepicker.zh-TW.min.js"></script>
<script type="text/javascript" src="js/jqdate.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.zh-TW.js"></script>
<script type="text/javascript" src="js/jqdatetime.js"></script>
<script type="text/javascript" src="js/laydate.js"></script>
<script type="text/javascript" src="js/fileinput.js"></script>
<script type="text/javascript" src="js/zh-TW.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/jquery.inputlimiter.min.js"></script>
<script src="js/autosize.min.js"></script>
<script src="js/jquery.colorbox.min.js"></script>
<script src="js/jquery.blockUI.js"></script>
<script src="js/custom.js"></script>
<script src="js/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
$(function() {
  autosize($('textarea[class*=autosize]'));
  $('textarea.limited').inputlimiter({
    remText: '已经输入%n个字',
    limitText: '最多允许%n个字'
  });
});
</script>
<!--select2 下拉列表 -->
<script type="text/javascript">
$(function() {
  $('.select2').css('width', '100%').select2({
    allowClear: true
  });
});
</script>
<!--提示系统 --->
<script language="javascript" src="js/jquery.titlealert.js"></script>
<script type="text/javascript" src="js/swfobject.js"></script>
<script type="text/javascript">
var order_msg;
var myTitle = $(document).attr("title");
//IE正常显示 其他浏览器无法运行 还会影响其他功能
var flashvars = {};
var params = {
  wmode: "transparent"
};
var attributes = {};
swfobject.embedSWF("js/sound.swf", "sound", "1", "1", "9.0.0",
  "expressInstall.swf", flashvars, params, attributes);

$(function() {
  checkOrder();
  var int = setInterval("checkOrder()", 60000); //设置一分钟
})

function checkOrder() {
  $.ajax({
    type: "POST",
    url: CI_URL + 'module/Checkorder',
    cache: false,
    dataType: "json"
  }).done(function(data) {
    order_msg = '';
    for (i = 0; i < data.length; i++) {
      order_msg += '您有' + data[i]["rowCount"] + '笔' + data[i]["rowTitle"] + '尚未处理！\n';
      for (j = 0; j < data[i]["details"].length; j++) {
        if (data[i]["details"][j]["no_sound"] == '0') {
          play();
        }
      }
      $('#' + data[i]["objID"]).html(data[i]["rowCount"]);
    }

    //console.log(msg);
    if (data.length > 0) {
      $.titleAlert("【您有" + data.length + "则新的通知】", "【　　　　　　　】", {
        stopOnFocus: false
      }); //闪铄标题
      //console.log(msg);
      NotificationShow(); //桌面通知

    } else {
      $.titleAlert(myTitle, myTitle, {
        stopOnFocus: false
      }); //闪铄标题
      $('#in_stock_span').html('0');
    }

  });


}

function play() {
  /*
                var sound = document.getElementById("sound");
                if (sound) {
                    sound.SetVariable("f", 'js/msg2.mp3');
                    sound.GotoFrame(1);
                }
				*/
  var audio = document.createElement("audio");
  audio.src = "js/msg2.mp3";
  audio.play();
}

//桌面通知
function NotificationShow() {
  if (window.Notification) {
    if (Notification.permission === 'granted') {
      var options = {
        body: order_msg,
        renotify: true,
        noscreen: true, //手机推播
        tag: "myNotification",
        icon: "//game99.demonsupervisor.com/images/www/images/logo.gif",
      }
      var notification = new Notification('系统通知', options);
      /*
      //3秒後关闭
      notification.onshow = function () {
          setTimeout(function () {
              notification.close();
          },3000);
      };
      */
    } else {
      Notification.requestPermission();
    }
  }
}
</script>
<!--提示系统 --->
