<?php

namespace App\Models;

use CodeIgniter\Model;

class Artikel extends Model
{
    protected $table = "tb_artikel";
    protected $primaryKey = "id_artikel";
    protected $allowedFields = ['id_artikel', 'judul_artikel', 'foto_artikel', 'deskripsi_artikel', 'created_at'];
}
