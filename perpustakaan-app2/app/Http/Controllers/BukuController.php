<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BukuModel;

class BukuController extends Controller
{
    public function __construct(){
        $this->BukuModel = new BukuModel();
    }
    public function index(){
        $data =[
            'buku' => $this->BukuModel->allData(),
        ];
        return view('v_buku', $data);
    }
    public function detail($kode_buku){
        if (!$this->BukuModel->detailData($kode_buku)) {
            abort(404);
        }
        $data =[
            'buku' => $this->BukuModel->detailData($kode_buku),
        ];
        return view('v_detailbuku', $data);
    }
}
