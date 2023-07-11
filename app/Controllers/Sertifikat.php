<?php namespace App\Controllers;

use \App\Models\pendaftaranmodel;
use \App\Models\presensiModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\Controller;

class Sertifikat extends BaseController
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
    }
    
}

?>