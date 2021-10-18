<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PetugasModel;

class PetugasController extends Controller
{
    public function __construct(){
        $this->PetugasModel = new PetugasModel();
    }

    public function index(){
        $data =[
            'petugas' => $this->PetugasModel->allData(),
        ];
        return view('v_petugas', $data);
    }
}
