<?php

class Produk_model {
    private $dbh;
    private $stmt;

    //koneksi dulu ke database
    public function __construct()
    {
        $dsn = 'mysql:host=localhost;
                      dbname=phpmvc';

        //cek menggunakan block try catch
        try {
            $this->dbh = new PDO($dsn, 'root', '');
        //ketika error
        }catch(PDOException $e){
            //hentikan dan berikan pesan
            die($e->getMessage());
        }
    }

    public function getAllProduk(){
        //kalau pake pdo diprepare dulu
        $this->stmt = $this->dbh->prepare('SELECT * FROM produk');
        //baru dieksekusi
        $this->stmt->execute();
        //ambil data berupa fecth assoc
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}