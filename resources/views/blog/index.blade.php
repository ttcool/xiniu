@extends('layouts.master')

<title>犀牛-{{ config('blog.title') }}</title>

@section('sidebar')
    @parent
@endsection

@section('content')
        <div class="container">
           <div  style="margin-top:50px;" class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
            <h1>{{ config('blog.title') }}</h1>
            <h5>Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</h5>
            <hr>
            <ul>
            @foreach ($posts as $post)
                <li>
                    <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
                    <em>({{ $post->published_at }})</em>
                    <p>
                        {{ str_limit($post->content) }}
                    </p>
                </li>
            @endforeach
            </ul>
            <hr>
            {!! $posts->render() !!}
          </div>
        </div>
@endsection
