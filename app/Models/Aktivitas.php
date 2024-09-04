<?php

namespace App\Models;

use CodeIgniter\Model;

class Aktivitas extends Model
{
    protected $table = 'tb_aktivitas';
    protected $primaryKey = 'id_aktivitas';
    protected $allowedFields = ['nama_aktivitas_in', 'nama_aktivitas_en', 'deskripsi_aktivitas_in', 'deskripsi_aktivitas_en', 'foto_aktivitas'];
}