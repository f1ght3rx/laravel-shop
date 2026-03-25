<link rel="stylesheet" href="/css/app.css">
<div class = "everything">
    <div class="controls">
        <p><a href="{{ url('/array/shuffle') }}">Перемешать массив</a></p>
        <p><a href="{{ url('/array/sort') }}">Сортировать массив (по цене по возрастанию)</a></p>
        <p><a href="{{ url('/array/filter') }}">Отфильтровать массив (цена > 1000)</a></p>
    </div>    
    @foreach($array as $item)
        <div class = "shop-card">
        <img class = img src="{{ $item['path'] }}" alt="{{$item['title']}}">
        <h3 class = "card-title">{{ $item['title'] }}</h3>
        <p class = "price">{{ $item['price'] }} &#8381</p>
        </div>
    @endforeach
</div>