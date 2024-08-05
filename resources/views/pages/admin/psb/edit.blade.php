@extends('layouts.parent')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ubah PSB</h5>

            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="bi bi-house-door"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.psb.index') }}">Berita</a></li>
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
                <form class="row g-3" action="{{$psb->image }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="col-md-12">
                        <label for="inputpsbName" class="form-label"><strong>Judul</strong></label>
                        <input type="text" class="form-control" id="inputpsbName" value="{{ $psb->title }}" name="title" required>
                    </div>

                    <div class="col-md-12">
                        <label for="inputAuthorName" class="form-label"><strong>Deskripsi</strong></label>
                        <textarea name="description" id="editor" cols="30" rows="10"> {!! $psb->description !!} </textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Current Image</label>
                        @if($psb->image)
                            <div>
                                <img src="{{ asset('storage/psbs/' . $psb->image) }}" alt="{{ $psb->title }}" class="img-thumbnail" style="max-width: 200px;">
                            </div>
                        @endif
                        <label for="image">Change Image</label>
                        <input type="file" name="image" id="image" class="form-control-file" accept="image/*">
                    </div>

                    <div class="form-group">
                        <label for="currentFile">Current File</label>
                        @if($psb->file)
                            <div>
                                <a href="{{ asset('storage/psbs/' . $psb->file) }}" target="_blank">{{ $psb->file }}</a>
                            </div>
                        @endif
                        <label for="file">Change Image</label>
                        <input type="file" name="file" id="file" class="form-control-file" accept=".pdf">
                    </div>

                    <div class="text-end">
                        <a href="{{ route('dashboard.psb.index') }}" class="btn btn-secondary">
                            <i class="bi bi-arrow-left"></i> Kembali
                        </a>
                        <button type="submit" class="btn btn-primary">Publikasikan</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
