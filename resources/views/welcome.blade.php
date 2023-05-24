@extends('layout.app')

@section('content')
<div class="container">
    <div class="row row-cols-3">
        @forelse ($movies as $movie)
            <div class="col g-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ $movie->title }}</h3>
                        <p>{{ $movie->original_title }}</p>
                        <p>{{ $movie->nationality }}</p>
                        <p>{{ $movie->date }}</p>
                        <p>{{ $movie->vote }}</p>
                    </div>
                </div>
            </div>
        @endforelse
    </div>

</div>
@endsection