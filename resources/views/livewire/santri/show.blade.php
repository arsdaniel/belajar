<div>
    
<style>
	nav svg{
		max-height: 20px;
	}
</style>
    						<div class="col-md-12">
							<!-- TABLE STRIPED -->
							<div class="panel">
								<div class="panel-heading">
									<div class="col-md-8">
										<h3 class="panel-title">Daftar Santri SMA</h3>
									</div>
									<div class="col-md-4">
      									<input type="text" class="form-control" placeholder="cari....." wire:model='searchTerm'>
    								</div>
								</div>
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>Nama</th>
												<th>Email</th>
												<th>Tanggal Daftar</th>
												<th>Role</th>
											</tr>
										</thead>
										<tbody>
                                        @foreach ($santris as $santri)
											<tr>
												<td>{{$santri->alamat}}</td>
												@if (isset($santri->biodatasantri->id))
												<td>{{$santri->biodatasantri->name}}</td>
												@endif
												<td>{{$santri->alamat}}</td>
												<td>{{$santri->created_at}}</td>
												
                                               
											</tr>
										@endforeach
										</tbody>
									</table>
									{{$santris->links()}}
								</div>
							</div>
							<!-- END TABLE STRIPED -->
						</div>
</div>
