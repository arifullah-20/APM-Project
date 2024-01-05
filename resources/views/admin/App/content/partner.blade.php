@extends('admin.layout')

@section('content')


<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<h4 class="py-3 mb-4"><span class="text-muted fw-light">Content /</span> Media Slider</h4>


<div class="card">
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-md-6 mb-1">
                <h5 class="card-header">Media Partner</h5>
            </div>
            <div class="col-md-6 text-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                    Tambah Data
                </button>
                <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Tambah Media Partner</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="/simpan-partner" enctype="multipart/form-data"
                                    id="editLogoFormT">
                                    @csrf
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="PartnerFile" class="form-label">Choose Logo</label>
                                            <input type="file" id="PartnerFile" name="logo_partner" class="form-control" accept="image/*">
                                        </div>
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

        <table class="table table-stripe">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($tb_partner as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="{{ asset('images/partner/'.$data->logo_partner) }} "  width="100px" alt=""></td>
                    <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModalEdit{{ $data->id_partner }}">
                            Edit
                        </button>
                        <div class="modal fade" id="basicModalEdit{{ $data->id_partner }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel1">Edit Partner</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="{{ route('edit.partner', ['id' => $data->id_partner]) }}" enctype="multipart/form-data" id="editLogoForm{{ $data->id_partner }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <label for="logoFile" class="form-label">Choose Logo</label>
                                                    <input type="file" id="logo_partner" name="logo_partner" class="form-control" accept="image/*">
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

                        <a href="{{ route('hapus.partner', ['id' => $data->id_partner]) }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    var editButtons = document.querySelectorAll('.btn-primary');

                    editButtons.forEach(function (button) {
                        button.addEventListener('click', function () {
                            var id = button.getAttribute('data-id');
                            var modal = document.getElementById('basicModalEdit' + id);
                            var form = document.getElementById('editLogoForm');

                            // Set the form action dynamically based on the ID
                            form.action = '/edit-partner/' + id;

                            // Clear the file input to prevent displaying the previous selected file
                            document.getElementById('logo_partner').value = '';

                            // Show the modal
                            var modalInstance = new bootstrap.Modal(modal);
                            modalInstance.show();
                        });
                    });
                });
            </script>
        </table>
    </div>
</div>
@endsection
