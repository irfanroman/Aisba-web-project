<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <script src="{{ url('frontend/assets/script/index.js') }}" type="text/javascript"></script>
    <link rel="stylesheet" href="{{ url('frontend/assets/style/visi-misi.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/assets/style/footer.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/assets/style/navbar.css') }}" />
    <link rel="icon" href="{{ url('frontend/assets/image/logo_aisba.png') }}" type="image/x-icon" />
    <title>AISBA - Visi Misi</title>
  </head>

  <body>
    <!-- NAVBAR -->
    @include('pages.frontend.includes.navbar')
    <!-- NAVBAR END -->
    <!-- HEADER -->
    <header>
      <h1>Visi Misi Pesantren</h1>
    </header>
    <!-- END HEADER -->

    <!-- VISI MISI -->

    <div class="all">
    <img src="{{ url('frontend/assets/image/hero_bg.png') }}" alt="Profil Pesantren" />
      <div class="visi">
        <h2>Visi</h2>
        <p>
          Terwujudnya lembaga pendidikan Islam yang berkualitas dan berbasis pada penguasaan hafalan al-Qur’an,
           ilmu syariyyah, didukung dengan penguasaan bahasa asing
        </p>
      </div>
      <div class="misi">
        <h2>Misi</h2>
        <div class="all-2">
          <ol type="1">
            <li>
              Mengembangkan lembaga pendidikan dengan pelayanan yang prima, berkualitas,
               berstandar manajemen  mutu dengan manajemen profesional
            </li>
            <li>
              Mencetak para huffazh al-Qur’an dan memahami ilmu syar’iyyah
            </li>
          </ol>
        </div>
      </div>

      <div class="misi">
        <h2>8 Mutu Output</h2>
        <div class="all-2">
          <ol type="1">
            <li>
              Memahami aqidah yang shalih 
            </li>
            <li>
              Memiliki kesadaran beribadah kepada Allah Ta’ala 
            </li>
            <li>
              Memiliki akhlak dan karakter yang mulia serta rasa nasionalisme yang tinggi 
            </li>
            <li>
              Menghafal al-Qur’an minimal untuk TK 1 Juz, SD 5 Juz, SMP & SMA 3 juz
            </li>
            <li>
              Mampu membaca al-Qur’an sesuai ilmu tajwid 
            </li>
            <li>
              Berbahasa Arab-Inggris dengan fasih dan lancar 
            </li>
            <li>
              Memahami literatur pelajaran berbahasa Arab dan Inggris  
            </li>
            <li>
              Lulus dengan kemampuan kompetensi yang berdaya saing 
            </li>
          </ol>
        </div>
      </div>
    </div>

    <!-- END VISI MISI -->

    <!-- FOOTER  -->
    @include('pages.frontend.includes.footer')
    <!-- FOOTER END -->
  </body>
</html>
