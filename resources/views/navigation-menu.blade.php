{{-- <div class="row tm-brand-row">
          <div class="col-lg-4 col-11">
            {{-- <div class="tm-brand-container tm-bg-white-transparent">
              <!-- <i class="fas fa-2x fa-pen tm-brand-icon"></i> -->
              <div class="tm-brand-texts">
                {{-- <img src="D:\Degree 2nd year\Assignments\Server Side Pro\WEBSITE\img\App icon.png" alt="" class="appicon">  --}}
            <!--     <h1 class="text-uppercase tm-brand-name">RailReady</h1>
                <p class="small">Your online travel partner</p> -->
              {{-- </div> --}} 
            {{-- </div>
        </div> --}}
        <div class="parallax-windows" data-parallax="scroll" >
          <div class="container-fluid">
        <div class="col-lg-8 col-1">
          <div class="tm-nav">
            <nav class="navbar navbar-expand-lg navbar-light tm-bg-white-transparent tm-navbar">
              <button class="navbar-toggler" type="button"
                data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="/about">About</a>
                  </li>
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="/services">Services</a>
                  </li>
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="/testimonials">Booking</a>
                  </li>
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="/contact">Contact</a>
                  </li>
                  <li>
                  @if (Route::has('login'))
              <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                  @auth
                      <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                  @else
                      <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                      @if (Route::has('register'))
                          <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                      @endif
                  @endauth
              </div>
          @endif
                  </li>
                  <!-- <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="">Login</a>
                  </li>
                  <li class="nav-item">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="">Register</a>
                  </li> -->
                </ul>
              </div>
            </nav>
          </div>
        </div>
        
      </div>
      
      