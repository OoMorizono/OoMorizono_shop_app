@extends('layouts.main')

@section('title', '詳細画面')

@section('content')
<table class="table-bordered mb-5 mt-3">
    <colgroup span="1" style="width:200px;background-color:#efefef;"></colgroup>
    <tbody>
        <img src="{{ Storage::disk('public')->url($item->img_url) }}" class="square-img">
        <tr>
            <th>商品名</th>
            <td>
                <p>{{ $item->name }}</p>
            </td>
        </tr>
        <tr>
            <th>カテゴリー</th>
            <td>
                <p>{{ $item->category->name }}</p>
            </td>
        </tr>
        <tr>
            <th>値段</th>
            <td>{{ $item->price }}</td>
        </tr>
        <tr>
            <th>PR</th>
            <td>{{ $item->pr }}</td>
        </tr>
    </tbody>
</table>
<a class="btn btn-success" href="#" role="button">かごに入れる</a>
<a class="btn btn-success" href="#" role="button">購入する</a>
<br>
<div>
    <a href="/items/{{ $item->id }}/edit">編集する</a>
</div>
<div>
<form action="/items/{{ $item->id }}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
</form>
</div>
<a href="{{ route('items.index')}}">戻る</a>
@endsection