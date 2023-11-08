<?php 

namespace App\Models;
use CodeIgniter\Model;

class Posting extends Model {

    // Koneksi ke database personal-blog-app-post = db_post
    protected $DBGroup = 'db_post';

    // set properties model database
    protected $table        = 'posting';
    protected $primaryKey   = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields    = ['title', 'content', 'status', 'author', 'slug', 'picture'];
}

?>