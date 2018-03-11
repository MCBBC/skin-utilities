<!DOCTYPE html>
<html>

<head>
    <title>编辑皮肤 - {{ option('site_name') }}</title>

    <link rel="stylesheet" type="text/css" href="{{ plugin_assets('skin-utilities', 'assets/editor1/styles/skinner.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ plugin_assets('skin-utilities', 'assets/editor1/styles/jquery.miniColors.css') }}" />

    <script src="{{ plugin_assets('skin-utilities', 'assets/editor1/scripts/jquery-1.7.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ plugin_assets('skin-utilities', 'assets/editor1/scripts/modernizr-1.7.min.js') }}"></script>
    <script src="{{ plugin_assets('skin-utilities', 'assets/editor1/scripts/jquery.miniColors.min.js') }}" type="text/javascript"></script>

    <script src="{{ plugin_assets('skin-utilities', 'assets/editor1/scripts/trans3d.js') }}" type="text/javascript"></script>
    <script src="{{ plugin_assets('skin-utilities', 'assets/editor1/scripts/skinner.js') }}" type="text/javascript"></script>

</head>

<body>
    <div id="Content">

        <h1 id="title">Minecraft Skinner</h1>


        <section id="OptionsSection">
            <ul>
                <li class="skin-container">

                    <img id="SkinLoader" src="{{ $tid === -1 ? plugin_assets('skin-utilities', 'assets/common/images/steve.png') : "/raw/$tid.png" }}" width="64" height="32" />
                    <img id="SkinImage" width="64" height="32" />
                    <span>在左边的图片处右键另存为即可保存皮肤</span>
                </li>

                <li class="color-container">
                    <div class="color-picker-wrap">
                        <span>鼠标单击时的颜色</span>
                        <input id="ClickColor" class="color-picker" />
                    </div>
                    <div class="color-picker-wrap">
                        <span>Ctrl+鼠标单击时的颜色</span>
                        <input id="CtrlClickColor" class="color-picker" />
                    </div>
                </li>

                <li class="button paint selected" style="background-image: url({{ plugin_assets('skin-utilities', 'assets/editor1/images/button-hover.png') }})">
                    <a href="#" title="Paint Brush" style="background-image: url({{ plugin_assets('skin-utilities', 'assets/editor1/images/brush.png') }})"></a>
                </li>

                <li class="button fill" style="background-image: url({{ plugin_assets('skin-utilities', 'assets/editor1/images/button-hover.png') }})">
                    <a href="#" title="Paint Brush" style="background-image: url({{ plugin_assets('skin-utilities', 'assets/editor1/images/paint.png') }})"></a>
                </li>

                <li class="button color-dropper" style="background-image: url({{ plugin_assets('skin-utilities', 'assets/editor1/images/button-hover.png') }})">
                    <a href="#" title="Paint Brush" style="background-image: url({{ plugin_assets('skin-utilities', 'assets/editor1/images/drop.png') }})"></a>
                </li>

            </ul>
        </section>

        <section id="DropSection">
            <p>将皮肤文件拖放于此处来加载</p>
        </section>

        <section id="SideSection">


            <div id="PreviewModel">

                <div class="block head" data-b-depth="8" data-b-width="8" data-b-height="8" data-b-translateY="-10">
                    <div class="face top" data-image-map-x="8" data-image-map-y="0"></div>
                    <div class="face bottom" data-image-map-x="16" data-image-map-y="0"></div>
                    <div class="face front" data-image-map-x="8" data-image-map-y="8"></div>
                    <div class="face right" data-image-map-x="0" data-image-map-y="8"></div>
                    <div class="face back" data-image-map-x="24" data-image-map-y="8"></div>
                    <div class="face left" data-image-map-x="16" data-image-map-y="8"></div>
                </div>

                <div class="block body" data-b-depth="4" data-b-width="8" data-b-height="12">
                    <div class="face top" data-image-map-x="20" data-image-map-y="16"></div>
                    <div class="face bottom" data-image-map-x="28" data-image-map-y="16"></div>
                    <div class="face front" data-image-map-x="20" data-image-map-y="20"></div>
                    <div class="face right" data-image-map-x="16" data-image-map-y="20"></div>
                    <div class="face back" data-image-map-x="32" data-image-map-y="20"></div>
                    <div class="face left" data-image-map-x="28" data-image-map-y="20"></div>
                </div>


                <div class="block right-arm" data-b-depth="4" data-b-width="4" data-b-height="12" data-b-translateX="-6">
                    <div class="face top" data-image-map-x="44" data-image-map-y="16"></div>
                    <div class="face bottom" data-image-map-x="48" data-image-map-y="16"></div>
                    <div class="face front" data-image-map-x="44" data-image-map-y="20"></div>
                    <div class="face right" data-image-map-x="40" data-image-map-y="20"></div>
                    <div class="face back" data-image-map-x="52" data-image-map-y="20"></div>
                    <div class="face left" data-image-map-x="48" data-image-map-y="20"></div>
                </div>

                <div class="block left-arm" data-b-depth="4" data-b-width="4" data-b-height="12" data-b-translateX="6">
                    <div class="face top" data-image-map-x="44" data-image-map-y="16"></div>
                    <div class="face bottom" data-image-map-x="48" data-image-map-y="16"></div>
                    <div class="face front" data-image-map-x="44" data-image-map-y="20" data-image-map-mirror-x="true"></div>
                    <div class="face right" data-image-map-x="48" data-image-map-y="20"></div>
                    <div class="face back" data-image-map-x="52" data-image-map-y="20" data-image-map-mirror-x="true"></div>
                    <div class="face left" data-image-map-x="40" data-image-map-y="20"></div>
                </div>

                <div class="block left-leg" data-b-depth="4" data-b-width="4" data-b-height="12" data-b-translateX="-2" data-b-translateY="12">
                    <div class="face top" data-image-map-x="4" data-image-map-y="16"></div>
                    <div class="face bottom" data-image-map-x="8" data-image-map-y="16"></div>
                    <div class="face front" data-image-map-x="4" data-image-map-y="20"></div>
                    <div class="face right" data-image-map-x="0" data-image-map-y="20"></div>
                    <div class="face back" data-image-map-x="12" data-image-map-y="20"></div>
                    <div class="face left" data-image-map-x="8" data-image-map-y="20"></div>
                </div>

                <div class="block right-leg" data-b-depth="4" data-b-width="4" data-b-height="12" data-b-translateX="2" data-b-translateY="12">
                    <div class="face top" data-image-map-x="4" data-image-map-y="16"></div>
                    <div class="face bottom" data-image-map-x="8" data-image-map-y="16"></div>
                    <div class="face front" data-image-map-x="4" data-image-map-y="20" data-image-map-mirror-x="true"></div>
                    <div class="face right" data-image-map-x="8" data-image-map-y="20"></div>
                    <div class="face back" data-image-map-x="12" data-image-map-y="20" data-image-map-mirror-x="true"></div>
                    <div class="face left" data-image-map-x="0" data-image-map-y="20"></div>
                </div>
            </div>

        </section>

        <section id="MainSection">

            <div id="MainModel">

            </div>

        </section>
    </div>
</body>

</html>