<?php

class About{
    public function index($nama = 'Fajar Hasbi', $pekerjaan = 'Mahasiswa')
    {
        echo "Haloo, nama saya $nama, saya adalah seorang $pekerjaan";
    }
    
    public function page()
    
    {
        echo 'About/page';
    }
}