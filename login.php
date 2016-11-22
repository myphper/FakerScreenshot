<?php
include "common.php";
?>

<div id="vue_main" class="row">
	<div class="col-md-4 col-md-offset-4 col-sm-12">
		<div class="my-panel login-panel panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">用户登录</h3>
			</div>
			<div class="panel-body">
				<fieldset>
					<div class="form-group">
						<input id="phone" class="form-control" placeholder="用户名" name="phone" type="text">
					</div>
					<div class="form-group">
						<input id="password" class="form-control" placeholder="密码" name="password" value="" type="password">
					</div>


					<div class="form-group">
					    <div class="controls Validform_checktip text-warning"></div>
					</div>
					<div class="">
					    <label class="font-weight:;"><a style="float:right;color:#f00;" href="/index/user/register.html">没有账号？点我注册</a></label>
					    <a style="float:right;color:#f00;" href="/index/user/findpw.html">忘记密码？</a>
					</div>
					<button class="btn btn-lg btn-primary btn-block">登 录</button>
				</fieldset>
			</div>
		</div>
	</div>
</div>
<script>
    var flag_logining = false;
    var vue_main = new Vue({
        el: '#vue_main',
        methods: {
            login: function () {
                //是否正在登录中
                if (flag_logining) {
                    return
                }
                //标记为登录中
                flag_logining = true;
                $.post('/index/user/login.html', {
                    type: 'login',
                    username: vue_main.username,
                    password: vue_main.password,
                    redirect: ''
                }, function (data) {
                    if (data.code == 1) {
                        showSuccess(data.msg);
                        setTimeout(function () {
                            var redirect = "";
                            window.location = redirect == "" ? "/index/user/profile.html" : redirect;
                        }, 1000);
                    } else {
                        flag_logining = false;
                        showError(data.msg);
                    }
                }, 'json');
            }
        }
    });
</script>