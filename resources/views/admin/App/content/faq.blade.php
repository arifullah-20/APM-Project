        @extends('admin.layout')

        @section('content')


        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Content /</span> FAQ</h4>

        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-4">
                        <h5 class="card-header">Pertanyaan</h5>
                    </div>
                    <div class="col-md-8 mb-1">
                        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal"
                            data-bs-target="#basicModal">
                            Tambah Data
                        </button>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Tambah Pertanyaan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <form method="POST" action="/simpan-faq" enctype="multipart/form-data"
                                id="editLogoFormP">
                                @csrf
                                <div class="mb-3">
                                        <label for="pertanyaan" class="form-label">Pertanyaan</label>
                                        <textarea class="form-control" name="pertanyaan" id="pertanyaan"
                                            rows="3"></textarea>
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
                            <th>Pertanyaan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($tb_pertanyaan as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{!! $data->pertanyaan !!}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item jawab-link" href="#" data-bs-toggle="modal"
                                            data-bs-target="#jawabModal" data-id="{{ $data->id_pertanyaan }}"
                                            data-pertanyaan="{!! $data->pertanyaan !!}">
                                            <i class="bx bx-edit-alt me-1"></i>Jawab
                                        </a>
                                        <a class="dropdown-item" href="">
                                            <i class="bx bx-trash me-1"></i>Delete
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Add this modal code after your existing code -->
                <div class="modal fade" id="jawabModal" tabindex="-1" role="dialog" aria-labelledby="jawabModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="jawabModalLabel">Jawab Pertanyaan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="simpanJawaban" action="/simpan-jawaban" method="post" enctype="multipart/form-data" id="SimpaJawaban">
                                    @csrf
                                    <p id="questionText"></p>
                                    <div class="mb-3">
                                        <label for="jawaban" class="form-label">Jawaban:</label>
                                        <textarea class="form-control" id="jawaban" name="jawaban" rows="3" required></textarea>
                                    </div>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <button type="button" class="btn btn-primary" onclick="saveChanges()">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <script>

                </script>

</div>


                <div class="container-fluid">
                    <h5 class="mt-4">Accordion</h5>
                    <div class="row">
                        <div class="col-md mb-4 mb-md-2">
                            <div class="accordion-container">
                                @foreach ($tb_faq as $index => $data)
                                <div class="accordion-item mb-3">

                                    <div class="card accordion-item active">
                                        <div class="card-header">
                                            <button type="button" class="btn btn-danger btn-sm ms-2"
                                    onclick="hapusData({{$index}})">Hapus</button>
                                            <h2 class="accordion-header" id="heading{{$index}}">
                                                <button type="button" class="accordion-button" data-bs-toggle="collapse"
                                                    data-bs-target="#accordion{{$index}}" aria-expanded="true"
                                                    aria-controls="accordion{{$index}}">
                                                    {{$data->pertanyaan}}
                                                </button>
                                            </h2>

                                        </div>

                                        <div id="accordion{{$index}}" class="accordion-collapse collapse show"
                                            data-bs-parent="#accordionExample{{$index}}">
                                            <div class="accordion-body">
                                                {{$data->jawaban}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>


                @endsection
