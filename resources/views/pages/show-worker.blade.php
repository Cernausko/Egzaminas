@extends('serviceTemplate.app')

@section('content')
    <div class="container">
    <div class="card mt-3">
        <div class="card-body">
            <h2>{{ $workers->firstname }} {{ $workers->lastname }}</h2>
            <p><strong>Specializacija:</strong> {{ $workers->specialization }}</p>
            <p><strong>Miestas:</strong> {{ $workers->city}}</p>
            <p><strong>Nuotrauka:</strong> {{ $workers->picture}}</p>
            <img src="{{asset('/storage/'.$workers->picture)}}" alt="">
            <a href="/worker/{{ $workers->id }}/edit" class="btn btn-primary">Redaguoti</a>
            <a href="/worker/delete/{{$workers->id}}" class="btn btn-primary">Salinti</a>

        </div>
    </div>
    </div>
@endsection