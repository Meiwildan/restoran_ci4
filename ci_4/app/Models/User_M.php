<?php

namespace App\Models;
use CodeIgniter\Model;

class User_M extends Model
{
    protected $table = 'tbl_user';

    protected $primaryKey = 'id_user';

    protected $allowedFields = ['user', 'email', 'password', 'level', 'aktif'];

    protected $validationRules      = [
        'user'  => 'alpha_numeric_space|min_length[3]|is_unique[tbl_user.user]',
        'email'  => 'valid_email'
    ];

    protected $validationMessages   = [
        'user'  => [
            'alpha_numeric_space'   => 'Tidak boleh menggunakan simbol',
            'min_length'            => 'Minimal 3 huruf',
            'is_unique'             => 'Ada user yang sama'
        ],
        'email'  => [
            'valid_email'   => 'Email Salah',
            
        ]
    ];
}