<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ url('frontend/assets/style/detail-news.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/assets/style/footer.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/assets/style/navbar.css') }}" />
    <link rel="icon" href="{{ url('frontend/assets/image/logo_aisba.png') }}" type="image/x-icon" />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <script src="{{ url('frontend/assets/script/index.js') }}" type="text/javascript"></script>
    <link rel="icon" href="{{ url('frontend/assets/script/index.js') }}" type="image/x-icon" />
    <title>{{ $prestasi->title }}</title>
  </head>

  <body>
    <!-- NAVBAR -->
    @include('pages.frontend.includes.navbar')
    <!-- NAVBAR END -->
    <!-- HEADER -->
    <header>
      <h1>{{ $prestasi->title }}</h1>
    </header>
    <!-- END HEADER -->

    <!-- Detail News -->
    <div class="all">
      <div class="news">
        <div>
          <img src="{{ $prestasi->image }}" alt="img" width="100"/>
        </div>
        <div>
          <h1>{{ $prestasi->title }}</h1>
        </div>
        <div>
          <p class="text">
            {!! $prestasi->description !!}
          </p>
        </div>
      </div>
      <div class="admin">
        <p class="title">{{ $prestasi->author }}</p>
        <p>{{ $prestasi->created_at }}</p>
      </div>
    </div>
    </div>

    <!-- FOOTER  -->

    @include('pages.frontend.includes.footer')

    <!-- END FOOTER -->
  </body>
</html>
