<!DOCTYPE html>
<html>
<head>
  <title>ADAJASAPROC</title>
<body>
<table style="width:100%"; border="1">
  <tr>
    <td width="20%">
        <img src="{{asset('assets/img/ptpal.jpg')}}" width="150px" align="center">
    </td>
    <td width="60%" style="font-size:15px" align="center">
        <strong><u>Berita Acara Evaluasi Teknis</u></strong><br/>
        <strong>NO. BAET {{$dok_baet->no_surat}}</strong>
        <br/>
    </td>
    <td width="20%" style="font-size:20px"; align="center">
        <strong>J02</strong>
    </td>
  </tr>
</table>
<table style="width:100%"; border="1">
  <tr>
    <td width="100%" align="left" style="font-size:14px";>
        Perihal : {{$dok_baet->perihal}}
        Referensi  : {{$dok_baet->referensi_j01}}
        Pada hari ini {{ Carbon\Carbon::parse($dok_baet->tanggal_dibuat)->format('l')}} tanggal {{ date('d-M-yy', strtotime($dok_baet->tanggal_dibuat)) }} bertempat di Departemen Pengadaan Jasa Divisi Supply Chain telah diadakan evaluasi teknis (aanwijzing) dengan hasil sebagai berikut:
    </td>
  </tr>
</table>
<table border="1" style="width:100%";>
  <thead>
    <tr>
      <th>No</th>
      <th>Isi</th>
      <th>Keterangan</th>
      </tr>
  </thead>
  <tbody>
      <tr>
          <td style="font-size:13px";><strong> &nbsp; 1</strong></td>
          <td style="font-size:13px";>
            <strong> A. List Pekerjaan yang menjadi tanggungjawab Subkontraktor adalah sebagai berikut : <br/></strong>
            <pre>{{$dok_baet->list_pekerjaan}}</pre>
          </td>
          <td style="font-size:13px";>{{$dok_baet->keterangan_pekerjaan}}</td>
      </tr>
      <tr>
          <td style="font-size:13px";><strong> &nbsp; 3</strong></td>
          <td style="font-size:13px";><strong> Durasi Pekerjaan<br/></strong>
              Mulai {{ date('d-M-yy', strtotime($dok_baet->tanggal_mulai)) }} s/d {{ date('d-M-yy', strtotime($dok_baet->tanggal_selesai  )) }}</td>
          <td style="font-size:13px";>{{$dok_baet->keterangan_tanggal}}</td>
      </tr>
      <tr style="font-size:13px";>
          <td ><strong> &nbsp; 4</strong></td>
          <td >
            <strong> Peralatan yang disediakan Subkontraktor : </strong><br/>
            <pre>{{$dok_baet->peralatan_subkon}}</pre> <br/>
            Peralatan yang disediakan PT.PAL : </strong><br/>
            <pre>{{$dok_baet->peralatan_pal}}</pre>
          </td>
          <td >{{$dok_baet->keterangan_peralatan}}</td>
      </tr>
      <tr style="font-size:13px";>
          <td ></td>
          <td ></td>
          <td ><br/></td>
      </tr>
      </tbody>
</table>
<table style="width:100%"; border="1">
      <tr>
          <td style="width:20%" align="center">{{$dok_baet->tertanda1}}<br/><br/><br/><br/><br/></td>
          <td style="width:20%" align="center">{{$dok_baet->tertanda2}}<br/><br/><br/><br/><br/></td>
          <td style="width:20%" align="center">{{$dok_baet->tertanda3}}<br/><br/><br/><br/><br/></td>
          <td style="width:20%" align="center">{{$dok_baet->tertanda4}}<br/><br/><br/><br/><br/></td>
          <td style="width:20%" align="center">{{$dok_baet->tertanda5}}<br/><br/><br/><br/><br/></td>
      </tr>
</table>
</body>
</html>