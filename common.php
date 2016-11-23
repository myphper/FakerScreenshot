<!DOCTYPE html>
<html lang="en" class="screen-desktop-wide device-desktop">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0">
<meta name="format-detection" content="telephone=no,email=no,date=no,address=no">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<link rel="icon" href="public/static/favicon.png?v=12">
<title>截图生成器</title>
<link href="public/static/common/zui/css/zui.min.css" rel="stylesheet">
<link href="public/static/common/sbadmin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
<link href="public/static/common/sbadmin/dist/css/timeline.css" rel="stylesheet">
<link href="public/static/common/sbadmin/dist/css/sb-admin-2.css" rel="stylesheet">
<link href="public/static/common/sbadmin/bower_components/morrisjs/morris.css" rel="stylesheet">
<link href="public/static/common/sbadmin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="public/static/css/public.css" rel="stylesheet">
<style type="text/css">.logo{height:40px;}#side-menu>li:first-child{margin-top:9px;border-top:1px solid #e7e7e7;}.btn-service{position:fixed;right:20px;bottom:80px;width:50px;height:50px;background:rgba(254,44,5,0.48);;border-radius:8px;text-align:center;padding:3.5px;color:white;}.btn-service img{height:26px;}.btn-back{position:fixed;right:20px;bottom:20px;width:50px;height:50px;background:rgba(0,0,0,0.5);border-radius:30px;}.btn-back div{line-height:50px;font-size:19px;text-align:center;color:white;}</style>
<!--[if lt IE 9]>
    <div id="browserz_tips">
        <div class="browserz">
            <div style="text-align: center">
                <a href="http://rj.baidu.com/soft/detail/14744.html" target="_blank">
                    <span>o(︶︿︶)o 抱歉！您的浏览器不兼容，请用</span>
                    <i></i>
                    <em>谷歌浏览器</em>
                    <span>&nbsp;打开</span>
                </a>
            </div>
            <a class=pop-close href="#" onclick="document.body.removeChild(document.getElementById('browserz_tips'))">x</a>
        </div>
        <div style="height: 1040px;" class="mask"></div>
    </div>
<![endif]-->
<!--[if lt IE 9]>
    <script src="public/static/common/js/html5shiv.js"></script>
    <script src="public/static/common/js/respond.min.js"></script>
<![endif]-->
<script src="public/static/common/jquery/jquery.1.11.0.min.js"></script>
<script src="public/static/common/zui/js/zui.min.js"></script>
<script src="public/static/common/sbadmin/bower_components/metisMenu/dist/metisMenu.min.js"></script>
<script src="public/static/common/sbadmin/dist/js/sb-admin-2.js"></script>
<script src="public/static/common/vue/vue.js"></script>
<script src="public/static/common/vue/lib/vue-tap-click.js"></script>
<script src="public/static/common/vue/vue.common.js"></script>
<script src="public/static/common/js/functions.js"></script>
<script src="public/static/common/js/common.js?r=0011231"></script>
</head>
<body>
<div id="wrapper">
<nav id="vue_userinfo" class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" style="">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php"><img class="logo" src="public/static/images/common/logo-text-icon.png" alt="logo"></a>
</div>
<ul class="nav navbar-top-links navbar-right">
<li class="dropdown" v-if="user == ''">
<a href="login.php">
<i class="fa fa-sign-in fa-fw"></i>登录
</a>
</li>

<li class="dropdown" v-if="user == ''">
<a href="/index/user/register.html">
<i class="fa fa-pencil fa-fw"></i>注册
</a>
</li>

</ul>


<div class="navbar-default sidebar" role="navigation" style="">
<div class="sidebar-nav navbar-collapse">
<ul class="nav" id="side-menu">
<li>
<a href="index.php"><i class="fa fa-home fa-fw"></i> 首页</a>
</li>
<li>
<a href="#"><i class="fa fa-wechat fa-fw"></i> 微信<span class="fa arrow"></span></a>
<ul class="nav nav-second-level">
<li>
<a href="wechat.php">微信对话生成器</a>
</li>
<li>
<a href="wechatbatch.php">微信对话批量生成器</a>
</li>
<li>
<a href="wechat_pay_detail.php">微信转账界面生成器</a>
</li>
<li>
<a href="wechat_wallet.php">微信零钱界面生成器</a>
</li>
<li>
<a href="wechat_moments.php">微信朋友圈点赞界面生成器</a>
</li>
</ul>
</li>
<li>
<a href="#"><i class="fa fa-shield fa-fw"></i> 支付宝<span class="fa arrow"></span></a>
<ul class="nav nav-second-level">
<li>
<a href="alipay_transfer.php">支付宝转账生成器</a>
</li>
<li>
<a href="alipay_balance.php">支付宝账户余额生成器</a>
</li>
</ul>
</ul>
</div>
</div>
</nav>
<div id="page-wrapper">