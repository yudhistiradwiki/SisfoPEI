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
        <h4 class="card-title">KRS Mahasiswa</h4>
        <p class="card-description">
          Isikan data dibawah ini dengan mahasiswa yang ingin mengambil KRS.
        </p>
        <form class="forms-sample" action="/krs/view/201904001/1" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
          <div class="form-group">
            <label for="nim">Nim</label>
            <input type="text" class="form-control" id="nim" value="{{ old('nim') }}" name="nim" placeholder="Nomor Induk Mahasiswa">
          </div>
          <div class="form-group">
            <label for="tahun_akad">Tahun Akademik</label>
            <select class="form-control" id="thn_akad" name="thn_akad">
                <option>Silahkan pilih tahun akademik</option>
                @foreach ($dataThn as $dataThn)
                <option>{{$dataThn -> tahun_akademik}} - {{$dataThn -> semester}}</option>
                @endforeach
              </select>
            </div>
          <button type="submit" class="btn btn-primary me-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>
@endsection
