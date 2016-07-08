@extends('layouts.master')

<title>犀牛-{{ config('blog.title') }}</title>

@section('sidebar')
    @parent
@endsection

@section('content')
        <div  style="margin-top:50px;" class="col-md-4 col-md-offset-2 col-sm-8 col-sm-offset-2">
        <div class="container">
            <h1>{{ $post->title }}</h1>
            <h5>{{ $post->published_at }}</h5>
            <hr>
                {!! nl2br(e($post->content)) !!}
            <hr>
            <button class="btn btn-primary" onclick="history.go(-1)">
                « Back
            </button>
        </div>
        </div>
@endsection
