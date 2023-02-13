<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Sky · 橘 / 清</title>
    <link rel="icon" type="image/ico" href="img/icon.png">
    <link rel="stylesheet" href="css/video.css">
</head>

<body>
    <div id="main">
        <div id="box">
            <?php
            $txt = file_get_contents("txt/video-img.txt");
            $img = explode("\n", $txt);
            $imgcys = count($img);
            $txt = file_get_contents("txt/video.txt");
            $video = explode("\n", $txt);
            $videocys = count($video);
            $imgcys--;
            $videocys--;
            while ($imgcys != -1 && $videocys != -1) {
                echo "<div class=\"video\"><video controls preload=\"none\" poster=\"$img[$imgcys]\" src=\"$video[$videocys]\" style=\"background: url($img[$imgcys]);\">抱歉你的浏览器不支持查看视频。</video></div>";
                $videocys--;
                $imgcys--;
            }
            ?>
        </div>
        <div id="footer">
            Sky · 橘 / 清
            <a id="backhome" href="index.html">返回首页</a>
        </div>
    </div>
    <script>
    var _0x213458=_0x3cfa;function _0x3cfa(_0x4f1c94,_0xbf7918){var _0x19a75b=_0x5213();return _0x3cfa=function(_0x376e24,_0x4c76ee){_0x376e24=_0x376e24-(0x3*0x9ad+-0x1d01+0x175*0x1);var _0x1adfb8=_0x19a75b[_0x376e24];return _0x1adfb8;},_0x3cfa(_0x4f1c94,_0xbf7918);}(function(_0x2984ec,_0x21653a){var _0x491e67=_0x3cfa,_0x2d3316=_0x2984ec();while(!![]){try{var _0xdcfb0d=parseInt(_0x491e67(0x17c))/(-0x264d*0x1+-0x2*-0xf21+-0x406*-0x2)+-parseInt(_0x491e67(0x185))/(0xae7+-0x1*-0x1723+0x1104*-0x2)*(parseInt(_0x491e67(0x17f))/(0x1839+-0x18e4+0xae))+-parseInt(_0x491e67(0x18c))/(-0x24f6+0x24ea+0x10)*(-parseInt(_0x491e67(0x18f))/(-0x755*-0x1+-0xf11*-0x1+-0x1661))+parseInt(_0x491e67(0x186))/(0x2278+-0x3*0x611+-0x103f*0x1)+parseInt(_0x491e67(0x17b))/(-0x2*-0x10f5+-0xcf8*-0x1+0x2edb*-0x1)+-parseInt(_0x491e67(0x195))/(-0x10d3+0x66e+0xa6d)*(-parseInt(_0x491e67(0x184))/(-0xb1e+0x2049+-0x5*0x43a))+parseInt(_0x491e67(0x183))/(-0x118f+-0x18a*-0xd+-0x269)*(-parseInt(_0x491e67(0x17d))/(0x164+-0x4bb*0x4+0x1193*0x1));if(_0xdcfb0d===_0x21653a)break;else _0x2d3316['push'](_0x2d3316['shift']());}catch(_0x2029ab){_0x2d3316['push'](_0x2d3316['shift']());}}}(_0x5213,-0x47171+0x10897f+-0x29632),console[_0x213458(0x18b)](_0x213458(0x197)+_0x213458(0x187)+_0x213458(0x198)+_0x213458(0x18d)+_0x213458(0x193)+_0x213458(0x180),_0x213458(0x199)+_0x213458(0x188)+_0x213458(0x18a)+_0x213458(0x191)+_0x213458(0x190)+_0x213458(0x194)+_0x213458(0x181)+_0x213458(0x192),_0x213458(0x189)+_0x213458(0x188)+_0x213458(0x18a)+_0x213458(0x191)+_0x213458(0x182)+_0x213458(0x17e)+_0x213458(0x181)+_0x213458(0x196)+_0x213458(0x18e)));function _0x5213(){var _0x49026a=['f,#ffffff)','1632027tDuNOG','sky-page',';padding:5','deg,#44e9f','2797760PDmtOk','9FVRwEs','2gxsLrc','347910AKqzQv','站\x20By：小言u\x20%',';backgroun','color:#000','d:linear-g','log','20zuIlKC','github.com','x\x200px;','1200285wZCNZL','deg,#448bf','radient(90','px\x200;','/xiaoyanu/','f,#44e9ff)','6428752zgDDrZ','px\x2010px\x205p','\x0a\x0a\x0a\x20%c\x20光遇小','c\x20https://','color:#fff','222439fmoofP','752092LziURi','66dVVBFo'];_0x5213=function(){return _0x49026a;};return _0x5213();}
    </script>
</body>

</html>