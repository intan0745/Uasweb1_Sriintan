<?php

class About {
    public function index($nama = '
sriintan', $pekerjaan = 'Dosen', $umur = 32)
    {

        echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan. saya berumur $umur tahun.";
    }
     public function page()
        {
            echo 'About/page';

        }
     
}