<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BukuModel extends Model
{
    public function allData()
    {
        return DB::table('buku')->get();
    }

    public function detailData($kode_buku){
       return DB::table('buku')->where('kode_buku', $kode_buku)->first();
    }
}
