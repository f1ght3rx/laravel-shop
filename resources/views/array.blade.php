<link rel="stylesheet" href="/css/app.css">
<div class = "everything">
    @foreach($array as $item)
        <div class = "shop-card">
        <img class = img src="{{ $item['path'] }}" alt="{{$item['title']}}">
        <h3 class = "card-title">{{ $item['title'] }}</h3>
        <p class = "price">{{ $item['price'] }} &#8381</p>
        </div>
    @endforeach
</div>