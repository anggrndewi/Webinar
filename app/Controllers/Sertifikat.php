<?php namespace App\Controllers;

use \App\Models\pendaftaranmodel;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\Controller;

class Sertifikat extends BaseController
{
    public function home()
    {
        echo view('layout/header');
        echo View ('Home');
        echo View('layout/footer');
    }

    public function index()
    {
        $db = db_connect();
        $query =$db->query('SELECT * FROM pendaftaran')->getResult();
        
        $data['tampildata'] = $query;
        echo View('tampildatacustomer', $data);
    }

    public function pendaftaran()
    {
        echo view('layout/header');
        echo View('pendaftaranwebinar');
        echo View('layout/footer');
    }

    public function presensi()
    {
        echo view('layout/header');
        echo View('prisensi');
        echo View('layout/footer');
    }

    public function hasil()
    {
        echo view('layout/header');
        echo View('deskripsi');
        echo View('layout/footer');  
    }
    
}

?>