<?php namespace App\Controllers;

use \App\Models\pendaftaranmodel;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\Controller;

class Sertifikat extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $query =$db->query('SELECT * FROM pendaftaran')->getResult();
        
        $data['tampildata'] = $query;

        // $data['a'] = "Halooo";

        echo View('tampildatacustomer', $data);
    }
}

?>