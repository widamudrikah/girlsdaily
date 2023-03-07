@extends('template.base')

@section('title', 'Tambah Artikel')

@section('dila')

<!-- Header -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tambah Artikel</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('artikel.index') }}">Back</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Tambah Artikel</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- ENd Header -->

<!-- Main Content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="card-body">
                <!-- Alert -->
                @if(Session::get('Ok'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('Ok') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                @if(Session::get('Oke'))
                <div class="alert alert-danger" role="alert">
                    {{ Session::get('Oke') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <!-- End Alert -->
                <form action="{{ route('artikel.tambah.index') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="foto_artikel">Foto Artikel</label>
                        <div class="input-group" id="foto_artikel">
                            <div class="custom-file" id="foto_artikel">
                                <input type="file" name="foto_artikel" class="custom-file-input @error('foto_artikel') is-invalid @enderror" id="foto_artikel">
                                <label class="custom-file-label" for="foto_artikel">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                            @error('foto_artikel')
                            <div class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="judul_artikel">Judul Artikel</label>
                        <textarea class="form-control @error('judul_artikel') is-invalid @enderror" name="judul_artikel" value="{{old('judul_artikel')}}" id="judul_artikel" rows="3" placeholder="Masukkan judul_artikel Produk"></textarea>
                        @error('judul_artikel')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="artikel">artikel</label>
                        <textarea class="form-control @error('artikel') is-invalid @enderror" name="artikel" value="{{old('artikel')}}" id="artikel" rows="3" placeholder="Masukkan artikel Produk"></textarea>
                        @error('artikel')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>


<!-- End Main Content -->


@endsection

@section('ckeditor')
    <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'artikel' );
    </script>
@endsection