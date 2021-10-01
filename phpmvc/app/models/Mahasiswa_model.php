<?php

class Mahasiswa_model {

    // private $mhs = [
    //     // [
    //     //     "nama" => "fajar hasbi noer",
    //     //     "nrp" => "193040076"
    //     // ],
    //     // [
    //     //     "nama" => "raditya gilang",
    //     //     "nrp" => "193040075"
    //     // ]
    //     // ];

        private $dbh;
        private $stmt;

        public function __construct()
        {
            // data source name
            $dsn = 'mysql:host=Localhost;dbname=phpmvc';

            try{
                $this->dbh = new PDO($dsn, 'root', '');
            } catch(PDOEexception $e){
                die($e->getMessage());
            }
        }

        public function getAllMahasiswa()
        {
            $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
            $this->stmt->execute();
            return $this->stmt->fecthAll(PDO::FETCH_ASSOC);
        }
}