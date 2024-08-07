<header>
    <img src="{{ asset('frontend/assets/image/hero_bg.png') }}" />
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
          <a class="home" href="{{route('home')}}">Home</a>
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
          <a class="contact" href="{{ route('galleries') }} ">Gallery</a>
          <!-- <div class="dropdown">
            <button>
              Gallery
              <i class="material-icons">arrow_drop_down</i>
            </button>
            <div class="dropdown-content">
              <a href="{{ route('galleries') }} ">Dokumentasi</a>
              <a href="/pages/tahfidz-santri.html">Tahfidz Santri</a>
            </div>
          </div> -->
          <div class="dropdown">
            <button>
              About Us
              <i class="material-icons">arrow_drop_down</i>
            </button>
            <div class="dropdown-content">
              <a href="{{ route('about') }}">Profil Pesantren</a>
              <a href="{{ route('visiMisi') }}">Visi Misi Pesantren</a>
            </div>
          </div>
          <div class="dropdown">
            <button>
              Registration
              <i class="material-icons">arrow_drop_down</i>
            </button>
            <div class="dropdown-content">
              <a href="{{ route('psb') }}">PSB</a>
            </div>
          </div> 
          <a class="contact" href="#footer">Contact</a>
        </div>
      </div>
    </nav>
    <!-- NAVBAR END -->

    <!-- HERO -->
    <div class="hero">
        <h1>Al-Imam Islamic School</h1>
        <p><span>Shalih, Smart, and Future Leader</span></p>

        <a href="{{ route('psb') }}">
          Daftar Sekarang
          <i class="material-icons">arrow_forward_ios</i>
        </a>

      </div>
    <!-- HERO END -->
</header>
