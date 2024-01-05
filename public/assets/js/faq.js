   // Fungsi untuk menetapkan nilai pertanyaan dan ID ke dalam modal saat tombol "Jawab" diklik
   document.addEventListener('DOMContentLoaded', function () {
    var jawabLinks = document.querySelectorAll('.jawab-link');

    jawabLinks.forEach(function (link) {
        link.addEventListener('click', function (event) {
            var idPertanyaan = link.getAttribute('data-id');
            var pertanyaanText = link.getAttribute('data-pertanyaan');

            // Setel nilai di dalam modal
            document.getElementById('idPertanyaan').value = idPertanyaan;

            // Perbarui konten teks elemen <p>
            document.getElementById('questionText').innerText = pertanyaanText;

            // Tampilkan modal
            $('#jawabModal').modal('show');
        });
    });
});

// Fungsi untuk menyimpan jawaban (Anda dapat menyesuaikannya sesuai kebutuhan)
function saveChanges() {
    // Ambil ID pertanyaan dari modal
    var idPertanyaan = document.getElementById('idPertanyaan').value;

    // Ambil jawaban dari modal (Anda mungkin ingin memvalidasi atau membersihkannya)
    var jawaban = document.getElementById('jawaban').value;

    // Di sini, Anda dapat menambahkan logika penyimpanan atau mengirim data ke server
    // Contohnya, bisa menggunakan AJAX atau pengiriman formulir
    console.log('Simpan jawaban:', jawaban);

    // Tutup modal
    $('#jawabModal').modal('hide');
}

function hapusData(index) {
    // Implementasi logika penghapusan data di sini
    // Anda dapat menggunakan JavaScript atau Ajax untuk mengirim permintaan penghapusan ke server
    console.log('Menghapus data dengan index:', index);
}

// Fungsi untuk menetapkan nilai pertanyaan dan ID ke dalam modal saat tombol "Jawab" diklik
document.addEventListener('DOMContentLoaded', function () {
    var jawabLinks = document.querySelectorAll('.jawab-link');

    jawabLinks.forEach(function (link) {
        link.addEventListener('click', function (event) {
            var idPertanyaan = link.getAttribute('data-id');
            var pertanyaanText = link.getAttribute('data-pertanyaan');
            document.getElementById('idPertanyaan').value = idPertanyaan;
            document.getElementById('questionContainer').innerText = pertanyaanText;
        });
    });
});

// Fungsi untuk menyimpan jawaban (Anda dapat menyesuaikannya sesuai kebutuhan)
function saveChanges() {
    // Lakukan logika penyimpanan jawaban di sini, bisa menggunakan AJAX atau form submit.
    document.getElementById('simpanJawaban').submit();
}

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


   // Fungsi untuk menangani klik pada menu-item
   function handleMenuItemClick(menuItem) {
    // Menghapus kelas "active" dari semua elemen dengan kelas "menu-item"
    document.querySelectorAll('.menu-item').forEach(function (item) {
        item.classList.remove('active');
    });

    // Menambahkan kelas "active" pada elemen menu-item yang diklik
    menuItem.classList.add('active');
}

// Fungsi untuk menangani klik pada menu-sub
function handleSubMenuItemClick(subMenuItem) {
    // Menghapus kelas "active" dari semua elemen dengan kelas "menu-item" di dalam menu-sub
    subMenuItem.closest('.menu-sub').querySelectorAll('.menu-item').forEach(function (item) {
        item.classList.remove('active');
    });

    // Menambahkan kelas "active" pada elemen menu-item yang diklik di dalam menu-sub
    subMenuItem.classList.add('active');
}

// Memeriksa URL dan menetapkan "active" pada menu yang sesuai
function setActiveMenu() {
    var currentPath = window.location.pathname;
    var menuLinks = document.querySelectorAll('.menu-link');

    menuLinks.forEach(function (link) {
        if (link.getAttribute('href') === currentPath) {
            link.closest('.menu-item').classList.add('active');
        }
    });
}
// Panggil setActiveMenu saat halaman dimuat
window.onload = setActiveMenu;
