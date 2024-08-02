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
      <h1>Pendaftaran Siswa Baru </h1>
    </header>
    <!-- END HEADER -->

    <!-- CONTENT START -->
    
    <!-- CONTENT END -->

    <!-- FOOTER  -->
    @include('pages.frontend.includes.footer')
    <!-- FOOTER END -->
  </body>
</html>
