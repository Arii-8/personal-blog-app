<?php 

namespace App\Controllers;

class User extends BaseController {

    // user index
    public function index(){
        $data['title'] = 'Profile';
        return view('user/index', $data);
    }
}

?>