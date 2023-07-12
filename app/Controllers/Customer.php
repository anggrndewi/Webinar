<?php namespace App\Controllers;

use \App\Models\pendaftaranmodel;
use \App\Models\presensiModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\Controller;

class Customer extends BaseController
{
    public function home()
    {
        $db = db_connect();
        $query =$db->query('SELECT * FROM webinar')->getResult();
        
        $data['deskwebinar'] = $query;

        echo view('layout/header');
        echo View ('Home', $data);
        echo View('layout/footer');
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

    public function storepresensi()
    {
        $presensi = new presensiModel();
        $img = $this->request->getFile('bukti');
        // dd($img);
        if (!$img->hasMoved()) {
            $newName = $img->getRandomName();
            $filepath = ROOTPATH.'public/assets/img/presensi/';
            $img->move($filepath,$newName);
            $data = [
                'nama' => $this->request->getPost('nama'),
                'email' => $this->request->getPost('email'),
                'nowa' => $this->request->getPost('nowa'),
                'alamat' => $this->request->getPost('alamat'),
                'bukti' => $newName,
            ];
            $presensi->save($data);
            return redirect()->back()->with('message', 'Berhasil Submit Data!');
        }
<<<<<<< HEAD:app/Controllers/Sertifikat.php
    }

        public function hasil()
    {
        echo view('layout/header');
        echo View('deskripsi');
        echo View('layout/footer');  

=======
>>>>>>> e0892adc58246a14f1d543bbf314cbd7bb5dcc50:app/Controllers/Customer.php
    }
    
}

?>