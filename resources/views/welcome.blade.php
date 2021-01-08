@extends("layouts.main");

@section("main-content")
    <main>
        <section id="comic-list" >
            <div class="container centered">
                <ul id="list">
                    @foreach ($comics as $comic)
                    <li>
                        <a href="{{ route('comic-book', $comic['id'])}}">
                            <img src="{{ $comic['image']}}" alt="{{ $comic['title']}}">
                            <h3>{{ $comic['title']}}</h3>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </section>
    </main>
@endsection