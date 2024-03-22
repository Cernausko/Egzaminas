@extends('serviceTemplate.app')

@section('content')
<h1 class="mt-4">Pridėti servisa</h1>
@include('serviceTemplate/_partials/errors')
<form action="/storeWorker" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group m-1">
        <input type="text" name="firstname" class="form-control" placeholder="Vardas" value="{{$worker->firstName}}">
    </div>
    <div class="form-group m-1">
        <input type="text" name="lastname" class="form-control" placeholder="Pavarde" value="{{$worker->lastName}}">
    </div>
    <div class="form-group m-1">
        <input type="text" name="specialization" class="form-control" placeholder="Specializacija" value="{{$worker->specialization}}">
    </div>
    <div class="form-group m-1">
        <label>Mechaniko nuotrauka</label>
        <input type="file" name="picture" class="form-control" value="{{$worker->picture}}">
    </div>
    <div class="form-group m-1">
        <input type="text" name="city" class="form-control" placeholder="Miestas" value="{{$worker->city}}">
    </div>
    <div class="form-group m-1">
        <select name="service" class="form-control">
            <option value="{{$worker->service}}">--Pasirinkite kategorija--</option>
            @foreach($services as $service)
            <option value="{{$service->title}}">{{$service->title}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group m-1">
        <button type="submit" class="btn btn-primary">Saugoti</button>
    </div>
</form>
@endsection