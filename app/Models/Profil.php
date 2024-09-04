<?php

namespace App\Models;

use CodeIgniter\Model;

class Profil extends Model
{
    protected $table = "tb_profil";
    protected $primaryKey = "username";
    protected $allowedFields = [
        'username',
        'password',
        'nama_perusahaan',
        'logo_perusahaan',
        'deskripsi_perusahaan_in',
        'deskripsi_perusahaan_en',
        'deskripsi_kontak_in',
        'deskripsi_kontak_en',
        'link_maps',
        'link_whatsapp',
        'favicon_website',
        'title_website',
        'foto_utama',
        'alamat',
        'no_hp',
        'email',
        'teks_footer'
    ];
}
