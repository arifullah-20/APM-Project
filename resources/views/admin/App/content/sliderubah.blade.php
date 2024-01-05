@extends('admin.layout')

@section('content')

<h4 class="py-3 mb-4"><span class="text-muted fw-light">Content /</span> Slider Ubah Tes</h4>

<form method="POST" action="{{ route('update.slider/{id}') }}" enctype="multipart/form-data">
    <!-- Form fields go here -->
    @csrf <!-- Menambahkan token CSRF -->


    <div class="row">
        <div class="col mb-3">
            <label for="logoFile" class="form-label">Pilih foto</label>
            <input type="file" id="logoFile" name="gambar_slider" class="form-control" accept="image/*">
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
</form>

@endsection

