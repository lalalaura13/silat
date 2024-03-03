@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="card " style="background-color: silver">
    <div class="card-body align-self-center">
      <div class="card bg-light border-light" style="width: 30rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
      {{-- <h5 class="card-title fw-semibold mb-4">Sample Page</h5>
      <p class="mb-0">This is a sample page </p> --}}
    </div>
  </div>

  <div class="card " style="background-color: silver">
    <div class="card-body align-self-center">
      {{-- <h5 class="card-title fw-semibold mb-4">Sample Page</h5>
      <p class="mb-0">This is a sample page </p> --}}
    </div>
  </div>
</div>
@endsection