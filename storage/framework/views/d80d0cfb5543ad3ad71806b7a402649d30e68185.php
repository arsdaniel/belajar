<div>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Provinsi</th>
            <th scope="col">Positif</th>
            <th scope="col">Sembuh</th>
            <th scope="col">Meninggal</th>
          </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
          <tr>
            <th scope="row">1</th>
            <td><?php echo e($datas['nama']); ?></td>
            
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
        </tbody>
      </table>

</div>
<?php /**PATH C:\xampp\htdocs\fortify\resources\views/livewire/santri/index.blade.php ENDPATH**/ ?>