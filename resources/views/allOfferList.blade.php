@extends('layout.app')
@section('content')

<form method="GET" action="{{ route('allOffers') }}" class = "filterContainer">
    <div class = "filterItems">
        <div>
            <label for="state">State:</label>
            <select name="state" id="state">
                <option value="">All</option>
                <option value="In-progress" {{ request('state') == 'In-progress' ? 'selected' : '' }}>In-progress</option>
                <option value="Paused" {{ request('state') == 'Paused' ? 'selected' : '' }}>Paused</option>
                <option value="Finished" {{ request('state') == 'Finished' ? 'selected' : '' }}>Finished</option>
            </select>
        </div>
        <div>
            <label for="company_name">Company Name:</label>
            <input type="text" name="company_name" id="company_name" value="{{ request('company_name') }}">
        </div>
        
        <button type="submit" class="btn btn-outline-success">Filter</button>
        <button class="btn btn-outline-danger"><a href="{{ route('allOffers') }}">Clear</a></button>
        
    </div>
</form>
<div class ="cardsDashboard" >     
    @forelse ($offers as $offer)
    <div class="card">
        <div class="card-body" style="width: 26vh; line-height: 1.1;"">
            <h5 class="card-title">{{$offer->offer_name}} </h5>
            <p>🔑{{$offer->id}}</p>
            <p class="card-text">Applied: {{$offer->created_at->format("d/m/Y")}}</p>
            <p class="card-text">{{$offer->company_name}}</p>
            <p class="card-text">{{$offer->salary_range}}</p>
            <a href="{{$offer->url}}">Link</a>

        </div>
        <div class="cardProgress">
            @if ($offer->state == "In-progress")
                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 24vh;">
                    <div class="progress-bar bg-success" style="width: 25%"></div>
                </div>
            @endif
            @if ($offer->state == "Paused")
                <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 24vh;">
                    <div class="progress-bar bg-warning" style="width: 75%"></div>
                </div>
            @endif
            @if ($offer->state == "Finished")
                <div class="progress" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 24vh;">
                    <div class="progress-bar bg-danger" style="width: 100%"></div>
                </div>
            @endif
        </div>
        
        <div class="card-footer">
            @if ($offer->advances->isNotEmpty())
                <small class="text-body-secondary">Last updated {{$offer->advances->first()->updated_at->format("d/m/Y h:m")}}</small>              
            @else
                <small class="text-body-secondary">Last updated {{$offer->updated_at->format("d/m/Y h:m")}}</small>
            @endif
        </div>
    </div>
    @empty
        <h5>No data available</h5>
    @endforelse
</div>





@endsection