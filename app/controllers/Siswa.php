<?php

 class Siswa extends Controller {

     private $iconSuccess = 'class="bi flex-shrink-0 me-2" role="img" aria-label="Success:" widht="50px"',
             $iconDanger = 'class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"';
        
    public function index() {
        $data['judul'] = 'Daftar Siswa';
        $data['siswa'] = $this->model('Siswa_model')->getAllSiswa();

        $this->view('templates/header', $data);
        $this->view('siswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id) {
        $data['judul'] = 'Detail siswa';
        $data['swa'] = $this->model('Siswa_model')->getsiswaById($id);

        $this->view('templates/header', $data);
        $this->view('siswa/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah() {
        if( $this->model('Siswa_model')->tambahDataSiswa($_POST) > 0 ) {
            Flasher::setFlash('Berhasil', 'Ditambahkan', 'success', $this->iconSuccess, '#check-circle-fill');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Ditambahkan', 'danger', $this->iconDanger, '#exclamation-triangle-fill');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        }
    }

    public function hapus($id) {
        if( $this->model('Siswa_model')->hapusDataSiswa($id) > 0 ) {
            Flasher::setFlash('Berhasil', 'Dihapus', 'success', $this->iconSuccess, '#check-circle-fill');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Dihapus', 'danger', $this->iconDanger, '#exclamation-triangle-fill');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        }
    }

    public function getUbah() {
        
       echo json_encode($this->model('Siswa_model')->getSiswaById($_POST['id']));
   
    }

    public function edit() {

        if( $this->model('Siswa_model')->editDataSiswa($_POST) > 0 ) {
            Flasher::setFlash('Berhasil', 'Diubah', 'success', $this->iconSuccess, '#check-circle-fill');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Diubah', 'danger', $this->iconDanger, '#exclamation-triangle-fill');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        }

    }

 }