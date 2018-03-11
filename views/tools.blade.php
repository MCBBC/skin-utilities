@extends('user.master')

@section('title', '皮肤编辑实用工具')

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
                    <div class="box-header">工具列表</div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4">
                                <a class="btn btn-default" href="skin-utilities/converter" title="原作者：kevanstannard">单层皮肤转双层</a>
                            </div>
                            <div class="col-md-4">
                                <a class="btn btn-default" href="skin-utilities/editor-1" title="原作者：codecutout">皮肤编辑工具（一）</a>
                            </div>
                            <div class="col-md-4">
                                <a class="btn btn-default" href="skin-utilities/editor-2" title="原作者：connorbond">皮肤编辑工具（二）</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div>
                    <div class="box box-primary">
                        <div class="box-header">说明</div>
                        <div class="box-body">
                            <ul>
                                <li>皮肤转换工具支持高清皮肤。</li>
                                <li>两个编辑工具都不支持高清皮肤和双层皮肤。如果想获得更强大的皮肤编辑功能和高清皮肤的支持，建议使用 MCSkin3D。</li>
                                <li>虽然我对这些工具进行了一定的调整和适配，但这些编辑工具都不是我做的，因此我不提供有关这些工具的修复或功能添加。</li>
                            </ul>
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
