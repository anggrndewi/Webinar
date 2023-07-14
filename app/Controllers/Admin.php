<?php namespace App\Controllers;

use \App\Models\pendaftaranmodel;
use \App\Models\presensiModel;
use \App\Models\adminModel;
use App\Models\webinarModel;
use App\Models\notifikasiModel;
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
    public function tambahdatawebinar()
    {
        
        echo View('admin/side');
        echo View('admin/topbar');
        echo View('tambahdatawebinar');
        echo View('admin/footer');
    }
    public function storetambahdatawebinar()
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
            return redirect()->to('/dashboard')->with('message', 'Berhasil Submit Data!');
        }
    }

    public function ubahdatawebinar($id)
    {
        $session = session();
        $webinar = new webinarModel();
        $data = [
            'data' => $webinar->where('id',$id)->find()
        ];
        echo view('admin/side',$data);
        echo view('admin/topbar');
        echo view('ubahdatawebinar');
        echo view('admin/footer');
    }
    public function ubahdatastorewebinar()
    {
        $session = session();
        $ubahwebinar = new webinarModel();
            $data = [
                'judul'=> $this->request->getPost('judul'),
                'waktu' => $this->request->getPost('waktu'),
                'deskwebinar' => $this->request->getPost('deskwebinar'),
                'namapemateri' => $this->request->getPost('namapemateri'),
                'deskpemateri' => $this->request->getPost('deskpemateri'),
               
            ];
        $id = $this->request->getPost('id');
        $update = $ubahwebinar->update($id, $data);
        if($update){
            return redirect()->to('/datawebinar')->with('message', 'Update Berhasil!');
        }else{
            return redirect()->to('ubahdatawebinar')->with('message', 'Update Gagal!');
        }
            $ubahwebinar->save($data);
            return redirect()->to('/datawebinar')->with('message', 'Berhasil Submit Data!');
        
    }

    public function hapusdatawebinar($id)
    {
        $session = session();
        $user = new webinarModel();
        $data = $user->delete($id);
        if($data){
            return redirect()->back()->with('message', 'Berhasil Hapus data!');
        }else{
            return redirect()->back()->with('message', 'Gagal Hapus data!');
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
        $datanotifikasi = new notifikasiModel();
        $data = ['datanotifikasi' => $datanotifikasi->WHERE('id_webinar', $id_webinar)->find()];

        echo View('admin/side');
        echo View('admin/topbar');
        echo View('datanotifikasi',$data);
        echo View('admin/footer');
    }

    public function tambahdatanotifikasi()
    {
        echo View('admin/side');
        echo View('admin/topbar');
        echo View('tambahdatanotifikasi');
        echo View('admin/footer');
    }
    
    public function storetambahdatanotifikasi()
    {
        $tambahdata = new notifikasiModel();
            $data = [
                'id_webinar' => $this->request->getPost('id_webinar'),
                'linkwebinar'=> $this->request->getPost('linkwebinar'),
                'linkpresensi' => $this->request->getPost('linkpresensi'),
                'pesan' => $this->request->getPost('pesan'),
            ];
            $tambahdata->save($data);
            return redirect()->to('/datanotifikasi')->with('message', 'Berhasil Submit Data!');
        
    }
    public function ubahdatanotifikasi($id)
    {
        $session = session();
        $webinar = new notifikasiModel();
        $data = [
            'data' => $webinar->where('id',$id)->find()
        ];
        echo view('admin/side',$data);
        echo view('admin/topbar');
        echo view('ubahdatanotifikasi');
        echo view('admin/footer');
    }
    public function ubahdatastorenotifikasi()
    {
        $session = session();
        $ubahnotifikasi = new notifikasiModel();
            $data = [
                
                'linkwebinar' => $this->request->getPost('linkwebinar'),
                'linkpresensi' => $this->request->getPost('linkpresensi'),
                'pesan' => $this->request->getPost('pesan'),
               
            ];
        $id = $this->request->getPost('id');
        $update = $ubahnotifikasi->update($id, $data);
        if($update){
            return redirect()->to('/datanotifikasi')->with('message', 'Update Berhasil!');
        }else{
            return redirect()->to('ubahdatanotifikasi')->with('message', 'Update Gagal!');
        }
            $ubahnotifikasi->save($data);
            return redirect()->to('/datanotifikasi')->with('message', 'Berhasil Submit Data!');
    }
    
}


?>