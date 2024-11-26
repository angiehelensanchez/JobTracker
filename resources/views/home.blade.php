@extends('layout.app')
@section('content')
    @foreach ($companies as $company)
        <div class="card" id = "emotionsCard" style="width: 18rem;">
            <img  id = "emotionsImage" src="..." class="card-img-top" alt="{{$company->id}}">
            <p class="card-text"> {{$company->id}}... </p>
            
        </div>
    @endforeach
@endsection