@extends('layouts.template')

@section('title','struk')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Struk Parkiranku</h4>
						<p class="card-subtitle">Tanggal : {{date("Y-m-d")}}</p>

						<table class="table">
							<thead>
								<tr>
									<td>Plat Nomor</td>
									<td>:</td>
									<td>{{$platno->plat_nomor}}</td>
								</tr>
								<tr>
									<td>Total</td>
									<td>:</td>
									<td>{{$data->total}}</td>
								</tr>
								<tr>
									<td>Bayar</td>
									<td>:</td>
									<td>{{$data->bayar}}</td>
								</tr>
								<tr>
									<td>Kembalian</td>
									<td>:</td>
									<td>{{$data->kembalian}}</td>
								</tr>
							</thead>
						</table>
						<a href="{{ url('struk1/'.$data->parkir_id) }}" class="btn btn-success">Print</a>
						<a href="{{ url('parkiranku/dataparkir') }}" class="btn btn-danger">Kembali</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection