@extends('layout.app')
@section('content')
    
    <h2>Last modified</h2>
    <div class ="cardsDashboard" >     
        @forelse ($offers as $offer)
        <div class="card">
            <div class="card-body" style="width: 26vh; line-height: 1.1;"">
                <h5 class="card-title">{{$offer->offer_name}} </h5>
                <p>🔑{{$offer->id}}</p>
                <p class="card-text">Applied: {{$offer->created_at->format("d/m/Y")}}</p>
                <p class="card-text">{{$offer->company_name}}</p>
                <p class="card-text">{{$offer->salary_range}}</p>
                <div class="cardButtons">   
                    <a href="{{$offer->url}}">Link</a>
                    <a href="{{route('showOffer', ['id' =>$offer->id])}}"><img src="{{asset('img/showButton.png')}}" alt=""></a>
                </div>

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

    <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordionSkills" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    My Skills - Legend
                </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                <div class ="cardsDashboard" >
                    @forelse ($techStacks as $techStack)
                        <div class="accordion-body">
                            <div class="cardSkill" style="width: 15vh;">
                                <h5 class="card-title">{{$techStack->id}}. {{$techStack->name}} </h5>
                                <p class="card-text">{{$techStack->knowledge}}</p>
                            </div>
                        </div>
                    @empty
                        <h5>No data available</h5>
                    @endforelse
                    
                </div>
            </div>
        </div>
    </div>

@endsection