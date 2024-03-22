@extends('serviceTemplate.app')

@section('content')
<h1 class="mt-4">Prideti meistra</h1>
@include('serviceTemplate/_partials/errors')
<form action="/store/worker" method="post" enctype="multipart/form-data">
    @csrf
    
    <div class="form-group m-1 mt-3">
        <input type="text" name="firstname" class="form-control" placeholder="Meistro vardas">
    </div>
    <div class="form-group m-1 mt-3">
        <input type="text" name="lastname" class="form-control" placeholder="Meistro pavarde">
    </div>
    <div class="form-group m-1 mt-3">
        <input type="text" name="specialization" class="form-control" placeholder="Meistro specilizacija">
    </div>
    <div class="form-group m-1 mt-3">
        <input type="text" name="city" class="form-control" placeholder="Meistro miestas">
    </div>
    <div class="form-group m-1 mt-3">
        <label>Meistro nuotrauka:</label>
        <input type="file" name="picture" class="form-control">
    </div>
    <div class="form-group m-1 mt-3 ">
        <select name="service" class="form-control">
            <option selected disabled>--Pasirinkite servisa kuriame dirba--</option>
            @foreach($services as $service)
            <option value="{{$service->id}}">{{$service->title}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group m-1 mt-3">
        <button type="submit" class="btn btn-primary">Prideti</button>
    </div>
</form>
@endsection