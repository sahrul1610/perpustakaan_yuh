<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnggotaModel;

class AnggotaController extends Controller
{
     public function __construct(){
        $this->AnggotaModel = new AnggotaModel();
    }
    public function index(){
        $data =[
            'anggota' => $this->AnggotaModel->allData(),
        ];
        return view('v_anggota', $data);
    }
}
