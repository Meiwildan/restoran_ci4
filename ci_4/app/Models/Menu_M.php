<?php

namespace App\Models;

use CodeIgniter\Model;

class Menu_M extends Model
{
    protected $table = 'tbl_menuu';

    protected $allowedFields = ['id_kategori', 'menu', 'gambar', 'harga'];

    protected $primaryKey = 'id_menu';

    protected $validationRules      = [
        'menu'  => 'alpha_numeric_space|min_length[3]|is_unique[tbl_menuu.menu]',
        'harga'  => 'numeric'
    ];

    protected $validationMessages   = [
        'menu'  => [
            'alpha_numeric_space'   => 'Tidak boleh menggunakan simbol',
            'min_length'            => 'Minimal 3 huruf',
            'is_unique'             => 'Ada data yang sama'
        ],
        'harga'  => [
            'numeric'   => 'Data harus berupa angka',
            
        ]
    ];
}
