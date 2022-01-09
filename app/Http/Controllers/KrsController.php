<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\KrsModel;
use App\Models\MahasiswaModel;

class KrsController extends Controller
{
    public function search($id){
        $dataMhs = DB::table('krs') -> where('nim', $id) -> get();
        return view('krs-list', ['dataMhs' => $dataMhs]);
    }
    public function search2($id){
        $dataMhs = DB::table('krs') -> where('nim', $id) -> get();
        return view('krs-list', ['dataMhsa' => $dataMhs]);
    }

}
