<!DOCTYPE html>
<html>
<head>
  <title>ADAJASAPROC</title>
<body>
<table style="width:300%">
<tr><td><br/><br/><br/><hr/>
<hr/></td></tr>
<tr>
    <td align="left" style="padding-left: 30em;">Surabaya,  {{ date('d-M-yy', strtotime($dok_sph->tanggal_dibuat)) }}</td>
  </tr>
  <tr>
    <td>
        Nomor      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp; &nbsp;{{$dok_sph->no_surat}} <br/>
        Perihal    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp; {{$dok_sph->perihal}} <br/>
        ----------------------------------
    </td>
  </tr>
  <tr>
    <td align="left" style="padding-left: 30em;">
    Kepada Yth :<br/>
    Kadep Pengadaan Jada<br/>
    Divisi Supply Chain<br/>
    PT. PAL INDONESIA (PERSERO) <br/>
    Di -<br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tempat<br/><br/><br/>
    </td>
  </tr>
<tr>
    <td>
    <u>Referensi :</u><br/>
    </td>
  </tr>
  <tr><td>   SPPH Nomor : {{$dok_sph->no_spph}}, tanggal {{ date('d-M-yy', strtotime($dok_sph->tanggal_spph)) }}</td></tr>
  <tr>
    <td>
    <br/>
   Dengan Hormat,
    </td>
  </tr>
  <tr>
    <td>
    <br/>
    Berdasarkan referensi diatas bersama ini kami mengajukan penawaran harga untuk pekerjaan : <br/><br/>
    {{$dok_sph->deskripsi_pekerjaan}} <br/>
    Proyek {{$dok_sph->nama_proyek}}
    <br/>
    <strong>Dengan Harga sebesar Rp.{{$dok_sph->harga}},- ({{$dok_sph->terbilang}}) <br/><rb/>
    </strong><br/><br/>
    Harga tersebut sudah termasuk PPH 2% <br/>
    Harga tersebut belum termasuk PPN 30% <br/><br/><br/>
    Demikian surat penawaran harga ini, atas perhatian dan kerjasamanya kami ucapkan terima kasih. <br/>
    </td> 
  </tr>
  <tr>
    <td align="left" style="padding-left: 20em;">
    <br/>
    <br/>
    {{$dok_sph->nama_subkon}}<br/>
    DIREKTUR<br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    {{$dok_sph->nama_perwakilan}}
    </td>
  </tr>
</table>
</body>
</html>