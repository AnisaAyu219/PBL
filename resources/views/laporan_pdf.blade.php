<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="judul">
    <h5 style="text-align:center">LAPORAN PRAKTIK KERJA LAPANGAN</h5>
    <h5 style="text-align:center">DI</h5>
    <h5 style="text-align:center">(TEMPAT PKL)</h5>
    </div>
    <center>
    <img src="https://upload.wikimedia.org/wikipedia/id/thumb/d/d1/Smkn1bwi.jpg/1200px-Smkn1bwi.jpg" style="width:250px; height=300px;" class="judul"/>
    <br>
    <br>
    <h5>Disusun oleh :</h5>
    <br>
    <h5>(Nama Siswa)</h5>
    <h5>(Nama Siswa)</h5>
    <h5>(Nama Siswa)</h5>
    </center>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
        .judul{
            margin : 30px 30px 30px 30px;
        }
        .isi{
            margin : 30px 30px 30px 40px;
        }
        
	</style>

    <section class="isi">
	<table class='table table-bordered'>
		<thead>
			<tr>
            <th>No</th>
				<th>Nisn</th>
				<th>Tanggal</th>
				<th>Kegiatan</th>
				<th>Dokumentasi</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($jurnal as $p)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$p->nisn}}</td>
				<td>{{$p->tanggal}}</td>
				<td>{{$p->kegiatan}}</td>
				<td>{{$p->dokumentasi}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
    </section>
</body>
</html>