<?php if($column['hidden']): ?>
<?php else: ?>
<div class="relative table-cell h-12 overflow-hidden align-top">
    <button wire:click.prefetch="sort('<?php echo e($index); ?>')" class="w-full h-full px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider flex items-center focus:outline-none <?php if($column['align'] === 'right'): ?> flex justify-end <?php elseif($column['align'] === 'center'): ?> flex justify-center <?php endif; ?>">
        <span class="inline "><?php echo e(str_replace('_', ' ', $column['label'])); ?></span>
        <span class="inline text-xs text-blue-400">
            <?php if($sort === $index): ?>
            <?php if($direction): ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'icons::chevron-up','data' => ['wire:loading.remove' => true,'class' => 'h-6 w-6 text-green-600 stroke-current']]); ?>
<?php $component->withName('icons.chevron-up'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:loading.remove' => true,'class' => 'h-6 w-6 text-green-600 stroke-current']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
            <?php else: ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'icons::chevron-down','data' => ['wire:loading.remove' => true,'class' => 'h-6 w-6 text-green-600 stroke-current']]); ?>
<?php $component->withName('icons.chevron-down'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:loading.remove' => true,'class' => 'h-6 w-6 text-green-600 stroke-current']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
            <?php endif; ?>
            <?php endif; ?>
        </span>
    </button>
</div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\fortify\vendor\mediconesystems\livewire-datatables\src/../resources/views/livewire/datatables/header-no-hide.blade.php ENDPATH**/ ?>