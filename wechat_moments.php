<?php
include "header.php";
?>
<a href='#' download='123.png' id='click'></a>

<div id="content">
<div class="row">
<div class="col-lg-12">
<h3 class="page-header">微信朋友圈点赞界面生成器</h3>
<hr>
</div>
</div>
<div class="row" style="position:relative;padding: 0 15px;">
<div class="panel-body panel-wx-tab">

<ul class="nav nav-tabs">
<li class="active"><a href="#w1" data-toggle="tab">外观设置</a></li>
<li><a href="#w2" data-toggle="tab">对话设置</a></li>
</ul>

<div class="tab-content">
<div class="tab-pane fade in active" id="w1">
<div class="setting">
<p>
<span>信号强度：</span>
<select class="slt-common" data-class="i-signal">
<option value="i-signal1">1格</option>
<option value="i-signal2">2格</option>
<option value="i-signal3">3格</option>
<option value="i-signal4">4格</option>
<option selected value="i-signal5">5格</option>
</select>
</p>
<p>
<span>运营商：</span>
<select class="slt-common" data-class="i-carrier">
<option value="i-c-yd">中国移动</option>
<option value="i-c-lt">中国联通</option>
<option value="i-c-dx">中国电信</option>
</select>
</p>
<p>
<span>网络信号：</span>
<select class="slt-common" data-class="i-network">
<option value="">无</option>
<option selected value="i-n-wifi">Wifi</option>
<option value="i-n-g">G</option>
<option value="i-n-e">E</option>
<option value="i-n-3g">3G</option>
<option value="i-n-4g">4G</option>
</select>
</p>
<p>
<span>手机时间：</span>
<select class="slt-phone-time slt-p-shi">
<option>-</option>
<option>上午</option>
<option>下午</option>
</select>
<select class="slt-phone-time slt-p-hour">
</select> :
<select class="slt-phone-time slt-p-minite">
</select>
</p>
<p>
<span>锁定旋转：</span>
<label>
<input class="rd-common" data-class="i-top-dir" type="radio" name="top-dir" value="1" checked /> 显示</label>
<label>
<input class="rd-common" data-class="i-top-dir" type="radio" name="top-dir" value="0"> 不显示</label>
</p>
<div style="margin: 0 0 10px;margin-top: 20px;">
<span>电量：</span>
<div class="slider_bar"></div>
</div>
<p>
<span>电池状态：</span>
<select class="slt-common" data-class="i-top-berry">
<option value="">正常</option>
<option value="i-top-berry2">充电中</option>
</select>
</p>
<p>
<span>电池百分比：</span>
<label>
<input class="rd-common" data-class="i-top-berry-num" type="radio" name="i-top-berry-num" value="1" checked /> 显示</label>
<label>
<input class="rd-common" data-class="i-top-berry-num" type="radio" name="i-top-berry-num" value="0"> 不显示</label>
</p>
<p>
<span>听筒模式：</span>
<label>
<input class="rd-common" data-class="i-n-ear" type="radio" name="i-n-ear" value="1"> 显示</label>
<label>
<input class="rd-common" data-class="i-n-ear" type="radio" name="i-n-ear" value="0" checked /> 不显示</label>
</p>
<p>
<span>聊天模式：</span>
<select class="slt-common" data-class="i-n-user">
<option value="">单聊</option>
<option value="i-n-user-group">群聊</option>
</select>
</p>
<p>
<span>聊天标题：</span>
<input type="text" value="duang~~~" data-class="i-n-name span" class="input-common">
</p>
<p>
<span>消息数目：</span>
<input type="text" value="" class="input-i-n-count">
<a class="btn-del-i-n-count" href="#">删除数目</a>
</p>
<p>
<span>显示用户昵称：</span>
<label>
<input class="rd-common" data-class="i-b-nick" type="radio" name="i-b-nick" value="0" checked /> 不显示</label>
<label>
<input class="rd-common" data-class="i-b-nick" type="radio" name="i-b-nick" value="1"> 显示</label>
</p>
<p>
<span>底部输入框：</span>
<select class="slt-common" data-class="i-bottom">
<option value="">文本模式</option>
<option value="i-bottom2">语音模式</option>
</select>
</p>
<div style="overflow:hidden;margin:20px 0 40px 0;">
<span style="float:left;margin-right:10px;">背景图片：
<div style="color:#f00">(图片大小:宽640 x 高1136)</div>
<a class="body_bg_del btn btn-danger btn_no_water" href="#">删除背景</a>
</span>
<div class="a-u-pic a-u-pic-bodybg">
<div class="a-u-pic-show">
<input type="file" data-callback="set_body_bg" accept="image/jpeg,image/x-png">
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="w2">
<div class="setting">
<p style="border-bottom:1px #ccc dotted;padding-bottom:10px;">
<span>添加聊天时间：</span>
<select class="slt-xinqi">
<option>-</option>
<option>星期一</option>
<option>星期二</option>
<option>星期三</option>
<option>星期四</option>
<option>星期五</option>
<option>星期六</option>
<option>星期日</option>
</select>
<select class="slt-shi">
<option>-</option>
<option>上午</option>
<option>下午</option>
<option>凌晨</option>
</select>
<select class="slt-hour">
</select> :
<select class="slt-minite">
</select> &nbsp;
<a class="add-time-btn btn btn-primary btn-sm" href="#">添加</a>
</p>
<div class="users">
<div class="add-user">
<div class="a-u-pic">
<div class="a-u-pic-show">
<input type="file" accept="image/jpeg,image/x-png">
</div>
</div>
<div class="a-u-name">
<p><span>用户名：</span>
<input class="a-u-data-name" type="text" value="">
</p>
<p><span>聊天内容：</span>
<textarea class="a-u-content">欢迎使用微信对话</textarea><a class="a-u-face btn-add-face" data-input="a-u-content" href="#">表情</a></p>
<p><span>转账/收钱金额：</span>
<input class="a-u-data-pay" type="text" value="88.88">
</p>
<p><span>语音时间：</span>
<input class="a-u-data-voice" type="text" value="10">
</p>
<p>
<input style="margin-right:5px;" class="btn-rand-username" type="button" value="随机用户名">
<input class="btn-rand-face" type="button" value="随机头像">
</p>
</div>
<div class="a-u-dialog" style="clear:both;"><a class="btn btn-primary" data-type="left" href="#">添加文字对话</a></div>
<div class="a-u-dialog-voice"><a class="btn btn-primary" data-type="left" href="#">添加语音对话</a></div>
<div class="a-u-dialog-pay"><a class="btn btn-primary" data-dir="send" data-type="left" href="#">添加转账对话</a></div>
<div class="a-u-dialog-pay"><a class="btn btn-primary" data-dir="rec" data-type="left" href="#">添加收钱对话</a></div>
<div class="a-u-dialog-master"><a class="btn btn-primary btn-success" href="#">设为主人</a></div>
<div class="a-u-dialog-del"><a class="btn btn-danger" href="#">删除用户</a></div>
</div>
</div>
<div class="btns">
<input id="add-user" class="btn btn-success" type="button" value="添加用户">
<input class="btn btn-success clear-dialog" type="button" value="清除对话">
</div>
</div>
</div>
</div>
</div>
<div class="phone-wrap">
<div id="iphone" class="iphone iphone-preview">
<div class="i-top">
<div class="i-top-elm i-signal"></div>
<div class="i-top-elm i-carrier i-c-yd"></div>
<div class="i-top-elm i-network i-n-wifi"></div>
<div class="i-top-elm i-top-time">00:00</div>
<div class="i-top-elm-r i-top-berry"><i><em></em></i></div>
<div class="i-top-elm-r i-top-berry-num">50%</div>
<div class="i-top-elm-r i-top-dir"></div>
<div class="i-nav">
<div class="i-n-moments"></div>
<div class="i-n-name">
<span>详情</span>
<i class="i-n-ear" style="display:none">&nbsp;</i>
</div>
</div>
</div>
<div class="i-body">

