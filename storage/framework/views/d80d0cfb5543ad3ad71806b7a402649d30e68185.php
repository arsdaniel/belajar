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
       
        </tbody>
      </table>

</div>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('santri.show')->html();
} elseif ($_instance->childHasBeenRendered('yWzi7p4')) {
    $componentId = $_instance->getRenderedChildComponentId('yWzi7p4');
    $componentTag = $_instance->getRenderedChildComponentTagName('yWzi7p4');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('yWzi7p4');
} else {
    $response = \Livewire\Livewire::mount('santri.show');
    $html = $response->html();
    $_instance->logRenderedChild('yWzi7p4', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php /**PATH C:\xampp\htdocs\fortify\resources\views/livewire/santri/index.blade.php ENDPATH**/ ?>