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
                                <select id="jenisKelamin" wire:model.debounce.500ms="jenisKelamin" class="form-control @error('jenisKelamin') is-invalid @enderror">
                                    <option value="" selected>Jenis Kelamin</option>
                                    <option value="1">Putra</option>
                                    <option value="2">Putri</option>
                                </select>

                            </div>
                            @if($jenisKelamin ==1)
                            <div class="col-md-2">
                                <select id="statussekolah" wire:model.debounce.500ms="statussekolah" class="form-control @error('statussekolah') is-invalid @enderror">
                                    <option value="" selected>Pilih Sekolah</option>
                                    <option value="1">SMP</option>
                                    <option value="2">SMA</option>
                                </select>

                            </div>
                            @elseif ($jenisKelamin ==2)
                            <div class="col-md-2">
                                <select id="statussekolah" wire:model.debounce.500ms="statussekolah" class="form-control @error('statussekolah') is-invalid @enderror">
                                    <option value="" selected>Pilih Sekolah</option>
                                    <option value="3">MTs</option>
                                    <option value="4">MA</option>
                                </select>

                            </div>
                            @endif
                            <div class="col-md-2">
                                <button wire:click="resetSearch()" class="btn btn-md btn-primary"><i class="fas fa-redo"></i></button>
                            </div>
                        </div>
                        <br>
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
                                            @if ( $santri->status == '7' )
                                            <a class="btn btn-sm btn-light text-primary">Santri</a>
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