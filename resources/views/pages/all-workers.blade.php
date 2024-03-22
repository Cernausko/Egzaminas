@extends('serviceTemplate.app')

@section('content')
<h1 class="mt-3">Darbuotojai</h1>
<a href="/add-worker" class="btn btn-primary">Prideti meistra</a>
  <div class="row">
    @foreach($workers as $worker)
    <div class="col-md-4 mb-3">
                    <div class="card mt-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $worker->firstname}} {{ $worker->lastname}}</h5>
                            <p class="card-text">Specializacija: {{ $worker->specialization}}</p>
                            <p class="card-text">Miestas: {{ $worker->city }}</p>
                            <a href="/worker/{{ $worker->id }}" class="btn btn-primary">Plačiau</a>
                        </div>
                    </div>
                </div>
    @endforeach
  </div>                 
@endsection