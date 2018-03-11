@extends('user.master')

@section('title', '单层皮肤转双层')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>皮肤编辑实用工具</h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="box box-primary">
                    <div class="box-header">单层皮肤转双层</div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <input id="file" type="file" data-show-upload="false" data-language="{{ config('app.locale') }}" class="file" accept="image/png" />
                            </div>
                        </div>
                        <div class="row" style="margin-top: 5px;">
                            <div class="skin col-lg-6" id="skinOriginal">转换前：</div>
                            <div class="skin col-lg-6" id="skinConverted">转换后：</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('script')
<script src="{{ plugin_assets('skin-utilities', 'assets/converter/converter.js') }}"></script>
<script>
var originalSkin = document.createElement('img');
originalSkin.onload = render;

function render() {
    skinConverter.convert(originalSkin, function(error, convertedSkin) {
        document.getElementById('skinOriginal').appendChild(originalSkin);
        document.getElementById('skinConverted').appendChild(convertedSkin);
    });
}

$('body').on('change', '#file', function () {
    return getOrigin();
}).on('ifToggled', '#type-cape', function () {
    return getOrigin();
});

function getOrigin() {
    var files = $('#file').prop('files');

    if (files.length > 0) {
        let file = files[0];

        if (file.type === "image/png" || file.type === "image/x-png") {
            let reader = new FileReader();

            reader.onload = function (e) {
                let img = new Image();

                img.onload = () => {

                    originalSkin.src = img.src;
                };
                img.onerror = () => toastr.warning(trans('skinlib.fileExtError'));

                img.src = this.result;
            };
            reader.readAsDataURL(file);
        } else {
            toastr.warning(trans('skinlib.encodingError'));
        }
    }
}
</script>
@endsection
