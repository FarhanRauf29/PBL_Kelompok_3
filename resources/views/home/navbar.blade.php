<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="index.html" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
        <h2 class="m-0 text-primary">SIMLAB</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="index.html" class="nav-item nav-link active">Home</a>
            <a href="about.html" class="nav-item nav-link">About</a>
            <a href="service.html" class="nav-item nav-link">Artikel</a>
            <a href="project.html" class="nav-item nav-link">Project</a>            
            <a href="contact.html" class="nav-item nav-link">Contact</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="{{url('/login')}}" class="dropdown-item">Login</a>
                    <a href="{{url('/register')}}" class="dropdown-item">Register</a>
                    <a href="{{url('/profile')}}" class="dropdown-item">Profile</a>
                </div>
            </div>
        </div>
        <!--<a href="" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Get A Quote<i class="fa fa-arrow-right ms-3"></i></a>-->
    </div>
</nav>