<?php 

namespace App\Controllers;
use App\Models\Posting;

use CodeIgniter\Exceptions\PageNotFoundException;

class Post extends BaseController {

    // properties db (database)
    protected $db;

    public function __construct()
    {
        // set instansiasi
        $this->db = new Posting();
    }

    // root index
    public function index()
    {
        $data['title'] = 'Post Article';
        $data['postses'] = $this->db->where('status', 'published')->findAll();
       
       // mengirimkan data ke halaman post
        return view('post', $data);
    }
    
    // method untuk melihat setiap posting article yang di pilih
    public function viewPost($slug)
    {
        $data['title'] = 'View post detail';
        $data['postses'] = $this->db->where([
            'slug' => $slug,
            'status' => 'published'
        ])->first();

        if(!$data['postses']){
            throw PageNotFoundException::forPageNotFound();
        }

        // menampilkan data postingan article yang dipilih kedalam halaman detail
        return view('post_detail', $data);
    }
}

?>