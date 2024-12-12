
<!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg shadow-lg bg-white navbar-light py-0 px-4">
                <a href="" class="navbar-brand d-flex align-items-center text-center">
                    <div class="icon p-2 me-2">
                        <img class="img-fluid" src={{asset("frontend/assets/img/icon-deal.png")}} alt="Icon" style="width: 30px; height: 30px;">
                    </div>
                    <h1 class="m-0 text-primary">OG</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="{{url('/')}}" class="nav-item nav-link {{ request()->routeIs('Home') ? 'active' : '' }}">Home</a>
                        <div class="nav-item dropdown">
                            <a href="{{url('/all-event')}}" class="nav-link dropdown-toggle {{ request()->routeIs('All-Events') || request()->routeIs('Concert') ? 'active' : '' }}" data-bs-toggle="dropdown">Events</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="{{url('/all-event')}}" class="dropdown-item {{ request()->routeIs('All-Events') ? 'active' : '' }}">All Events</a>
                                <a href="{{url('/concert')}}" class="dropdown-item {{ request()->routeIs('Concert') ? 'active' : '' }}">Concerts</a>
                                <a href="{{url('/conference')}}" class="dropdown-item {{ request()->routeIs('Conference') ? 'active' : '' }}">Conferences</a>
                                <a href="{{url('/sport')}}" class="dropdown-item {{ request()->routeIs('Sport') ? 'active' : '' }}">Sports</a>
                            </div>
                        </div>
                        <a href="{{url('/about')}}" class="nav-item nav-link {{ request()->routeIs('About') ? 'active' : '' }}">About</a>

                        <a href="{{url('/help-center')}}" class="nav-item nav-link {{ request()->routeIs('Help-Center') ? 'active' : '' }}">Help Center</a>

                        <a href="" class="nav-item nav-link align-items-center" >Cart <i class="fa-sharp fa-solid fa-cart-shopping"></i></a>
                    </div>
                    <a href="" class="btn btn-primary px-3 d-none d-lg-flex" >Sell Your Tickets</a>

                </div>

                <a href="#" class="nav-item nav-link d-flex align-items-center">
                    <div class="p-2 me-2">
                        <img class="img-fluid" src={{asset("frontend/assets/img/userprofile.png")}} alt="Icon" style="width: 50px; height: 50px;">
                    </div>
                </a>

            </nav>
        </div>
<!-- Navbar End -->
