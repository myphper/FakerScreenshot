<?php
include "header.php";
?>
<div id="content">
<div class="row">
<div class="col-lg-12">
<h3 class="page-header">支付宝转账生成器</h3>
<hr>
</div>
</div>
<div class="row" style="position:relative;padding: 0 15px;">
<div class="panel-body panel-wx-tab">

<ul class="nav nav-tabs">
<li class="active"><a href="#w1" data-toggle="tab">外观设置</a></li>
<li><a href="#w2" data-toggle="tab">内容设置</a></li>
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
<span>交易结果：</span>
<select class="slt-common" data-class="i-bottom-alipay">
<option value="">交易成功</option>
<option value="i-bottom-alipay-process">处理中</option>
</select>
</p>
</div>
</div>
<div class="tab-pane fade" id="w2">
<div class="setting">
<div class="users">
<div class="add-user">
<div class="a-u-pic">
<div class="a-u-pic-show">
<input type="file" accept="image/jpeg,image/x-png">
</div>
</div>
<div class="a-u-name">
<p>
<span>用户名：</span>
<input class="input-common input-username" data-class="i-b-a-username-com" type="text" value="陈大明">
</p>
<p>
<input class="btn-rand-face" type="button" value="随机头像" data-class="i-b-a-face">
</p>
</div>
</div>
</div>
<p>
<span>类型：</span>
<select class="slt-type">
<option value="1">转入</option>
<option value="2">转出</option>
</select>
</p>
<p><span>转入/转出金额：</span>
<input class="i-ali-pay-money-change" type="text" value="100.00">
</p>
<p>
<span>对方账号：</span>
<input type="text" value="abc***@qq.com" data-class="i-b-a-email" class="input-common input-email">
<input id="rand_email" type="button" value="随机生成">
</p>
<p>
<span>理由：</span>
<input type="text" value="转账" data-class="i-b-a-liyou" class="input-common">
</p>
<p>
<span>付款方式：</span>
<input type="text" value="支付宝" data-class="i-b-a-pay-type" class="input-common">
</p>
<p>
<span>交易类型：</span>
<input type="text" value="即时到帐" data-class="i-b-a-type" class="input-common">
</p>
<p>
<span>创建时间：</span>
<input type="text" value="" data-class="i-b-a-time" class="input-common datepicker">
</p>
<p>
<span>交易号：</span>
<input style="width:280px;" type="text" value="" data-class="i-b-a-trade" class="input-common input-trade">
<input id="btn-trade" type="button" value="随机生成">
</p>
</div>
</div>
</div>
</div>
<div class="phone-wrap">
<div id="iphone" class="iphone">
<div class="i-top i-top-alipay">
<div class="i-top-elm i-signal"></div>
<div class="i-top-elm i-carrier i-c-yd"></div>
<div class="i-top-elm i-network i-n-wifi"></div>
<div class="i-top-elm i-top-time">00:00</div>
<div class="i-top-elm-r i-top-berry"><i><em></em></i></div>
<div class="i-top-elm-r i-top-berry-num">50%</div>
<div class="i-top-elm-r i-top-dir"></div>
<div class="i-nav i-nav-alipay">
</div>
</div>
<div class="i-body i-body-alipay">
<div class="i-b-a-face" style="background-image:url('public/static/index/factory/images/face/face7.jpg')">
<div></div>
</div>
<div class="i-b-a-username i-b-a-username-com">陈大明</div>
<div class="i-b-a-money">
<div class="i-b-a-m-data">
<span class="i-b-a-plus">+</span>
<em>100.00</em>
</div>
</div>
<div class="i-b-a-username2 i-b-a-username-com">陈大明</div>
<div class="i-b-a-email"><a class="__cf_email__" href="cdn-cgi/l/email-protection" data-cfemail="640506074e4e4e2415154a070b09">[email&#160;protected]</a><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></div>
<div class="i-b-a-liyou">转账</div>
<div class="i-b-a-pay-type">支付宝</div>
<div class="i-b-a-type">即时到帐</div>
<div class="i-b-a-time"></div>
<div class="i-b-a-trade"></div>
</div>
<div class="i-bottom i-bottom-alipay"></div>
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
<script type="text/javascript">
		$('body').on('change', '.a-u-pic-show input', function() {
			var img = document.createElement('img'); //创建 img 对象
			var _this = $(this);
			window.URL = window.URL || window.webkitURL;
			var imgFile = $(this).get(0);
			if (window.URL && imgFile.files[0]) {
				var reader = new FileReader();
				reader.readAsDataURL(imgFile.files[0]);
				reader.onload = function(e) {
					var img = '<img src="' + this.result + '" alt="">';
					_this.parent().find('img').remove();
					_this.parent().append(img);
					$('.i-b-a-face').css('background-image', 'url(' + this.result + ')');
				}
			}
		});
		$('.datepicker').datetimepicker({
			format: 'yyyy-mm-dd hh:ii',
			language: "zh-CN",
			minView: 2,
			autoclose: true,
			startDate: (new Date()),
			pickerPosition: 'top-right'
		}).on('changeDate', function(ev) {
			var _this = $(this);
			_this.keyup();
		});
		var time = (new Date()).format("yyyy-MM-dd hh:mm");
		$('.datepicker').val(time);
		$('.i-b-a-time').text(time);
		//交易号
		function set_trade() {
			var rand = randomString(16);
			var head = (new Date()).format("yyyy-MM-dd hh:mm").split(' ')[0].replace('-', '').replace('-', '');
			var num = head + '00000000' + rand;
			$('.i-b-a-trade').text(num);
			$('.input-trade').val(num);
		}
		set_trade();
		$('#btn-trade').click(function() {
			set_trade();
		});
		//类型
		$('.slt-type').change(function() {
			var type = $(this).find('option:selected').val();
			switch (type) {
				case '1':
					{
						$('.i-b-a-plus').text('+').removeClass('i-b-a-mines');
						$('.i-body-alipay').removeClass('i-body-alipay2');
						$('.i-b-a-pay-type').hide();
					}
					break;
				case '2':
					{
						$('.i-b-a-plus').text('-').addClass('i-b-a-mines');
						$('.i-body-alipay').addClass('i-body-alipay2');
						$('.i-b-a-pay-type').show();
					}
					break;
			}
		});
		$('.i-ali-pay-money-change').bind('input propertychange', function() {
			var value = $(this).val();
			if (!value || isNaN(value)) {
				return false;
			}
			if (isNaN(value)) {
				return false;
			}
			if (value > 9999) {
				$('.i-b-a-m-data').addClass('i-b-a-m-data-min');
			} else {
				$('.i-b-a-m-data').removeClass('i-b-a-m-data-min');
			}
			value = parseFloat(value).formatMoney(2, '');
			$('.i-b-a-m-data em').text(value);
		});
		//随机生成邮箱
		function set_email() {
			var head = randomString(3, true);
			var foot = ['qq.com', '163.com', 'yeah.net', 'sina.com', '126.com', 'vip.sina.com', 'sina.cn', 'hotmail.com', 'gmail.com', 'sohu.com', '139.com', 'wo.com.cn', '189.com', '21cn.com'];
			var rand_num = get_random_num(0, 14);
			var email = head + '***' + '@' + foot[rand_num];
			$('.input-email').val(email);
			$('.i-b-a-email').text(email);
		}
		set_email();
		$('#rand_email').click(function() {
			set_email();
		});
		setTimeout(function() {
			$('.btn-rand-face').click();
		}, 500);
	</script>
</div>
<?php
include "footer.php";
?>