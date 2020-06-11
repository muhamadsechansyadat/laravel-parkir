@extends('layouts.template')

@section('title','Input Data Parkir')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Data Parkir</h4>
						<table class="table table-bordered table-striped table-hover" id="example23">
							<thead>
								<tr>
									<td>NO</td>
									<td>Plat Nomor</td>
									<td>Jenis Kendaraan</td>
									<td>Nama Kendaraan</td>
									<td>Nama Pemilik</td>
									<td>Tanggal & Jam Masuk</td>
									<td><center>Aksi</center></td>
									<td></td>
									<td></td>
								</tr>
							</thead>
							<tbody>
								@foreach($data as $field)
									<tr>
										<td>{{ $loop->index + 1 }}</td>
										<td>{{ $field->plat_nomor }}</td>
										<td>{{ $field->jenis_kendaraan}}</td>
										<td>{{ $field->nama_kendaraan }}</td>
										<td>{{ $field->nama_pemilik }}</td>
										<td>{{ $field->created_at }}</td>
										<td><a href=" {{ url('hapus/'.$field->id) }} " class="btn btn-danger" onclick="return confirm('Yakin?')"><i class="fa fa-trash"></i></a></td>
										<td><a href="{{ url('edit/'.$field->id) }}" class="btn btn-success"><i class="fa fa-edit"></i></a></td>
										<td><a href="{{ url('transaksi/'.$field->id) }}" class="btn btn-primary"><i class="fa fa-sign-out"></i></a></td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop