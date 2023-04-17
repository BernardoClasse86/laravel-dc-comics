<header>

    <div class="container">

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
    
            <div class="container-fluid">
    
                <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt=""></a>
    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    
                        <li class="nav-item">
    
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
    
                        </li>
    
                        <li class="nav-item">
    
                            <a class="nav-link" href="{{route('comics.index')}}">Comics</a>
    
                        </li>

                        <li class="nav-item">
    
                            <a class="nav-link" href="{{route('comics.create')}}">Add a comic</a>
    
                        </li>
    
                    </ul>
    
                </div>
    
            </div>
    
          </nav>
          
    </div>

</header>