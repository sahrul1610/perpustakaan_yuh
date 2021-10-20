<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BukuModel;

class BukuController extends Controller
{
    public function index()
    {
        $data = [
            "buku" => BukuModel::get();
        ];

        return view("v_buku", $data);
    }
}
