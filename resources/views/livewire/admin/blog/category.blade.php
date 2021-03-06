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
					
					
                    <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                                <input type="text" class="form-control" placeholder="cari....." wire:model.debounce.1000ms='searchTerm'>
                        </div>
                        <div class="form-group col-md-2">
            <input type="text" name="start_date" class="form-control datepicker" id="start_date" placeholder="Start date" value="{{ !empty($filter['start_date']) ? $filter['start_date'] : '' }}">
        </div>
        <div class="form-group col-md-2">
            <input type="text" name="end_date" class="form-control datepicker" id="end_date" placeholder="End date" value="{{ !empty($filter['end_date']) ? $filter['end_date'] : '' }}">
        </div>
                        <div class="form-group col-md-3">
                            <a href="{{ url('admin/kategori/create') }}" class="btn btn-block btn-icon icon-left btn-success btn-filter"><i class="fas fa-plus-circle"></i> Tambah Kategori</a>
                        </div>
                    </div>
                            <table class="table table-bordered table-striped table-md">
                                <thead>
                                    <th>Kategori</th>
                                    <th>Kategori Induk</th>
                                    <th>Terakhir diubah</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                    @forelse ($categories as $category)
                                        <tr>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->parent ? $category->parent->name : '' }}</td>
                                            <td>{{ $category->updated_at_formatted }}</td>
                                            <td>
                                                        <a class="btn btn-sm btn-success" href="{{ url('admin/blog/categories/'. $category->id .'/edit')}}"><i class="far fa-edit"></i> Ubah </a>
                                                        <a href="{{ url('admin/blog/categories/'. $category->id) }}" class="btn btn-sm btn-danger" onclick="
                                                            event.preventDefault();
                                                            if (confirm('Do you want to remove this?')) {
                                                                document.getElementById('delete-role-{{ $category->id }}').submit();
                                                            }">
                                                            <i class="far fa-trash-alt"></i> Hapus
                                                        </a>
                                                        <form id="delete-role-{{ $category->id }}" action="{{ url('admin/blog/categories/'. $category->id) }}" method="post">
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            @csrf
                                                        </form>
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
</div>
</div>
</div>