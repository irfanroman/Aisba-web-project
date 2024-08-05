<footer>
    <div id="footer" class="footer-top">
      <div class="footer-left">
        <div class="footer-logo">
          <img src="{{ asset('frontend/assets/image/logo_aisba.png') }}" alt="AISBA" />
          <h1>Al Imam Islamic School</h1>
        </div>
        <p>
          <span> Al Imam Islamic School Balikpapan</span>
          diakronimkan AISBA. Kata inilah yang selama ini populer digunakan baik oleh guru, siswa, maupun orangtua. AISBA berada di bawah naungan Yayasan Al-Imam Madinatul Iman (YAMI) Balikpapan. Tahun 2024 ini usianya kini genap satu dekade.
        </p>
        <div class="footer-email">
          <i class="material-icons">mail</i>
          <p>adminsd@aisba.sch.id</p>
        </div>
        <div class="footer-email">
          <i class="material-icons">mail</i>
            <p>adminsmp@aisba.sch.id</p>
        </div>
        <div class="footer-phone">
          <i class="material-icons">phone</i>
          <p>082350932167 (SD)</p>
        </div>
        <div class="footer-phone">
          <i class="material-icons">phone</i>
          <p>085705224140 (SMP)</p>
        </div>
      </div>
      <div class="footer-right">
        <div class="footer-about-us">
          <h3>Tentang Kami</h3>
          <a href="{{ route('about') }}"> Profil Pesantren </a>
          <a href="{{ route('visiMisi') }}"> Visi Misi Pesantren </a>
        </div>
        <div class="footer-registration">
          <h3>Pendaftaran</h3>
          <a href="{{ route('psb') }}"> PSB </a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="footer-social-media">
        <a href="https://www.instagram.com/aisba.balikpapan/" target="_blank">
          <img src="{{ asset('frontend/assets/icon/instagram_icon.svg') }}" alt="Instagram" />
        </a>
        <a href="https://www.youtube.com/channel/UChaulsX2nWktFk5yrM_dKLw" target="_blank">
          <img src="{{ asset('frontend/assets/icon/youtube_icon.svg') }}" alt="Youtube" />
        </a>
        <a href="https://web.facebook.com/aisbabalikpapan" target="_blank">
          <img src="{{ asset('frontend/assets/icon/facebook_icon.svg') }}" alt="Facebook" />
        </a>
        {{-- <a href="">
          <img src="{{ asset('frontend/assets/icon/whatsapp_icon.svg') }}" alt="Whatsapp" />
        </a> --}}
      </div>
      <p>Copyright &copy; 2024 Al-Imam Islamic School</p>
    </div>
  </footer>
