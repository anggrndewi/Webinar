<?php namespace App\Controllers;


use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\Controller;

class Email extends BaseController
{
    public function send()
    {
        $email = \Config\Services::email();

        $email->setFrom('webinar@lampungcerdas.com', 'Lampung Cerdas');
        $email->setTo('anggrn26@gmail.com');
        
        $email->setSubject('Notifikasi Webinar Lampung Cerdas');
        $email->setMessage('$isiemail');

        $email->send();
    }
    
}

?>