@extends('layouts.template')

@section('title','Input Data Parkir')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Lahan</h4>
						<form action="{{ url('updateparkir/'.$data->id) }}" method="post">
							@csrf
							@method('patch')
							<div class="form-group">
								<label for="">Plat Nomor</label>
								<input type="text" name="plat_nomor" class="form-control" required value="{{ $data->plat_nomor }}">
							</div>
							<div class="form-group">
								<label for="">Jenis Kendaraan</label>
								<select name="jenis_kendaraan" id="" class="form-control" required>
									<option value=""></option>
									@if($data->jenis_kendaraan=='motor')
										<option value="motor" selected>Motor</option>
										<option value="mobil">Mobil</option>
										<option value="lainnya">Lainnya</option>	
									@endif
									@if($data->jenis_kendaraan=='mobil')
										<option value="motor">Motor</option>
										<option value="mobil" selected>Mobil</option>
										<option value="lainnya">Lainnya</option>	
									@endif
									@if($data->jenis_kendaraan=='lainnya')
										<option value="motor">Motor</option>
										<option value="mobil">Mobil</option>
										<option value="lainnya" selected>Lainnya</option>	
									@endif
								</select>
							</div>
							<div class="form-group">
								<label for="">Nama Kendaraan</label>
								<input type="text" name="nama_kendaraan" class="form-control" required="" value="{{ $data->nama_kendaraan }}">
							</div>
							<div class="form-group">
								<label for="">Nama Pemilik</label>
								<input type="text" name="nama_pemilik" class="form-control" required value="{{ $data->nama_pemilik }}">
							</div>
							<input type="submit" class="btn btn-primary" value="Update">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop