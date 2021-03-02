

<section class="section">
    <div class="section-header">
        <h1>Manajemen Santri</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="">Dashboard</a></div>
            <div class="breadcrumb-item active"><a href="">Santri</a></div>
        </div>
    </div>
    <div class="section-body">
        <h2 class="section-title">Daftar Santri Baru</h2>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
					
                    <div class="card-header">
                        <h4>Manjemen Santri Baru</h4>
                    </div>
					<div class="col-md-4">
							<input type="text" class="form-control" placeholder="cari....." wire:model.debounce.1000ms='searchTerm'>
					</div>
					
                    <div class="card-body">
                        
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-md">
                                <thead>
                                    <th>No Pendaftaran</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Tempat/Tanggal Lahir</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                    @forelse ($santris as $santri)
									
									<tr>
										<td>{{$santri->no_pendaftaran}} </td>
										<td>{{$santri->name}} {{$santri->nama_belakang}}</td>
										
										<td>{{$santri->alamat}}</td>
										<td>{{$santri->tempat_lahir}}, {{$santri->tgl_lahir}}</td>
										<td>
											@if ( $santri->status->status == '1')
											<a class="btn btn-sm btn-light text-primary">Isi Biodata</a>	
											
											@endif
											
										
										
										</td>
                                        <td>
                                           <a class="btn btn-sm btn-info" href="{{ url('admin/santri/'. $santri->id)}}"><i class="far fa-eye"></i> Lihat </a>
										</td>
                                    </tr>
                                    @empty
                                        
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
				
							{{ $santris->links() }}
						  
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
