<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <script src="{{ url('frontend/assets/script/index.js') }}" type="text/javascript"></script>
    <link rel="stylesheet" href="{{ url('frontend/assets/style/visi-misi.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/assets/style/footer.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/assets/style/navbar.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/assets/style/psb.css') }}" />
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
    @foreach ($psb as $row)
        <div class="content">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ $row->image }}" class="img-fluid" width="500" height="500">
                </div>
                <div class="col-md-8">
                    <h1>{{ $row->title }}</h1>
                    <p>{!! $row->description !!}</p>
                    <a href="{{ $row->file }}" class="btn btn-primary">Panduan Pendaftaran</a>
                </div>
            </div>
        </div>
    @endforeach




    <!-- CONTENT END -->

    <!-- FOOTER  -->
    @include('pages.frontend.includes.footer')
    <!-- FOOTER END -->
</body>

</html>
