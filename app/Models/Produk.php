<?php

namespace App\Models;

use CodeIgniter\Model;

class Produk extends Model
{
    protected $table = 'tb_produk';
    protected $primaryKey = 'id_produk';

    protected $allowedFields = ['nama_produk_in', 'nama_produk_en', 'deskripsi_produk_in', 'deskripsi_produk_en', 'foto_produk'];
}
