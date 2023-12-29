@extends('admin.layout')

@section('content')

<h4 class="py-3 mb-4"><span class="text-muted fw-light">Content /</span> Slider Ubah Tes</h4>

<div class="col-md-12">
    <div class="card mb-4">
        <h5 class="card-header">Ubah Slider</h5>
        <div class="card-body">
            <form method="POST" action="" enctype="multipart/form-data">
                @csrf <!-- Menambahkan token CSRF -->

                <div class="row">
                    <div class="col mb-3">
                        <label for="logoFile" class="form-label">Pilih foto</label>
                        <input type="file" id="logoFile" name="logo" class="form-control" accept="image/*">
                    </div>
                </div>

                <div class="row">
                    <div class="col mb-3">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

