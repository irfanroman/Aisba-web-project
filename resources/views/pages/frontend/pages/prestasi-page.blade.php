<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ url('frontend/assets/style/news.css') }}" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <script src="{{ url('frontend/assets/script/index.js') }}" type="text/javascript"></script>
    <link rel="icon" href="{{ url('frontend/assets/image/logo_aisba.png') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/style/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/style/footer.css') }}">
    <title>AISBA - News</title>
</head>

<body>
    <!-- NAVBAR -->
    @include('pages.frontend.includes.navbar')
    <!-- NAVBAR END -->
    <!-- HEADER -->
    <header>
        <h1>Prestasi</h1>
    </header>
    <!-- END HEADER -->

    <!-- CONTENT -->
    @foreach ($lattest_prestasi as $row)
    <div class="content">
        <img src="{{ $row->image }}" alt="" />
        <div class="overlay"></div>
        <div class="content-text">
            <div class="content-top">
                <h1>{{ $row->title }}</h1>
                <p>
                    {!! Str::words($row->description, '5') !!}
                </p>
            </div>
            <div class="content-bottom">
                <a href="{{ route('detailPrestasi', $row->slug) }}">
                    Selengkapnya
                </a>
            </div>
        </div>
    </div>
    @endforeach
    <!-- END CONTENT -->

    <!-- LATEST NEWS -->
    <div class="latest-news">
        <h1><span>Prestasi</span>Terbaru</h1>
        <div class="news-bottom">
            <!-- NEWS CARD 1 -->
            @foreach ($prestasi as $row)
                <a href="{{ route('detailPrestasi',  $row->slug) }}" class="news-card">
                    <div class="news-transition">
                        <img src="{{ $row->image }}" alt="Image News" />
                        <div class="news-overlay"></div>
                        <div class="news-text">
                            <h3>
                                {{ $row->title }}
                            </h3>
                            <p>
                                {!! Str::words($row->description, '5') !!}
                            </p>
                            <div class="news-status">
                                <h6>{{ $row->author }}</h6>
                                <i class="material-icons">arrow_right</i>
                                <p>{{ $row->created_at }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
    <!-- END LATEST NEWS -->

    <!-- FOOTER  -->

    @include('pages.frontend.includes.footer')

    <!-- END FOOTER -->
</body>

</html>
