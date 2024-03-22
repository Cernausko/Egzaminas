@extends('serviceTemplate.app')

@section('content')
    <div class="container">
        <h2>Redaguoti įmonę</h2>
        <form method="post" action="{{ route('service.update', $services->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group m-1">
                <input type="text" name="title" class="form-control" placeholder="Pavadinimas">
            </div>
            <div class="form-group m-1">
                <input type="text" name="address" class="form-control" placeholder="Kodas">
            </div>
            <div class="form-group m-1">
                <input type="text" name="manager" class="form-control" placeholder="PVM kodas">
            </div>
            <button type="submit" class="btn btn-primary">Atnaujinti</button>
        </form>
    </div>
@endsection