<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\KrsModel;
use App\Models\MahasiswaModel;
use Barryvdh\DomPDF\PDF;

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
    public function index($id,$thn){
        $dataMhswa = DB::table('krs') -> where('nim', $id) -> where('id_thn_akad',$thn) -> get();
        $data = ['join' =>$this->KrsModel->allData($id,$thn), 'mhs' => $dataMhswa];
        return view('krs-select', $data);
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

    public function datamatkul(){
        $datamk = DB::table('matakuliah') -> get();
        return view('krs-view', ['datamk' => $datamk]);
    }

    public function simpan(Request $a)
    {
        if(!empty($a->input('isimatkul'))){
            $will_insert = [];
            $nim =
            $id_thn = 6;
            foreach ($a->input('isimatkul') as $key => $value){
                DB::table('krs') -> insert([
                    'id_thn_akad' => $id_thn,
                    'nim' => '201904012',
                    'kode_matakuliah' => $value,
                    'nilai' => '',
                ]);
            }

        }
        return redirect('/krs/201904012/{id_thn}') -> with('berhasil', 'Data berhasil disimpan!');
    }

    public function cari(Request $x)
    {
        $cari = $x -> cari;
        $datamk = DB::table('matakuliah') -> where('semester', 'like', "%" . $cari . "%")-> get();
        return view('krs-view', ['datamk' => $datamk]);
    }

    public function cetak_pdf($id, $thn)
    {
        $dataMhswa = DB::table('mahasiswa') -> where('nim', $id) -> get();
        $data = ['join' =>$this->KrsModel->allData($id,$thn), 'mhs' => $dataMhswa];
        $pdf = PDF::loadview('krs-list', $data);
        return $pdf->download('laporan-krs-pdf');

    }
}
