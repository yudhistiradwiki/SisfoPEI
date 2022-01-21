@extends('template')

@section('judul')
KRS Mahasiswa
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
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Kartu Rencana Studi Mahasiswa</h4>
        <p class="card-description">
          Silahkan ambil data KRS dengan klik <a href="/krs/view">disini.</a>
        </p>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Tahun Akademik</th>
              <th>NIM</th>
              <th>Nama Mahasiswa</th>
              <th>Semester</th>
              <th>Jumlah SKS</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($join as $x)
            <tr>
              <td>{{ $x -> id_thn_akad }}</td>
              <td>{{ $x -> nim }}</td>
              <td>{{ $x -> nama_lengkap }}</td>
              <td>5</td>
              <td>{{ $x -> sks }}</td>
            </tr>
            @endforeach
          </tbody>
        </table><br>
    </div>
  </div>
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Kode<sup>smt</sup></th>
              <th>Mata Kuliah</th>
              <th>SKS</th>
            </tr>
          </thead>
          <tbody>
          <?php $no = 0;?>
          @foreach ($join as $y)
          <?php $no++; ?>
            <tr>
              <td>{{ $no }}</td>
              <td>{{ $y -> kode_matakuliah }}<sup>5</sup></td>
              <td>{{ $y -> nama_matakuliah }}</td>
              <td>5</td>
            </tr>
            @endforeach
          </tbody>
        </table><br>
    </div>
  </div>
@endsection
