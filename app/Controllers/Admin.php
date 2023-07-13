<?php namespace App\Controllers;

use \App\Models\pendaftaranmodel;
use \App\Models\presensiModel;
use \App\Models\adminModel;
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
        echo View('dashboard');
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

    public function table()
    {
        echo View('table');
    }

    public function datawebinar()
    {
        echo View('dataWebinar');
    }


}

?>