<div class="topbar-container fixed-top">
    <div class="container mb-0 pt-1" id="topbar">
        <div class="d-flex justify-content-between topbar py-1 mb-0">
           <div class="d-flex justify-content-between">
               <a href="#" class="d-none d-sm-none d-md-block topbar-phone-link me-4">
                   <i class="fa fa-phone"></i>
                   +263 77 000 000
               </a>
               <a href="#" class="d-none d-sm-none d-md-block topbar-phone-link">
                   <i class="fa-brands fa-whatsapp fw-bold"></i>
                   +263 77 000 000
               </a>
           </div>


            <div class="social d-flex flex-row justify-content-evenly">
                <a href="#" class="d-none d-sm-none d-md-block topbar-phone-link mx-4"><i
                        class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="d-none d-sm-none d-md-block topbar-phone-link mx-4"><i
                        class="fa-brands fa-twitter"></i></a>
                <a href="#" class="d-none d-sm-none d-md-block topbar-phone-link mx-4"><i
                        class="fa-brands fa-linkedin-in"></i></a>
            </div>

        </div>
    </div>

    <div class="bg-light mt-0">
        <div class="container py-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand logo" href="/">
                        <img src="{{ asset('logos/logo.png') }}" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            @auth()
                            <li class="nav-item">
                                <a class="nav-link fw-bold">Hi: {{ auth()->user()->name }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link create-post mb-sm-2 mb-md-0" href="/listings/create">Post Listing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link create-post" href="/listings/manage"><i class="fa fa-right-from-gears"></i>Manage Listings</a>
                            </li>
                                <li class="nav-item">
                                    <a class="nav-link create-post" href="/import"><i class="fa fa-cloud-arrow-up"></i>Import CSV</a>
                                </li>
                                <li class="nav-item">
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button class="nav-link bg-transparent" type="submit"><i class="fa fa-door-closed"></i> Logout</button>
                                    </form>
                                </li>
                            @else
                            <li class="nav-item">
                                <a class="nav-link" href="/login"><i class="fa fa-user"></i> Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/register"><i class="fa fa-right-from-bracket"></i> Register</a>
                            </li>
                                @endauth
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
