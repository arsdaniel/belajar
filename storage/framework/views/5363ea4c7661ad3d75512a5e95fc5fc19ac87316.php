<div class="pagination flex rounded border border-gray-300 overflow-hidden divide-x divide-gray-300">
    <!-- Previous Page Link -->
    <?php if($paginator->onFirstPage()): ?>
    <button class="relative inline-flex items-center px-2 py-2 bg-white text-sm leading-5 font-medium text-gray-500"
        disabled>
        <span>&laquo;</span>
    </button>
    <?php else: ?>
    <button wire:click="previousPage"
        class="relative inline-flex items-center px-2 py-2 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150">
        <span>&laquo;</span>
    </button>
    <?php endif; ?>

    <div class="divide-x divide-gray-300">
        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(is_string($element)): ?>
        <button class="-ml-px relative inline-flex items-center px-4 py-2 bg-white text-sm leading-5 font-medium text-gray-700" disabled>
            <span><?php echo e($element); ?></span>
        </button>
        <?php endif; ?>

        <!-- Array Of Links -->

        <?php if(is_array($element)): ?>
        <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <button wire:click="gotoPage(<?php echo e($page); ?>)"
                class="-mx-1 relative inline-flex items-center px-4 py-2 text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150 <?php echo e($page === $paginator->currentPage() ? 'bg-gray-200' : 'bg-white'); ?>">
            <?php echo e($page); ?>

            </button>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <!-- Next Page Link -->
    <?php if($paginator->hasMorePages()): ?>
    <button wire:click="nextPage"
        class="-ml-px relative inline-flex items-center px-2 py-2 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150">
        <span>&raquo;</span>
    </button>
    <?php else: ?>
    <button
        class="-ml-px relative inline-flex items-center px-2 py-2 bg-white text-sm leading-5 font-medium text-gray-500 "
        disabled><span>&raquo;</span></button>
    <?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\fortify\vendor\mediconesystems\livewire-datatables\src/../resources/views/livewire/datatables/tailwind-pagination.blade.php ENDPATH**/ ?>