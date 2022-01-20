@extends('template')

@section('judul')
Data Dosen
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
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-sm-flex justify-content-between align-items-start">
            <div>
              <h4 class="card-title card-title-dash">Data Dosen</h4>
             <p class="card-subtitle card-subtitle-dash">
                <form action="/krs/cari" method="GET">
                 <div class="form-group">
                    <div class="input-group">
                      <input type="text" name="cari" class="form-control" placeholder="Pencarian Nama" aria-label="Recipient's username"> &nbsp; &nbsp;
                      <div class="input-group-append">
                      <button type="submit" class="btn btn-sm btn-outline-secondary btn-rounded btn-icon">
                        <i class="ti-search text-dark"></i>
                      </button>
                      </div>
                    </div>
                  </div>
                </form>
             </p>
            </div>
            <div>
                <a href="/krs/save/">
                    <button class="btn btn-primary btn-md text-white mb-0 me-0" type="button"><i class="mdi mdi-account-plus"></i> Tambah Data</button>
                </a>
            </div>
          </div>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
                <form class="forms-sample" action="/krs/save" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}"
            @foreach ($datamk as $x)
              <tr>
                <td>{{ $x->kode_matakuliah }}</td>
                <td>{{ $x->nama_matakuliah }}</td>
                <td><input type="checkbox" name="isimatkul[]" value="{{ $x -> kode_matakuliah }}"></td>
              </tr>
              @endforeach
            </tbody>
          </table><br>
          <button type="submit">Submit</button>
        </form>
        </div>
      </div>
    </div>
  </div>
@endsection
