@extends('layouts.app')
@section('title')
    หน้าแรกของเว็บไซต์
@endsection

@section('content')
<div class="container px-4">
<h2>บทความล่าสุด</h2>
<hr>
@foreach ($blogs as $item)
<article class="mb-4 pb-3">
<h2>{{$item->title}}</h2>
 <p>{{ Str::limit(strip_tags($item->content), 100) }}</p>
<a href="/detail/{{$item->id}}">อ่านเพิ่มเติม</a>
</article>
@endforeach
<hr>
</div>
@endsection
