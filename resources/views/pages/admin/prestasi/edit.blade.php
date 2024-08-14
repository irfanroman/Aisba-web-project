@extends('layouts.parent')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ubah Prestasi</h5>

            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="bi bi-house-door"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.prestasi.index') }}">Prestasi</a></li>
                    <li class="breadcrumb-item active">Ubah</li>
                </ol>
            </nav>


            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="bi bi-exclamation-octagon me-1"></i>
                        {{ $error }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endforeach
            @endif

            <div class="p-3">
                <form class="row g-3" action="{{ route('dashboard.prestasi.update', $prestasi->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="col-md-12">
                        <label for="inputPrestasiName" class="form-label"><strong>Judul Berita</strong></label>
                        <input type="text" class="form-control" id="inputPrestasiName" value="{{ $prestasi->title }}"
                            name="title" required>
                    </div>

                    <div class="col-md-12">
                        <label for="inputAuthorName" class="form-label"><strong>Pemenang Prestasi</strong></label>
                        <input type="text" class="form-control" id="inputAuthorName" value="{{ $prestasi->author }}"
                            name="author" required>
                    </div>

                    <div class="col-md-12">
                        <label for="inputImagePrestasi" class="form-label"><strong>Gambar</strong></label>
                        <input type="file" class="form-control" id="inputImagePrestasi" name="image">
                    </div>

                    <div class="col-md-12">
                        <label class="form-label"><strong>Isi Prestasi</strong></label>
                        <textarea name="description" id="editor" cols="30" rows="10"> {!! $prestasi->description !!} </textarea>
                        <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
                        <script>
                            ClassicEditor
                                .create(document.querySelector('#editor'))
                                .catch(error => {
                                    console.error(error);
                                });
                        </script>
                    </div>

                    <div class="text-end">
                        <a href="{{ route('dashboard.prestasi.index') }}" class="btn btn-secondary">
                            <i class="bi bi-arrow-left"></i> Kembali
                        </a>
                        <button type="submit" class="btn btn-primary">Publikasikan</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
