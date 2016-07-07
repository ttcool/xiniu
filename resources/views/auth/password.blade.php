@extends('layouts.master')

@section('title', '密码重置')

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
                    @if (session('status'))
                      <div class="alert alert-success">
                      {{ session('status') }}
                      </div>
                    @endif
                    <form method="POST" action="/password/email" class="form-horizontal" role="form">
                    {!! csrf_field() !!}

                    <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="邮箱">
                    </div>

                    <div>
                    <div style="margin-top:10px" class="form-group">
                    <div class="col-sm-12 controls">
                    <button type="submit" class="btn btn-success">
                   发送密码重置链接
                    </button>
                    </div>
                    </form>
              </div>
            </div>
        </div>
    </div>
@endsection
