@extends('layout.template')
@section('content')
<!-- Small boxes (Stat box) -->
<div class="row">
          <div class="col-lg-12">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <br/>
                <h1 align="center"><strong>Selamat Datang di Dashboard Juru Beli</strong></h1>
                <h1 align="center"><strong>e-Procurement PT. PAL Indonesia Persero</strong></h1>
                <h2 align="center">Sistem Informasi Pengadaan Jasa PT. PAL Indonesia (Persero)</h2>
              <br/>
              </div>
            </div>
          </div>
</div>
<div class="row">
          <div class="col-lg-3 col-6">

            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$dok_spph}}</h3>

                <p>Total SPPH</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="/dataspph" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
              <h3>{{$dok_sph}}</h3>

              <p>Total SPH Masuk</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/datasphjuru" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
              <h3>{{$dok_baet}}</h3>
              <p>Total Dokumen BAET</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="/databaet" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$dok_banh}}</h3>
                <p>Total Dokumen BANH & EIKH</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="/databanh" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$dok_pemenang}}</h3>
                <p>Total Dok Pengumuman Pemenang</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="/datapemenang" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$dok_usulan}}</h3>
                <p>Total Dokumen MUPP</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="/datausulan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$dok_spk}}</h3>
                <p>Total Dokumen SPK/SPER</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="/dataspk" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
</div>
@endsection