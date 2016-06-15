@extends('layouts.app')

@section('htmlheader_title')
    Dashboard
@endsection

@section('contentheader_title')
    Dashboard
@endsection

@section('main-content')

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Welcome</h3>
        </div>
        <div class="box-body">
            You are logged in!

            <h3 style="padding-top: 10px">Documents</h3>

            <p>Theme documentation: <a href="https://almsaeedstudio.com/themes/AdminLTE/documentation/index.html">AlmsaeedStudio</a></p>

            <p>Toastr documentation: <a href="https://github.com/oriceon/toastr-5-laravel">Toastr-5-laravel</a></p>

            <p>SweetAlert documentation: <a href="https://limonte.github.io/sweetalert2/">SweetAlert2</a></p>

        </div>
        <!-- /.box-body -->
    </div>

@endsection
