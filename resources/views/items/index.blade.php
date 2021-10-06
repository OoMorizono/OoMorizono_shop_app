@extends('layouts.main')

@section('title', '一覧画面')

@section('content')
@if (!empty($items))
<ul>
    @foreach ($items as $item)
    <li class="list-unstyled border mb-5 pl-3 shadow">
        <a href="{{ route('items.show', $item) }}">{{ $item->name }}</a>
    </li>
    @endforeach
</ul>
@endif
@endsection