@extends('layouts.template')

@section('title','Input Data Parkir')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Form Transaksi</h4>
						<p class="card-subtitle">Transaksi Kendaraan</p>
						<hr>
							<form action="{{ url('simpantransaksi') }}" method="post">
								@csrf
								<input type="hidden" name="parkir_id" value="{{$data['id']}}">
								<div class="row">
									<div class="col-md-6">
										<label for="">Plat Nomor</label>
										<input type="text" name="plat_nomor" class="form-control" value="{{ strtoupper($data['plat_nomor']) }}" readonly="">

										<label for="">Jenis Kendaraan</label>
										<input type="text" name="jenis_kendaraan" class="form-control" value="{{ ucfirst($data['jenis_kendaraan']) }}" readonly="">

										<label for="">Jam Masuk</label>
										<input type="text" name="jam_masuk" class="form-control" value="{{ $data['created_at'] }}" readonly="">

										<label for="">Jumlah Jam</label>
										<input type="text" name="jumlah_jam" class="form-control" value="{{ $jam }}" readonly="">
									</div>
									<div class="col-md-6">
										<label for="">Harga</label>
										<input type="text" name="total" class="form-control" value="{{ $harga }}" readonly="" id="inputHarga">

										<label for="">Bayar</label>
										<input type="text" name="bayar" class="form-control" autocomplete id="inputBayar" required="">

										<label for="">Kembalian</label>
										<input type="text" name="kembalian" class="form-control" readonly="" id="inputKembalian">

										<input type="submit" class="btn btn-success" value="Bayar" style="margin-top: 7px;">
									</div>
								</div>
							</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function(){
			$('#inputBayar').keyup(function(){
				var total = $(this).val() - $('#inputHarga').val();
				console.log(total);
				$('#inputKembalian').val(total);
			});
		})
	</script>
@stop