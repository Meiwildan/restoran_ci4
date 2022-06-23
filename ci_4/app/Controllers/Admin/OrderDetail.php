<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\OrderDetail_M;

class OrderDetail extends BaseController
{
    public function index()
    {
        $pager = \Config\Services::pager();
        $model = new OrderDetail_M();
        //$kategori = $model ->findAll();

        $data = [
            'judul'     => 'DATA RINCIAN ORDER',
            //'kategori'  => $kategori,
            'orderdetail'  => $model->paginate(3, 'page'),
            'pager'     => $model->pager

        ];
        return view("orderdetail/select", $data);
    }
    public function cari()
    {
        if (isset($_POST['awal'])) {
            $awal = $_POST['awal'];
            $sampai = $_POST['sampai'];

            $sql = "SELECT * FROM vorderdetail WHERE tgl_order BETWEEN '$awal' AND '$sampai'";
            $db = \Config\Database::connect();
            $result = $db->query($sql);
            $row = $result->getResult('array');

            $data = [
                'judul'     => 'DATA RINCIAN ORDER',
                'orderdetail'  => $row
    
            ];

            return view("orderdetail/cari", $data);
        }
    }
}
