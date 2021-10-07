@extends('layouts.main')

@section('title', '編集画面')

@section('content')
<form action="/items/{{ $item->id }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="form-group">
        <label for="img_url" class="visually-hidden">商品画像</label>
        <input type="file" name="img_url" id="img_url" class="form-control" placeholder="Image"
            onchange="previewImage(this);" value="{{ old('img_url') }}">
        <img id="preview" style="max-width:200px;">
    </div>
    <div>
        <label for="name">商品名</label>
        <input type="text" name="name" id="name" value="{{ old('name', $item->name) }}">
    </div>
    <div>
        <label for="category">カテゴリー</label>
        <select name="category" id="category">
            @foreach ($categories as $category)
            <option value="{{ $category->id }}" @if(old('category')==$category->id ) selected
                @endif>{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="price">値段</label>
        <input type="text" name="price" id="price" value="{{ old('price', $item->price) }}">
    </div>
    <div>
        <label for="pr">PR</label>
        <input type="text" name="pr" id="pr" value="{{ old('pr', $item->pr) }}">
    </div>
    <input type="submit" value="更新">
</form>
@endsection