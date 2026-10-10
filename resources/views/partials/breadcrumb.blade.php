@php
    $current = Route::currentRouteName();
    $labels = [
        'articles.index'  => 'Danh sách',
        'articles.create' => 'Tạo bài viết',
        'articles.edit'   => 'Sửa bài viết',
        'articles.show'   => 'Chi tiết',
    ];
@endphp
@if(isset($labels[$current]))
<div class="breadcrumb">
    <a href="{{ url('/') }}">Trang chủ</a> /
    <a href="{{ route('articles.index') }}">Articles</a>
    @if($current !== 'articles.index')
        / <span>{{ $labels[$current] }}</span>
    @endif
</div>
@endif
