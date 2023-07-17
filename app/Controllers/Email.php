<?php namespace App\Controllers;


use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\Controller;

class Email extends BaseController
{
    public function send($to,$isiemail)
    {
        $email = \Config\Services::email();

        $email->setFrom('webinar@lampungcerdas.com', 'Lampung Cerdas');
        $email->setTo($to);
        
        $email->setSubject('Notifikasi Webinar Lampung Cerdas');
        $email->setMessage($isiemail);

        $email->send();
    }
    
}

?>