@extends('serviceTemplate.app')

@section('content')
<h1 class="mt-4">Prideti Servisa</h1>
@include('serviceTemplate/_partials/errors')
<form action="/store/service" method="post" enctype="multipart/form-data">
    @csrf
    
    <div class="form-group m-1">
        <input type="text" name="title" class="form-control mt-3" placeholder="Serviso pavadinimas">
    </div>
    <div class="form-group m-1">
        <input type="text" name="address" class="form-control mt-3" placeholder="Serviso adresas">
    </div>
    <div class="form-group m-1">
        <input type="text" name="manager" class="form-control mt-3" placeholder="Serviso vadovas">
    </div>
    <div class="form-group m-1">
        <button type="submit" class="btn btn-primary mt-3">Prideti</button>
    </div>
</form>
@endsection