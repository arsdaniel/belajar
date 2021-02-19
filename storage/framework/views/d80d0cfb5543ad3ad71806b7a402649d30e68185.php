<div>

  <?php if($status == 1): ?>
  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('santri.biodata-santri', [])->html();
} elseif ($_instance->childHasBeenRendered('xLIITEO')) {
    $componentId = $_instance->getRenderedChildComponentId('xLIITEO');
    $componentTag = $_instance->getRenderedChildComponentTagName('xLIITEO');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('xLIITEO');
} else {
    $response = \Livewire\Livewire::mount('santri.biodata-santri', []);
    $html = $response->html();
    $_instance->logRenderedChild('xLIITEO', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
  <?php else: ?>
      

 
    <table class="table">
        <thead class="thead-dark">
          <tr> <?php echo e($status); ?>

            <th scope="col">No</th>
            <th scope="col">Provinsi</th>
            
          </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $santris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $santri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
          <tr>
            <th scope="row">1</th>
            <td><?php echo e($santri['name']); ?></td>
            
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
        </tbody>
      </table>
      <?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\fortify\resources\views/livewire/santri/index.blade.php ENDPATH**/ ?>