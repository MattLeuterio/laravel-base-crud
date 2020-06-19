@extends('layouts.main')

@section('main-content')

<main class="main-content">
    <div class="container partners">

        <div class="row">
            <h1>Company Partners</h1>
        </div>

        <div class="row mt-4">
            @foreach ($partners as $partner)
            <div class="col-sm-6">
              <div class="card mb-3">
                <div class="card-body">
                  <h5 class="card-title">{{ $partner->company }}</h5>
                  <p class="card-text">{{ $partner->slogan }}</p>
                  <i> {{ $partner->job }}</i>
                </div>
              </div>
            </div>
            @endforeach
        </div>

</main>

@endsection