@extends('template.master')
@section('isi')
<h1 class="text-center">Kategori</h1>
<br>
<div class="row">
	<div class="col-md-8">
		<button class="btn btn-info" data-toggle="modal" data-target="#modal">TAMBAH</button>
	</div>
	<div class="col-md-4">
		<form>
			<div class="form-group">
				<input type="text" name="cari" class="form-control" placeholder="Masukan Nama Kategori">
			</div>
		</form>
	</div>
</div>
<br>
<table class="table table-striped">
	<tr class="table-info">
		<th>NAMA</th>
		<th>KETERANGAN</th>
		<th>STATUS</th>
		<th>TANGGAL</th>
		<th>AKSI</th>
	</tr>
	@foreach($data as $d)
	<tr>
		<td>{{$d->nama}}</td>
		<td>{{$d->keterangan}}</td>
		<td>{{$d->status}}</td>
		<td>{{$d->tanggal}}</td>
		<td>
			<a href="" class="btn btn-warning btn-sm">HAPUS</a>
			<a href="" class="btn btn-info btn-sm">EDIT</a>
		</td>
	</tr>
	@endforeach
</table>
@endsection
<div class="modal fade" id="modal" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<p><b>TAMBAH DATA KATEGORI</b></p>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label>Masukan Nama Kategori</label>
						<input type="text" name="judul" class="form-control">
					</div>
					<div class="form-group">
						<label>Masukan Keterangan Kategori</label>
						<input type="text" name="judul" class="form-control">
					</div>
					<input type="submit" value="SIMPAN" class="btn btn-info btn-sm">
				</form>
			</div>
		</div>
	</div>
</div>