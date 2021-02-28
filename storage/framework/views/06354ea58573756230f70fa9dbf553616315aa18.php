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
                                        <?php $__currentLoopData = $santris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $santri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<tr>
												<td><?php echo e($santri->name); ?></td>
												<td><?php echo e($santri->alamat); ?></td>
												<td><?php echo e($santri->created_at); ?></td>
												
                                               
											</tr>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</tbody>
									</table>
									<?php echo e($santris->links()); ?>

								</div>
							</div>
							<!-- END TABLE STRIPED -->
						</div>
</div>
<?php /**PATH C:\xampp\htdocs\fortify\resources\views/livewire/santri/show.blade.php ENDPATH**/ ?>