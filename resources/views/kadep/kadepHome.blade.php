@extends('layout.template')
@section('content')
<div class="row">
          <div class="col-lg-12">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <br/>
                <h1 align="center"><strong>Selamat Datang di Dashboard Kepala Departemen</strong></h1>
                <h1 align="center"><strong>e-Procurement PT. PAL Indonesia Persero</strong></h1>
                <h2 align="center">Sistem Informasi Pengadaan Jasa PT. PAL Indonesia (Persero)</h2>
              <br/>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <h3>{{$surat_masuk}}</h3>

              <p>Total Surat Masuk (Status : Diterima)</p>
              </div>
              <a href="/surat_masuk_kadep" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <h3>{{$surat_masuk_kadep}}</h3>
              <p>Total Surat Masuk (Status : Ditolak)</p>
              </div>
              <a href="/surat_masuk_kadep2" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$surat_masuk_kadep}}</h3>
                <p>Total Surat Masuk Kadep Bag. 1</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="/surat_masuk_kadep" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$surat_masuk_kadep}}</h3>
                <p>Total Surat Masuk Kadep Bag. 1</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="/surat_masuk_kadep2" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
</div>
@endsection