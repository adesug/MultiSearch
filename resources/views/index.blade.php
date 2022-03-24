<!DOCTYPE html>
<html>
<head>
	<title>Pegawai</title>
</head>
<body>

	<style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>


	<h3>Data Pegawai</h3>


	<p>Cari Data Pegawai :</p>
	<form action="/pegawai/cari" method="GET">
		<input type="text" name="jenis_pekerjaan" placeholder="Cari Jabatan .." value="{{ old('jenis_pekerjaan') }}">
        <input type="number" name="umur" placeholder="Cari umur .." value="{{ old('umur') }}">
		<input type="submit" value="CARI">
	</form>
		
	<br/>

	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
		
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->name }}</td>
			<td>{{ $p->jenis_pekerjaan }}</td>
			<td>{{ $p->umur }}</td>
		
		</tr>
		@endforeach
	</table>

	<br/>
	Halaman : {{ $pegawai->currentPage() }} <br/>
	Jumlah Data : {{ $pegawai->total() }} <br/>
	Data Per Halaman : {{ $pegawai->perPage() }} <br/>


	{{ $pegawai->links() }}


</body>
</html>