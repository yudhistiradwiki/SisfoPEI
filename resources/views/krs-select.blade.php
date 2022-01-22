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
        <table class="table table-striped">
          <thead>
            <tr>
              <th>NIM</th>
              <td>{{Auth::guard('mahasiswa')->user()->nim}}</td>
              <th>Nama Mahasiswa</th>
              <td>{{Auth::guard('mahasiswa')->user()->nama_lengkap}}</td>
            </tr>
            <tr>
              <th>Semester</th>
              <td>5</td>
              <th>Program Studi</th>
              <td>{{Auth::guard('mahasiswa')->user()->nama_prodi}}</td>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table><br>
    </div>
  </div>
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
