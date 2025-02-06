<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
    <div class="container px-5">
        <div class="d-flex justify-content-between w-100">
            <a class="navbar-brand" href="/"><span class="fw-bolder text-primary fs-3">Rizkyard</span></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-lg-0 small fw-bolder">
                    <li class="nav-item"><a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('resume') ? 'active' : '' }}" href="/resume">Resume</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('project') ? 'active' : '' }}" href="/project">Projects</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="/contact">Contact</a></li>
                    <li class="nav-item"><a href="/login"><button class="btn btn-outline-primary" type="submit">Login</button></a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
