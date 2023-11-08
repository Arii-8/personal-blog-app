<?php 

namespace App\Controllers;
use App\Controllers\BaseController;

class Pages extends BaseController {
    
    public function index()
    {

        // Halaman utama Home page!
        $data['title'] = 'Home Page';
        return view('index', $data);
    }

    public function info()
    {

        // Halaman tentang halaman blog!
        $data['title'] = 'Info Page';
        return view('info', $data);
    }

    public function contact()
    {

        // halaman contact
        $data['title'] = 'Contact';
        return view('contact', $data);
    }
}

?>