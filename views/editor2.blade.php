<!DOCTYPE html>
<html>

<head>
    <!-- Design by Connor Bond (connorbond.co.uk) - 2013/14 -->

    <!-- Basic Page Needs
        ================================================== -->
    <meta charset="utf-8">
    <title>编辑皮肤 - {{ option('site_name') }}</title>

    <!-- Mobile Specific Metas
        ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"
    />

    <!-- CSS
        ================================================== -->
    <link rel="stylesheet" href="{{ plugin_assets('skin-utilities','assets/editor2/css/styles.css') }}">
    <link rel="stylesheet" href="{{ plugin_assets('skin-utilities','assets/editor2/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ plugin_assets('skin-utilities','assets/editor2/css/jquery.qtip.min.css') }}">

</head>

<body ondragstart='return false;' ondrop='return false;'>
    <div class="header">
        <div class="headwrap">
            <input type="hidden" value="{{ $tid === -1 ? 'steve' : $tid }}" id="tid">

            <span class="saveapply">
                    <div class="output hidden">
                        <a class="imgPrev" href='{{ plugin_assets('skin-utilities', 'assets/editor2/out/default.png')}}' download='skin.png'>
                            <div class="image">
                                <img class='outImg bar' src='{{ plugin_assets('skin-utilities', 'assets/editor2/out/default.png')}}' title="右键另存为即可下载"/><i class="fa fa-download fa-lg"></i>
                            </div>
                            </a>
                    </div>

                    <div class="make">
                        <div class="makeimg">
                            <button type="button" id="exp" class="greyBtn save bar" title="生成皮肤"><i class="fa fa-save fa-lg"></i> <span class="makeTxt">生成</span></button>
        </div>
    </div>
    </span>
    </div>
    </div>

    <div class="side">
        <div id="pen" class="toolBtn pen tip using" title="笔" onclick="tool('pen');"><i class="fa fa-pencil fa-lg"></i></div>
        <br>
        <div id="dib" class="toolBtn dib tip" title="取色器" onclick="tool('dib');"><img src="{{ plugin_assets('skin-utilities','assets/editor2/img/dib.png') }}" /></div>
        <br>
        <div id="erase" class="toolBtn erase tip" title="橡皮擦" onclick="tool('erase'); document.getElementById('color').color.fromString('000000');"><i class="fa fa-eraser fa-lg"></i></div>
        <br />
        <div id="fill" class="toolBtn fill tip" title="填充工具" onclick="tool('fill');"><img src="{{ plugin_assets('skin-utilities','assets/editor2/img/bucket.png') }}" /></div>
        ___<br><br>
        <div id="refresh" class="toolBtn refresh tip" title="重新加载" onclick="getBase($('.cuser').html());"><i class="fa fa-refresh fa-lg"></i></div>
        </br>
        <div id="daynight" class="toolBtn time tip" title="切换背景颜色" onclick="toggleDay()"><i class="fa fa-adjust fa-lg"></i></div>
        ___<br><br>
        <input id="color" class="shade tip color {pickerClosable:true}" name="color" title="拾色器" onclick="tool('pen')"><br><br>
    </div>

    <div class="spin hide">
        <i class="fa fa-cog fa-spin fa-4x"></i>
        <h2 class="spinMsg">正在生成皮肤文件...</h2>
    </div>

    <div class="bodywrap">
        <div class="skinout"></div>
    </div>


    <div id="skin3D" class="skin3D hide"></div>
    <!-- 3D preview output -->

    <script type="text/javascript" src="{{ plugin_assets('skin-utilities','assets/common/js/jquery.min.js') }}"></script>
    <!-- CDN hosted jQuery Library | http://jquery.com/ -->
    <script type="text/javascript" src="{{ plugin_assets('skin-utilities','assets/editor2/js/jscolor/jscolor.js') }}"></script>
    <!-- jQuery Color Picker | http://jscolor.com/ -->
    <script src="{{ plugin_assets('skin-utilities','assets/editor2/js/jquery.qtip.min.js') }}"></script>
    <!-- jQuery Tooltips | http://qtip2.com/ -->
    <script src="{{ plugin_assets('skin-utilities','assets/editor2/js/three.min.js') }}"></script>
    <!-- Javascript 3D Library | http://threejs.org/ -->
    <script src="{{ plugin_assets('skin-utilities','assets/editor2/js/scripts.js') }}"></script>
    <!-- My personal scripts -->

    <!-- If the user has uploaded a file (image url returned in get), append script to draw uploaded image below -->

</body>

</html>