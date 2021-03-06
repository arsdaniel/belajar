

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
                                
                                    <?php $__empty_1 = true; $__currentLoopData = $santris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $santri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
									
									<tr>
										
										<td><?php echo e($santri->no_pendaftaran); ?> </td>
										<td><?php echo e($santri->name); ?> <?php echo e($santri->nama_belakang); ?></td>
										
										<td><?php echo e($santri->alamat); ?></td>
										<td><?php echo e($santri->tempat_lahir); ?>, <?php echo e($santri->tgl_lahir); ?></td>
										<td>
											<?php if( $santri->status == '1'): ?>
											<a class="btn btn-sm btn-light text-primary">Isi Biodata</a>	
											<?php elseif( $santri->status == '2'): ?>
											<a class="btn btn-sm btn-light text-success">Upload Doc</a>	

											<?php endif; ?>
											
										
										
										</td>
                                        <td>
                                           <a class="btn btn-sm btn-info" href="<?php echo e(url('admin/santri/'. $santri->id)); ?>"><i class="far fa-eye"></i> Lihat </a>
										</td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
				
							<?php echo e($santris->links()); ?>

						  
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php /**PATH C:\xampp\htdocs\fortify\resources\views/livewire/santri/show.blade.php ENDPATH**/ ?>