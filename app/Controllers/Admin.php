<?php 

namespace App\Controllers;
use App\Models\User;

class Admin extends BaseController {
    
    // Properties & Construct
    protected $db;

    public function __construct(){
        
        // connect database        
        $this->db = new \App\Models\User();
    }

    public function index(){
        $data['title'] =  'User List';

        // Mengambil semua data pengguna
        $userModel = new \App\Models\User();
        $data['users'] = $userModel->findAll();

        return view('admin/index', $data);
    }

    public function detail($id){
        $data['title'] = 'User Detail';
        $data['user'] = $this->db->where('id', $id)->first();

        // check jika data user kosong maka arahakan ke halman admin
        if(empty($data['user'])){
            return redirect()->to('/admin');
        }

        return view('admin/admin_detail', $data);
    }

    public function deleteProfile($id = 0){

        $this->db->delete($id);
        return redirect()->to('/admin');
    }
}

?>