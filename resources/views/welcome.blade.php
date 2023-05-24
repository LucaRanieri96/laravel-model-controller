@extends('layout.app')

@section('content')
  <div class="container">
    <h1 class="text-center my-5">Movies Database</h1>
    <div class="row row-cols-1 row-cols-lg-2 my-5">
      @forelse ($movies as $movie)
      <div class="col g-3">
        <div class="card">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="{{ $movie->image_url }}" class="img-fluid rounded-start" alt="{{ $movie->title }}">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">{{ $movie->title }}</h5>
                <p class="card-text">Original title: "{{ $movie->original_title }}"</p>
                <p class="card-text"><small class="text-body-secondary">nationality: {{ $movie->nationality }}</small></p>
                <p class="card-text"><small class="text-body-secondary">date:{{ $movie->date }}</small></p>
                <p class="card-text"><small class="text-body-secondary">vote: {{ $movie->vote }}</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      @empty
      <p>No movie found</p>
      @endforelse
    </div>

  </div>
@endsection
