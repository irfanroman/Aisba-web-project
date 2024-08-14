   <!-- NAVBAR -->
   <nav>
      <div class="container-nav">
        <div class="logo-nav">
          <img src="{{ asset('frontend/assets/image/logo_aisba.png') }}" />
          <h1>Al-Imam Islamic School</h1>
        </div>
        {{-- Burger --}}
        <div class="menu-icon" id="burger-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
          </svg>
        </div>
        {{--  --}}
        <div class="navbar" id="nav-mobile">
          <a class="home" href="{{route('home')}}">Beranda</a>
          <div class="dropdown">
            <button class="">
              Information
              <i class="material-icons">arrow_drop_down</i>
            </button>
            <div class="dropdown-content">
              <a href="{{ route('news') }}">Berita</a>
              <a href="{{ route('event') }}">Agenda</a>
              <!-- <a href="/pages/wali-santri.html">Wali Santri</a> -->
            </div>
          </div>
          <a class="contact" href="{{ route('prestasi') }} ">Prestasi</a>
          <div class="dropdown">
            <button>
              Tentang
              <i class="material-icons">arrow_drop_down</i>
            </button>
            <div class="dropdown-content">
              <a href="{{ route('about') }}">Profil Pesantren</a>
              <a href="{{ route('visiMisi') }}">Visi Misi Pesantren</a>
            </div>
          </div>
          <a class="contact" href="{{ route('psb') }} ">PSB</a>
          <a class="contact" href="#footer">Contact</a>
        </div>
        
        </div>
        
      </div>
      
    </nav>
    <!-- NAVBAR END -->
