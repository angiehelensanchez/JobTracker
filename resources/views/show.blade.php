@extends('layout.app')
@section('content')

<div class="cardsDashboard">
    @forelse ($offers as $offer)
    <form class="card" action="{{route('allOffers')}}">
        @csrf
        @method('PUT')
        <div class="card-body" style="width: 80vh; line-height: 1.1;">
            <h5 class="card-title">
                <label >Offer Name - 🔑{{ $offer->id }}</label>
            </h5>
            <div class="cardItem">
               <input readonly type="text" name="offer_name" value="{{ $offer->offer_name }}" class="form-control">
            </div>
            
            <div class="cardItem">
                <label>Company Name</label>
                <input readonly value="{{ $offer->company_name }}" class="form-control">
            </div>
            <div class="cardItem">
                <label>Attendance</label>
                <select name="attendance"  class="form-select" style="width: 32vh;" disabled>
                    <option value="Hybrid" {{ $offer->state == 'Hybrid' ? 'selected' : '' }}>Hybrid</option>
                    <option value="Remote" {{ $offer->state == 'Remote' ? 'selected' : '' }}>Remote</option>
                    <option value="On-site" {{ $offer->state == 'On-site' ? 'selected' : '' }}>On-site</option>
                </select>
            </div>
            
            <div class="cardItem">
                <label ">Salary Range</label>
                <input readonly value="{{ $offer->salary_range }}" class="form-control">
            </div>
            
            <div class="cardItem">
                <label>Link</label>
                <input readonly value="{{ $offer->url }}" class="form-control">
            </div>

            <div class="cardItem">
                <label>State</label>
                <select name="state"  class="form-select" style="width: 32vh;" disabled>
                    <option value="In-progress" {{ $offer->state == 'In-progress' ? 'selected' : '' }}>In-progress</option>
                    <option value="Paused" {{ $offer->state == 'Paused' ? 'selected' : '' }}>Paused</option>
                    <option value="Finished" {{ $offer->state == 'Finished' ? 'selected' : '' }}>Finished</option>
                </select>
            </div>
            <div class="cardItem">
                <label>Description</label>
                <textarea readonly class="form-control" style="height:15vh;" > {{ $offer->description }} </textarea>
            </div>

            <div class="cardItem">
                <label>URL</label>
                <input readonly value="{{ $offer->url }}" class="form-control"  >    
            </div>

            <div class="cardItem">
                <p class="card-text">Applied: {{ $offer->created_at->format('d/m/Y') }}</p>
            </div>
        </div>
        
        <div class="card-footer">
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Volver</button>
            </div>
        </div>
    </form>
    @empty
        <h5>No data available</h5>
    @endforelse

    <div class="accordion" id="accordionPanelsStayOpenExample" style="width: 85vh;"">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordionSkills" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    My skills for this offer
                </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                <div class ="cardsDashboard" >
                    @forelse ($offer->techStacks as $techStack)
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
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordionSkills" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    My advances
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show">
                <div class ="cardsDashboard" >
                    @forelse ($offer->advances as $advance)
                        <div class="accordion-body">
                            <div class="card">
                                <div class="card-body" style="width: 30vh; line-height: 1.1;">
                                    <p>{{ $advance->phase }} - 🔑{{ $advance->id}}</p>
                                    <div class="cardItem">
                                        <label>State</label>
                                        <select name="state"  class="form-select" style="width: 25vh;" disabled>
                                            <option value="In-progress" {{ $advance->state == 'In-progress' ? 'selected' : '' }}>In-progress</option>
                                            <option value="Paused" {{ $advance->state == 'Paused' ? 'selected' : '' }}>Paused</option>
                                            <option value="Finished" {{ $advance->state == 'Finished' ? 'selected' : '' }}>Finished</option>
                                        </select>
                                    </div>
                                    <div class="cardItem">
                                        <label>Commentary</label>
                                        <textarea readonly class="form-control" style="height:15vh;" > {{ $advance->commentary }} </textarea>           
                                    </div>
                                    
                                </div>
                                <div class="card-footer">
                                    <small class="text-body-secondary">Last updated {{$advance->updated_at->format("d/m/Y h:m")}}</small>              
                                </div>
                            </div>
                        </div>
                    @empty
                        <h5>No data available</h5>
                    @endforelse
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection