 <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
     <a href="" class="navbar-brand p-0">
         <h1 class="m-0"><i class="fa fa-search me-2"></i>SEO<span class="fs-5">Master</span></h1>
         <!-- <img src="img/logo.png" alt="Logo"> -->
     </a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
         <span class="fa fa-bars"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarCollapse">
         <div class="navbar-nav ms-auto py-0">
             <a href="{{ route('home') }}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
             <a href="{{ route('programmer-junior') }}"
                 class="nav-item nav-link {{ request()->is('programmer-junior') ? 'active' : '' }}">Programmer
                 Junior</a>
             <a href="{{ route('about') }}"
                 class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
             <a href="{{ route('service') }}"
                 class="nav-item nav-link {{ request()->is('service') ? 'active' : '' }}">Service</a>
             <a href="{{ route('project') }}"
                 class="nav-item nav-link {{ request()->is('project') ? 'active' : '' }}">Project</a>
             <div class="nav-item dropdown">
                 <a href="#"
                     class="nav-link dropdown-toggle  {{ request()->is('team') || request()->is('testimonial') || request()->is('not-found') ? 'active' : '' }}"
                     data-bs-toggle="dropdown">Pages</a>
                 <div class="dropdown-menu m-0">
                     <a href="{{ route('team') }}"
                         class="dropdown-item {{ request()->is('team') ? 'active' : '' }}">Our Team</a>
                     <a href="{{ route('testimonial') }}"
                         class="dropdown-item {{ request()->is('testimonial') ? 'active' : '' }}">Testimonial</a>
                     <a href="{{ route('not-found') }}"
                         class="dropdown-item {{ request()->is('not-found') ? 'active' : '' }}">404 Page</a>
                 </div>
             </div>
             <a href="{{ route('contact') }}"
                 class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
         </div>
         <butaton type="button" class="btn text-secondary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i
                 class="fa fa-search"></i></butaton>
         <a href="https://htmlcodex.com/startup-company-website-template"
             class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3">Pro Version</a>
     </div>
 </nav>
