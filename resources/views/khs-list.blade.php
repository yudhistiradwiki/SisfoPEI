@extends('template')

@section('judul')
KHS Mahasiswa
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
            <div>
                <center class="mb-3">
                    <legend class="mt-3"><strong>KARTU HASIL STUDI</strong></legend>
                    <table>
                        @foreach ($mhs as $dataMhs)
                        <tr>
                        <td><strong>NIM</strong></td>
                        <td>&nbsp;: {{$dataMhs->nim}}</td>
                      </tr>
                      <tr>
                        <td><strong>Nama Lengkap</strong></td>
                        <td>&nbsp;: {{$dataMhs -> nama_lengkap}}</td>
                      </tr>
                      <tr>
                        <td><strong>Program Studi</strong></td>
                        <td>&nbsp;: {{$dataMhs -> nama_prodi}}</td>
                      </tr>
                      @endforeach
                      <tr>
                        <td><strong>Tahun Akademik (Semester)</strong></td>
                        <td>&nbsp;:@foreach ($join as $dataMahasiswa)
                            <?php
                      $semester = $dataMahasiswa->semester == "Ganjil";
                      if($semester == "Ganjil"){
                        $tampilSemester = "Ganjil";
                      }
                      else{
                        $tampilSemester = "Genap";
                      }
                      ?>@endforeach
                            <?=$tampilSemester;?></td>
                      </tr>
                    </table>
                  </center>
            </div>

            <div class="d-sm-flex justify-content-between align-items-start">
                <div>
                    <a href="/dosen/insert/">
                        <button class="btn btn-primary btn-md text-white mb-0 me-0" type="button"><i class="mdi mdi-plus"></i></button>
                    </a><br> <br>
                  </div>
          </div>
        <div class="table-responsive">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>NO</th>
                <th>Kode Matkul</th>
                <th>Nama Matkul</th>
                <th>SKS</th>
                <th>Nilai</th>
                <th>Skor</th>
              </tr>
            </thead>
            <?php
            function skorNilai($nilai, $sks){
                if($nilai == 'A') $skor = 4 * $sks;
                else if($nilai == 'B') $skor = 3 * $sks;
                else if($nilai == 'C') $skor = 2 * $sks;
                else if($nilai == 'D') $skor = 1 * $sks;
                else $skor = 0;
              return $skor;}
            $no = 1;
            $jumlahSks = 0;
            $jumlahNilai = 0;
                ?>
            <tbody>
                @foreach ($join as $dataMahasiswa)
            <tr>
              <td width="20px"><?= $no++; ?></td>
              <td>{{$dataMahasiswa ->kode_matakuliah}}</td>
              <td>{{$dataMahasiswa ->nama_matakuliah}}</td>
              <td>{{$dataMahasiswa ->sks}}</td>
              <td>{{$dataMahasiswa ->nilai}}</td>
              <td><?php skorNilai($dataMahasiswa ->sks,$dataMahasiswa ->nilai);?>
              </td>
              <?php
            $jumlahSks += $dataMahasiswa->sks;
            $jumlahNilai += skorNilai($dataMahasiswa->nilai, $dataMahasiswa->sks);
            ?>
            </tr>
            @endforeach
            <tr>
                <td colspan="3">Jumlah</td>
                <td><?= $jumlahSks; ?></td>
                <td><?= $jumlahNilai; ?></td>
            </tr>
          </tbody>
                </table><br>

  Index Prestasi : <?= number_format($jumlahNilai / $jumlahSks); ?>
        </div>
      </div>
    </div>
  </div>

  @endsection
