    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-0 pe-5">
        <a href="{{url('/')}}" class="navbar-brand ps-5 me-0">
            <h1 class="text-white m-0">Karkhana</h1>
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{url('/')}}" class="nav-item nav-link active">Home</a>
                <a href="{{url('/about')}}" class="nav-item nav-link">About</a>
                <a href="{{url('/service')}}" class="nav-item nav-link">Services</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="{{url('/project')}}" class="dropdown-item">Projects</a>
                        <a href="{{url('/feature')}}" class="dropdown-item">Features</a>
                        <a href="{{url('/team')}}" class="dropdown-item">Our Team</a>
                        <a href="{{url('/testimonial')}}" class="dropdown-item">Testimonial</a>
                        <a href="{{url('/nopage')}}" class="dropdown-item">Nopage Page</a>
                    </div>
                </div>
                <a href="{{url('/contact')}}" class="nav-item nav-link">Contact</a>
            </div>
            <a href="" class="btn bg-green px-3 d-none d-lg-block">Get A Quote</a>
        </div>
    </nav>
    <!-- Navbar End -->
