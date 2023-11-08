<?php 

namespace App\Controllers;
use App\Models\Posting;

use CodeIgniter\Exceptions\PageNotFoundException;

class Post_admin extends BaseController {

    // properties db (database)
    protected $db;
    protected $validation;

    public function __construct()
    {
        // set instansiasi
        $this->db = new Posting();
    }

    // method index untuk menampilkan data posting pada halaman blog
    public function index()
    {
       $data['postses'] = $this->db->findAll();

       // mengirimkan data ke halaman post
       return view('post_admin_list', $data);
    }

    // method menampilkan image name
    public function image_name()
    {
       $data['postses'] = $this->db->findAll();

       // mengirimkan data ke halaman post
       return view('post_admin_tblimg', $data);
    }

    // method untuk melihat setiap posting article yang di pilih
    public function viewPost($slug)
    {
        $data['postses'] = $this->db->where([
            'slug' => $slug,
            // 'status' => 'published'
        ])->first();

        if(!$data['postses']){
            throw PageNotFoundException::forPageNotFound();
        }

        // menampilkan data postingan article yang dipilih kedalam halaman detail
        return view('post_admin_view', $data);
    }

    // method untuk menambahkan data/upload postingan blogpost baru
    public function create()
    {
        // membuat validasi
        $validation = \Config\Services::validation(); 
        $validation->setRules([
            'title' => 'required',
            'author' => 'required',
            'content' => 'required',
            'picture' => [
                'rules' => 'uploaded[picture]|mime_in[picture,image/jpg,image/jpeg,image/gif,image/png]|max_size[picture,2048]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ],
            ],
        ]);

        $validation_post = $validation->withRequest($this->request)->run();

        if ($validation_post) {
            
            // ambil gambar
            $posting_image = $this->request->getFile('picture');
            $name_image = $posting_image->getName();

            // var_dump($name_image);
            // die();
            $posting_image->move('img');

                $this->db->insert([
                    'title' => $this->request->getPost('title'),
                    'author' => $this->request->getPost('author'),
                    'content' => $this->request->getPost('content'),
                    'status' => $this->request->getPost('status'),
                    'picture' => $name_image,
                    'slug' => str_replace(' ','-',$this->request->getPost('title')),
                ]);
                session()->setFlashdata('Pesan', 'Data berhasil ditambahkan');    
                return redirect()->to(site_url('postList'));
            }
        return view('post_admin_create');
    }

    // method untuk mengedit/mengubah postingan blogpost
    public function edit($id)
    {
        // ambil data post yang akan diedit
        $existed_data = $this->db->where('id', $id)->first();
        
        $validation = \Config\Services::validation();
        $validation->setRules([
            'id' => 'required',
            'title' => 'required',
            'author' => 'required',
            'content' => 'required',
        ]);

        $validation_post_edit = $validation->withRequest($this->request)->run();

        // var_dump($validation_post_edit);exit;
        if($validation_post_edit){
            $datas = [
                'title' => $this->request->getPost('title'),
                'author' => $this->request->getPost('author'),
                'content' => $this->request->getPost('content'),
                'status' => $this->request->getPost('status'),
            ];

            // ambil gambar
            $posting_image = $this->request->getFile('picture');

            if($posting_image->isValid()){
                $name_image = $posting_image->getName();
                
                $posting_image->move('img');
                unlink(__DIR__."../../../public/img/".$existed_data['picture']);
                $new_name = $name_image;
                $datas['picture']=$new_name;
            }
            
            $this->db->update($id, $datas);
            return redirect()->to(site_url('postList'));
        } else {
            $data['postses']=$existed_data;
            return view('post_admin_edit', $data);
            
        }
    }

    // method untuk menghapus data
    public function delete($id)
    {
        $delete = new Posting();

        $delete->delete($id);

        return redirect()->to(site_url('postList'));
    }
}

?>