</div>
<div class="i-bottom i-bottom-wechat">
<div class="i-b-we-left"></div>
<div class="i-b-we-mid">
<div class="i-b-we-mid-text"></div>
</div>
<div class="i-b-we-right"></div>
</div>
</div>
</div>
</div>
<div class="emojiPanel" id="emojiPanel">
<ul class="faceTab">
<li><a class="chooseFaceTab" href="javascript:;">QQ表情</a></li>

</ul>
<div class="faceWrap" style="zoom:1;outline:none;">
<div class="faceBox emojiArea"></div>
</div>
</div>
</div>

<script type="text/javascript">
    //消息数目
    var i_n_count = randomString(1);
    if (i_n_count > 0) {
        $('.input-i-n-count').val(i_n_count);
        $('.i-n-count').text('(' + i_n_count + ')');
    }
    $('.input-i-n-count').bind('input propertychange', function () {
        var val = $(this).val();
        if (isNaN(val) || val == 0) {
            $('.i-n-count').text('');
            return false;
        }
        val = '(' + $(this).val() + ')';
        $('.i-n-count').text(val);
    });
    $('.btn-del-i-n-count').click(function () {
        $('.i-n-count').text('');
        $('.input-i-n-count').val('');
        return false;
    });
    $('body').on('click', '.a-u-dialog a', function () {
        var user = $(this).parents('.add-user');
        var index = user.index();
        var name = user.find('.a-u-name .a-u-data-name').val();
        var content = user.find('.a-u-name textarea').val();
        var img = $(this).parent().parent().find('.a-u-pic-show img').clone();
        var type = user.find('.a-u-dialog-master a').hasClass('btn-success');
        if (name == '') {
            alert('请输入用户名！');
            return false;
        }
        if (content == '') {
            alert('请输入聊天内容！');
            return false;
        }
        if (!img.length) {
            img = '<img src="Public/static/images/default-head.png" />';
        }
        content = replace_qq_emoji(content);
        var msg_class = type ? 'i-b-sen-text' : 'i-b-rec-text';
        var nick = type ? '' : '<p class="i-b-nick">' + name + '</p>';
        var dialog = $('<div class="' + msg_class + '"><div>' + nick + '<span><i></i><em>' + content + '</em><a class="msg-del"></a></span></div></div>');
        dialog.prepend(img);
        $('.i-body').append(dialog);
        return false;
    });
    $('.add-time-btn').click(function () {
        var xinqi = $('.slt-xinqi option:selected').val();
        var shi = $('.slt-shi option:selected').val();
        var hour = $('.slt-hour option:selected').val();
        var minite = $('.slt-minite option:selected').val();
        var str = '';
        if (xinqi != '-')
            str += xinqi + ' ';
        if (shi != '-')
            str += shi;
        str += hour + ':';
        str += minite;
        var html = '<div class="i-b-time"><span>' + str + '</span><a class="msg-del"></a></div>';
        $('.i-body').append(html);
        return false;
    });
    var set_body_bg = function () {
        var img = $('.a-u-pic-bodybg img');
        var src = img.attr('src');
        $('.i-body').css('background-image', 'url(' + src + ')');
        if (is_login) {
            //alert();
        }
    }
    $('body').on('change', '.a-u-pic-show input', function () {
        var img = document.createElement('img'); //创建 img 对象
        var _this = $(this);
        var callback = _this.attr('data-callback');
        window.URL = window.URL || window.webkitURL;
        var imgFile = $(this).get(0);
        if (window.URL && imgFile.files[0]) {
            var reader = new FileReader();
            reader.readAsDataURL(imgFile.files[0]);
            reader.onload = function (e) {
                var img = '<img src="' + this.result + '" alt="">';
                _this.parent().find('img').remove();
                _this.parent().append(img);
                if (callback) {
                    eval(callback + '()');
                }
            }
        }
    });
    //添加用户
    $('#add-user').click(function () {
        var time = (new Date()).valueOf();
        var html = $('<div class="add-user"><div class="a-u-pic"><div class="a-u-pic-show"><input type="file" accept="image/jpeg,image/x-png" /></div></div><div class="a-u-name"><p><span>用户名：</span><input class="a-u-data-name" type="text" value="" /></p><p><span>聊天内容：</span><textarea class="a-u-content' + time + '"></textarea><a class="a-u-face btn-add-face" data-input="a-u-content' + time + '" href="#">表情</a></p><p><span>转账/收钱金额：</span><input class="a-u-data-pay" type="text" value="" /></p><p><span>语音时间：</span><input class="a-u-data-voice" type="text" value="" /></p><p><input style="margin-right:5px;" class="btn-rand-username" type="button" value="随机用户名" /><input class="btn-rand-face" type="button" value="随机头像" /></p></div><div class="a-u-dialog" style="clear:both;"><a class="btn btn-primary" data-type="left" href="#">添加文字对话</a></div><div class="a-u-dialog-voice"><a class="btn btn-primary" data-type="left" href="#">添加语音对话</a></div><div class="a-u-dialog-pay"><a class="btn btn-primary" data-dir="send" data-type="left" href="#">添加转账对话</a></div><div class="a-u-dialog-pay"><a class="btn btn-primary" data-dir="rec" data-type="left" href="#">添加收钱对话</a></div><div class="a-u-dialog-master"><a class="btn btn-primary" href="#">设为主人</a></div><div class="a-u-dialog-del"><a class="btn btn-danger" href="#">删除用户</a></div></div>');
        $('.users').append(html);
        html.find('.btn-rand-username').click();
    });
    //删除用户
    $('body').on('click', '.a-u-dialog-del', function () {
        if (confirm('您确认要删除？')) {
            $(this).parents('.add-user').remove();
        }
        return false;
    });
    /*$('body').on('mouseover','.i-b-time,.i-b-rec-text,.i-b-sen-text',function(){
     $(this).find('.msg-del').show();
     });
     $('body').on('mouseout','.i-b-time,.i-b-rec-text,.i-b-sen-text',function(){
     $(this).find('.msg-del').hide();
     });*/
    $('body').on('click', '.msg-del', function () {
        $(this).parents('.i-b-time,.i-b-rec-text,.i-b-sen-text').remove();
    });
    $('.clear-dialog').click(function () {
        if (confirm('您确认要清除所有对话？')) {
            $('.i-b-time,.i-b-rec-text,.i-b-sen-text').remove();
        }
    });
    //添加转账对话
    $('body').on('click', '.a-u-dialog-pay a', function () {
        var dir = $(this).attr('data-dir');
        var user = $(this).parents('.add-user');
        var type = user.find('.a-u-dialog-master a').hasClass('btn-success');
        var index = user.index();
        var name = user.find('.a-u-name .a-u-data-name').val();
        var pay = user.find('.a-u-name .a-u-data-pay').val();
        var img = $(this).parent().parent().find('.a-u-pic-show img').clone();
        if (name == '') {
            alert('请输入用户名！');
            return false;
        }
        if (pay == '') {
            alert('请输入转账/收钱金额！');
            return false;
        }
        if (isNaN(pay)) {
            alert('您输入的金额有误！');
            return false;
        }
        if (!img.length) {
            img = '<img src="Public/static/images/default-head.png" />';
        }
        var wrap_class = !type ? 'i-b-rec-text' : 'i-b-sen-text';
        var pay_class = dir == 'send' ? 'i-pay-send' : 'i-pay-rec';
        var nick = type ? '' : '<p class="i-b-nick">' + name + '</p>';
        var html = $('<div class="' + wrap_class + '"><div class="i-b-pay">' + nick + '<span class="' + pay_class + '"><i></i><em>' + toDecimal2(pay) + '</em><a class="msg-del"></a></span></div></div>');
        html.prepend(img);
        $('.i-body').append(html);
        return false;
    });
    //添加语音对话
    $('body').on('click', '.a-u-dialog-voice a', function () {
        var user = $(this).parents('.add-user');
        var name = user.find('.a-u-name .a-u-data-name').val();
        var img = $(this).parent().parent().find('.a-u-pic-show img').clone();
        var voice = user.find('.a-u-name .a-u-data-voice').val();
        var type = user.find('.a-u-dialog-master a').hasClass('btn-success');
        if (name == '') {
            alert('请输入用户名！');
            return false;
        }
        if (voice == '') {
            alert('请输入语音时间！');
            return false;
        }
        if (isNaN(voice)) {
            alert('您输入的语音时间有误！');
            return false;
        }
        if (!img.length) {
            img = '<img src="Public/static/images/default-head.png" />';
        }
        var wrap_class = !type ? 'i-b-rec-text' : 'i-b-sen-text';
        var nick = type ? '' : '<p class="i-b-nick">' + name + '</p>';
        var v_len = 0;
        var len = 0;
        v_len = voice > 60 ? 60 : voice;
        len = (360 - 96) / 60 * v_len + 96;
        var unread = ''; //type ? '' : '<strong></strong>';
        var html = $('<div class="' + wrap_class + '"><div class="i-b-voice">' + nick + '<span style="width:' + len + 'px"><i></i><b></b><em>' + voice + '\'\'</em>' + unread + '<a class="msg-del"></a></span></div></div>');
        html.prepend(img);
        $('.i-body').append(html);
        return false;
    });
    //主人切换
    $('body').on('click', '.a-u-dialog-master a', function () {
        var parent = $(this).parents('.users');
        parent.find('.a-u-dialog-master a').removeClass('btn-success');
        $(this).addClass('btn-success');
        return false;
    });
    $('.body_bg_del').click(function () {
        $('.i-body').css('background-image', 'none');
        $('.a-u-pic-bodybg img').remove();
        return false;
    });
    $('#add-user').click();
    setTimeout(function () {
        $('.btn-rand-face').click();
        $('.btn-rand-username').click();
    }, 500);
</script>
<?php
include "footer.php";
?>