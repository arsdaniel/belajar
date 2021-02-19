<div>

  <?php if($status == 1): ?>
  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('santri.biodata-santri', [])->html();
} elseif ($_instance->childHasBeenRendered('SKdpiFM')) {
    $componentId = $_instance->getRenderedChildComponentId('SKdpiFM');
    $componentTag = $_instance->getRenderedChildComponentTagName('SKdpiFM');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('SKdpiFM');
} else {
    $response = \Livewire\Livewire::mount('santri.biodata-santri', []);
    $html = $response->html();
    $_instance->logRenderedChild('SKdpiFM', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
  <?php elseif($status == 2): ?>

  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('santri.upload-doc', [])->html();
} elseif ($_instance->childHasBeenRendered('aX0baXS')) {
    $componentId = $_instance->getRenderedChildComponentId('aX0baXS');
    $componentTag = $_instance->getRenderedChildComponentTagName('aX0baXS');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('aX0baXS');
} else {
    $response = \Livewire\Livewire::mount('santri.upload-doc', []);
    $html = $response->html();
    $_instance->logRenderedChild('aX0baXS', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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