@extends('layouts.app')

@section('htmlheader_title')
    Admin Panel
@endsection

@section('contentheader_title')
    Admin Panel
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-9">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">All Users</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Email address</th>
                            <th>Role</th>
                            <th style="width: 40px"></th>
                        </tr>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->firstname }}</td>
                                <td>{{ $user->lastname }}</td>
                                <td>{{ $user->email }}</td>
                                <td><span class="label label-primary">User</span></td>
                                <td>
                                    <button class="btn btn-block btn-xs btn-danger">Edit</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                        <li><a href="#">«</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
@section('scripts-extra')
<script>
    $('.btn-danger').on('click', function() {
        swal(
                'Good job!',
                'You clicked the button!',
                'success'
        )
    });
</script>
@endsection