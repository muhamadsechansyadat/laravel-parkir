<?php 
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Laporan_Parkir.xls");
 ?>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Laporan Parkir</h4>
						<p class="card-subtitle">Tanggal : {{ date("Y-m-d") }}</p>

						<table class="table" border="1">
							<thead>
								<td>NO</td>
								<td>Jenis Kendaraan</td>
								<td>Plat Nomor</td>
								<td>Nama Kendaraan</td>
								<td>Tanggal & Jam Masuk</td>
								<td>Tanggal & Jam Keluar</td>
								<td>Nama Pemilik</td>
							</thead>
							<tbody>
								@foreach($data as $dat)
								<tr>
									<td>{{ $loop->index+1 }}</td>
									<td>{{ $dat->jenis_kendaraan }}</td>
									<td>{{ $dat->plat_nomor }}</td>
									<td>{{ $dat->nama_kendaraan }}</td>
									<td>{{ $dat->created_at }}</td>
									<td>{{ $dat->jam_keluar }}</td>
									<td>{{ $dat->nama_pemilik }}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php 
	echo "<script>document.location.href='parkir'</script>";
 ?>