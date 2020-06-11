<?php 
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Laporan_Transaksi.xls");
 ?>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Laporan Transaksi</h4>
						<p class="card-subtitle">Tanggal : {{ date("Y-m-d") }}</p>

						<table class="table" border="1">
							<thead>
								<td>NO</td>
								<td>ID Parkir</td>
								<td>Bayar</td>
								<td>Kembalian</td>
								<td>Total</td>
								<td>Tanggal & Jam Masuk</td>
							</thead>
							<tbody>
								@foreach($data as $dat)
								<tr>
									<td>{{ $loop->index+1 }}</td>
									<td>{{ $dat->parkir_id }}</td>
									<td>{{ $dat->bayar }}</td>
									<td>{{ $dat->kembalian }}</td>
									<td>{{ $dat->total }}</td>
									<td>{{ $dat->created_at }}</td>
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
	echo "<script>document.location.href='dataparkir'</script>";
 ?>