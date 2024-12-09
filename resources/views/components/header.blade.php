<header>

    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container-fluid">
            <img src="{{asset('img/jobtrackerLogo.png')}}" alt="Logo con la palabra Job Tracker">
            <h1 class= "navTitle">Job Tracker</h1>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Habilities</a>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('allOffers') }}">Offer</a>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">User</a>
                </li>
            </ul>

            </div>
        </div>
    </nav>
</header>