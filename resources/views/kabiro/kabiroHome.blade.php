@extends('layout.template')
@section('content')
<div class="row">
          <div class="col-lg-12">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <br/>
                <h1 align="center"><strong>Selamat Datang di Dashboard Kepala Biro </strong></h1>
                <h1 align="center"><strong>e-Procurement PT. PAL Indonesia Persero</strong></h1>
                <h2 align="center">Sistem Informasi Pengadaan Jasa PT. PAL Indonesia (Persero)</h2>
              <br/>
              </div>
            </div>
          </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <h3>{{$surat_masuk_kabiro}}</h3>

              <p>Total Total Surat Masuk Kabiro</p>
              </div>
              <a href="/surat_masuk_kabiro" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <h3>{{$surat_masuk_kabiro}}</h3>
              <p>Total Surat Masuk Kabiro</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="/surat_masuk_kabiro" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
</div>
@endsection