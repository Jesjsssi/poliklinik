<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="{{ url('/home') }}"> <img src="img/logo.png" alt="logo"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse main-menu-item justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav align-items-center">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/about') }}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/doctor') }}">Doctors</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Pages
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ url('/services') }}">Services</a>
                    <a class="dropdown-item" href="{{ url('/departments') }}">Departments</a>
                    <a class="dropdown-item" href="{{ url('/elements') }}">Elements</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown_1" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Blog
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                    <a class="dropdown-item" href="{{ url('/blog') }}">Blog</a>
                    <a class="dropdown-item" href="{{ url('/single-blog') }}">Single Blog</a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
            </li>
        </ul>
    </div>
    <a class="btn_2 d-none d-lg-block" href="{{ url('/login') }}">Login</a>
</nav>
