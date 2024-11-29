@extends('layout.app')
@section('content')
    
    <h2>Dashboard</h2>
    <div class ="cardsDashboard" >
@foreach ($offers as $offer)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title"> {{$offer->offer_name}} </h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{$offer->company_name}}</li>
            </ul>
            
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{$offer->salary_range}}</li>
            </ul>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Status:{{$offer->state}}</li>
            </ul>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><a href="{{$offer->url}}">Link</a></li>
            </ul>
        </div>
@endforeach
    </div>


@endsection