<?php
// echo $content;exit;
// data:image/jpeg;base64
// $content = 'data:image/jpeg;base64';
$type = isset($_GET['type'])?'upload':'';

if ($type == 'upload') {
    $src = 'public/face/huaipipi/';
    $content = htmlspecialchars($_POST['data']);
    $pid = trim(htmlspecialchars($_POST['pid']));
    $rule = '/data:(.*?);base64/';
    preg_match($rule, $content, $result);
    if($result[1]=='image/jpeg'){
        $content = trim(str_replace($result[0], '', $content));
        $content = base64_decode($content);
        $filename = $src.$pid.'.jpg';
        file_put_contents($filename, $content);
        exit;
    }
}else{

}
include "common.php";


?>
<style>
    .a-u-pic-show{
        position:relative;
        width: 132px;
        height: 132px;
    }
    .a-u-pic-show input{
        position:absolute;
        width: 132px;
        height: 132px;
        z-index:999;
        opacity:0;
        cursor:pointer;
    }
</style>
<div class="row">
    <div class="content">
    <div class="col-md-12">
        <div class="titlebar">
            <h1>批量图片设置</h1>
        <hr>
        </div>

        <div class="list-group col-md-2">
            <ul class="list-group">
              <h5>主人</h5>
              <?php for($i=1;$i<=100;$i++){
                $url = 'public/face/huaipipi/'.$i.'.jpg';
                if (!file_exists($url)) {
                    $url = 'public/static/index/factory/images/add-pic.png';
                }
              ?>
              <li class="list-group-item" title='主人<?php echo $i;?>'>
                <div class="a-u-pic-show">
                    <input type="file" accept="image/jpeg,image/x-png" data-callback="upload_server" data-id='<?php echo $i;?>'>
                    <img src="<?php echo $url;?>" class="img-rounded">
                </div>
              </li>
              <?php }?>
            </ul>
        <hr>
        </div>

        <div class="list-group col-md-2">
            <ul class="list-group">
              <h5>客户</h5>
              <?php for($i=1;$i<=100;$i++){
                $url = 'public/face/huaipipi/'.$i.'_'.$i.'.jpg';
                if (!file_exists($url)) {
                    $url = 'public/static/index/factory/images/add-pic.png';
                }
              ?>
              <li class="list-group-item" title='客户<?php echo $i;?>'>
                <div class="a-u-pic-show">
                    <input type="file" accept="image/jpeg,image/x-png" data-callback="upload_server" data-id='<?php echo $i.'_'.$i;?>'>
                    <img src="<?php echo $url;?>" class="img-rounded" alt="<?php echo $i;?>">
                </div>
              </li>
              <?php }?>
            </ul>
        <hr>
        </div>

    </div>

    </div>
</div>


<!--page-wrapper end div-->
</div>

<script>
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
                var data_id = _this.attr('data-id');
                if (callback) {
                    eval(callback + '("'+this.result+'","'+data_id+'")');
                }
            }
        }
    });
    var url_upload = 'img.php?type=upload';
    var upload_server = function (imgSrc,pid) {
        console.log(imgSrc);
        $.ajax({
            type: "POST",
            url: url_upload,
            data: {
                data: imgSrc,
                pid:pid
            }
        });
    }
</script>