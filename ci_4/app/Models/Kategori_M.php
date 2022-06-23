<?php

namespace App\Models;
use CodeIgniter\Model;

class Kategori_M extends Model
{
    protected $table = 'tbl_kategori';

    protected $allowedFields = ['kategori', 'keterangan'];

    protected $primaryKey = 'id_kategori';

    protected $validationRules      = [
        'kategori'  => 'alpha_numeric_space|min_length[3]|is_unique[tbl_kategori.kategori]'
    ];
    
    protected $validationMessages   = [
        'kategori'  => [
            'alpha_numeric_space'   => 'Tidak boleh menggunakan simbol',
            'min_length'            => 'Minimal 3 huruf',
            'is_unique'             => 'Ada data yang sama'
        ]
    ];
}