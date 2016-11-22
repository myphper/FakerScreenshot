var browser = {
    versions: function() {
        var u = navigator.userAgent,
        app = navigator.appVersion;
        return {
            trident: u.indexOf("Trident") > -1,
            presto: u.indexOf("Presto") > -1,
            webKit: u.indexOf("AppleWebKit") > -1,
            gecko: u.indexOf("Gecko") > -1 && u.indexOf("KHTML") == -1,
            mobile: !!u.match(/AppleWebKit.*Mobile.*/),
            ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/),
            android: u.indexOf("Android") > -1 || u.indexOf("Linux") > -1,
            iPhone: u.indexOf("iPhone") > -1,
            iPad: u.indexOf("iPad") > -1,
            webApp: u.indexOf("Safari") == -1
        };
    } (),
    language: (navigator.browserLanguage || navigator.language).toLowerCase()
}
function getOs() {
    var OsObject = "";
    if (isIE = navigator.userAgent.indexOf("MSIE") != -1) {
        return "MSIE";
    }
    if (isFirefox = navigator.userAgent.indexOf("Firefox") != -1) {
        return "Firefox";
    }
    if (isChrome = navigator.userAgent.indexOf("Chrome") != -1) {
        return "Chrome";
    }
    if (isSafari = navigator.userAgent.indexOf("Safari") != -1) {
        return "Safari";
    }
    if (isOpera = navigator.userAgent.indexOf("Opera") != -1) {
        return "Opera";
    }
}
function toDecimal2(x) {
    var f = parseFloat(x);
    if (isNaN(f)) {
        return false;
    }
    var f = Math.round(x * 100) / 100;
    var s = f.toString();
    var rs = s.indexOf('.');
    if (rs < 0) {
        rs = s.length;
        s += '.';
    }
    while (s.length <= rs + 2) {
        s += '0';
    }
    return s;
}
Number.prototype.formatMoney = function(places, symbol, thousand, decimal) {
    places = !isNaN(places = Math.abs(places)) ? places: 2;
    symbol = symbol !== undefined ? symbol: "$";
    thousand = thousand || ",";
    decimal = decimal || ".";
    var number = this,
    negative = number < 0 ? "-": "",
    i = parseInt(number = Math.abs( + number || 0).toFixed(places), 10) + "",
    j = (j = i.length) > 3 ? j % 3 : 0;
    return symbol + negative + (j ? i.substr(0, j) + thousand: "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousand) + (places ? decimal + Math.abs(number - i).toFixed(places).slice(2) : "");
};
$(function() {
    var now = new Date();
    var hours = now.getHours();
    var minutes = now.getMinutes();
    $(qq_emoji).each(function(i, item) {
        var a = '<a title="' + item + '" href="javascript:;"></a>';
        $('.faceBox').append(a);
    });
    $('body').on('click', '.btn-add-face',
    function() {
        var position = $(this).offset();
        var data_input = $(this).attr('data-input');
        $('#emojiPanel').css({
            top: position.top + 55
        }).toggle();
        $('#emojiPanel').attr('data-input', data_input);
        return false;
    });
    $('body').on('click', '.emojiArea a',
    function() {
        var t = $(this).attr('title');
        var data_input = $(this).parents('#emojiPanel').attr('data-input');
        insertAtCursor($('.' + data_input).get(0), '[' + t + ']');
    });
    for (var i = 0; i < 24; i++) {
        var h = i > 9 ? i: '0' + i;
        var s = h == hours ? ' selected': '';
        $('.slt-hour,.slt-p-hour').append('<option' + s + '>' + h + '</option>');
    }
    for (var i = 0; i < 60; i++) {
        var h = i > 9 ? i: '0' + i;
        var s = h == minutes ? ' selected': '';
        $('.slt-minite,.slt-p-minite').append('<option' + s + '>' + h + '</option>');
    }
    $('.slt-common').change(function() {
        var val = $(this).find('option:selected').val();
        var _class = $(this).attr('data-class');
        $(this).find('option').each(function(i, item) {
            $('.' + _class).removeClass($(item).val());
        });
        $('.' + _class).addClass(val);
    });
    $('.rd-common').click(function() {
        var val = $(this).val();
        var _class = $(this).attr('data-class');
        if (val == '1') {
            $('.' + _class).show();
        } else {
            $('.' + _class).hide();
        }
    });
    $('.input-common').bind('input propertychange',
    function() {
        var _class = $(this).attr('data-class');
        var val = $.trim($(this).val());
        $('.' + _class).text(val);
    });
    $('.slt-phone-time').change(function() {
        var shi = $('.slt-p-shi option:selected').val();
        var hour = $('.slt-p-hour option:selected').val();
        var minite = $('.slt-p-minite option:selected').val();
        var str = '';
        if (shi != '-') {
            str += shi;
        }
        str += hour + ':';
        str += minite;
        $('.i-top-time').text(str);
    }).change();
    $('body').click(function() {
        $('#emojiPanel').hide();
    });
    $('body').on('click', '.btn-rand-face',
    function() {
        var face_path = url_face;
        var num = get_random_num(1, 900);
        var file_name = face_path + ('face' + num) + '.jpg';
        var img = '<img src="' + file_name + '" />';
        $(this).parents('.add-user').find('.a-u-pic-show img').remove();
        $(this).parents('.add-user').find('.a-u-pic-show input').after(img);
        var _class = $(this).attr('data-class');
        if (_class) {
            var obj = $('.' + _class);
            if (obj.get(0).tagName.toLowerCase() == 'img') {
                obj.attr('src', file_name);
            } else {
                obj.css('background-image', 'url(' + file_name + ')');
            }
        }
    });
    $('body').on('click', '.btn-rand-username',
    function() {
        var num = get_random_num(4, 8);
        var name = randomString(num, true);
        $(this).parents('.add-user').find('.a-u-data-name').val(name);
    });
    function setBar(num) {
        $('.i-top-berry i em').css('width', num + '%');
        num = num.toString();
        var index = num.toString().lastIndexOf('.');
        num = index == -1 ? num: num.substring(0, index);
        $('.i-top-berry-num').text(num + '%');
    }
    $('.slider_bar').sGlide({
        'startAt': 50,
        'width': 300,
        'height': 20,
        'unit': 'px',
        'totalRange': [1, 100],
        'colorShift': ['#3a4d31', '#7bb560'],
        'buttons': true,
        drag: function(o) {
            setBar(o.custom);
        },
        onButton: function(o) {
            setBar(o.custom);
        }
    });
    if (is_check_brower && (getOs() != 'Chrome' && getOs() != 'Safari')) {}
    $('.pop-close').click(function() {
        $('.mask,.browser').hide();
        return false;
    });
    $('body').on('click', '.my-image-continue',
    function() {
        $('.mask,.my-image').hide();
        return false;
    });
});