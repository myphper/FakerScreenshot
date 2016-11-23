<?php
// echo $content;exit;
// data:image/jpeg;base64
// $content = 'data:image/jpeg;base64';
$type = isset($_GET['type'])?'upload':'';
$username = isset($_GET['u'])?$_GET['u']:'huaipipi';
$shuffle = isset($_GET['s'])?$_GET['s']:0;
$userPath = 'public/face/'.$username.'/';
$maxDefault = 200;
$picDefault = 'public/static/index/factory/images/add-pic.png';
$dbFile = $userPath.'customer.txt';

$dbFileContent = [];
if(file_exists($dbFile)){
    $dbFileContent = json_decode(file_get_contents($dbFile),true);
}


//var_dump($dbFileContent);die;
$userMax = isset($dbFileContent['max']) ? $dbFileContent['max'] : $maxDefault;

$customerCount = isset($dbFileContent['ccount']) ? $dbFileContent['ccount'] : -1;
$customerList = isset($dbFileContent['clist']) ? $dbFileContent['clist'] : [];

$ownerCount = isset($dbFileContent['ocount']) ? $dbFileContent['ocount'] : -1;
$ownerList = isset($dbFileContent['olist']) ? $dbFileContent['olist'] : [];

if($customerCount == -1){
    $res = [];
    exec('ls -l '.$userPath.' | grep _',$res);
    $customerCount = count($res);
}
if($ownerCount == -1){
    $res = [];
    exec('ls -l '.$userPath.'*.jpg | grep -v "_"',$res);
    $ownerCount = count($res);
}

if(!is_array($ownerList) || count($ownerList) != $ownerCount){
    $ownerList =  range(1,$ownerCount);
}

if(!is_array($customerList) || count($customerList) != $customerCount){
    $customerList =  range(1,$customerCount);
    //file_put_contents($customerFile,json_encode($customer));
}

if ($type == 'upload') {
    $content = htmlspecialchars($_POST['data']);
    $pid = trim(htmlspecialchars($_POST['pid']));
    $rule = '/data:(.*?);base64/';
    preg_match($rule, $content, $result);
    if($result[1]=='image/jpeg'){
        $pidArr = explode('_', $pid);
        if(isset($pidArr[1])){
            if($pidArr[0] > $customerCount){
                $pid = ($customerCount+1).'_'.($customerCount+1);
                $dbFileContent['ccount'] ++;
                $dbFileContent['clist'][] = $customerCount+1;
            }
        }else{
            if($pidArr[0] > $ownerCount){
                $pid = ($customerCount+1);
                $dbFileContent['ocount'] ++;
                $dbFileContent['olist'][] = $pid;
            }
        }
        $content = trim(str_replace($result[0], '', $content));
        $content = base64_decode($content);
        $filename = $userPath.$pid.'.jpg';
        //var_dump($filename,$dbFileContent);die;
        file_put_contents($filename, $content);
        file_put_contents($dbFile,json_encode($dbFileContent));
        exit;
    }
}else{

}

if($shuffle == 1){
    shuffle($customerList);
    //file_put_contents($customerFile,json_encode($customer));
}

$ownerPageList = array_pad($ownerList, $maxDefault, -1);
$customerPageList = array_pad($customerList, $maxDefault, -1);
//var_dump($ownerList,$customerList);die;

$dbArray = array(
    'max' => $userMax,
    'ccount' => $customerCount,
    'clist' => $customerList,
    'ocount' => $ownerCount,
    'olist' => $ownerList
);
file_put_contents($dbFile,json_encode($dbArray));


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
            <input type="button" onclick="customerShuffle()" value="随机"/>
        </div>

        <div class="list-group col-md-2">
            <ul class="list-group">
              <h5>主人</h5>
              <?php
              foreach ($ownerPageList as $key => $value) {
                $url = $userPath.$value.'.jpg';
                if($value == -1){
                    $url = $picDefault;
                }
              ?>
              <li class="list-group-item ownerPageList" title='主人<?php echo ($key+1);?>'>
                <div class="a-u-pic-show">
                    <input type="file" accept="image/jpeg,image/x-png" data-callback="upload_server" data-id='<?php echo ($key+1);?>'>
                    <img src="<?php echo $url;?>" class="img-rounded" alt="<?php echo ($k+1);?>">
                </div>
              </li>
              <?php }?>
            </ul>
        <hr>
        </div>
        <div class="list-group col-md-2">
            <ul class="list-group">
              <h5>客户</h5>
              <?php
              foreach ($customerPageList as $k => $i) {
                $url = $userPath.$i.'_'.$i.'.jpg';
                if($i == -1){
                    $url = $picDefault;
                }
              ?>
              <li class="list-group-item customerPageList" title='客户<?php echo ($k+1);?>'>
                <div class="a-u-pic-show">
                    <input type="file" accept="image/jpeg,image/x-png" data-callback="upload_server" data-id='<?php echo ($k+1).'_'.($k+1);?>'>
                    <img src="<?php echo $url;?>" class="img-rounded" alt="<?php echo ($k+1).'_'.($k+1);?>">
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
                if(_this.parent().parent().attr('class').indexOf('customerPageList') != -1){
                    var cur = $($('.customerPageList').find('img[src="<?php echo $picDefault;?>"]')[0]).parent();
                }else{
                    var cur = $($('.ownerPageList').find('img[src="<?php echo $picDefault;?>"]')[0]).parent();
                }
                var data_id = cur.find('img').attr('alt');
                var img = '<img src="' + this.result + '" class="img-rounded" alt="'+data_id+'">';
                cur.find('img').remove();
                cur.append(img);
                if (callback) {
                    eval(callback + '("'+this.result+'","'+data_id+'")');
                }
            }
        }
    });
    var url_upload = 'img.php?type=upload&u=<?php echo $username?>';
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
    var url_shuffle = 'img.php?u=<?php echo $username?>&s=1';
    var customerShuffle = function () {
       window.location.href = url_shuffle;
    }
</script>