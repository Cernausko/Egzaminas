@extends('serviceTemplate.app')

@section('content')
<h1 class="mt-3">Servisai</h1>
  <div class="row">
    @foreach($services as $service)
    <div class="col-md-4 mb-3">
                    <div class="card mt-3">
                        <div class="card-body">
                            <h5 class="card-title">Serviso pavadinimas: {{ $service->title }}</h5>
                            <p class="card-text">Adresas: {{ $service->address }}</p>
                            <p class="card-text">Vadovas: {{ $service->manager }}</p>
                            <a href="/service/{{ $service->id }}" class="btn btn-primary">Plačiau</a>
                        </div>
                    </div>
                </div>
    @endforeach
  </div>                 
@endsection