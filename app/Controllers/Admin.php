<?php namespace App\Controllers;

use \App\Models\pendaftaranmodel;
use \App\Models\presensiModel;
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
        echo View('login');
    }

}

?>