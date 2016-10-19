@extends('layouts.app')

@section('htmlheader_title')
    Edit My Profile
@endsection

@section('contentheader_title')
    Edit My Profile
@endsection

@section('header-extra')

@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-3">
            <!-- Profile Image -->
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle" src="{{ $profile->image }}"
                         alt="User profile picture">

                    <h3 class="profile-username text-center">{{ $profile->firstname." ".$profile->lastname }}</h3>

                    <p class="text-muted text-center"> User </p>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <div class="col-md-5">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Profile</h3>
                </div>
                <div class="box-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                    <form action="{{ url('profile', $profile->id) }}" method="post">
                        <input type="hidden" name="_method" value="PATCH">

                        {{ csrf_field() }}

                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" placeholder="First name" name="firstname"
                                   value="{{ $profile->firstname }}"/>
                            <span class="fa fa-user fa-lg form-control-feedback"></span>
                        </div>

                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" placeholder="Last name" name="lastname"
                                   value="{{ $profile->lastname }}"/>
                            <span class="fa fa-user fa-lg form-control-feedback"></span>
                        </div>

                        <div class="form-group has-feedback">
                            <input type="email" class="form-control" placeholder="Email" name="email"
                                   value="{{ $profile->email }}"/>
                            <span class="fa fa-envelope form-control-feedback"></span>
                        </div>

                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" placeholder="Image" name="image"
                                   value="{{ $profile->image }}"/>
                            <span class="fa fa-picture-o form-control-feedback"></span>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block btn-flat">Edit profile</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Change Password</h3>
                </div>
                <div class="box-body">
                    <form action="{{ url('profile/'.$profile->id.'/password') }}" method="post">
                        <input type="hidden" name="_method" value="PATCH">
                        {{ csrf_field() }}

                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" placeholder="Password" name="password"
                                   value=""/>
                            <span class="fa fa-lock fa-lg form-control-feedback"></span>
                        </div>

                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" placeholder="Password again"
                                   name="password_confirmation"
                                   value=""/>
                            <span class="fa fa-lock fa-lg form-control-feedback"></span>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block btn-flat">Update password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts-extra')

@endsection