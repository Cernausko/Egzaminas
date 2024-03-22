@extends('serviceTemplate.app')

@section('content')
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <h2>{{ $services->title }}</h2>
                <p><strong>Adresas:</strong> {{ $services->address }}</p>
                <p><strong>Vadovas:</strong> {{ $services->manager }}</p>
                <a href="/service/{{ $services->id }}/edit" class="btn btn-primary">Redaguoti</a>
                <a href="/service/delete/{{$services->id}}" class="btn btn-primary">Salinti</a>
                <div class="card-footer mt-3">
                </div>
            </div>
        </div>
    </div>
@endsection