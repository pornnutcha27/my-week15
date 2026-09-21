@extends('layouts.app')
@section('title')
    {{ $blog->title }}
@endsection

@section('content')
<div class="container px-4">
<article class="mb-4 pb-3">
    <h1 class="mb-4 text-break">{{ $blog->title }}</h1>
    <hr>
    <div class="text-break" style="line-height: 1.8;">{!! $blog->content !!}</div>
</article>
<hr>
<a href="{{ url('/') }}" class="btn btn-outline-primary">กลับหน้าแรก</a>
</div>
@endsection
