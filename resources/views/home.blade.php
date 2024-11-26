@extends('layout.app')
@section('content')
    @foreach ($companies as $company)
        <div class="card" id = "emotionsCard" style="width: 18rem;">
            <p class="card-text"> {{$company->nameCompany}} </p>
            <p class="card-text"> {{$company->country}} </p>
        </div>
    @endforeach
    @foreach ($offers as $offer)
        <div class="card" id = "emotionsCard" style="width: 18rem;">
            <p class="card-text"> {{$offer->offer_name}} </p>
            <p class="card-text"> {{$offer->attendance}} </p>
        </div>
    @endforeach
    @foreach ($jobportals as $job)
        <div class="card" id = "emotionsCard" style="width: 18rem;">
            <p class="card-text"> {{$job->namePortal}} </p>
            <p class="card-text"> {{$job->url}} </p>
        </div>
    @endforeach
@endsection