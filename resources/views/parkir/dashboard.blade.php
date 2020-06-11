@extends('layouts.template')

@section('title','DASHBOARD')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Dashbord <i>ParkiranKu</i></h4>
						<p class="card-subtitle">Semua data web aplikasi ParkiranKu</p>
						<hr>
						<a href="{{ url('laporansemua') }}" class="btn btn-success">Laporan Parkir</a>
						<a href="{{ url('laporantransaksi') }}" class="btn btn-primary">Laporan Transaksi</a>
						<a href="{{ url('laporanhari') }}" class="btn btn-warning">Laporan Per-Hari</a>
						<hr>
						<div class="row">
							<div class="col-sm-4">
								<div class="card card-info card-inverse">
									<div class="box text-center">
										<h1 class="font-light text-white">{{ $datahariini }}</h1>
										<h6 class="text-white">Data Parkir Hari Ini</h6>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="card card-success card-inverse">
									<div class="box text-center">
										<h1 class="font-light text-white">{{ $dataterparkir }}</h1>
										<h6 class="text-white">Kendaraan Terparkir</h6>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="card card-dark card-inverse">
									<div class="box text-center">
										<h1 class="font-light text-white">{{ $dataperbulan }}</h1>
										<h6 class="text-white">Rekapan Data Parkir</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
