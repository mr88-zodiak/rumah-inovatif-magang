    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container w-100 p-2">
          <div class="contact-info d-flex align-items-center justify-content-center">
          </div>
        </div>
      </section>
    
      <!-- ======= Header ======= -->
      <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
    
          <a href="index.html" class="logo"><img src="{{url("assets/template/user/assets/kominfo/download (1).png")}}" alt=""></a>
    
          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto" href="{{route("home")}}">Home</a></li>
              {{-- <li><a class="nav-link scrollto" href="#course">Pelatihan</a></li> --}}
              <li><a href="#auth" class="ml-0 pl-1">
                <button class="nav-link scrollto" data-toggle="modal" data-target="#loginModal">Login</button>
              </a></li>
    
              
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
    
        </div>
      </header><!-- End Header -->