<section class="section">
    <div class="section-header">
        <h1>Manajemen Santri</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="">Dashboard</a></div>
            <div class="breadcrumb-item "><a href="">Blog</a></div>
            <div class="breadcrumb-item active"><a href="">Kategori</a></div>
        </div>
    </div>
    <div class="section-body">
        <h2 class="section-title">Daftar Blog Kategori</h2>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">

                    <div class="card-header">
                        <h4>Manjemen Blog Kategori</h4>
                    </div>
                    @if ($isModal)
                    @include('livewire.admin.biayapendaftaran.create')
                    @endif

                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" placeholder="cari....." wire:model.debounce.1000ms='searchTerm'>
                            </div>
                          
                            <div class="form-group col-md-3">
                                <a wire:click='create()' class="btn btn-block btn-icon icon-left btn-success btn-filter"><i class="fas fa-plus-circle"></i> Tambah Kategori</a>
                            </div>

                        </div>
                        <table class="table table-bordered table-striped table-md">
                            <thead>
                                <th>Nama</th>
                                <th>Tahun Ajaran</th>
                                <th>Sekolah</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @forelse ($biaya as $biaya)
                                <tr>
                                    <td>{{ $biaya->nama_biaya }}</td>
                                    <td>{{ $biaya->tahun_ajaran}}</td>
                                    <td>{{ $biaya->sekolah}}</td>
                                    <td>@currency($biaya->harga)</td>
                                    <td>
                                        <button wire:click='edit({{$biaya->id}})' class="btn btn-sm btn-success" ><i class="far fa-edit"></i> Ubah </button>
                                        <a href="{{ url('admin/blog/categories/'. $biaya->id) }}" class="btn btn-sm btn-danger" onclick="
                                                            event.preventDefault();
                                                            if (confirm('Do you want to remove this?')) {
                                                                document.getElementById('delete-role-{{ $biaya->id }}').submit();
                                                            }">
                                            <i class="far fa-trash-alt"></i> Hapus
                                        </a>
                                        
                                    </td>
                                </tr>
                                @empty

                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>




            </div>
        </div>
</section>