<?php 

namespace App\Controllers;

// class auth 
 class Auth extends BaseController {

    // Auth index (Login) 
    public function index(){
        $data = [
            'config' => config('auth')
        ];

        // login
        return view('auth/login', $data);
    }

    // Auth Register
    public function register(){

        // register
        return view('auth/register');
    }
 }

?>