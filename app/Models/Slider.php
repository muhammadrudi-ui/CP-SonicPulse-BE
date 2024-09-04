<?php

namespace App\Models;

use CodeIgniter\Model;

class Slider extends Model
{
    protected $table = 'tb_slider';
    protected $primaryKey = 'id_slider';
    protected $allowedFields = ['file_foto_slider'];
}
