@extends('template')

@section('judul')
Nilai Mahasiswa
@endsection

@section('nama')
Yudhistira
@endsection

@section('navbar')
@parent

@endsection

@section('sidebar')
@parent
@endsection


@section('konten')
<div class="container-fluid">
    <div class="alert alert-success" role="alert">
      <i class="fas fa-university"></i> Kartu Rencana Studi (KRS)
    </div>

    <center>
        <legend><strong>MASUKKAN NILAI AKHIR</strong></legend>

        <table>
          <tr>
            <td>Kode Mata Kuliah</td>
            <td>: $kode_matakuliah;</td>
          </tr>
          <tr>
            <td>Nama Mata Kuliah</td>
            <td>: $nilai->matakuliah_model->get_by_id($kode_matakuliah)->nama_matakuliah;</td>
          </tr>
          <tr>
            <td>SKS</td>
            <td>:  $nilai->matakuliah_model->get_by_id($kode_matakuliah)->sks; ?></td>
          </tr>
          <?php
          $thn = 1;
          $semester = "Ganjil";
          if($semester == "Ganjil"){
            $tampilSemester = "Ganjil";
          }
          else{
            $tampilSemester = "Genap";
          }
          ?>
          <tr>
            <td>
              Tahun Akademik (Semester)
              <td>: <?= $tampilSemester; ?></td>
            </td>
          </tr>
        </table>
      </center>

      <form action="administrator/nilai/simpan_nilai" method="post">
        <table class="table table-striped table-hover table-bordered mt-3">
          <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>NAMA MAHASISWA</th>
            <th>NILAI</th>
          </tr>

          <?php
          $no = 1;
          //foreach($list_nilai as $row): ?>
          <tr>
            <td width="25px;"><?= $no++; ?></td>
            <td> $row->nim; ?></td>
            <td> $row->nama_lengkap; ?></td>
            <input type="hidden" name="id_krs[]" value="">
            <td width="25px;">
              <input type="text" name="nilai[]" class="form-control" value="">
            </td>
          </tr>
        </table><br>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
</div>
@endsection
