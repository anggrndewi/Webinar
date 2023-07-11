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

    public function created()
    {
        $data = [
            'nama' => $nama,
            'email'  => $email,
            'nowa'  => $nowa,
            'alamat' => $alamat,
        ];
        $db = db_connect();
        $db->table('pendaftaran')->insert($data);
        // $db->save($data);
        return redirect('pendaftaranwebinar');
        // return $this->response->redirect(site_url('/pendaftaranwebinar'));
        // Produces: INSERT INTO mytable (title, name, date) VALUES ('{$title}', '{$name}', '{$date}')
        // echo View('pendaftaranwebinar', $data);
    }

    public function presensi()
    {
        echo view('layout/header');
        echo View('prisensi');
        echo View('layout/footer');
    }
    
}

?>