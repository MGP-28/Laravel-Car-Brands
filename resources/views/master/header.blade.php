<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">COMPANY</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <div class="dropdown">
                    <a class="nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                        Brands <i class="bi bi-chevron-compact-down"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="{{url('brands')}}">List</a>
                        <a class="dropdown-item" href="{{url('brands/create')}}">Add</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <a class="nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                        Cars <i class="bi bi-chevron-compact-down"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="{{url('cars')}}">List</a>
                        <a class="dropdown-item" href="{{url('cars/create')}}">Add</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
