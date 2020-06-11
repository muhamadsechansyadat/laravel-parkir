@extends('layouts.template')

@section('title','Lahan')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Lahan</h4>
						<form action="{{ url('updatelahan/'.$data->id) }}" method="post">
							@csrf
							@method('patch')
							<div class="form-group">
								<label for="">Stok Lahan</label>
								<input type="text" name="stok_lahan" class="form-control" value="{{ $data->stok_lahan }}">
							</div>
							<input type="submit" class="btn btn-primary" value="Update">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop