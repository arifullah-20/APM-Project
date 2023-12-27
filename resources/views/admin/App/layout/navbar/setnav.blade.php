@extends('admin.layout')

@section('content')



<h4 class="py-3 mb-4"><span class="text-muted fw-light">Layout Setting /</span> Navbar</h4>

<!-- Examples -->
<style>
    .navbar {
        background-color: #fff;
        overflow: hidden;
        padding: 15px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .navbar img {
        float: left;
        height: 50px;
        /* Sesuaikan ukuran logo */
        margin-right: 20px;
    }

    .logo-edit-button {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #3498db;
        color: #fff;
        border: none;
        padding: 10px 15px;
        border-radius: 5px;
        cursor: pointer;
        margin-left: auto;
    }

    .logo-edit-button:hover {
        background-color: #2980b9;
    }

</style>
</head>

<body>

    <div class="navbar">
        @foreach ($navbarset as $data)
        <img src="{{ asset('images/logo/'.$data->logo) }}" alt="Logo">
        @endforeach
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
            Edit Logo
        </button>
        <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Edit Logo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="/simpan-logo" enctype="multipart/form-data" id="editLogoForm">
                            @csrf
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="logoFile" class="form-label">Choose Logo</label>
                                    <input type="file" id="logoFile" name="logo" class="form-control" accept="image/*">
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    @endsection
