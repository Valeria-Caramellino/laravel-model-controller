<header class="p-3">
    <section class="container">
        <div class="row align-items-center">
            <div class="col">
                <h1>LISTA FILM PRESI DA DATABASE</h1>
            </div>
            <div class="col-3">
                <span>Some links: </span>
                @foreach ($links as $link)
                    <a href="{{ $link['href'] }}">{{ $link['text'] }}</a>
                @endforeach
            </div>
        </div>

    </section>
    <h1></h1>
    
</header>