@extends('layouts.tpl_default', ['pageId' => 'news'])

@section('css')
<link rel="stylesheet" href="đường_dẫn_tới_file_news.css" media="all">
@endsection

{{-- cho biet noi dung duoc ket noi --}}
@section('content')
 {{--phan section nay se truyen vao phan @yield trang tpl_default.blade voi ten content --}}
<div class="news">
    <h3>Tin trong ngày</h3>
    <p>Nội dung siêu ngắn cho tin tức mới đây!!!</p>
</div>
@endsection

@section('js')
<script src="đường_dẫn_tới_file_news.js"></script>
@endsection