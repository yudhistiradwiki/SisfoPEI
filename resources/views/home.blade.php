@extends('template')

@section('judul')
Dashboard
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
<div class="row flex-grow">
    <div class="col-md-8 col-lg-8 grid-margin stretch-card">
      <div class="card card-rounded">
        <div class="card-body card-rounded">
          <h4 class="card-title  card-title-dash">Tanggal-tanggal Penting</h4>
          <div class="list align-items-center border-bottom py-2">
            <div class="wrapper w-100">
              <p class="mb-2 font-weight-medium">
                  Pengisian KRS Mahasiswa (konsultasi dengan dosen PA)
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                  <i class="mdi mdi-calendar text-muted me-1"></i>
                  <p class="mb-0 text-small text-muted">2021-09-06~2021-09-10</p>
                </div>
              </div>
            </div>
          </div>
          <div class="list align-items-center border-bottom py-2">
            <div class="wrapper w-100">
              <p class="mb-2 font-weight-medium">
                  Ujian Akhir Semester (UAS)
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                  <i class="mdi mdi-calendar text-muted me-1"></i>
                  <p class="mb-0 text-small text-muted">	2022-01-31~2022-02-04</p>
                </div>
              </div>
            </div>
          </div>
          <div class="list align-items-center border-bottom py-2">
            <div class="wrapper w-100">
              <p class="mb-2 font-weight-medium">
                  Akhir masa Kuliah
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                  <i class="mdi mdi-calendar text-muted me-1"></i>
                  <p class="mb-0 text-small text-muted">2022-02-11</p>
                </div>
              </div>
            </div>
          </div>
          <div class="list align-items-center border-bottom py-2">
            <div class="wrapper w-100">
              <p class="mb-2 font-weight-medium">
                  Penerbitan KHS (Nilai)
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                  <i class="mdi mdi-calendar text-muted me-1"></i>
                  <p class="mb-0 text-small text-muted">2022-02-14</p>
                </div>
              </div>
            </div>
          </div>
          <div class="list align-items-center border-bottom py-2">
              <div class="wrapper w-100">
                <p class="mb-2 font-weight-medium">
                  Batas akhir Perbaikan Nilai
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="mdi mdi-calendar text-muted me-1"></i>
                    <p class="mb-0 text-small text-muted">2022-02-07</p>
                  </div>
                </div>
              </div>
            </div>
          <div class="list align-items-center pt-3">
            <div class="wrapper w-100">
              <p class="mb-0">
                <a href="#" class="fw-bold text-primary">Show all <i class="mdi mdi-arrow-right ms-2"></i></a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-lg-4 grid-margin stretch-card">
      <div class="card card-rounded">
        <div class="card-body">
          <div class="d-flex align-items-center justify-content-between mb-3">
            <h4 class="card-title card-title-dash">Activities</h4>
            <p class="mb-0">Tentang User</p>
          </div>
          <ul class="bullet-line-list">
            <li>
              <div class="d-flex justify-content-between">
                <div><span class="text-light-green">Name  :</span></div>
                <p>Muhammad Dwiki Yudhistira</p>
              </div>
            </li>
            <li>
              <div class="d-flex justify-content-between">
                <div><span class="text-light-green">Role  :</span></div>
                <p>Mahasiswa</p>
              </div>
            </li>

          </ul>
          <div class="list align-items-center pt-3">
            <div class="wrapper w-100">
              <p class="mb-0">
                <a href="#" class="fw-bold text-primary">Show all <i class="mdi mdi-arrow-right ms-2"></i></a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
