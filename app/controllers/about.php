<?php

class About extends Controller {
    public function index($nama = '
sriintan', $pekerjaan = 'Dosen', $umur = 32)
    {
$data['nama'] = $nama;
$data['pekerjaan'] = $pekerjaan;
$data['umur'] = $umur;
$data['judul'] = 'About Me';
 $this->view('templates/footer');
 $this->view('templates/header', $data);


       $this->view('about/index', $data);

    }
     public function page()
        {
            $data['judul'] = 'pages';
            $this->view('templates/header', $data);
           $this->view('about/page');
        $this->view('templates/footer');
        }
     
}