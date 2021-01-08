@extends("layouts.main");

@section("main-content")
    <main>
        <section id="comic-list" >
            <div class="container centered">
               <img src="{{ $comic['image-cover'] }}" alt="">
            </div>
        </section>
        <section>
            <div class="container centered">
                <h1>{{ $comic['title'] }}</h1>
                <div>{{ $comic['price'] }}</div>
                <div>{!! $comic['body'] !!}</div>
            </div>
        </section>
    </main>
@endsection