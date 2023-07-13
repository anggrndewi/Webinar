<?php namespace App\Controllers;

use \App\Models\pendaftaranmodel;
use \App\Models\presensiModel;
use \App\Models\adminModel;
use App\Models\webinarModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\Controller;

class Admin extends BaseController
{
   
    public function index()
    {
        $db = db_connect();
        $query =$db->query('SELECT * FROM pendaftaran')->getResult();
        
        $data['tampildata'] = $query;
        echo View('tampildatacustomer', $data);
    }

    public function dashboard()
    {
        echo View('admin/side');
        echo View('admin/topbar');
        echo View('dashboard');
        echo View('admin/footer');
    }

    public function login()
    {
        $session = session();
        if ($session->get('login')) {
            return redirect()->to('/dashboard')->with('message', 'Berhasil Login');
        }
        else{
            echo View('login');
        }
        
    }
    
    public function actlogin()
    {
        $admin = new adminModel();
        $session = session();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $vrf = [
            'email' => $email,
            'password' => $password,
        ];
       
        $cekemail = $admin->where($vrf)->find();
        
         if($cekemail!=NULL){
             $data = [
                 'nama' => $cekemail[0]['nama'],
                 'email' => $cekemail[0]['email'],
                 'login' => TRUE
             ];
             $session->set($data);
             return redirect()->to('/dashboard')->with('message', 'Berhasil Masuk!');
           
         }else{
             return redirect()->back()->with('message', 'Gagal Masuk!');
         }
    }

    public function logout(){
        $session = session();
        $session->stop();
        $session->destroy();
        return redirect()->to('/login')->with('message', 'Berhasil Keluar!');
    }

    public function table()
    {
        echo View('table');
    }

    public function datawebinar()
    {

        $db = db_connect();
        $query =$db->query('SELECT * FROM webinar')->getResult();
        
        $data['tampildata'] = $query;

        echo View('admin/side', $data);
        echo View('admin/topbar');
        echo View('dataWebinar', $data);
        echo View('admin/footer');
    }  
    public function tambahdata()
    {
        
        echo View('admin/side');
        echo View('admin/topbar');
        echo View('tambahdata');
        echo View('admin/footer');
    }
    public function storetambahdata()
    {
        $tambahdata = new webinarModel();
        $imgposter = $this->request->getFile('poster');
        $imgsertifikat = $this->request->getFile('sertifikat');
        if (!$imgposter->hasMoved() and !$imgsertifikat->hasMoved()) {
            $newNamep = $imgposter->getRandomName();
            $newNames = $imgsertifikat->getRandomName();
            $filepath = ROOTPATH.'public/assets/img/webinar/';
            $imgposter->move($filepath,$newNamep);
            $imgsertifikat->move($filepath,$newNames);
            $data = [
                'judul'=> $this->request->getPost('judul'),
                'waktu' => $this->request->getPost('waktu'),
                'deskwebinar' => $this->request->getPost('deskwebinar'),
                'namapemateri' => $this->request->getPost('namapemateri'),
                'deskpemateri' => $this->request->getPost('deskpemateri'),
                'poster' => $newNamep,
                'sertifikat' => $newNames,
            ];
            $tambahdata->save($data);
            return redirect()->to('/home')->with('message', 'Berhasil Submit Data!');
        }
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
    

    public function datapeserta($id_webinar=NULL)
    {
        $datapeserta = new pendaftaranmodel();
        $data = ['datapeserta' => $datapeserta->WHERE('id_webinar', $id_webinar)->find()];

        echo View('admin/side');
        echo View('admin/topbar');
        echo View('datapeserta',$data);
        echo View('admin/footer');
    }

    public function datapresensi($id_webinar=NULL)
    {
        $datapresensi = new presensiModel();
        $data = ['datapresensi' => $datapresensi->WHERE('id_webinar', $id_webinar)->find()];

        echo View('admin/side');
        echo View('admin/topbar');
        echo View('datapresensi',$data);
        echo View('admin/footer');
    }
    public function datanotifikasi($id_webinar=NULL)
    {
        $datapeserta = new pendaftaranmodel();
        $data = ['datapeserta' => $datapeserta->WHERE('id_webinar', $id_webinar)->find()];

        echo View('admin/side');
        echo View('admin/topbar');
        echo View('datanotifikasi',$data);
        echo View('admin/footer');
    }

}

?>