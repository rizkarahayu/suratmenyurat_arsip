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
    <td width="40%" align="center">
    <strong>MEMO USULAN PERSETUJUAN PENGADAAN</strong><br/>
    </td>
    <td width="40%">
        Nomor &nbsp;&nbsp;&nbsp;&nbsp; : <br/>
        Tanggal &nbsp;&nbsp; :
    </td>
  </tr>
</table>
<table style="width:100%"; border="1">
  <tr>
    <td width="100%">
        Perihal &nbsp;&nbsp;&nbsp;&nbsp;: {{$dok_usulan->perihal}}<br/>
        Referensi  : {{$dok_usulan->referensi_j01}}<br/>
        Pada hari ini {{ Carbon\Carbon::parse($dok_usulan->tanggal_dibuat)->format('l')}} tanggal {{ date('d-M-yy', strtotime($dok_usulan->tanggal_dibuat)) }} bertempat di Departemen Pengadaan Jasa Divisi Supply Chain telah diadakan evaluasi teknis (aanwijzing) dengan hasil sebagai berikut:<br/>
    </td>
  </tr>
</table>
<table style="width:100%"; border="1">
  <thead>
    <tr>
      <th>No</th>
      <th>Isi</th>
      <th>Keterangan</th>
      </tr>
  </thead>
  <tbody>
      <tr>
          <td style="width:3%"><strong> &nbsp; 1</strong></td>
          <td style="width:65%">
            <strong> A. List Pekerjaan yang menjadi tanggungjawab Subkontraktor adalah sebagai berikut : <br/></strong>
            {{$dok_usulan->list_pekerjaan}} <br/><br/>
          </td>
          <td>{{$dok_usulan->keterangan_pekerjaan}}</td>
      </tr>
      <tr>
          <td style="width:3%"><strong> &nbsp; 2</strong></td>
          <td style="width:65%"><strong> B. </strong> IHSC menyediakan minmal 1 (satu) orang tenaga kerja </strong><br/>{{$dok_usulan->keterangan_pekerjaan}}</td>
          <td>{{$dok_usulan->keterangan_pekerjaan}}</td>
      </tr>
      <tr>
          <td style="width:3%"><strong> &nbsp; 3</strong></td>
          <td style="width:65%"><strong> Durasi Pekerjaan<br/></strong>
              Mulai {{ date('d-M-yy', strtotime($dok_usulan->tanggal_mulai)) }} s/d {{ date('d-M-yy', strtotime($dok_usulan->tanggal_selesai  )) }}</td>
          <td>{{$dok_usulan->keterangan_tanggal}}</td>
      </tr>
      <tr>
          <td style="width:3%"><strong> &nbsp; 4</strong></td>
          <td style="width:65%">
            <strong> Peralatan yang disediakan Subkontraktor : </strong><br/>
            {{$dok_usulan->peralatan_subkon}} <br/>
            Peralatan yang disediakan PT.PAL : </strong><br/>
            {{$dok_usulan->peralatan_pal}}
          </td>
          <td>{{$dok_usulan->keterangan_peralatan}}</td>
      </tr>
      <tr>
          <td style="width:3%"></td>
          <td style="width:65%"></td>
          <td><br/></td>
      </tr>
      </tbody>
</table>
<table style="width:100%"; border="1">
      <tr>
          <td style="width:20%" align="center">Departemen Rendal & Material Kasel<br/><br/><br/><br/><br/>{{$dok_usulan->tertanda1}}</td>
          <td style="width:20%" align="center">Departemen Outfitting Kasel<br/><br/><br/><br/><br/>{{$dok_usulan->tertanda2}}</td>
          <td style="width:20%" align="center">Departemen Pengadaan Jasa<br/><br/><br/><br/><br/>{{$dok_usulan->tertanda3}}</td>
          <td style="width:20%" align="center">{{$dok_usulan->tertanda4}}<br/><br/><br/><br/><br/></td>
          <td style="width:20%" align="center">{{$dok_usulan->tertanda5}}<br/><br/><br/><br/><br/></td>
      </tr>
</table>
</body>
</html>