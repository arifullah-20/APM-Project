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

                <style>
                    .modal.show
                    .modal-dialog
                    {
                    background-color:
                    transparent;
                    }
                    .modal-backdrop.show
                    {
                    background-color:
                    transparent;
                    }

                    #jawabModal
                    {
                    background-color:
                    transparent;
                    }

                </style>

                <div class="modal fade" id="jawabModal" tabindex="-1" aria-labelledby="jawabModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel3">Jawab Pertanyaan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Display the question here -->
                                <div id="questionContainer"></div>

                                <form method="POST" action="{{ route('simpan.jawaban') }}"
                                    enctype="multipart/form-data" id="editLogoForm">
                                    @csrf
                                    <input type="hidden" id="idPertanyaan" name="id_pertanyaan">
                                    <div class="mb-3">
                                        <label for="jawaban" class="form-label">Jawaban Anda:</label>
                                        <textarea class="form-control" id="jawaban" name="jawaban" rows="3"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" onclick="saveChanges()">Save
                                    changes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        var jawabModal = new bootstrap.Modal(document.getElementById('jawabModal'));

                        jawabModal._element.addEventListener('hidden.bs.modal', function () {
                            // Membersihkan modal setelah tertutup
                            document.getElementById('questionContainer').innerHTML = '';

                            // Menangani dropdown setelah modal tertutup
                            var dropdowns = document.querySelectorAll('.dropdown');
                            dropdowns.forEach(function (dropdown) {
                                var instance = new bootstrap.Dropdown(dropdown);
                                instance.update(); // Menyegarkan dropdown
                            });
                        });

                        var jawabLinks = document.querySelectorAll('.jawab-link');

                        jawabLinks.forEach(function (link) {
                            link.addEventListener('click', function (event) {
                                event.preventDefault();

                                var idPertanyaan = link.getAttribute('data-id');
                                var pertanyaanText = link.getAttribute('data-pertanyaan');

                                // Set the question content inside the #questionContainer
                                document.getElementById('questionContainer').innerHTML =
                                    '<strong>Pertanyaan:</strong> ' + pertanyaanText;

                                // Set the id_pertanyaan in the hidden input field
                                document.getElementById('idPertanyaan').value = idPertanyaan;

                                jawabModal.show();
                            });
                        });
                    });

                    function saveChanges() {
                        var idPertanyaan = document.getElementById('idPertanyaan').value;
                        var jawaban = document.getElementById('jawaban').value;

                        // Kirim data ke server menggunakan AJAX
                        fetch('{{ route('simpan.jawaban') }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                            },
                            body: JSON.stringify({
                                id_pertanyaan: idPertanyaan,
                                jawaban: jawaban
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            // Tanggapan dari server (bisa ditangani sesuai kebutuhan)
                            console.log(data.message);

                            // Tutup modal setelah menyimpan perubahan
                            var jawabModal = new bootstrap.Modal(document.getElementById('jawabModal'));
                            jawabModal.hide();
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                    }
                </script>
            </div>
        </div>





                <br>

                <h5 class="mt-4">Accordion</h5>
                <div class="row">
                    <div class="col-md mb-4 mb-md-2">
                        <small class="text-light fw-medium">Basic Accordion</small>
                        <div class="accordion mt-3" id="accordionExample">
                            <div class="card accordion-item active">
                                <h2 class="accordion-header" id="headingOne">
                                    <button type="button" class="accordion-button" data-bs-toggle="collapse"
                                        data-bs-target="#accordionOne" aria-expanded="true"
                                        aria-controls="accordionOne">
                                        Accordion Item 1
                                    </button>
                                </h2>

                                <div id="accordionOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping.
                                        Sesame snaps
                                        icing marzipan gummi
                                        bears macaroon dragée danish caramels powder. Bear claw dragée pastry topping
                                        soufflé.
                                        Wafer gummi bears
                                        marshmallow pastry pie.
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordionTwo" aria-expanded="false"
                                        aria-controls="accordionTwo">
                                        Accordion Item 2
                                    </button>
                                </h2>
                                <div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw
                                        dragée oat
                                        cake dragée ice
                                        cream halvah tootsie roll. Danish cake oat cake pie macaroon tart donut gummies.
                                        Jelly
                                        beans candy canes
                                        carrot cake. Fruitcake chocolate chupa chups.
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordionThree" aria-expanded="false"
                                        aria-controls="accordionThree">
                                        Accordion Item 3
                                    </button>
                                </h2>
                                <div id="accordionThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Oat cake toffee chocolate bar jujubes. Marshmallow brownie lemon drops
                                        cheesecake.
                                        Bonbon gingerbread
                                        marshmallow sweet jelly beans muffin. Sweet roll bear claw candy canes oat cake
                                        dragée
                                        caramels. Ice cream
                                        wafer danish cookie caramels muffin.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Accordion -->



                @endsection
