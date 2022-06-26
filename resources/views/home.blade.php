
@extends('layouts.main')

@section('content')

<div class="hero-section">
    <button>current series</button>
</div>

<div>
    <div class="card-section">
        @foreach ( $comics as $item )
            <div class="card-element">
                <img src="{{ $item->image }}" alt=""><br>
                <span>{{ $item->title }}</span>
            </div>
        @endforeach
    </div>

    <div class="load-more-button-container">
        <button class="load-more-button">load more</button>
    </div>
</div>

<section>

    <div class="blue-bar-container">

      <div class="card">

        <div>
          <img src="../img/buy-comics-digital-comics.png" alt="">
        </div>

        <div>
          <span>digital comics</span>
        </div>

      </div>
      <div class="card">

        <div>
          <img src="../img/buy-comics-merchandise.png" alt="">
        </div>

        <div>
          <span>dc merchandise</span>
        </div>

      </div>
      <div class="card">

        <div>
          <img src="../img/buy-comics-subscriptions.png" alt="">
        </div>

        <div>
          <span>subscription</span>
        </div>

      </div>
      <div class="card">

        <div>
          <img src="../img/buy-comics-shop-locator.png" alt="">
        </div>

        <div>
          <span>comic shop locator</span>
        </div>

      </div>
      <div class="card">

        <div>
          <img src="../img/buy-dc-power-visa.svg" alt="">
        </div>

        <div>
          <span>dc power visa</span>
        </div>

      </div>

    </div>

  </section>

@endsection
