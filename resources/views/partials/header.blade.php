@php
    $menu = [
        [
            "link" => "home",
            "text" => "Home"
        ],
        [
            "link" => "prodotti",
            "text" => "Prodotti"
        ],
        [
            "link" => "news",
            "text" => "News"
        ]
    ];
@endphp

<header>
    <a href="/">
        <img src="{{ asset("img/marchio-sito-test.png") }}" alt="La Molisana">
    </a>
    <nav>
        <ul class="list-inline">
            @foreach ($menu as $item)
                <li>
                    <a href="{{ route($item["link"]) }}" 
                    class="{{ Route::currentRouteName() == $item["link"] ? 'active' : '' }}">{{ $item["text"] }}</a>
                </li>
            @endforeach
        </ul>
    </nav>
</header>