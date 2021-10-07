<div class="row">
    <div>
        <img src="{{ Storage::disk('public')->url($item->img_url) }}" class="square-img"> 
    </div>
    <div class="ml-3">
        <div class="mt-3 mb-3">
            <h3>
                <a href="{{ route('items.show', $item->id) }}">{{ $item->name }}</a>
            </h3>
        </div>
        <div>
            <div>カテゴリー:{{ $item->category->name }}</div>
            <div>¥{{ $item->price}}</div>
            <div>{{ $item->pr}}</div>
        </div>
    </div>
</div>