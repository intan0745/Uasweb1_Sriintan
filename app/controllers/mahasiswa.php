<?php

class Mahasiswa extends Controller {

    // Menampilkan daftar mahasiswa
    public function index() {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('mahasiswa_model')->getAllMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    // Menampilkan detail mahasiswa
    public function detail($id) {
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('mahasiswa_model')->getMahasiswaById($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }

    // Menambah data mahasiswa
    public function tambah() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {  // Memeriksa apakah form disubmit dengan POST
            // Sanitasi dan validasi data dari form
            $nama = htmlspecialchars($_POST['nama']);
            $nim = htmlspecialchars($_POST['nim']);
            $email = htmlspecialchars($_POST['email']);
            $jurusan = htmlspecialchars($_POST['jurusan']);
            
            // Menyimpan data mahasiswa jika berhasil
            if ($this->model('Mahasiswa_model')->tambahDataMahasiswa([
                'nama' => $nama,
                'nim' => $nim,
                'email' => $email,
                'jurusan' => $jurusan
            ]) > 0) 

            Flasher::setFlash('berhasil','ditambahkan','succes');
                header('Location: ' . BASEURL . '/mahasiswa');
                exit;
            
        }
        else {
             Flasher::setFlash('gagal','ditambahkan','danger');
                header('Location: ' . BASEURL . '/mahasiswa');
                exit;
        }
        // Bisa menambahkan logic untuk menampilkan form tambah jika tidak ada data yang dipost
    }
}
