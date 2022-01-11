<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\KrsModel;
use App\Models\MahasiswaModel;

class KrsController extends Controller
{
    public function __construct()
    {
        $this->KrsModel = new KrsModel();
    }

    public function search($id){
        $dataMhs = DB::table('krs') -> where('nim', $id) -> get();
        return view('krs-list', ['dataMhs' => $dataMhs]);
    }
    public function select(){
        $dataThn = DB::table('tahun_akademik') -> get();
        return view('krs-select', ['dataThn' => $dataThn]);
    }
    public function search2($id, $thn){
        $dataMhs = DB::table('krs') -> where('nim', $id) -> where('id_thn_akad', $thn) -> get();
        $dataMhswa = DB::table('mahasiswa') -> where('nim', $id) -> get();
        $dataKrs = DB::table('krs') -> where('nim', $id) -> where('id_thn_akad', $thn) -> get();
        return view('krs-list', ['dataMhsa' => $dataMhs, 'dataMahasiswa' => $dataMhswa, 'dataKrs' => $dataKrs]);
    }

    public function coba($id,$thn){
        $dataMhswa = DB::table('mahasiswa') -> where('nim', $id) -> get();
        $data = ['join' =>$this->KrsModel->allData($id,$thn), 'mhs' => $dataMhswa];
        return view('krs-listt', $data);
    }

}
