<section class="container">
    <h2>{{ $title }}</h2>
    <div class="cards">
        @foreach ($array as $item)
            <div class="card">
                <img src="{{ $item->src }}" alt="{{ $item->titolo }}">
                <div class="card-text">
                    <a href="#">{{ $item->titolo }}</a>
                </div>
            </div>
        @endforeach
    </div>
</section>