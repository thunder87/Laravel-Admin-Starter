@extends('layouts.auth')

@section('htmlheader_title')
    Service unavailable
@endsection

@section('contentheader_title')
    503 Error Page
@endsection

@section('$contentheader_description')
@endsection

@section('content')

    <div class="error-page">
        <h2 class="headline text-red">503</h2>
        <div class="error-content">
            <h3><i class="fa fa-warning text-red"></i> Oops! Something went wrong.</h3>
            <p>
                We will work on fixing that right away.
                Meanwhile, you may <a href='{{ url('/') }}'>return to dashboard</a> or try using the search form.
            </p>
        </div>
    </div><!-- /.error-page -->
@endsection