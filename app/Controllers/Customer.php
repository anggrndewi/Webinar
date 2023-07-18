<?php namespace App\Controllers;

use \App\Models\pendaftaranmodel;
use \App\Models\webinarModel;
use \App\Models\presensiModel;
use \App\Controllers\Email;
use \App\Controllers\whatsapp;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\Controller;

class Customer extends BaseController
{
    public function home()
    {
        $db = db_connect();
        $query =$db->query('SELECT * FROM webinar')->getResult();
        
        $data['deskwebinar'] = $query;

        echo view('layout/header', $data);
        echo View ('Home');
        echo View('layout/footer');
    }

    public function detailwebinar($id=NULL)
    {
        $deskwebinar = new webinarModel();
        
        $data = ['deskwebinar' => $deskwebinar->WHERE('id', $id)->find()];

        echo view('layout/header', $data);
        echo View('deskripsi');
        echo View('layout/footer');  

    }

    public function lihat()
    {
        $db = db_connect();
        $query =$db->query('SELECT * FROM pendaftaran')->getResult();
        
        $data['tampildata'] = $query;

        echo view('layout/header', $data);
        echo View ('tampildatacustomer');
        echo View('layout/footer'); 
    }

    public function pendaftaran($id)
    {
        $data = ['id' => $id];
        echo view('layout/header');
        echo View('pendaftaranwebinar', $data);
        echo View('layout/footer');
    }

    public function storependaftaran()
    {
        $pendaftaran = new pendaftaranmodel();
            $data = [
                'id_webinar'=> $this->request->getPost('id_webinar'),
                'nama' => $this->request->getPost('nama'),
                'email' => $this->request->getPost('email'),
                'nowa' => $this->request->getPost('nowa'),
                'alamat' => $this->request->getPost('alamat'),
            ];
            $id_webinar=$this->request->getPost('id_webinar');
            $email=$this->request->getPost('email');
            $nowa=$this->request->getPost('nowa');
            $pendaftaran->save($data);
            
            $db = db_connect();
            $query =$db->query("SELECT * FROM notifikasi WHERE id_webinar='$id_webinar'")->getRow();
            
            //dd($email);
            $kirimemail = new Email();
            $isiemail = $query->pesan."<br><br>Link Webinar = ".$query->linkwebinar."<br><br>Link Presensi = ".$query->linkpresensi;
            //dd($isiemail);
            $kirimemail->send($email, $isiemail);

            $kirimwa = new whatsapp();
            $isiwa = $query->pesanwa;
            $kirimwa ->send($nowa, $isiwa);

            return redirect()->to('/notifikasi')->with('message', 'Berhasil Submit Data!');
    }
    public function notifikasi($daftar = NULL)
    {
        if($daftar == NULL || $daftar == 0){
            $data = [
                'judul' => 'Pendaftaran Gagal',
                'deskripsi' => 'Mohon maaf pendaftaran anda gagal, mohon diulangi kembali.' 
            ];
        }else{
            $data = [
                'judul' => 'Pendaftaran Berhasil',
                'deskripsi' => 'Selamat, pendaftaran anda berhasil.<br>
                                Silahkan cek email atau whatsapp yang anda daftarkan untuk melihat data webinar.<br>
                                Terimakasih' 
            ];
        }
        echo view('layout/header');
        echo View('notifikasi',$data);
        echo View('layout/footer');  
    }

    public function presensi($id)
    {
        $data = ['id' => $id];
        echo view('layout/header');
        echo View('prisensi', $data);
        echo View('layout/footer');
    }

    public function storepresensi()
    {
        $presensi = new presensiModel();
            $data = [
                'id_webinar'=> $this->request->getPost('id_webinar'),
                'nama' => $this->request->getPost('nama'),
                'email' => $this->request->getPost('email'),
                'nowa' => $this->request->getPost('nowa'),
                'alamat' => $this->request->getPost('alamat'),    
            ];
            $absen = $presensi->save($data);
    //         return redirect()->to('/sertifikat')->with('message', 'Berhasil Submit Data!');
    // }

    // public function sertifikat($input = NULL)
    // {
        if(!$absen){
            $data = [
                'judul' => 'Presensi Gagal',
                'deskripsi' => 'Mohon maaf Presensi anda gagal, mohon diulangi kembali.',

            ];
        }else{
            $id_webinar= $this->request->getPost('id_webinar');
            $db = db_connect();
            $data = [
                'judul' => 'Presensi Berhasil',
                'deskripsi' => 'Selamat, Presensi anda berhasil.<br>
                                Silahkan klik buttom yang anda dibawah  untuk mengunduh sertifikat.<br>
                                Terimakasih',
                'nama' => $this->request->getPost('nama'),
                'foto' => $db->query("SELECT * FROM webinar WHERE id ='$id_webinar'")->getRow(),
            ];
        }
        echo view('layout/header');
        echo View('sertifikat',$data);
 
    }
}

?>