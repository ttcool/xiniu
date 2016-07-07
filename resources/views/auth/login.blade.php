@extends('layouts.master')

@section('title', '用户登录')

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="container">
        <div id="loginbox" style="margin-top:50px;" class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">用户登录</div>
                </div>
                <div style="padding-top:30px" class="panel-body" >
                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                    @include('errors.list')
                    <form method="POST" action="login" class="form-horizontal" role="form">
                        {!! csrf_field() !!}

                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="邮箱">
                        </div>
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input id="password" type="password" class="form-control" name="password" placeholder="密码">
                        </div>
                        <div class="input-group">
                            <div class="checkbox">
                                <label>
                                    <input iremember" type="checkbox" name="remember" value="1"> 记住我
                                </label>
                            </div>
                        </div>
                        <div style="margin-top:10px" class="form-group">
                            <div class="col-sm-12 controls">
                                <button type="submit" id="btn-login" href="#" class="btn btn-success">登录  </button>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 control">
                                <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                    <a href="/password/register" >
                                        没有帐号？点击注册！
                                    </a>  
                                </div>
                                <div style="border-top: 1px ; padding-top:15px; font-size:85%" >
                                    <a href="/password/email" >
                                        忘记密码？
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
