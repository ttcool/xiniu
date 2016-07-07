@extends('layouts.master')

@section('title', '修改密码')

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="container">
        <div id="loginbox" style="margin-top:50px;" class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">密码重置</div>
                </div>
                <div style="padding-top:30px" class="panel-body" >
                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                    @include('errors.list')

<form method="POST" action="/password/reset" class="form-horizontal" role="form">
    {!! csrf_field() !!}
    <input type="hidden" name="token" value="{{ $token }}">

    <div style="margin-bottom: 25px" class="input-group">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="邮箱">
    </div>
    <div style="margin-bottom: 25px" class="input-group">
    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
    <input id="password" type="password" class="form-control" name="password" placeholder="新密码">
    </div>

    <div style="margin-bottom: 25px" class="input-group">
    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
    <input id="password" type="password" class="form-control" name="password_confirmation" placeholder="确认密码">
    </div>

    <div style="margin-top:10px" class="form-group">
    <div class="col-sm-12 controls">
    <button type="submit" id="btn-login" href="#" class="btn btn-success">重置密码</button>
    </div>
    </div>
</form>

               </div>
            </div>
        </div>
    </div>
@endsection
