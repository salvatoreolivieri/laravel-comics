
@extends('layouts.main')

@section('content')

<section class="hero-section">
    <button>current series</button>
</section>

<section>
    <div class="card-section">
        @foreach ( $comics as $item )
            <div class="card-element">
                <img src="{{ $item->image }}" alt=""><br>
                <span>{{ $item->title }}</span>
            </div>
        @endforeach
    </div>
</section>

@endsection
