@extends('admin.layout')

@section('content')


<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<h4 class="py-3 mb-4"><span class="text-muted fw-light">Layout /</span> Footer</h4>


@if(session('success'))
<div class="alert alert-primary" role="alert" id="autoCloseAlert">
    {{ session('success') }}
</div>

<script>
    // Auto-close alert after 5 seconds (adjust as needed)
    setTimeout(function () {
        document.getElementById('autoCloseAlert').style.display = 'none';
    }, 5000); // 5000 milliseconds = 5 seconds

</script>
@endif

<div class="card">
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-md-6 mb-1">
                <h5 class="card-header">Media Sosial</h5>
            </div>
            <div class="col-md-6 text-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                    Tambah Data
                </button>
                <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Tambah Media Sosial</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="/simpan-medsos" enctype="multipart/form-data"
                                    id="editLogoForm">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="defaultSelect" class="form-label">Media Sosial</label>
                                        <select id="defaultSelect" name="id_medsos" class="form-select">
                                            <option>Pilih Salah Satu</option>
                                            @foreach ( $tb_medsos as $data )
                                            <option value="{{$data->id_medsos}}">{{$data->medsos}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                    <div class="mb-3">
                                        <label for="defaultInput" class="form-label">Link</label>
                                        <input id="defaultInput" name="link_medsos" class="form-control" type="text"
                                            placeholder="Tempel Link Disini" />
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive text-nowrap">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Media Sosial</th>
                        <th>Link</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($tb_linkmedsos as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->medsos}}</td>
                        <td>{{ Str::limit($data->link_medsos, 20) }}</td>
                        <td>
                            <a href="#" class="btn btn-success">Ubah</a>
                            <a href="{{ route('hapus.medsos', ['id' => $data->id_link]) }}"
                                class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<br>
<br>
<div class="col-md-12 col-lg-12">
    <div class="card text-center mb-3 mr-3 ml-3">
        <div class="card-body">
            <h5 class="card-title">Quotes</h5>
            <br>
            @foreach ( $tb_quotes as $data )
            <p class="card-text">{!! $data->quotes !!}</p>
            @endforeach
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal1">
                Edit Quotes
            </button>
            <div class="modal fade" id="basicModal1" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel1">Edit Quotes</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="/simpan-quotes" enctype="multipart/form-data" id="editLogoForm">
                                @csrf
                                <div class="row">
                                    <div class="mb-3">
                                        <input id="quotesInput" name="quotes" type="hidden" value="">
                                        <label for="exampleFormControlReadOnlyInput1" class="form-label"></label>
                                        <trix-editor input="quotesInput"></trix-editor>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>

    <div class="card">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6 mb-1">
                    <h5 class="card-header">Media Sosial</h5>
                </div>
                <div class="col-md-6 text-end">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal3">
                        Tambah Data
                    </button>
                    <div class="modal fade" id="basicModal3" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel1">Tambah Media Sosial</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="/simpan-kontak" enctype="multipart/form-data"
                                        id="editLogoForm">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="defaultSelect" class="form-label">Kontak</label>
                                            <select id="defaultSelect" name="id_kontak" class="form-select">
                                                <option>Pilih Salah Satu</option>
                                                @foreach ( $tb_kontak as $data )
                                                <option value="{{$data->id_kontak}}">{{$data->kontak}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="mb-3">
                                            <label for="defaultInput" class="form-label">Value</label>
                                            <input id="defaultInput" name="kontak_value" class="form-control"
                                                type="text" placeholder="Tempel Link Disini" />
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kontak</th>
                            <th>Value</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($tb_kontakvalue as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->kontak}}</td>
                            <td>{{ Str::limit($data->kontak_value, 50) }}</td>
                            <td>
                                <a href="#" class="btn btn-success">Ubah</a>
                                <a href="{{ route('hapus.kontak', ['id' => $data->id_kontakvalue]) }}"
                                    class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div
                        class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="m-0 text-white"><i> @foreach ($navbarset as $data)
                                    <img src="{{ asset('images/logo/'.$data->logo) }}" alt="Logo">
                                    @endforeach</i></h1>
                        </a>
                        @foreach ( $tb_quotes as $data )
                        <p class="mt-3 mb-4">{!! $data->quotes !!}</p>
                        @endforeach
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                <button class="btn btn-dark">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Hubungi Kami</h3>
                            </div>
                            @foreach ($tb_kontakvalue as $data)
                            <div class="d-flex mb-2">
                                <i class="{{ $data->kontak_class }}"></i>
                                <p class="mb-0">{{ $data->kontak_value }}</p>
                            </div>
                            @endforeach
                            <div class="d-flex mt-4">
                                <div class="d-flex mt-4">

                                    @foreach ($tb_linkmedsos as $data)
                                    <a class="btn btn-primary btn-square me-2" href="{{ $data->link_medsos}}"><i
                                            class="{{ $data->icon_class }}"></i></a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">

                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection
