<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ url('frontend/assets/style/profil.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/assets/style/footer.css') }}" />
    <link rel="icon" href="{{ url('frontend/assets/image/logo_aisba.png') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ url('frontend/assets/style/navbar.css') }}" />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <script src="{{ url('frontend/assets/script/index.js') }}" type="text/javascript"></script>
    <link rel="icon" href="/assets/image/bq_logo.png" type="image/x-icon" />
    <title>AISBA - About Us</title>
  </head>
  <body>

  <!-- NAVBAR -->

  @include('pages.frontend.includes.navbar')

  <!-- END NAVBAR -->

    <!-- HEADER -->
    <header>
      <h1>Profil Pesantren</h1>
    </header>
    <!-- END HEADER -->

    <!-- ABOUT US -->
    <div class="all">
      <img src="{{ url('frontend/assets/image/hero_bg.png') }}" alt="Profil Pesantren" />
      <div class="text">
        <h1>Al-Imam Islamic School</h1>
        <p>
          Al-Imam Islamic School Balikpapan diakronimkan AISBA. Kata inilah yang selama ini populer digunakan baik oleh guru, siswa, maupun orangtua. AISBA berada di bawah naungan Yayasan Al-Imam Madinatul Iman (YAMI) Balikpapan. Tahun 2024 ini usianya kini genap satu dekade. <br> <br> 
          YAMI didirikan oleh Bapak. Ir. H. Muhammad Utama Jaya besama istri beliau, Bunda ir. Megawati. Awalnya, AISBA menempati ruko di kompleks Masjid Namirah, Balikpapan Baru. Saat itu baru ada dua jenjang pendidikan: SD dan SMP. Muridnya juga belum begitu banyak. <br> <br> 
          Sejak sekitar dua tahun lalu, AISBA pindah ke gedung baru di kawasan Bukit Cinta Damai (BCD), Balikpapan Kota. Alhamdulillah, di gedung baru ini, AISBA mengembangkan sayapnya dengan menambah tiga institusi baru: Daycare, TK, dan juga SMA. Muridnya juga terus bertambah. <br> <br> 
          Baik TK dan SMA sudah mengantongi izin operasional sekolah dan berhak melaksanakan proses pembelajaran. Proses pembelajarannya pun sudah dimulai per tahun ajaran baru 2024/2025 ini. Alhamdulillah, TK dan SMA AISBA juga dapat animo cukup besar dari masyarakat. <br> <br> 
          Ketua YAMI, Bapak Utama Jaya punya cita-cita mulia saat mendirikan AISBA. Beliau ingin mendirikan sekolah yang tidak hanya mencetak alumni dan generasi cerdas secara intelektual, tapi juga cerdas emosionalnya, spritualnya, dan mulia adabnya. <br> <br> 
          Tidak hanya itu, yang tak kalah penting juga adalah kuat dan lurus akidahnya, semangat beribadah, menguasai bahasa asing—Arab dan Inggris—cakap dalam eksakta—dan punya hafalan al-Qur’an. Cita-cita itu semua bukan isapan jempol. Tapi, dibuktikan dalam kurikulum dan kebijakan.          
        </p>
      </div>
    </div>
    <!-- END ABOUT US -->

    <!-- FOOTER -->

    @include('pages.frontend.includes.footer')

    <!-- END FOOTER -->

  </body>
</html>
