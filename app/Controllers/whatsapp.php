<?php namespace App\Controllers;


use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\Controller;

class whatsapp extends BaseController
{
    public function send($nowa, $pesan)
    {
        // Load the cURL library
        $curl = \Config\Services::curlrequest();

        // Set the request parameters
        $url = 'https://api.fonnte.com/send';
        $headers = [
            'Authorization' => 'RfWj00U03!Ai#mJ4Hh#J'
        ];
        $data = [
            'target' => $nowa,
            'message' => $pesan
        ];

        // Send the POST request using cURL
        $response = $curl->request('post', $url, [
            'headers' => $headers,
            'form_params' => $data
        ]);

    }
    
            
}

?>

