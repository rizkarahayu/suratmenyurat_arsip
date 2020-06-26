<!DOCTYPE html>
<html>
<head>
  <title>ADAJASAPROC</title>
<body>
<table style="width:100%"; border="1">
  <tr>
    <td width="20%">
        <img src="{{asset('assets/img/ptpal.jpg')}}" width="150px" align="left">
    </td>
    <td width="60%" align="center" style="font-size:20px">
      <strong> BERITA ACARA<br/>NEGOSIASI HARGA PENGADAAN JASA</strong><br/>
      <strong>BANH/ {{$dok_banh->no_surat}} </strong>
    </td>
    <td width="20%" align="center" style="font-size:20px">
    <strong>J03</strong>
    </td>
  </tr>
</table>
<table style="width:100%"; border="1">
  <tr>
    <td width="100%">
        Pada hari ini {{ Carbon\Carbon::parse($dok_banh->tanggal_dibuat)->format('l')}} tanggal {{ date('d-M-yy', strtotime($dok_banh->tanggal_dibuat)) }} bertempat di Departemen Pengadaan Jasa Divisi Supply Chain telah negosiasi harga pengadaan jasa dengan hasil sebagai berikut :
    </td>
  </tr>
  <tr>
    <td width="100%">
        Nama Penyedia Jasa : {{$dok_banh->nama_subkon}}
        Dalam hal ini diwakili : {{$dok_banh->nama_perwakilan}}
    </td>
  </tr>
  <tr>
    <td width="100%">
        <strong>Referensi : </strong><br/>
        J01 No &nbsp;&nbsp;&nbsp;&nbsp; : {{$dok_banh->no_j01}} 
    </td>
  </tr>
</table>
<table style="width:100%"; border="1">
      <tr>
          <td style="width:50%">Nama Proyek : {{$dok_banh->no_proyek}}</td>
          <td>Kode Proyek : {{$dok_banh->kode_proyek}}</td>
      </tr>
      <tr>
          <td style="width:50%">SPH No : {{$dok_banh->no_sph}}</td>
          <td>Tanggal SPH : {{$dok_banh->tanggal_sph}}</td>
      </tr>
      <tr>
          <td style="width:50%">No J02 : {{$dok_banh->no_baet}}</td>
          <td>Tanggal SPH : {{$dok_banh->tanggal_baet}}</td>
      </tr>
</table>
<table style="width:100%"; border="1">
<tr>
    <td width="100%">
        <strong>Hasil Negosiasi Harga Pengadaan Jasa Pekerjaan Barang Jasa Fitting </strong>
    </td>
  </tr>
</table>
<table style="width:100%"; border="1">
      <tr>
          <td><strong>Penawaran Harga : </strong><p align="center" style="font-size:40px">{{$dok_banh->harga}}</p></td>
      </tr>
      <tr>
          <td><strong>Negosiasi 1 :</strong><p align="center" style="font-size:40px">{{$dok_banh->harga_nego1}}</p></td>
      </tr>
      <tr>
          <td><strong>Negosiasi 2 :</strong><p align="center" style="font-size:40px">{{$dok_banh->harga_nego2}}</p></td>
      </tr>
      <tr>
          <td><strong>Negosiasi 3 :</strong><p align="center" style="font-size:40px">{{$dok_banh->harga_nego3}}</p></td>
      </tr>
      <tr>
          <td><strong>Nilai Kontrak / Perjanjian :</strong> <p align="center" style="font-size:40px">{{$dok_banh->nilai_kontrak}}</p></td>
      </tr>
      <tr>
          <td><strong>Cara Pembayaran :</strong></td>
      </tr>
      <tr>
          <td>Pembayaran berdasarkan realisasi progress perbulan sesuai dengan Laporan Kemajuan Pekerjaan yang telah disetujui oleh kedua belah pihak</td>
      </tr>
      <tr>
          <td>Anggaran biaya dibebankan pada beban Proyek {{$dok_banh->nama_proyek}}</td>
      </tr>
</table>
<table style="width:100%"; border="1">
  <thead style="width:100%"; border="0">
    <tr>
      <th style="width:3%";>No</th>
      <th style="width:49%";>Juru Beli Jasa</th>
      <th style="width:24%"; align="center">Mengetahui</th>
      <th style="width:24%"; align="center">Subkontraktor</th>
    </tr>
  </thead>
  <tbody>
  <tr>
     <td></td>
     <td>
        <table style="width:100%"; border="1">
        <thead>
          <tr><th style="width:30%";>Nama</th><th style="width:19%";>Tanda Tangan</th></tr>
        </thead>
        </table>
      </td>
     <td align="center">Ka Dep Ada Jasa</td>
     <td align="center">{{$dok_banh->nama_subkon}}</td>
  </tr> 
  <tr>
     <td></td>
     <td>
        <table style="width:100%"; border="1">
        <thead>
          <tr><th style="width:30%";><br/><br/><br/></th><th style="width:19%";><br/><br/><br/></th></tr>
          <tr><th style="width:30%";><br/><br/><br/></th><th style="width:19%";><br/><br/><br/></th></tr>
          <tr><th style="width:30%";><br/><br/><br/></th><th style="width:19%";><br/><br/><br/></th></tr>
        </thead>
        </table>
      </td>
     <td align="center"></td>
     <td align="center"></td>
  </tr>   
  </tbody>
</table>
</body>
</html>