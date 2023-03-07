@extends('template.base')

@section('title', 'Tambah Info Produk')

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
                    <li class="breadcrumb-item"><a href="#">Back</a></li>
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
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Artikel</h3>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 250px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <a href="{{ route('artikel.baru') }}" class="btn btn-primary btn-sm">
                                        + Artikel
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body table-responsive p-0">
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
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th width="10%">Action</th>
                                    <th width="10%">Foto Artikel</th>
                                    <th>Judul Artikel</th>
                                    <th>Artikel</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($artikel as $row)
                                <tr>
                                    <td class="">
                                        <div class="btn-group btn-group-sm">
                                            <a href="#delete{{ $row->id }}" data-toggle="modal" data-target="#delete{{ $row->id }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        </div>
                                    </td>
                                    <td>
                                        <img src="{{ asset('storage/'.$row->foto_artikel) }}" alt="{{ $row->judul_artikel }}" class="img-fluid">
                                    </td>
                                    <td>{{ $row->judul_artikel }}</td>
                                    <td>{{ $row->artikel }}</td>
                                </tr>
                                @include('Admin.Artikel.artikel-delete')
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

<!-- End Main Content -->


@endsection