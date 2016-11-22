function insertAtCursor(myField, myValue) {
    if (document.selection) {
        myField.focus();
        sel = document.selection.createRange();
        sel.text = myValue;
        sel.select();
    } else if (myField.selectionStart || myField.selectionStart == '0') {
        var startPos = myField.selectionStart;
        var endPos = myField.selectionEnd;
        var restoreTop = myField.scrollTop;
        myField.value = myField.value.substring(0, startPos) + myValue + myField.value.substring(endPos, myField.value.length);
        if (restoreTop > 0) {
            myField.scrollTop = restoreTop;
        }
        myField.focus();
        myField.selectionStart = startPos + myValue.length;
        myField.selectionEnd = startPos + myValue.length;
    } else {
        myField.value += myValue;
        myField.focus();
    }
}
function index_in_array(value, array) {
    for (var i = 0; i < array.length; i++) {
        var v = array[i];
        if (v == value) {
            return i;
        }
    }
    return - 1;
}
function replace_qq_emoji(str) {
    str = str.replace(/\[.*?\]/g,
    function(word) {
        var w = word.replace('[', '').replace(']', '');
        var index = index_in_array(w, qq_emoji);
        return '<img class="qq_emoji" src="' + url_expression_qq + 'Expression_' + (index + 1) + '@2x.png" />';
    });
    return str;
}
function set_water() {
    var water = $('#iphone .i-water');
    if (!water.length) {
        $('#iphone').append('<div class="i-water"></div>');
    } else {
        $('.i-water').css('display', 'block');
    }
}
Date.prototype.format = function(fmt) {
    var o = {
        "M+": this.getMonth() + 1,
        "d+": this.getDate(),
        "h+": this.getHours(),
        "m+": this.getMinutes(),
        "s+": this.getSeconds(),
        "q+": Math.floor((this.getMonth() + 3) / 3),
        //季度
        "S": this.getMilliseconds()
    };
    if (/(y+)/.test(fmt)) fmt = fmt.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length));
    for (var k in o) if (new RegExp("(" + k + ")").test(fmt)) fmt = fmt.replace(RegExp.$1, (RegExp.$1.length == 1) ? (o[k]) : (("00" + o[k]).substr(("" + o[k]).length)));
    return fmt;
}
function get_random_num(Min, Max) {
    var Range = Max - Min;
    var Rand = Math.random();
    return (Min + Math.round(Rand * Range));
}
function randomString(len, words) {　　len = len || 32;　　
    var $chars = '0123456789';
    if (words) {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    }　　
    var maxPos = $chars.length;　　
    var pwd = '';　　
    for (i = 0; i < len; i++) {　　　　pwd += $chars.charAt(Math.floor(Math.random() * maxPos));　　
    }　　
    return pwd;
}
$(function() {
    $('#click').bind('click',function(){
        var href = $(this).attr('href');
    })
    $('.pop-pic .tips a').click(function() {
        $('.pop-pic').hide();
        $('#wrapper').show();
    });
    $('#save').click(function() {
        var _this = $(this);
        // var src = './public/face/tf/1.jpg';
        // $('.i-b-sen-text img').attr('src',src);
        // $('.i-b-rec-text img').attr('src',src);
        var div = $('#iphone').clone();
        var my_image = $('.my-image');

        var mask = $('.mask');
        if (!my_image.length) {
            my_image = $('<div class="my-image">成功生成图片，点击 <a class="my-image-view" target="_blank" href="#">这里</a> 查看，<a class="my-image-continue" href="#">继续制作</a></div>');
            $('body').append(my_image);
        }
        if (!mask.length) {
            $('body').append('<div class="mask"></div>');
        }
        div.removeClass('iphone-preview');
        div.css({
            zoom: 1,
            position: 'absolute',
            left: 0,
            top: 0
        });
        $('#ifm').contents().find('body').append(div);
        _this.hide();
        $('.loading').show();
        $('.my-image').hide();
        $('.mask').hide();
        html2canvas(div, {
            onrendered: function(canvas) {
                var myImage = canvas.toDataURL("image/png");
                var pop_pic = $('.pop-pic');
                var pop_class = 'pc';
                if (browser.versions.mobile) {
                    pop_class = 'mobile';
                }
                pop_pic.find('.tips').addClass(pop_class);
                pop_pic.find('img').attr('src', myImage);
                pop_pic.show();
                $('.loading').hide();
                _this.show();


                // $('#click').click();
                // var evt = document.createEvent("HTMLEvents");
                // var aLink = document.createElement('a');
                // //initEvent 不加后两个参数在FF下会报错, 感谢 Barret Lee 的反馈
                // evt.initEvent("click", false, false);
                // aLink.download = '1.png';
                // aLink.href = myImage;
                // aLink.dispatchEvent(evt);
                // console.log(aLink);
                //Canvas2Image.saveAsPNG(canvas,true);
                // window.open(myImage);
                // alert(myImage);
                // $.ajax({
                //     type: "POST",
                //     url: url_upload,
                //     data: {
                //         data: '',
                //         type: image_type
                //     },
                //     timeout: 60000
                // });

                //div.remove();
            }
        });
        return false;
    });

    $('#saveBatch').click(function() {
        var _this = $(this);
        var batchCount = parseInt($('#batchnum').val())+1;
        if (!batchCount) {alert('请输入批量数量');return false;}
        var src = './public/face/tf/';
        for (var i = 1; i < batchCount; i++) {
            var src = './public/face/huaipipi/'+i+'.jpg';
            $('.i-b-sen-text img').attr('src',src);
            var newsrc = './public/face/huaipipi/'+i+'_'+i+'.jpg';
            $('.i-b-rec-text img').attr('src',newsrc);
            var div = $('#iphone').clone();
            var my_image = $('.my-image');
            var mask = $('.mask');
            if (!my_image.length) {
                my_image = $('<div class="my-image">成功生成图片，点击 <a class="my-image-view" target="_blank" href="#">这里</a> 查看，<a class="my-image-continue" href="#">继续制作</a></div>');
                $('body').append(my_image);
            }
            if (!mask.length) {
                $('body').append('<div class="mask"></div>');
            }
            div.removeClass('iphone-preview');
            div.css({
                zoom: 1,
                position: 'absolute',
                left: 0,
                top: 0
            });
            //console.log(div);
            $('#ifm').contents().find('body').append(div);
            _this.hide();
            $('.loading').show();
            $('.my-image').hide();
            $('.mask').hide();
            html2canvas(div, {
                downloadName:i+' vs '+i+'_'+i+' 的聊天记录.jpg',
                onrendered: function(canvas) {
                    var myImage = canvas.toDataURL("image/png");
                    var pop_pic = $('.pop-pic');
                    var pop_class = 'pc';
                    if (browser.versions.mobile) {
                        pop_class = 'mobile';
                    }
                    pop_pic.find('.tips').addClass(pop_class);
                    pop_pic.find('img').attr('src', myImage);
                    pop_pic.show();
                    $('.loading').hide();
                    _this.show();
                    //var imgname = i+'.png';//Math.floor(Math.random()*10000000)+'.png';
                    $('#click').attr('href',myImage);
                    $('#click').attr('download',canvas.downloadName);
                    document.getElementById('click').click();
                    // alert(myImage);
                    // $.ajax({
                    //     type: "POST",
                    //     url: url_upload,
                    //     data: {
                    //         data: '',
                    //         type: image_type
                    //     },
                    //     timeout: 60000
                    // });
                    div.remove();
                }
            });
        }
        return false;
    });


    $('.btn-apps').click(function() {
        $('.apps').css('top', '');
    });
    $('.apps-close').click(function() {
        $('.apps').css('top', '10000px');
    });
    $('.my-btns').after($('.apps'));
});