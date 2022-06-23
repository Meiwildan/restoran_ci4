<?php

namespace App\Models;
use CodeIgniter\Model;

class Pelanggan_M extends Model
{
    protected $table = 'tbl_pelanggan';

    protected $allowedFields = ['aktif'];
    
    protected $primaryKey = 'id_pelanggan';


}