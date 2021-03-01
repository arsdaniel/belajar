  <?php if($status == 1): ?>
    <?php echo $__env->make('livewire.santri.update', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php elseif($status == 2): ?>

  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('santri.upload-doc', [])->html();
} elseif ($_instance->childHasBeenRendered('4PsZAuS')) {
    $componentId = $_instance->getRenderedChildComponentId('4PsZAuS');
    $componentTag = $_instance->getRenderedChildComponentTagName('4PsZAuS');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('4PsZAuS');
} else {
    $response = \Livewire\Livewire::mount('santri.upload-doc', []);
    $html = $response->html();
    $_instance->logRenderedChild('4PsZAuS', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
  <?php else: ?> 
      

 
<?php endif; ?>

<?php /**PATH C:\xampp\htdocs\fortify\resources\views/livewire/santri/index.blade.php ENDPATH**/ ?>