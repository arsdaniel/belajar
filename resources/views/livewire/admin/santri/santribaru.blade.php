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

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Cari Santri....." wire:model.debounce.1000ms='searchTerm'>
                            </div>
                            <div class="col-md-2">
                                <select id="statusdaftar" wire:model.debounce.500ms="statusdaftar" class="form-control @error('statusdaftar') is-invalid @enderror">
                                    <option value="" selected>Pilih...</option>
                                    <option value="1">Upload Biodata</option>
                                    <option value="2">Upload Dokumen</option>
                                </select>

                            </div>
                            <div class="col-md-2">
                                <select id="statussekolah" wire:model.debounce.500ms="statussekolah" class="form-control @error('statussekolah') is-invalid @enderror">
                                    <option value="" selected>Pilih...</option>
                                    <option value="1">SMP</option>
                                    <option value="2">SMA</option>
                                    <option value="3">MA</option>
                                    <option value="4">MTs</option>
                                </select>

                            </div>
                            <div class=" col-md-2">
                                <input type="date" name="startDate" wire:model.debounce.500ms="startDate" class="form-control" id="startDate" placeholder="Dari tanggal" >
                            </div>
                            <div class="col-md-2">
                                <input type="date" name="endDate" wire:model.debounce.500ms="endDate" class="form-control" id="endDate" placeholder="Sampai Tanggal" >
                            </div>

                        </div>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-md">
                                <thead>
                                    <th>No Pendaftaran</th>
                                    <th>Nama{{$startDate}} {{$searchTerm}}</th>
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
                                            @if ( $santri->status == '1' | $santri->status == '2' )
                                            <a class="btn btn-sm btn-secondary text-primary">Isi Biodata</a>
                                            @elseif( $santri->status == '3')
                                            <a class="btn btn-sm btn-info">Unggah Dokumen</a>
                                            @elseif( $santri->status == '4')
                                            <a class="btn btn-sm btn-warning">Evaluasi Admin</a>
                                            @elseif( $santri->status == '6')
                                            <a class="btn btn-sm btn-danger">Konfiramasi Pembayaran</a>
                                            @endif

                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-info" href="{{ url('admin/santri/lihat/'. $santri->id)}}"><i class="far fa-eye"></i> Lihat </a>
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
</section>