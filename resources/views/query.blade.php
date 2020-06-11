@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Laporan Parkir</h4>
						<p class="card-subtitle">Tanggal : {{ date("Y-m-d") }}</p>

						<table class="table">
							<thead>
								<td>NO</td>
								<td>Jenis Kendaraan</td>
								<td>Plat Nomor</td>
								<td>Jam Masuk</td>
								<td>Jam Keluar</td>
								<td>ID Parkir</td>
								<td>Bayar</td>
								<td>Kembalian</td>
								<td>Total</td>
							</thead>
							<tbody>
								@foreach($data as $dat)
								<tr>
									<td>{{ $loop->index+1 }}</td>
									<td>{{ $dat->jenis_kendaraan }}</td>
									<td>{{ $dat->plat_nomor }}</td>
									<td>{{ $dat->created_at }}</td>
									<td>{{ $dat->jam_keluar }}</td>
									<td>{{ $dat->parkir_id }}</td>
									<td>{{ $dat->bayar }}</td>
									<td>{{ $dat->kembalian }}</td>
									<td>{{ $dat->total }}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection