<?php
include "header.php";
?>
<div id="content">
<div class="row">
<div class="col-lg-12">
<h3 class="page-header">支付宝账户余额生成器</h3>
<hr>
</div>
</div>
<div class="row" style="position:relative;padding: 0 15px;">
<div class="panel-body panel-wx-tab">

<ul class="nav nav-tabs">
<li class="active"><a href="#w1" data-toggle="tab">外观设置</a></li>
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
<span>账户余额：</span>
<input type="text" value="88.88" class="i-ali-ba-change">
<script>
                                $(function () {
                                    $('.i-ali-ba-change').bind('input propertychange', function () {
                                        var value = $(this).val();
                                        if (!value || isNaN(value))
                                            return false;
                                        value = toDecimal2(value);
                                        $('.i-ali-ba-money').text(value);
                                    });
                                });
                            </script>
</p>
<p>
<span>聊天标题：</span>
<input type="text" value="10" data-class="i-ali-ba-jfb" class="input-common">
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
<div class="i-nav i-nav-ali-balance">
<div class="i-n-ali-b-left"></div>
<div class="i-n-ali-b-mid"></div>
</div>
</div>
<div class="i-body i-body-ali-balance">
<div class="i-ali-ba-bg"></div>
<div class="i-ali-ba-money">88.88</div>
<div class="i-ali-ba-jfb">10</div>
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
<?php
include "footer.php";
?>