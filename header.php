<?php
include "common.php";
?>
<link rel="stylesheet" type="text/css" href="public/static/index/factory/css/common.css">
<link rel="stylesheet" type="text/css" href="public/static/common/zui/lib/datetimepicker/datetimepicker.min.css">
<style type="text/css">.apps{display:block;}</style>
<!--[if lt IE 9]>
<script src="public/static/common/js/html5shiv.js"></script>
<script src="public/static/common/js/respond.min.js"></script>
<![endif]-->
<script>
    var is_check_brower = true;
    var is_mobile = '';
    var image_type = 0;
    <?php if(!isset($url_face)){
    	$url_face = '"public/static/index/factory/images/face/"';
    }?>
    <?php if(!isset($face_num)){
    	$face_num = 900;
    }?>
    var url_face = <?php echo $url_face;?>;
    var url_expression_qq = "public/static/index/factory/images/expression/qq/";
    var url_upload = "";
</script>
<script src="public/static/index/factory/js/metisMenu.min.js"></script>
<script src="public/static/common/zui/lib/datetimepicker/datetimepicker.min.js"></script>
<script src="public/static/index/factory/js/jquery.sglide.js"></script>
<script src="public/static/index/factory/js/html2canvas.js"></script>
<script src="public/static/index/factory/js/canvas2image.js"></script>
<script src="public/static/index/factory/js/emoji.js"></script>
<script src="public/static/index/factory/js/functions.js"></script>
<script src="public/static/index/factory/js/common.js"></script>
<iframe id="ifm" frameborder="0" class="hide_ifm" src="bg.php"></iframe>