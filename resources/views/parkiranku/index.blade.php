@extends('layouts.template')

@section('title','Input Data Parkir')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Lahan</h4>
						<form action="{{ url('simpanparkir') }}" method="post">
							@csrf
							<div class="form-group">
								<label for="">Plat Nomor</label>
								<input type="text" name="plat_nomor" class="form-control" required>
							</div>
							<div class="form-group">
								<label for="">Jenis Kendaraan</label>
								<select name="jenis_kendaraan" id="" class="form-control" required>
									<option value=""></option>
									<option value="motor">Motor</option>
									<option value="mobil">Mobil</option>
									<option value="lainnya">Lainnya</option>
								</select>
							</div>
							<div class="form-group">
								<label for="">Nama Kendaraan</label>
								<input type="text" name="nama_kendaraan" class="form-control" required="">
							</div>
							<div class="form-group">
								<label for="">Nama Pemilik</label>
								<input type="text" name="nama_pemilik" class="form-control" required>
							</div>
							<input type="submit" class="btn btn-success" value="Simpan">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop